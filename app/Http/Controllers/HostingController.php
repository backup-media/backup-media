<?php

namespace App\Http\Controllers;

use App\Hosting;
use App\Client;
use App\Server;
use App\Account;
use Illuminate\Http\Request;
use DB;

class HostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hostings = Hosting::join('clients','clients.id','=','hostings.id_client')->join('accounts','accounts.id','=','hostings.id_accounts')->join('servers','servers.id','=','hostings.id_server')->get();
        return view('backend.hostings.index', compact('hostings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servers = Server::get();
        $clients = Client::get();
        return view('backend.hostings.create', compact('servers'), compact('clients'));
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
        $data['account_name_host'] = $request->account_name_host;
        $data['id_client'] = $request->id_client;
        $data['id_accounts'] = $request->id_account;
        $data['id_server'] = $request->id_server;

        Hosting::insert($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hosting  $hosting
     * @return \Illuminate\Http\Response
     */
    public function show(Hosting $hosting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hosting  $hosting
     * @return \Illuminate\Http\Response
     */
    public function edit(Hosting $hosting, $id)
    {
        $servers = Server::get();
        $clients = Client::get();
        $accounts = Account::get();
        $hosting = Hosting::join('clients','clients.id','=','hostings.id_client')->join('servers','servers.id','=','hostings.id_server')->join('accounts','accounts.id','=','hostings.id_accounts')->where('hostings.id',$id)->first();
        
        return view('backend.hostings.edit', compact('servers', 'clients', 'accounts', 'hosting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hosting  $hosting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['account_name_host'] = $request->account_name_host;
        $data['id_client'] = $request->id_client;
        $data['id_accounts'] = $request->id_account;
        $data['id_server'] = $request->id_server;

        Hosting::where('id',$id)->Update($data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hosting  $hosting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hosting $hosting)
    {
        //
    }
}
