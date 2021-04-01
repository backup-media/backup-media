@extends('backend.layouts.app')
@section('content')

<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block">
            <div class="card card-bordered">
                <div class="card-aside-wrap">
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block-head nk-block-head-lg">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">Change Password</h4>
                                    
                                </div>
                                <div class="nk-block-head-content align-self-start d-lg-none">
                                    <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                              
                                        <div class="tab-content">
                                            <div class="tab-pane active">
                                                <form  action="{{ url('/change-password')}}" class="form-validate" method="POST"">
                                                    {{ csrf_field() }}
                                                <div class="row gy-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="full-name">Last Password</label>
                                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="last_password">
                                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                            </a>
                                                            <input type="password" class="form-control form-control-lg" name="last_password" id="last_password" placeholder="Enter your Last passcode">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="full-name">Nouveau Password</label>
                                                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="nouveau_password">
                                                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                                </a>
                                                                <input type="password" class="form-control form-control-lg" name="nouveau_password" id="nouveau_password" placeholder="Enter your Nouveau passcode">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                            <li>
                                                                <button class="btn btn-lg btn-primary">Update Password</button>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                </form>
                                            </div><!-- .tab-pane -->
                                        </div><!-- .tab-content -->
                        </div><!-- .nk-block -->
                    </div>
                    <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="user-card">
                                    <div class="user-info">
                                        <span class="lead-text">{{ Auth()->user()->name }}</span>
                                        <span class="sub-text">{{ Auth()->user()->email }}</span>
                                    </div>
                                    <div class="user-action">
                                        <div class="dropdown">
                                            <a class="btn btn-icon btn-trigger mr-n2" data-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{ url('/edit-profile')}}"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .user-card -->
                            </div><!-- .card-inner -->
                            <div class="card-inner p-0">
                                <ul class="link-list-menu">
                                    <li><a href="{{ url('/user-profile')}}"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                    <li><a class="active" href="html/user-profile-activity.html"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a></li>
                                    <li><a href="{{ url('/change-password')}}"><em class="icon ni ni-shield-star-fill"></em><span>Password Change</span></a></li>
                                </ul>
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- card-aside -->
                </div><!-- .card-aside-wrap -->
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
</div>
@endsection