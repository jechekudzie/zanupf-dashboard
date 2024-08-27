<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <title>ZANU PF Membership Management Information System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="c."/>
    <meta name="author" content="Leading Digital"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Datatables css -->
    <link href="assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="assets/libs/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css"/>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>

    <!-- Icons -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <style>
        .filter-dropdown {
            display: inline-block;
            margin-right: 10px;
        }

        select {
            width: 100%;
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
                ZANU-PF
            </span>
                        <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="24">
            </span>
                    </a>
                    <a href="{{ url('/dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
                ZANU-PF
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

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">

        <div class="content">

            <!-- Start Content-->
            <div class="container-xxl">

                <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 fw-semibold m-0">Member Information</h4>
                    </div>

                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Members</a></li>
                            <li class="breadcrumb-item active">Member Details</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <h5 class="card-title mb-0">Basic Data</h5>
                            </div><!-- end card header -->

                            <div class="container">

                                <table id="membershipTable" class="display" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Membership ID</th>
                                        <th>Province</th>
                                        <th>District</th>
                                        <th>Zone</th>
                                        <th>Cell</th>
                                        <th>Status</th>
                                    </tr>
                                    <tr>
                                        <th><select id="filterName">
                                                <option value="">Select Name</option>
                                            </select></th>
                                        <th><select id="filterMembershipID">
                                                <option value="">Select ID</option>
                                            </select></th>
                                        <th><select id="filterProvince">
                                                <option value="">Select Province</option>
                                            </select></th>
                                        <th><select id="filterDistrict">
                                                <option value="">Select District</option>
                                            </select></th>
                                        <th><select id="filterZone">
                                                <option value="">Select Zone</option>
                                            </select></th>
                                        <th><select id="filterCell">
                                                <option value="">Select Cell</option>
                                            </select></th>
                                        <th><select id="filterStatus">
                                                <option value="">Select Status</option>
                                            </select></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                    </tbody>
                                </table>
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
<script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>

<!-- Datatables js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>

<!-- dataTables.bootstrap5 -->
<script src="assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>

<!-- buttons.colVis -->
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>

<!-- buttons.bootstrap5 -->
<script src="assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>

<!-- dataTables.keyTable -->
<script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="assets/libs/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js"></script>

<!-- dataTable.responsive -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>

<!-- dataTables.select -->
<script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="assets/libs/datatables.net-select-bs5/js/select.bootstrap5.min.js"></script>

<!-- Datatable Demo App Js -->
<script src="assets/js/pages/datatable.init.js"></script>

<!-- App js-->
<script src="assets/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        const firstNameMale = [
            'John', 'James', 'Robert', 'Michael', 'William', 'David', 'Richard', 'Joseph',
            'Charles', 'Thomas', 'Christopher', 'Daniel', 'Matthew', 'Anthony', 'Mark',
            'Donald', 'Steven', 'Paul', 'Andrew', 'Joshua', 'Edward', 'Brian', 'George',
            'Timothy', 'Ronald', 'Kevin', 'Jason', 'Jeffrey', 'Ryan', 'Gary',
            'Takudzwa', 'Tinashe', 'Tafadzwa', 'Tanaka', 'Anesu', 'Farai', 'Kudzai', 'Tendai',
            'Simbarashe', 'Tatenda', 'Munashe', 'Shingirai', 'Kuda', 'Blessing', 'Pride',
            'Liberty', 'Trust', 'Knowledge', 'Lovemore', 'Remember',
            'Evidence', 'Progress', 'Courage', 'Comfort', 'Energy',
            'Bright', 'Clever', 'Gift', 'Patience', 'Promise',
            'Fortune', 'Prosper', 'Reason', 'Saviour', 'Silence',
            'Sunshine', 'Talkmore', 'Welcome', 'Wishmore', 'Zororo'
        ];

        const firstNameFemale = [
            'Mary', 'Patricia', 'Jennifer', 'Linda', 'Elizabeth', 'Barbara', 'Susan', 'Jessica',
            'Sarah', 'Karen', 'Nancy', 'Lisa', 'Margaret', 'Betty', 'Sandra', 'Ashley', 'Dorothy',
            'Kimberly', 'Emily', 'Donna', 'Michelle', 'Carol', 'Amanda', 'Melissa', 'Deborah',
            'Rutendo', 'Tendai', 'Tsitsi', 'Tatenda', 'Paidamoyo', 'Ruvimbo', 'Tariro', 'Shamiso',
            'Nyasha', 'Anesu', 'Fadzai', 'Shantel', 'Gamuchirai', 'Panache', 'Chenai',
            'Chipo', 'Tafadzwa', 'Tanyaradzwa', 'Ruvarashe', 'Makanaka',
            'Munashe', 'Tapiwa', 'Batsirai', 'Beulah', 'Blessing',
            'Charity', 'Faith', 'Grace', 'Hope', 'Joy',
            'Kuziva', 'Love', 'Mercy', 'Patience', 'Praise',
            'Precious', 'Prudence', 'Shalom', 'Simba', 'Tarisai'
        ];

        const lastNames = [
            'Smith', 'Johnson', 'Williams', 'Jones', 'Brown', 'Davis', 'Miller', 'Wilson',
            'Moore', 'Taylor', 'Anderson', 'Thomas', 'Jackson', 'White', 'Harris', 'Martin',
            'Thompson', 'Garcia', 'Martinez', 'Robinson', 'Clark', 'Rodriguez', 'Lewis', 'Lee',
            'Moyo', 'Chinotimba', 'Sibanda', 'Mudzuri', 'Makoni', 'Munyoro', 'Chigumba', 'Mukarati',
            'Nyathi', 'Chiwenga', 'Gumbo', 'Marufu', 'Chifamba', 'Dube', 'Mutasa',
            'Ncube', 'Marima', 'Banda', 'Chisango', 'Foya',
            'Gwatidzo', 'Hove', 'Jiri', 'Kachote', 'Kadzura',
            'Kaseke', 'Mafara', 'Makumbe', 'Mandaza', 'Mangezi',
            'Maposa', 'Masunda', 'Matenga', 'Mavhaire', 'Mawere'
        ];

        const provinces = ['Manicaland', 'Masvingo', 'Matabeleland North', 'Matabeleland South', 'Midlands', 'Mashonaland Central', 'Mashonaland East', 'Mashonaland West', 'Harare', 'Bulawayo'];
        const wings = ['Main Wing', 'Youth Wing', 'Women\'s League', 'War Veterans League'];
        const genders = ['Male', 'Female'];
        const statuses = ['Active', 'Inactive'];
        const districts = ['Wedza', 'Chimanimani', 'Seke', 'Murehwa', 'Nyanga', 'Mutare', 'Rusape', 'Chipinge', 'Buhera', 'Makoni'];

        function getRandomElement(arr) {
            return arr[Math.floor(Math.random() * arr.length)];
        }

        function generateMembershipId() {
            const numbers = Math.floor(100000 + Math.random() * 900000);
            const letter = String.fromCharCode(65 + Math.floor(Math.random() * 26));
            return `33-${numbers}${letter}33`;
        }

        function generateMembers(num) {
            let members = [];
            for (let i = 0; i < num; i++) {
                let gender = getRandomElement(genders);
                let firstName = gender === 'Male' ? getRandomElement(firstNameMale) : getRandomElement(firstNameFemale);
                let lastName = getRandomElement(lastNames);
                let name = `${firstName} ${lastName}`;
                let member = {
                    name: name,
                    membershipId: generateMembershipId(),
                    province: getRandomElement(provinces),
                    district: getRandomElement(districts),
                    zone: `Zone ${Math.ceil(Math.random() * 10)}`,
                    cell: `Cell ${Math.ceil(Math.random() * 20)}`,
                    status: getRandomElement(statuses)
                };
                members.push(member);
            }
            return members;
        }

        const members = generateMembers(300);

        function populateTable(members) {
            let tableBody = $('#tableBody');
            tableBody.empty();
            members.forEach(member => {
                tableBody.append(`
                        <tr>
                            <td>${member.name}</td>
                            <td>${member.membershipId}</td>
                            <td>${member.province}</td>
                            <td>${member.district}</td>
                            <td>${member.zone}</td>
                            <td>${member.cell}</td>
                            <td>${member.status}</td>
                        </tr>
                    `);
            });
        }

        function populateFilterOptions() {
            $('#membershipTable thead tr:eq(1) th').each(function (i) {
                var select = $(this).find('select');
                select.empty();
                select.append('<option value="">Select</option>');
                $('#membershipTable tbody tr').each(function () {
                    var cellText = $(this).find('td').eq(i).text();
                    if (select.find('option[value="' + cellText + '"]').length === 0) {
                        select.append('<option value="' + cellText + '">' + cellText + '</option>');
                    }
                });
            });
        }

        function applyFilter() {
            $('#membershipTable thead select').on('change', function () {
                var val = $(this).val();
                var column = $(this).parent().index();
                var searchTerms = val.map(function (v) {
                    return '^' + $.fn.dataTable.util.escapeRegex(v) + '$';
                }).join('|');
                $('#membershipTable').DataTable().column(column)
                    .search(searchTerms ? searchTerms : '', true, false)
                    .draw();
            });
        }

        populateTable(members);

        const table = $('#membershipTable').DataTable({
            initComplete: function () {
                populateFilterOptions();
                applyFilter();
                $('#membershipTable thead select').select2({
                    placeholder: "Select",
                    allowClear: true,
                    width: 'resolve'
                });
            }
        });

        // Populate filter options after DataTable initialization
        table.on('draw', function () {
            populateFilterOptions();
        });
    });
</script>
</body>
</html>
