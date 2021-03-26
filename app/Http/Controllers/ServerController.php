<?php

namespace App\Http\Controllers;

use App\Server;
use Illuminate\Http\Request;
use DB;
use Spatie\SslCertificate\SslCertificate;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servers = Server::get();
        $ip = [
            '212.83.174.179:2083',
            '207.180.236.53:2083',
        ];
        $result = [];
        foreach($ip as $v_url ){
            $url = $v_url;
            $ch = curl_init($v_url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
$result[$v_url] = $health = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
    $json[] = json_encode(['health' => $health, 'status' => '1']);
        }
        return view('backend.servers.index' ,compact('servers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.servers.create');
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
        $data['ip'] = $request->ip;
        $data['company_name'] = $request->company_name;
        $data['owner'] = $request->owner;

        Server::insert($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function show(Server $server)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function edit(Server $server,$id)
    {
        $server = Server::where('id', $id)->first();

        return view('backend.servers.edit', compact('server'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Server $server, $id)
    {
        $data = array();
        $data['ip'] = $request->ip;
        $data['company_name'] = $request->company_name;
        $data['owner'] = $request->owner;

        Server::where('id',$id)->update($data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function destroy(Server $server)
    {
        //
    }
}
