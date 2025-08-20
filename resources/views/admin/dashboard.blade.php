<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <title>VLAB - Admin Dashboard</title>
    <meta content="Company Profile VLAB Admin Dashboard" name="description" />
    <meta content="TEFA Project" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="fixed-left">
    <!-- Loader -->
    <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="{{ route('admin.dashboard') }}" class="logo">
                        <img src="{{ asset('assets/images/logo-lg.png') }}" alt="VLAB Logo" class="logo-large" />
                    </a>
                </div>
            </div>

            <div class="sidebar-inner niceScrollleft">
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                                <i class="mdi mdi-airplay"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect">
                                <i class="mdi mdi-account"></i>
                                <span> Profile </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('projects.index') }}" class="waves-effect">
                                <i class="mdi mdi-folder"></i>
                                <span> Project </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect">
                                <i class="mdi mdi-settings"></i>
                                <span> Settings </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                               class="waves-effect text-danger">
                                <i class="mdi mdi-logout"></i>
                                <span> Logout </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">
                    <nav class="navbar-custom">
                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item hide-phone app-search">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control" />
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle" />
                                    <span class="ml-2 d-none d-sm-inline-block">
                                        <span class="text-white">Halo, {{ Auth::user()->name }}</span>
                                        <i class="mdi mdi-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                    <div class="dropdown-item noti-title">
                                        <h5>Welcome, {{ Auth::user()->name }}</h5>
                                    </div>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form2').submit();">
                                        <i class="mdi mdi-logout m-r-5 text-muted"></i> Logout
                                    </a>
                                    <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display:none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left waves-light waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                        </ul>

                        <div class="clearfix"></div>
                    </nav>
                </div>
                <!-- Top Bar End -->

                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="page-title">Dashboard Admin VLAB</h4>
                                <p>Selamat datang di dashboard admin project TEFA - VLAB.</p>
                            </div>
                        </div>
                        <!-- Tambahkan konten dashboard di sini -->
                    </div><!-- container -->
                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->

            <footer class="footer text-center">
                © 2025 VLAB by TEFA Project.
            </footer>
        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
