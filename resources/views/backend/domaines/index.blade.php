@extends('backend.layouts.app')

@section('content')
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Domains</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt"><a href="{{ url('add-provider')}}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Domain</span></a></li>
                            </ul>
                        </div>
                    </div><!-- .toggle-wrap -->
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card card-bordered card-stretch">
                <div class="card-inner-group">
                    <div class="card-inner p-0">
                        <table class="nk-tb-list nk-tb-ulist">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="pid-all">
                                            <label class="custom-control-label" for="pid-all"></label>
                                        </div>
                                    </th>
                                    <th class="nk-tb-col"><span class="sub-text">ID</span></th>
                                    <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Provider Name</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Domain Url</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Account</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Expire Date</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Owner</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Client</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Created_at</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">status</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">SSL</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Action</span></th>
                                </tr><!-- .nk-tb-item -->
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                ?>
                                @foreach($domains as $domain)
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="pid-{{$count}}">
                                            <label class="custom-control-label" for="pid-{{$count}}"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a class="project-title">
                                            <div class="project-info">
                                                <h6 class="title">{{ $count}}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a class="project-title">
                                            <div class="project-info">
                                                <h6 class="title">{{ $domain->provider->name_provider}}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a class="project-title">
                                            <div class="project-info">
                                                <h6 class="title">{{ $domain->domain_url}}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a class="project-title">
                                            <div class="project-info">
                                                <h6 class="title">{{ $domain->account->username}}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a class="project-title">
                                            <div class="project-info">
                                                <h6 class="title">{{ $date_exp = $domain->expire_date}}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a class="project-title">
                                            <div class="project-info">
                                                <h6 class="title">{{ $domain->owner}}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a class="project-title">
                                            <div class="project-info">
                                                <h6 class="title">{{ $domain->client->client_name}}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <span>{{ $domain->created_at}}</span>
                                    </td>

                                    <td class="nk-tb-col">
                                        <a class="project-title">
                                            <div class="project-info">
                                                <h6 class="title">
                                                    
                                                    @if($result[$domain->domain_url]['status'] == 'off') 
                                                    <span class="text-danger">off</span>
                                                    @else 
                                                    <span class="text-success">on</span>
                                                    @endif
                                                </h6>
                                            </div>
                                        </a>
                                    </td>

                                    <td class="nk-tb-col">
                                        <a class="project-title">
                                            <div class="project-info">
                                                <h6 class="title"> 
                                                    
                                                    @if($result[$domain->domain_url]['ssl'] == 'off') 
                                                    <span class="text-danger">off</span>
                                                    @else 
                                                    <span class="text-success">on</span>
                                                    @endif
                                                </h6>
                                            </div>
                                        </a>
                                    </td>



                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li>
                                                <div class="drodown">
                                                    <a class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a data-toggle="modal" data-target="#basicModal{{$count}}"><em class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                            <li><a href="{{ url('/edit-domain/.', $domain->id)}}"><em class="icon ni ni-edit"></em><span>Edit Project</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                    <div class="modal fade" id="basicModal{{$count}}" tabindex="-{{$count}}" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block">
                                                    <div class="nk-data data-list">
                                                        <div class="data-head">
                                                            <h6 class="overline-title">Information Domain " {{ $domain->domain_url}} "</h6>
                                                        </div>
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Provider Name</span>
                                                                <span class="data-value">{{ $domain->provider->name_provider}}</span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Domain Url</span>
                                                                <span class="data-value"><a href="http://{{ $domain->domain_url}}">{{ $domain->domain_url}}</a></span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Account Name</span>
                                                                <span class="data-value">{{ $domain->account->username}}</span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Owner</span>
                                                                <span class="data-value text-soft">{{ $domain->owner}}</span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Expire Date</span>
                                                                <span class="data-value text-soft">{{ $domain->expire_date}}</span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Status Domain</span>
                                                                <span class="data-value">
                                                                    @if($result[$domain->domain_url]['status'] == 'off') 
                                                                    <span class="text-danger">off</span>
                                                                    @else 
                                                                    <span class="text-success">on</span>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Status SSL</span>
                                                                <span class="data-value">
                                                                    @if($result[$domain->domain_url]['ssl'] == 'off')
                                                                    <span class="text-danger">off</span>
                                                                    @else
                                                                    <span class="text-success">on</span>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                    </div><!-- data-list -->
                                                </div><!-- .nk-block -->
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </tr><!-- .nk-tb-item -->
                                <?php $count = $count + 1 ; ?>
                                @endforeach
                            </tbody>
                        </table><!-- .nk-tb-list -->
                    </div><!-- .card-inner -->
                </div><!-- .card-inner-group -->
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
</div>


@endsection