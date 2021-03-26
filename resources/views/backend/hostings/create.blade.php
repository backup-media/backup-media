@extends('backend.layouts.app')
@section('content')
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                    <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a></div>
                    <h2 class="nk-block-title fw-normal">Infomation Client</h2>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block nk-block-lg">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <form action="{{ url('/save-hosting')}}" class="form-validate">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-full-name">Host Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="fv-full-name" name="account_name_host" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-topics">Client</label>
                                        <div class="form-control-wrap ">
                                            <select class="form-control form-select" id="fv-topics" name="id_client" data-placeholder="Select a option" required>
                                                @foreach($clients as $client)
                                                <option name="id_client" value="{{ $client->id}}">{{ $client->client_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-topics">Server</label>
                                        <div class="form-control-wrap ">
                                            <select class="form-control form-select" id="fv-topics" name="id_server" data-placeholder="Select a option" required>
                                                @foreach($servers as $server)
                                                <option name="id_server" value="{{$server->id }}">{{ $server->company_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-topics">Account</label>
                                        <div class="form-control-wrap ">
                                            <select class="form-control form-select" id="fv-topics" name="id_account" data-placeholder="Select a option" required>
                                                <?php
                                                $accounts = DB::table('accounts')->get();
                                                ?>
                                                @foreach($accounts as $account)
                                                <option name="id_account" value="{{$account->id }}">{{ $account->username}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
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