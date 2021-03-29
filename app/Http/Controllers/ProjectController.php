<?php

namespace App\Http\Controllers;

use App\Project;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $projects = Project::join('clients','clients.id','=','projects.id_client')->get();
        
        return view('backend.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::get();
        return view('backend.projects.create', compact('clients'));
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

        $data['id_client'] = $request->id_client;
        $data['name_project'] = $request->name_project;
        $data['ref'] = $request->ref;
        $data['files_link'] = $request->files_link;
        $data['github_link'] = $request->github_link;
        $data['date_expire'] = $request->date_expire;
        $data['project_copy'] = $request->project_copy;
        $data['info'] = $request->info;

        Project::insert($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $clients = Client::get();
        $project = Project::join('clients','clients.id','=','projects.id_client')->first();
        return view('backend.projects.edit', compact('clients','project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();

        $data['id_client'] = $request->id_client;
        $data['name_project'] = $request->name_project;
        $data['ref'] = $request->ref;
        $data['files_link'] = $request->files_link;
        $data['github_link'] = $request->github_link;
        $data['date_expire'] = $request->date_expire;
        $data['project_copy'] = $request->project_copy;
        $data['info'] = $request->info;

        Project::where('id',$id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
