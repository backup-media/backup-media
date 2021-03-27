@extends('backend.layouts.app')

@section('content')
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Data Overview</h3>
                    <div class="nk-block-des text-soft">
                    </div>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="row g-gs">
                <div class="col-xxl-6">
                    <div class="row g-gs">
                        <div class="col-lg-6 col-xxl-12">
                            <div class="row g-gs">
                                <div class="col-sm-6 col-lg-12 col-xxl-6">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Total Domain Name</h6>
                                                </div>
                                            </div>
                                            <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                <div class="nk-sale-data">
                                                    <span class="amount">{{ $count_domain}}</span>
                                                </div>
                                                <div class="nk-sales-ck" style="width: 35% !important;">
                                                    <img src="https://img.icons8.com/fluent/96/000000/domain-name.png" style="
                                                    margin-left: 55%; margin-top: -10%; "/>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-sm-6 col-lg-12 col-xxl-6">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Total Hosting</h6>
                                                </div>
                                            </div>
                                            <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                <div class="nk-sale-data">
                                                    <span class="amount">{{$count_hosting}}</span>
                                                </div>
                                                <div class="nk-sales-ck">
                                                    <img src="{{ asset('/assets/images/icons/icons8-server-64.png')}}" style="
                                                    margin-left: 55%;
                                                    margin-top: -10%;width: 35% !important;"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .col -->
                <div class="col-xxl-6">
                    <div class="row g-gs">
                        <div class="col-lg-6 col-xxl-12">
                            <div class="row g-gs">
                                <div class="col-sm-6 col-lg-12 col-xxl-6">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Total Client</h6>
                                                </div>
                                            </div>
                                            <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                <div class="nk-sale-data">
                                                    <span class="amount">{{ $count_client}}</span>
                                                </div>
                                                <div class="nk-sales-ck">
                                                    <img src="{{ asset('assets/images/icons/icons8-reception-80.png')}}" style="
                                                    margin-left: 55%;
                                                    margin-top: -10%;"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-sm-6 col-lg-12 col-xxl-6">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Total Projects</h6>
                                                </div>
                                            </div>
                                            <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                <div class="nk-sale-data">
                                                    <span class="amount">{{ $count_project}}</span>
                                                </div>
                                                <div class="nk-sales-ck">
                                                    <img src="{{ asset('assets/images/icons/icons8-group-of-projects-96.png')}}" style="
                                                    margin-left: 55%;
                                                    margin-top: -10%;"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .col -->
                <div class="col-xxl-6">
                    <div class="row g-gs">
                        <div class="col-lg-6 col-xxl-12">
                            <div class="row g-gs">
                                <div class="col-sm-6 col-lg-12 col-xxl-6">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Total Domain is On</h6>
                                                </div>
                                            </div>
                                            <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                <div class="nk-sale-data">
                                                    <span class="amount">{{ $count_on}}</span>
                                                </div>
                                                <div class="nk-sales-ck">
                                                    <img src="{{ asset('assets/images/icons/icons8-domain-name-96.png')}}" style="
                                                    margin-left: 55%;
                                                    margin-top: -10%;"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-sm-6 col-lg-12 col-xxl-6">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Total Domain is Off</h6>
                                                </div>
                                            </div>
                                            <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                <div class="nk-sale-data">
                                                    <span class="amount">{{ $count_off}}</span>
                                                </div>
                                                <div class="nk-sales-ck">
                                                    <img src="{{ asset('assets/images/icons/icons8-domain-name-96-red.png')}}" style="
                                                    margin-left: 55%;
                                                    margin-top: -10%;"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .col -->
                <div class="col-xxl-6">
                    <div class="row g-gs">
                        <div class="col-lg-6 col-xxl-12">
                            <div class="row g-gs">
                                <div class="col-sm-6 col-lg-12 col-xxl-6">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Total SSL is On</h6>
                                                </div>
                                            </div>
                                            <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                <div class="nk-sale-data">
                                                    <span class="amount">{{ $sslon}}</span>
                                                </div>
                                                <div class="nk-sales-ck">
                                                    <img src="{{ asset('assets/images/icons/icons8-certificate-96.png')}}" style="
                                                    margin-left: 55%;
                                                    margin-top: -10%;"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .col -->
                                <div class="col-sm-6 col-lg-12 col-xxl-6">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Total SSL is Off</h6>
                                                </div>
                                            </div>
                                            <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                <div class="nk-sale-data">
                                                    <span class="amount">{{ $ssloff}}</span>
                                                </div>
                                                <div class="nk-sales-ck">
                                                    <img src="{{ asset('assets/images/icons/icons8-certificate-96-red.png')}}" style="
                                                    margin-left: 55%;
                                                    margin-top: -10%;"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .col -->
                <div class="col-xxl-8">
                    <div class="card card-bordered card-full">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title"><span class="mr-2">Last 5 Project</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-inner p-0 border-top">
                            <div class="nk-tb-list nk-tb-orders">
                                <div class="nk-tb-item nk-tb-head">
                                    <div class="nk-tb-col"><span>ref.</span></div>
                                    <div class="nk-tb-col tb-col-sm"><span>Client Name</span></div>
                                    <div class="nk-tb-col tb-col-sm"><span>Project Name</span></div>
                                    <div class="nk-tb-col tb-col-md"><span>Flise Link</span></div>
                                    <div class="nk-tb-col tb-col-md"><span>Github Link</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span>date expire</span></div>
                                    <div class="nk-tb-col"><span>created_at</span></div>
                                    <div class="nk-tb-col"><span>&nbsp;</span></div>
                                </div>
                                @foreach($last5project as $v_last5project)
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col">
                                        <span class="tb-lead"><a href="#">{{ $v_last5project->ref}}</a></span>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        <div class="user-card">
                                            <div class="user-name">
                                                <span class="tb-lead">{{ $v_last5project->client_name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        <div class="user-card">
                                            <div class="user-name">
                                                <span class="tb-lead">{{ $v_last5project->name_project}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        <div class="user-card">
                                            <div class="user-name">
                                                <span class="tb-lead">{{ $v_last5project->files_link}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        <div class="user-card">
                                            <div class="user-name">
                                                <span class="tb-lead">{{ $v_last5project->github_link}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        <div class="user-card">
                                            <div class="user-name">
                                                <span class="tb-lead">{{ $v_last5project->date_expire}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-lead">{{ $v_last5project->created_at}}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-inner-sm border-top text-center d-sm-none">
                            <a href="#" class="btn btn-link btn-block">See History</a>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-md-6 col-xxl-4">
                    <div class="card card-bordered card-full">
                        <div class="card-inner border-bottom">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Last 5 Clients</h6>
                                </div>
                            </div>
                        </div>
                        <ul class="nk-activity">
                            @foreach($client as $v_client)
                            <li class="nk-activity-item">
                                <div class="nk-activity-media user-avatar bg-success"><img src="./images/avatar/c-sm.jpg" alt=""></div>
                                <div class="nk-activity-data">
                                    <div class="label">{{ $v_client->client_name}}</div>
                                    <span class="time">2 hours ago</span>
                                </div>
                                <div class="nk-activity-data">
                                    <div class="label">{{ $v_client->info_client}}</div>
                                </div>
                                <div class="nk-activity-data">
                                    <div class="label">{{ $v_client->info_client}}</div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div><!-- .card -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .nk-block -->
    </div>
</div>
@endsection