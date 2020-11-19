<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Ample lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Ample admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>AdminPage</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend_asset/plugins/images/coffee-logo.png')}}">
    <!-- Custom CSS -->
   <link href="{{asset('backend_asset/css/style.min.css')}}" rel="stylesheet">
   {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/532f1fcad3.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin6">
                <a class="navbar-brand" href="dashboard.html">
                    <b class="logo-icon">
                        <img src="{{asset('backend_asset/plugins/images/logo-icon.png')}}" alt="homepage" />
                    </b>
                    <span class="logo-text">
                        <img src="{{asset('backend_asset/plugins/images/logo-text.png')}}" alt="homepage" />
                    </span>
                </a>
                <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                    href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="navbar-nav d-none d-md-block d-lg-none">
                    <li class="nav-item">
                        <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class=" in">
                        <form role="search" class="app-search d-none d-md-block mr-3">
                            <input type="text" placeholder="Search..." class="form-control mt-0"><a href="" class="active"><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#">
                            <img src="{{asset('images/user.png')}}" alt="user-img" width="36" class="img-circle">
                            <span class="text-white font-medium">Admin</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="fas fa-clock" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('order*') ? 'active' : ''}}" href="{{route('order.index')}}" aria-expanded="false"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hide-menu">Order</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('category*') ? 'active' : ''}}" href="{{route('category.index')}}" aria-expanded="false"><i class="fa fa-ethernet" aria-hidden="true"></i><span class="hide-menu">Category</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('subcategory*') ? 'active' : ''}}" href="{{route('subcategory.index')}}" aria-expanded="false"><i class="fa fa-pie-chart"aria-hidden="true"></i><span class="hide-menu">Subcategory</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('item*') ? 'active' : ''}}" href="{{route('item.index')}}" aria-expanded="false"><i class="fa fa-anchor" aria-hidden="true"></i><span class="hide-menu">Item</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('mainpage')}}" aria-expanded="false"><i class="fa fa-info-circle" aria-hidden="true"></i><span class="hide-menu">Logout</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    @yield('content')
    <!-- footer -->
    <footer class="footer text-center"> 2020 © 99Art Coffee brought to you by <a
            href="#">2am Coders</a>
    </footer>
</div>

<!-- All Jquery -->
<script src="{{asset('backend_asset/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('backend_asset/plugins/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('backend_asset/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend_asset/js/app-style-switcher.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('backend_asset/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('backend_asset/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('backend_asset/js/custom.js')}}"></script>
</body>
</html>