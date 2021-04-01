@extends('backend.layouts.app')

@section('content')
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Projects</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt"><a href="{{ url('add-project')}}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Project</span></a></li>
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
                                    <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Project Name</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Reference</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Files Link</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Github Link</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Date Expire</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Expiration</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Details</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Created at</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Action</span></th>
                                </tr><!-- .nk-tb-item -->
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                ?>
                                @foreach($projects as $project)
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="pid-01">
                                            <label class="custom-control-label" for="pid-01"></label>
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
                                                <h6 class="title">{{ $project->name_project}}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a class="project-title">
                                            <div class="project-info">
                                                <h6 class="title">{{ $project->ref}}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a class="project-title">
                                            <div class="project-info">
                                                <h6 class="title">{{ $project->files_link}}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a class="project-title">
                                            <div class="project-info">
                                                <h6 class="title">{{ $project->github_link}}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col tb-col-xxl">
                                        <span>{{ $project->date_expire}}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-xxl">
                                        <span>{{ $project->expiration()}}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-xxl">
                                        <span>{{ $project->info}}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <span>{{ $project->created_at}}</span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li>
                                                <div class="drodown">
                                                    <a class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a data-toggle="modal" data-target="#basicModal{{$count}}"><em class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                            <li><a href="{{ url('/edit-project', $project->id)}}"><em class="icon ni ni-edit"></em><span>Edit Project</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->
                                <div class="modal fade" id="basicModal{{$count}}" tabindex="-{{$count}}" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="card-inner card-inner-lg">
                                            <div class="nk-block">
                                                <div class="nk-data data-list">
                                                    <div class="data-head">
                                                        <h6 class="overline-title">Information Project " {{ $project->name_project}} "</h6>
                                                    </div>
                                                    <div class="data-item">
                                                        <div class="data-col">
                                                            <span class="data-label">Project Name</span>
                                                            <span class="data-value">{{ $project->name_project}}</span>
                                                        </div>
                                                    </div><!-- data-item -->
                                                    <div class="data-item">
                                                        <div class="data-col">
                                                            <span class="data-label">Reference</span>
                                                            <span class="data-value">{{ $project->ref}}</span>
                                                        </div>
                                                    </div><!-- data-item -->
                                                    <div class="data-item">
                                                        <div class="data-col">
                                                            <span class="data-label">Files Link</span>
                                                            <span class="data-value">{{ $project->files_link}}</span>
                                                        </div>
                                                    </div><!-- data-item -->
                                                    <div class="data-item">
                                                        <div class="data-col">
                                                            <span class="data-label">Github Link</span>
                                                            <span class="data-value text-soft">{{ $project->github_link}}</span>
                                                        </div>
                                                    </div><!-- data-item -->
                                                    <div class="data-item">
                                                        <div class="data-col">
                                                            <span class="data-label">Date Expired</span>
                                                            <span class="data-value text-soft">{{ $project->expiration()}}</span>
                                                        </div>
                                                    </div><!-- data-item -->
                                                    <div class="data-item">
                                                        <div class="data-col">
                                                            <span class="data-label">Details</span>
                                                            <span class="data-value">{{ $project->info}}</span>
                                                        </div>
                                                    </div><!-- data-item -->
                                                    <div class="data-item">
                                                        <div class="data-col">
                                                            <span class="data-label">Created at</span>
                                                            <span class="data-value">{{ $project->created_at}}</span>
                                                        </div>
                                                    </div><!-- data-item -->
                                                </div><!-- data-list -->
                                            </div><!-- .nk-block -->
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <?php
                                $count = $count + 1;
                                ?>
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