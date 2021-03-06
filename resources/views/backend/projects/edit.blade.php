@extends('backend.layouts.app')
@section('content')
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                    <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a></div>
                    <h2 class="nk-block-title fw-normal">Infomation Project</h2>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block nk-block-lg">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <form action="{{ url('/update-project/', $project->id)}}" class="form-validate" method="POST">
                            {{ csrf_field() }}
                            <div class="row g-gs">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-full-name">Project Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="fv-full-name" name="name_project" value="{{ $project->name_project}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-topics">Client Name</label>
                                        <div class="form-control-wrap ">
                                            <select class="form-control form-select" id="fv-topics" name="id_client" data-placeholder="Select a option" required>
                                                @foreach($clients as $client)
                                                <option name="id_client" value="{{ $client->id}}" {{ $project->id_client == $client->id ? 'selected':'' }}>{{ $client->client_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-full-name">Reference</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="fv-full-name" name="ref" value="{{ $project->ref}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-full-name">Files link</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="fv-full-name" name="files_link" value="{{ $project->files_link}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-full-name">Github link</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="fv-full-name" name="github_link" value="{{ $project->github_link}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-full-name">Date Expired</label>
                                        <div class="form-control-wrap">
                                            <input type="date" class="form-control" id="fv-full-name" name="date_expire" value="{{ $project->date_expire}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-full-name">Project Copy</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="fv-full-name" name="project_copy" value="{{ $project->project_copy}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-full-name">Details</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control" id="fv-full-name" name="info" required>{{ $project->info}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary">Update Informations</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- .nk-block -->
        </div><!-- .components-preview -->
    </div>
</div>
@endsection