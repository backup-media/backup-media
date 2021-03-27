@extends('backend.layouts.app')
@section('content')
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                    <div class="nk-block-head-sub"><a class="back-to" href="{{ url('/')}}"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a></div>
                    <h2 class="nk-block-title fw-normal">Infomation Domain</h2>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block nk-block-lg">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <form action="{{ url('/save-domain')}}" class="form-validate">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-full-name">Domain Url</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="fv-full-name" name="domain_url" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-topics">Provider</label>
                                        <div class="form-control-wrap ">
                                            <select class="form-control form-select" id="fv-topics" name="provider" data-placeholder="Select a option" required>
                                                <option name="provider" value="Namechape">Namechape</option>
                                                <option name="provider" value="Goodady">Goodady</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-topics">Account</label>
                                        <div class="form-control-wrap ">
                                            <select class="form-control form-select" id="fv-topics" name="id_account" data-placeholder="Select a option" required>
                                                
                                                @foreach($accounts as $account)
                                                <option name="id_account" value="{{$account->id }}">{{ $account->username}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-topics">Client</label>
                                        <div class="form-control-wrap ">
                                            <select class="form-control form-select" id="fv-topics" name="id_client" data-placeholder="Select a option" required>
                                                @foreach($clients as $account)
                                                <option name="id_client" value="{{$account->id }}">{{ $account->client_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-email">Expire date</label>
                                        <div class="form-control-wrap">
                                            <input type="date" class="form-control" id="fv-email" name="expire_date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fv-full-name">Owner</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="fv-full-name" name="owner" required>
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