<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ URL::to('/assets/images/favicon.png') }}">
    <!-- Page Title  -->
    <title>Back up Dashboard </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ URL::to('/assets/css/dashlite.css?ver=2.2.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ URL::to('/assets/css/theme.css?ver=2.2.0') }}">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="{{url('/')}}" class="logo-link nk-sidebar-logo">
                            <h2 style="text-align: center; color:white">Systeme</h2>
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="{{ url('/')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                        <span class="nk-menu-text">Overview</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="text-primary icon ni ni-globe"></em></span>
                                        <span class="nk-menu-text">Domains</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ url('/add-domain')}}" class="nk-menu-link"><span class="nk-menu-text">Add Domain</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ url('/domains')}}" class="nk-menu-link"><span class="nk-menu-text">Domains</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-server"></em></span>
                                        <span class="nk-menu-text">Servers</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ url('/add-server')}}" class="nk-menu-link"><span class="nk-menu-text">Add Server</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ url('/servers')}}" class="nk-menu-link"><span class="nk-menu-text">Servers</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">Users</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ url('/add-user')}}" class="nk-menu-link"><span class="nk-menu-text">Add User</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ url('/users')}}" class="nk-menu-link"><span class="nk-menu-text">Users</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                                        <span class="nk-menu-text">Projects</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ url('/add-project')}}" class="nk-menu-link"><span class="nk-menu-text">Add Project</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ url('/projects')}}" class="nk-menu-link"><span class="nk-menu-text">Projects</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li>
                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                            <span class="nk-menu-text">Providers</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="{{ url('/add-provider')}}" class="nk-menu-link"><span class="nk-menu-text">Add Provider</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="{{ url('/providers')}}" class="nk-menu-link"><span class="nk-menu-text">Providers</span></a>
                                            </li>
                                        </ul><!-- .nk-menu-sub -->
                                    </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">Clients</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ url('/add-client')}}" class="nk-menu-link"><span class="nk-menu-text">Add Client</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ url('/clients')}}" class="nk-menu-link"><span class="nk-menu-text">Clients</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span>
                                            <span class="nk-menu-text">Accounts</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="{{ url('/add-account')}}" class="nk-menu-link"><span class="nk-menu-text">Add Account</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="{{ url('/accounts')}}" class="nk-menu-link"><span class="nk-menu-text">Acounts</span></a>
                                            </li>
                                        </ul><!-- .nk-menu-sub -->
                                    </li>
                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-icon"><em class="icon ni ni-hard-drive"></em></span>
                                            <span class="nk-menu-text">Hostings</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="{{ url('/add-hosting')}}" class="nk-menu-link"><span class="nk-menu-text">Add Hosting</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="{{ url('/hostings')}}" class="nk-menu-link"><span class="nk-menu-text">Hostings</span></a>
                                            </li>
                                        </ul><!-- .nk-menu-sub -->
                                    </li>
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status">Administrator</div>
                                                    <div class="user-name dropdown-indicator">{{ Auth()->user()->name }}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span><?php $str =  Auth()->user()->name ; $gt = $str[0] ; $gtt = $str[1] ?>  {{ $gt}} {{ $gtt}}</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ Auth()->user()->name }}</span>
                                                        <span class="sub-text">{{ Auth()->user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ url('/profile')}}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="{{ url('/user-profile')}}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="{{ url('/password')}}"><em class="icon ni ni-activity-alt"></em><span>Change Password</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ URL::to('/assets/js/bundle.js?ver=2.2.0') }}"></script>
    <script src="{{ URL::to('/assets/js/scripts.js?ver=2.2.0') }}"></script>
    <script src="{{ URL::to('/assets/js/charts/gd-default.js?ver=2.2.0') }}"></script>
</body>

</html>