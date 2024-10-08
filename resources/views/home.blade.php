<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Candle Stick Charts | Tapeli - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
        <meta name="author" content="Leading Digital"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body data-menu-color="light" data-sidebar="default">

        <!-- Begin page -->
        <div id="app-layout">


            <!-- Topbar Start -->
            <div class="topbar-custom">
                <div class="container-xxl">
                    <div class="d-flex justify-content-between">
                        <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                            <li>
                                <button class="button-toggle-menu nav-link ps-0">
                                    <i data-feather="menu" class="noti-icon"></i>
                                </button>
                            </li>
                            <li class="d-none d-lg-block">
                                <div class="position-relative topbar-search">
                                    <input type="text" class="form-control bg-light bg-opacity-75 border-light ps-4" placeholder="Search...">
                                    <i class="mdi mdi-magnify fs-16 position-absolute text-muted top-50 translate-middle-y ms-2"></i>
                                </div>
                            </li>
                        </ul>

                        <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">

                            <li class="d-none d-sm-flex">
                                <button type="button" class="btn nav-link" data-toggle="fullscreen">
                                    <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
                                </button>
                            </li>

                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i data-feather="bell" class="noti-icon"></i>
                                    <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-end">
                                                <a href="" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div class="noti-scroll" data-simplebar>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary active">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/user-12.jpg" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="notify-details">Carl Steadham</p>
                                                <small class="text-muted">5 min ago</small>
                                            </div>
                                            <p class="mb-0 user-msg">
                                                <small class="fs-14">Completed <span class="text-reset">Improve workflow in Figma</span></small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/user-2.jpg" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <div class="notify-content">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="notify-details">Olivia McGuire</p>
                                                    <small class="text-muted">1 min ago</small>
                                                </div>

                                                <div class="d-flex mt-2 align-items-center">
                                                    <div class="notify-sub-icon">
                                                        <i class="mdi mdi-download-box text-dark"></i>
                                                    </div>

                                                    <div>
                                                        <p class="notify-details mb-0">dark-themes.zip</p>
                                                        <small class="text-muted">2.4 MB</small>
                                                    </div>
                                                </div>

                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/user-3.jpg" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <div class="notify-content">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="notify-details">Travis Williams</p>
                                                    <small class="text-muted">7 min ago</small>
                                                </div>
                                                <p class="noti-mentioned p-2 rounded-2 mb-0 mt-2"><span class="text-primary">@Patryk</span> Please make sure that you're....</p>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/user-8.jpg" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="notify-details">Violette Lasky</p>
                                                <small class="text-muted">5 min ago</small>
                                            </div>
                                            <p class="mb-0 user-msg">
                                                <small class="fs-14">Completed <span class="text-reset">Create new components</span></small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/user-5.jpg" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="notify-details">Ralph Edwards</p>
                                                <small class="text-muted">5 min ago</small>
                                            </div>
                                            <p class="mb-0 user-msg">
                                                <small class="fs-14">Completed <span class="text-reset">Improve workflow in React</span></small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/user-6.jpg" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <div class="notify-content">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="notify-details">Jocab jones</p>
                                                    <small class="text-muted">7 min ago</small>
                                                </div>
                                                <p class="noti-mentioned p-2 rounded-2 mb-0 mt-2"><span class="text-reset">@Patryk</span> Please make sure that you're....</p>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all
                                        <i class="fe-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/user-11.jpg" alt="user-image" class="rounded-circle">
                                    <span class="pro-user-name ms-1">
                                        Admin <i class="mdi mdi-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="pages-profile.html" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="auth-lock-screen.html" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline fs-16 align-middle"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="auth-logout.html" class="dropdown-item notify-item">
                                        <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>
            <!-- end Topbar -->

            <!-- Left Sidebar Start -->
            <div class="app-sidebar-menu">
                <div class="h-100" data-simplebar>

                    <!-- Sidemenu -->
                    <div id="sidebar-menu">

                        <div class="logo-box">
                            <a href="{{ url('/dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
                                <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="24">
            </span>
                            </a>
                            <a href="{{ url('/dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
                                <span class="logo-lg" style="font-size: 19px;
  font-weight: bolder;
  color: black;">
                <img src="assets/images/logo-dark.png" alt="" height="35">
            </span>
                            </a>
                        </div>


                        <ul id="side-menu">

                            <li class="menu-title">Dashboard</li>

                            <li>
                                <a href="{{ url('dashboard') }}">
                                    <i data-feather="home"></i>
                                    <span> Main Dashboard </span>
                                </a>
                            </li>

                            <li class="menu-title">Management</li>

                            <li>
                                <a href="#members" data-bs-toggle="collapse">
                                    <i data-feather="users"></i>
                                    <span> Members </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="members">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ url('members') }}">Manage Members</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('membership') }}">Break Down</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="{{ url('projects') }}">
                                    <i data-feather="briefcase"></i>
                                    <span> Projects </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('events') }}">
                                    <i data-feather="calendar"></i>
                                    <span> Events </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('store') }}">
                                    <i data-feather="shopping-cart"></i>
                                    <span> Store </span>
                                </a>
                            </li>

                            <li>
                                <a href="#resources" data-bs-toggle="collapse">
                                    <i data-feather="book-open"></i>
                                    <span> Resources </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="resources">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="resources-literature.html">Literature</a>
                                        </li>
                                        <li>
                                            <a href="resources-slogans.html">Slogans</a>
                                        </li>
                                        <li>
                                            <a href="resources-directory.html">Directory</a>
                                        </li>
                                        <li>
                                            <a href="resources-gallery.html">Gallery</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#reports" data-bs-toggle="collapse">
                                    <i data-feather="bar-chart-2"></i>
                                    <span> Reports </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="reports">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ url('charts') }}">Membership Reports</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('projects') }}">Project Reports</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="{{ url('leadership') }}">
                                    <i data-feather="layers"></i>
                                    <span> Party Structure </span>
                                </a>
                            </li>

                            <li class="menu-title">Support</li>

                            <li>
                                <a href="#">
                                    <i data-feather="life-buoy"></i>
                                    <span> Help Center </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- End Sidebar -->



                    <div class="clearfix"></div>

                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-xxl">

                        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">Candle Stick Charts</h4>
                            </div>

                            <div class="text-end">
                                <ol class="breadcrumb m-0 py-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                    <li class="breadcrumb-item active">Candle Stick Charts</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Candle Stick Charts -->
                        <div class="row">
                            <!-- Basic Candlestick Charts -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Basic Candlestick</h5>
                                    </div>

                                    <div class="card-body">
                                        <div id="basic_candlestick_chart" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Combo Candlestick Charts -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Combo Candlestick</h5>
                                    </div>

                                    <div class="card-body">
                                        <div id="combo_candlestick_chart" class="apex-charts"></div>
                                        <div id="combo_candlestick_chart1" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <!-- Category x-axis Candlestick Charts -->
                            <!-- <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Category x-axis Candlestick Chart</h5>
                                    </div>

                                    <div class="card-body">
                                        <div id="category_candlestick_chart" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Line Candlestick Charts -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Line Candlestick</h5>
                                    </div>

                                    <div class="card-body">
                                        <div id="line_candlestick_chart" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col fs-13 text-muted text-center">
                                &copy; <script>document.write(new Date().getFullYear())</script> - Made with <span class="mdi mdi-heart text-danger"></span> by <a href="#!" class="text-reset fw-semibold">Leading Digital</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Vendor -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

        <!-- Apexcharts JS -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>

        <!-- Candlestick Charts Init Js -->
        <script src="assets/js/pages/apexcharts-candlestick.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.js"></script>

    </body>
</html>
