<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <title>Candle Stick Charts | Tapeli - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
    <meta name="author" content="Leading Digital"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>

    <!-- Icons -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .widget-icons-sections {
            padding: 10px;
        }

        .widgets-icons {
            width: 24px;
            height: 24px;
        }
    </style>
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
                            <input type="text" class="form-control bg-light bg-opacity-75 border-light ps-4"
                                   placeholder="Search...">
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
                        <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#"
                           role="button" aria-haspopup="false" aria-expanded="false">
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
                                </li><li><a href="{{ url('polling-station')}}">Polling Stations</a></li>
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


    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-xxl">

                <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 fw-semibold m-0">Break Down</h4>
                    </div>
                </div>

                <!-- Sales Chart -->
                <div class="row">
                    <div class="col-md-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                                        <i data-feather="git-commit" class="widgets-icons"></i>
                                    </div>
                                    <h5 class="card-title mb-0">Members</h5>
                                </div>
                            </div>

                            <div class="card-body">
                                <div id="chart-membership" style="padding-bottom: 20px" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Subscription Trends Card -->
                    <div class="col-md-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                                        <i data-feather="bar-chart-2" class="widgets-icons"></i>
                                    </div>
                                    <h5 class="card-title mb-0">Subscription Trends</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart-subscription" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Event Attendance Trends Card -->
                    <div class="col-md-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                                        <i data-feather="calendar" class="widgets-icons"></i>
                                    </div>
                                    <h5 class="card-title mb-0">Event Attendance Trends</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart-attendance" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                                        <i data-feather="check-square" class="widgets-icons"></i>
                                    </div>
                                    <h5 class="card-title mb-0">Election Participation</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart-election" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

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
<!-- App js-->
<script src="assets/js/app.js"></script>

<!-- ApexCharts JS -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>
<!-- Feather Icons JS -->
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        feather.replace();

        // Membership Distribution Chart
        var optionsMembership = {
            chart: {
                type: 'pie',
            },
            series: [40, 30, 20, 10], // Example data
            labels: ['Main Wing', 'Youth League', 'Women\'s League', 'War Veterans League'],
            title: {
                text: 'Membership Distribution',
                align: 'center'
            }
        };
        var chartMembership = new ApexCharts(document.querySelector("#chart-membership"), optionsMembership);
        chartMembership.render();

        // Subscription Trends Chart
        var optionsSubscription = {
            chart: {
                type: 'bar',
            },
            series: [{
                name: 'Renewals',
                data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
            }, {
                name: 'Expirations',
                data: [20, 29, 37, 36, 44, 45, 50, 58, 68]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
            },
            title: {
                text: 'Subscription Trends',
                align: 'center'
            }
        };
        var chartSubscription = new ApexCharts(document.querySelector("#chart-subscription"), optionsSubscription);
        chartSubscription.render();

        // Event Attendance Trends Chart
        var optionsAttendance = {
            chart: {
                type: 'line',
            },
            series: [{
                name: 'Event Attendance',
                data: [150, 200, 250, 300, 280, 350, 400, 450, 420, 500, 550, 600] // Example data
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            title: {
                text: 'Event Attendance Trends',
                align: 'center'
            }
        };
        var chartAttendance = new ApexCharts(document.querySelector("#chart-attendance"), optionsAttendance);
        chartAttendance.render();

        // Election Participation Chart
        var optionsElection = {
            chart: {
                type: 'bar',
            },
            series: [{
                name: 'Voter Turnout',
                data: [75, 80, 85, 90, 70, 95, 85, 88, 92] // Example data
            }],
            xaxis: {
                categories: ['Harare', 'Bulawayo', 'Chikwaga', 'Chinhoyi', 'Chitale', 'Goromonzi', 'Hudumela', 'Kwekwe', 'Marondera']
            },
            title: {
                text: 'Election Participation',
                align: 'center'
            }
        };
        var chartElection = new ApexCharts(document.querySelector("#chart-election"), optionsElection);
        chartElection.render();
    });
</script>
</body>
</html>
