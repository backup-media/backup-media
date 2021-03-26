<?php

namespace App\Http\Controllers;

use App\{Domain,Client,Account,Provider};
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Traits\DomaineCheck;

class DomainController extends Controller
{

    use DomaineCheck;

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domaines = Domain::with('account','client')->get()->toArray();

        $result = [];
        foreach($domaines as $domaine){

            $url = $domaine['domain_url'];

            $status = $this->is_online($url);

            $ssl = 'off';

            if($status != 'off') {
                $ssl = $this->is_secure($url);
            }

            $result[$url]['status'] = $status;
            $result[$url]['ssl'] = $ssl;
        }
        $domains = Domain::with('account','client')->get();

        
        return view('backend.domaines.index', compact('domains','result'));
    }

  
    public function create()
    {
        $clients = Client::get();
        $accounts = Account::get();
        $providers = Provider::get();
        return view('backend.domaines.create', compact('clients','accounts','providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $data['id_provider'] = $request->provider;
        $data['domain_url'] = $request->domain_url;
        $data['id_account'] = $request->id_account;
        $data['expire_date'] = $request->expire_date;
        $data['owner'] = $request->owner;
        $data['id_client'] = $request->id_client;

        Domain::insert($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Client::get();
        $accounts = Account::get();
        $providers = Provider::get();
        $domain = Domain::join('providers','providers.id','=','domains.id_provider')->where('domains.id','=',$id)->first();
        return view('backend.domaines.edit', compact('domain','clients','accounts','providers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['id_provider'] = $request->id_provider;
        $data['domain_url'] = $request->domain_url;
        $data['id_account'] = $request->id_account;
        $data['expire_date'] = $request->expire_date;
        $data['owner'] = $request->owner;
        $data['id_client'] = $request->id_client;

        Domain::where('id',$id)->Update($data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
