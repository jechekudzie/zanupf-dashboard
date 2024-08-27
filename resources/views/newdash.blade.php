<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZANU PF Membership Management Dashboard</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
    
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .filter {
            margin-bottom: 10px;
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
                ZANU PF
            </span>
                        <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="24">
                             ZANU PF
            </span>
                    </a>
                    <a href="{{ url('/dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
                 ZANU PF
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

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <div class="container-fluid py-4">
                <h2 class="mb-4">ZANU PF Party Management Dashboard</h2>


                <div class="card">
                    <div class="card-body">
                        <div class="max-w-7xl mx-auto">
                            <!-- Nav tabs -->
                            <ul class="nav nav-underline border-b" role="tablist">
                            <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                        <span>Membership Home</span>
                                    </a>
                                </li>    
                            <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#overview" role="tab">
                                        <span>Membership Breakdown</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                  
                                <div class="filter">
                                    <label for="provinceFilter">Select Province:</label>
                                    <select id="provinceFilter" onchange="filterData()">
                                        <option value="all">All Provinces</option>
                                        <option value="harare">Harare</option>
                                        <option value="bulawayo">Bulawayo</option>
                                        <option value="mashonaland_west">Mashonaland West</option>
                                        <option value="manicaland">Manicaland</option>
                                        <option value="masvingo">Masvingo</option>
                                        <option value="matabeleland_north">Matabeleland North</option>
                                        <option value="matabeleland_south">Matabeleland South</option>
                                        <option value="midlands">Midlands</option>
                                        <option value="mashonaland_central">Mashonaland Central</option>
                                        <option value="mashonaland_east">Mashonaland East</option>
                                    </select>

                                    <label for="districtFilter">Select Admin District:</label>
                                    <select id="districtFilter" onchange="filterData()">
                                        <option value="all">All Districts</option>
                                        <!-- Populate dynamically based on selected province -->
                                    </select>

                                    <label for="constituencyFilter">Select Constituency:</label>
                                    <select id="constituencyFilter" onchange="filterData()">
                                        <option value="all">All Constituencies</option>
                                        <!-- Populate dynamically based on selected district -->
                                    </select>

                                    <label for="wardFilter">Select Ward:</label>
                                    <select id="wardFilter" onchange="filterData()">
                                        <option value="all">All Wards</option>
                                        <!-- Populate dynamically based on selected constituency -->
                                    </select>

                                    <label for="partyDistrictFilter">Select Party District:</label>
                                    <select id="partyDistrictFilter" onchange="filterData()">
                                        <option value="all">All Party Districts</option>
                                        <!-- Populate dynamically based on selected ward -->
                                    </select>

                                    <label for="partyBranchFilter">Select Party Branch:</label>
                                    <select id="partyBranchFilter" onchange="filterData()">
                                        <option value="all">All Party Branches</option>
                                        <!-- Populate dynamically based on selected party district -->
                                    </select>

                                    <label for="partyCellFilter">Select Party Cell:</label>
                                    <select id="partyCellFilter" onchange="filterData()">
                                        <option value="all">All Party Cells</option>
                                        <!-- Populate dynamically based on selected party branch -->
                                    </select>
                                </div>

                                <table>
                                    <thead>
                                        <tr>
                                            <th>Province</th>
                                            <th>Admin District</th>
                                            <th>Constituency</th>
                                            <th>Wards</th>
                                            <th>Party District</th>
                                            <th>Party Branch</th>
                                            <th>Party Cell</th>
                                            <th>Main Wing</th>
                                            <th>Youth League</th>
                                            <th>Women's League</th>
                                            <th>War Veterans League</th>
                                            <th>Total Members</th>
                                        </tr>
                                    </thead>
                                    <tbody id="memberTable">
                                        <!-- Sample data, replace with dynamic content -->
                                        <tr data-province="harare" data-district="harare_central" data-constituency="harare_east" data-ward="ward1" data-party-district="central_district" data-party-branch="branch1" data-party-cell="cell1">
                                            <td>Harare</td>
                                            <td>Harare Central</td>
                                            <td>Harare East</td>
                                            <td>Ward 1</td>
                                            <td>Central District</td>
                                            <td>Branch 1</td>
                                            <td>Cell 1</td>
                                            <td>2000</td>
                                            <td>500</td>
                                            <td>700</td>
                                            <td>300</td>
                                            <td>3500</td>
                                        </tr>
                                        <tr data-province="manicaland" data-district="mutare" data-constituency="mutare_central" data-ward="ward2" data-party-district="north_district" data-party-branch="branch2" data-party-cell="cell3">
                                            <td>Manicaland</td>
                                            <td>Mutare</td>
                                            <td>Mutare Central</td>
                                            <td>Ward 2</td>
                                            <td>North District</td>
                                            <td>Branch 2</td>
                                            <td>Cell 3</td>
                                            <td>1200</td>
                                            <td>300</td>
                                            <td>500</td>
                                            <td>150</td>
                                            <td>2150</td>
                                        </tr>
                                        <tr data-province="masvingo" data-district="gutu" data-constituency="gutu_south" data-ward="ward3" data-party-district="south_district" data-party-branch="branch3" data-party-cell="cell2">
                                            <td>Masvingo</td>
                                            <td>Gutu</td>
                                            <td>Gutu South</td>
                                            <td>Ward 3</td>
                                            <td>South District</td>
                                            <td>Branch 3</td>
                                            <td>Cell 2</td>
                                            <td>1800</td>
                                            <td>400</td>
                                            <td>600</td>
                                            <td>200</td>
                                            <td>3000</td>
                                        </tr>
                                        <tr data-province="midlands" data-district="kwekwe" data-constituency="kwekwe_central" data-ward="ward4" data-party-district="central_district" data-party-branch="branch4" data-party-cell="cell4">
                                            <td>Midlands</td>
                                            <td>Kwekwe</td>
                                            <td>Kwekwe Central</td>
                                            <td>Ward 4</td>
                                            <td>Central District</td>
                                            <td>Branch 4</td>
                                            <td>Cell 4</td>
                                            <td>1500</td>
                                            <td>350</td>
                                            <td>550</td>
                                            <td>250</td>
                                            <td>2650</td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>

                                </div>
                                <div class="tab-pane" id="overview" role="tabpanel">
                                    <!-- Multi-color Graph for Membership by Province -->
                                    <canvas id="membersByProvince" class="h-96"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col fs-13 text-muted text-center">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script>
                        - Developed by <a href="#!"
                                          class="text-reset fw-semibold">Leading
                            Digital</a>
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
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    window.onload = function () {
        const provinces = ['Manicaland', 'Masvingo', 'Matabeleland North', 'Matabeleland South', 'Midlands', 'Mashonaland Central', 'Mashonaland East', 'Mashonaland West', 'Harare', 'Bulawayo'];

        const mainWingData = [12, 19, 3, 5, 2, 3, 10, 15, 8, 6];
        const youthWingData = [8, 11, 5, 6, 9, 7, 13, 14, 10, 9];
        const womensLeagueData = [15, 10, 7, 8, 5, 6, 12, 9, 14, 13];
        const warVeteransLeagueData = [5, 7, 11, 13, 6, 8, 9, 10, 12, 14];

        const chartColors = {
            mainWing: 'rgba(255, 0, 0, 1)',
            youthWing: 'rgba(0, 0, 0, 1)',
            womensLeague: 'rgba(0, 128, 0, 1)',
            warVeteransLeague: 'rgba(255, 255, 0, 1)'
        };

        const borderColor = {
            mainWing: 'rgba(255, 0, 0, 1)',
            youthWing: 'rgba(0, 0, 0, 1)',
            womensLeague: 'rgba(0, 128, 0, 1)',
            warVeteransLeague: 'rgba(0, 0, 0, 1)'
        };

        // Create a multi-color stacked bar chart for Membership by Province
        function createStackedChart(ctx) {
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: provinces,
                    datasets: [
                        {
                            label: 'Main Wing',
                            data: mainWingData,
                            backgroundColor: chartColors.mainWing,
                            borderColor: borderColor.mainWing,
                            borderWidth: 1
                        },
                        {
                            label: 'Youth Wing',
                            data: youthWingData,
                            backgroundColor: chartColors.youthWing,
                            borderColor: borderColor.youthWing,
                            borderWidth: 1
                        },
                        {
                            label: 'Women\'s League',
                            data: womensLeagueData,
                            backgroundColor: chartColors.womensLeague,
                            borderColor: borderColor.womensLeague,
                            borderWidth: 1
                        },
                        {
                            label: 'War Veterans League',
                            data: warVeteransLeagueData,
                            backgroundColor: chartColors.warVeteransLeague,
                            borderColor: borderColor.warVeteransLeague,
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            stacked: true
                        },
                        y: {
                            stacked: true,
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }
                    }
                }
            });
        }

        createStackedChart(document.getElementById('membersByProvince').getContext('2d'));
    };

    function filterData() {
        var provinceFilter = document.getElementById('provinceFilter').value;
        var districtFilter = document.getElementById('districtFilter').value;
        var constituencyFilter = document.getElementById('constituencyFilter').value;
        var wardFilter = document.getElementById('wardFilter').value;
        var partyDistrictFilter = document.getElementById('partyDistrictFilter').value;
        var partyBranchFilter = document.getElementById('partyBranchFilter').value;
        var partyCellFilter = document.getElementById('partyCellFilter').value;

        var rows = document.getElementById('memberTable').getElementsByTagName('tr');

        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            var province = row.getAttribute('data-province');
            var district = row.getAttribute('data-district');
            var constituency = row.getAttribute('data-constituency');
            var ward = row.getAttribute('data-ward');
            var partyDistrict = row.getAttribute('data-party-district');
            var partyBranch = row.getAttribute('data-party-branch');
            var partyCell = row.getAttribute('data-party-cell');

            if ((provinceFilter === 'all' || province === provinceFilter) &&
                (districtFilter === 'all' || district === districtFilter) &&
                (constituencyFilter === 'all' || constituency === constituencyFilter) &&
                (wardFilter === 'all' || ward === wardFilter) &&
                (partyDistrictFilter === 'all' || partyDistrict === partyDistrictFilter) &&
                (partyBranchFilter === 'all' || partyBranch === partyBranchFilter) &&
                (partyCellFilter === 'all' || partyCell === partyCellFilter)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    }

</script>


</body>
</html>
