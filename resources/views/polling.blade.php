<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8"/>
<title>Polling Stations</title>
<meta name="author" content="Leading Digital"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- App css -->
<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>

<!-- Icons -->
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
<!-- ApexCharts CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@latest/dist/apexcharts.css">
<!-- Custom CSS -->
<style>
    body {
        display: flex;
        justify-content: space-between;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    #map {
        height: 80vh;
        width: 100%;
    }

    .chart-container {
        width: 100%;
        padding: 100px 20px;
        height: 80vh;
        box-sizing: border-box;
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
                <img src="assets/images/logo-dark.png" alt="" height="24">ZANU PF
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
                                <li><a href="{{ url('polling-station')}}">Polling Stations</a></li>
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
                        <h4 class="fs-18 fw-semibold m-0">Polling Station Break Down</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-xl-7">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                                        <i data-feather="git-commit" class="widgets-icons"></i>
                                    </div>
                                    <h5 class="card-title mb-0">Polling Stations</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-xl-5">
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
                                <div class="chart-container" id="chart"></div>
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
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<!-- ApexCharts JS -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>
<!-- Custom JS -->

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<!-- ApexCharts JS -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>
<!-- Custom JS -->
<script>
    // Example data for 100 polling stations within Zimbabwe's bounds
    const pollingData = [];
    const zimbabweBounds = {
        latMin: -22.0,
        latMax: -15.0,
        lngMin: 25.0,
        lngMax: 34.0
    };

    for (let i = 1; i <= 10; i++) {
        pollingData.push({
            "station_name": `Station ${i}`,
            "latitude": Math.random() * (zimbabweBounds.latMax - zimbabweBounds.latMin) + zimbabweBounds.latMin,
            "longitude": Math.random() * (zimbabweBounds.lngMax - zimbabweBounds.lngMin) + zimbabweBounds.lngMin,
            "main_wing": Math.floor(Math.random() * 1000),
            "youth_league": Math.floor(Math.random() * 1000),
            "womens_league": Math.floor(Math.random() * 1000),
            "war_veterans_league": Math.floor(Math.random() * 1000)
        });
    }

    // Initialize Leaflet map
    const map = L.map('map').setView([-19.015438, 29.154857], 6); // Centered on Zimbabwe

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Add polling stations to map
    pollingData.forEach(station => {
        const marker = L.marker([station.latitude, station.longitude]).addTo(map)
            .bindPopup(`
            <strong>${station.station_name}</strong><br>
            Main Wing: ${station.main_wing}<br>
            Youth League: ${station.youth_league}<br>
            Women's League: ${station.womens_league}<br>
            War Veterans League: ${station.war_veterans_league}
        `);

        marker.on('click', function () {
            showChart(station);
        });
    });

    // Function to show chart for a selected polling station
    function showChart(station) {
        const options = {
            chart: {
                type: 'bar',
                height: 350
            },
            series: [
                {
                    name: 'Main Wing',
                    data: [station.main_wing],
                    color: 'rgba(255, 0, 0, 1)'
                },
                {
                    name: 'Youth League',
                    data: [station.youth_league],
                    color: 'rgba(0, 0, 0, 1)'
                },
                {
                    name: 'Women\'s League',
                    data: [station.womens_league],
                    color: 'rgba(0, 128, 0, 1)'
                },
                {
                    name: 'War Veterans League',
                    data: [station.war_veterans_league],
                    color: 'rgba(255, 255, 0, 1)'
                }
            ],
            xaxis: {
                categories: ['Voters']
            },
            title: {
                text: `Voter Distribution at ${station.station_name}`,
                align: 'center'
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '35%',
                    endingShape: 'rounded',
                    barSpacing: '10px',
                },
            },
            dataLabels: {
                enabled: false
            },
            legend: {
                position: 'top',
                horizontalAlign: 'center',
                floating: false,
                offsetY: 10,
                offsetX: 10
            },
        };

        const chartContainer = document.querySelector("#chart");
        chartContainer.innerHTML = ""; // Clear existing chart

        window.chart = new ApexCharts(chartContainer, options);
        window.chart.render();
    }

    // Show chart for the first station initially
    if (pollingData.length > 0) {
        showChart(pollingData[0]);
    }

</script>
</body>
</html>
