<?php

namespace App\Http\Controllers;

use App\Domain;
use App\Hosting;
use App\Client;
use App\Project;
use Jenssegers\Agent\Agent;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $agent = new Agent();
        $browser = $agent->browser();
        $domaines = Domain::get()->toArray();

        $result = [];
        $ssloff = 0;
        $sslon = 0;
        foreach($domaines as $domaine){

            $url = $domaine['domain_url']; 

            $stream = @stream_context_create( array( 'ssl' => array( 'capture_peer_cert' => true ) ) );
            $socket = @stream_socket_client( 'ssl://' . $url . ':443', $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $stream );
            $result[$url] =  ($socket == false) ? 'off' : 'on';
            if( $result[$url] == 'off'){
                $ssloff = $ssloff + 1;
            }else{
                $sslon = $sslon + 1;
            }

        }


        //dd($result);



/*
        dd($domaines);
        $res = [];

    // If we got a ssl certificate we check here, if the certificate domain
    // matches the website domain.
    if ( $socket ) {
        $cont = stream_context_get_params( $socket );
        $cert_ressource = $cont['options']['ssl']['peer_certificate'];
        $cert = openssl_x509_parse( $cert_ressource );

        // Expected name has format "/CN=*.yourdomain.com"
        $namepart = explode( '=', $cert['name'] );

        // We want to correctly confirm the certificate even 
        // for subdomains like "www.yourdomain.com"
        if ( count( $namepart ) == 2 ) {
            $cert_domain = trim( $namepart[1], '*. ' );
            $check_domain = substr( $domain, -strlen( $cert_domain ) );
            $res = ($cert_domain == $check_domain);
        }
    }
        */
   
        $domaine = $domaines;
        $resul = [];
        $count_on = 0;
        $count_off = 0;
        foreach($domaine as $domain){

            try {
                $client = new \GuzzleHttp\Client();
                $response = $client->request('GET', $domain['domain_url']);    
                $statusCode = $response->getStatusCode();
                $resul[$domain['domain_url']] = ($statusCode == 200) ? 'on' : 'off';

                $count_on = $count_on + 1;
            } catch (\GuzzleHttp\Exception\ConnectException $e) {
         
                $resul[$domain['domain_url']] = 'off';
                $count_off = $count_off + 1;
            }
        }
        

        $client = Client::get();
        $count_client = $client->count();
        $hosting = Hosting::get();
        $count_hosting = $hosting->count();
        $domain = Domain::get();
        $count_domain = $domain->count();
        $project = Project::get();
        $count_project = $project->count();
        $last5project = Project::join('clients','clients.id','=','projects.id_client')->orderby('projects.created_at')->limit(5)->get();
        return view('backend.dashboard', compact('count_domain','sslon', 'ssloff'), compact('count_client'), compact('count_hosting'), compact('last5project'))->with('count_hosting', $count_hosting)->with('count_project', $count_project)->with('count_on',$count_on)->with('count_off', $count_off)->with('last5project', $last5project)->with('client',$client);
    }
}
