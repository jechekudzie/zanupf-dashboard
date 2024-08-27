<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZANU PF Membership Management Dashboard</title>
    
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

                    <!-- Start Content-->
                    <div class="container-xxl">
                        <!-- start row -->
                        <div class="row">
                
                            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                                <div class="flex-grow-1">
                                    <h4 class="fs-18 fw-semibold m-0">National Membership - 6,690,074</h4>
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-12">
                                <div class="row g-3">
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-14 mb-1">Main Wing</div>
                                                </div>

                                                <div class="d-flex align-items-baseline mb-2">
                                                    <div class="fs-22 mb-0 me-2 fw-semibold text-black">2,877,300</div>
                                                    <div class="me-auto">
                                                        <span class="text-success d-inline-flex align-items-center">
                                                            3%
                                                            <i data-feather="trending-up" class="ms-1" style="height: 22px; width: 22px;"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div id="members-total" class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-14 mb-1">Women's League</div>
                                                </div>

                                                <div class="d-flex align-items-baseline mb-2">
                                                    <div class="fs-22 mb-0 me-2 fw-semibold text-black">1,923,554</div>
                                                    <div class="me-auto">
                                                        <span class="text-success d-inline-flex align-items-center">
                                                            2%
                                                            <i data-feather="trending-up" class="ms-1" style="height: 22px; width: 22px;"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div id="women-total" class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-14 mb-1">Youth League</div>
                                                </div>

                                                <div class="d-flex align-items-baseline mb-2">
                                                    <div class="fs-22 mb-0 me-2 fw-semibold text-black">1,088,234</div>
                                                    <div class="me-auto">
                                                        <span class="text-success d-inline-flex align-items-center">
                                                            5%
                                                            <i data-feather="trending-up" class="ms-1" style="height: 22px; width: 22px;"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div id="youth-total" class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-14 mb-1">War Veterans' League</div>
                                                </div>

                                                <div class="d-flex align-items-baseline mb-2">
                                                    <div class="fs-22 mb-0 me-2 fw-semibold text-black">800,986</div>
                                                    <div class="me-auto">
                                                        <span class="text-danger d-inline-flex align-items-center">
                                                            4%
                                                            <i data-feather="trending-down" class="ms-1" style="height: 22px; width: 22px;"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div id="veterans-total" class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end sales -->
                                
                        </div> <!-- end row -->

                        <div class="pb-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">Summary by Province</h4>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-xl-12">
                            <div class="card">

                                <div class="card-header">
                                    <h5 class="card-title mb-0">Membership Summary by Province  </h5>
                                </div><!-- end card header -->

                                <div class="card-body">

                                <div class="row">
               
                                <!-- Table Section -->
                                    <div class="col-md-6">

                                    <table class="table table-sm table-condensed">
    <thead>
        <tr>
            <th>Province</th>
            <th>Main</th>
            <th>Women's</th>
            <th>Youth </th>
            <th>War Vets</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Manicaland</td>
            <td>10</td>
            <td>20</td>
            <td>30</td>
            <td>40</td>
            <td>100</td>
        </tr>
        <tr>
            <td>Masvingo</td>
            <td>15</td>
            <td>25</td>
            <td>35</td>
            <td>50</td>
            <td>125</td>
        </tr>
        <tr>
            <td>Matabeleland North</td>
            <td>8</td>
            <td>18</td>
            <td>28</td>
            <td>38</td>
            <td>92</td>
        </tr>
        <tr>
            <td>Matabeleland South</td>
            <td>12</td>
            <td>22</td>
            <td>32</td>
            <td>42</td>
            <td>108</td>
        </tr>
        <tr>
            <td>Midlands</td>
            <td>18</td>
            <td>28</td>
            <td>38</td>
            <td>48</td>
            <td>132</td>
        </tr>
        <tr>
            <td>Mashonaland Central</td>
            <td>7</td>
            <td>17</td>
            <td>27</td>
            <td>37</td>
            <td>88</td>
        </tr>
        <tr>
            <td>Mashonaland East</td>
            <td>10</td>
            <td>20</td>
            <td>30</td>
            <td>40</td>
            <td>100</td>
        </tr>
        <tr>
            <td>Mashonaland West</td>
            <td>14</td>
            <td>24</td>
            <td>34</td>
            <td>44</td>
            <td>116</td>
        </tr>
        <tr>
            <td>Harare</td>
            <td>20</td>
            <td>30</td>
            <td>40</td>
            <td>50</td>
            <td>140</td>
        </tr>
        <tr>
            <td>Bulawayo</td>
            <td>9</td>
            <td>19</td>
            <td>29</td>
            <td>39</td>
            <td>96</td>
        </tr>
    </tbody>
</table>



                                    </div>

                                    <!-- Chart Section -->
                                    <div class="col-md-6">
                                        <canvas id="membersByProvince" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> 

                        <div class="pb-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">Breakdown by Province</h4>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-xl-12">
                            <div class="card">

                                <div class="card-header">
                                    <h5 class="card-title mb-0">Membership by Province  </h5>
                                </div><!-- end card header -->

                            
                                <div class="card-body">
        <!-- Nav tabs -->
        <ul class="nav nav-underline border-bottom" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#harare" role="tab">
                    <span class="d-none d-sm-block">Harare</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#bulawayo" role="tab">
                    <span class="d-none d-sm-block">Bulawayo</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#mashonaland-central" role="tab">
                    <span class="d-none d-sm-block">Mashonaland Central</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#mashonaland-east" role="tab">
                    <span class="d-none d-sm-block">Mashonaland East</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#mashonaland-west" role="tab">
                    <span class="d-none d-sm-block">Mashonaland West</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#manicaland" role="tab">
                    <span class="d-none d-sm-block">Manicaland</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#matabeleland-north" role="tab">
                    <span class="d-none d-sm-block">Matabeleland North</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#matabeleland-south" role="tab">
                    <span class="d-none d-sm-block">Matabeleland South</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#masvingo" role="tab">
                    <span class="d-none d-sm-block">Masvingo</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#midlands" role="tab">
                    <span class="d-none d-sm-block">Midlands</span>
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="harare" role="tabpanel">
                <div class="row">
                <!-- Table Section -->
                <div class="col-md-6">
                    <h5>Harare Membership Breakdown by Wing</h5>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Wing</th>
                            <th>Male</th>
                            <th>Female</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Total Membership Row -->
                        <tr class="table-primary">
                            <td><strong>Total Membership</strong></td>
                            <td><strong>62,500</strong></td>
                            <td><strong>74,600</strong></td>
                            <td><strong>137,100</strong></td>
                        </tr>
                        <!-- Detailed Breakdown Rows -->
                        <tr>
                            <td>Main Wing</td>
                            <td>37,500</td>
                            <td>42,000</td>
                            <td>79,500</td>
                        </tr>
                        <tr>
                            <td>Youth League</td>
                            <td>20,000</td>
                            <td>22,500</td>
                            <td>42,500</td>
                        </tr>
                        <tr>
                            <td>Women's League</td>
                            <td>8,500</td>
                            <td>15,300</td>
                            <td>23,800</td>
                        </tr>
                        <tr>
                            <td>War Veterans League</td>
                            <td>5,000</td>
                            <td>4,800</td>
                            <td>9,800</td>
                        </tr>
                    </tbody>
                </table>
                </div>

                <!-- Chart Section -->
                <div class="col-md-6">
                    <h5>Graphical Representation</h5>
                    <div id="harare-chart"></div>
                </div>
            </div>
                </div>
                <div class="tab-pane" id="bulawayo" role="tabpanel">    
                <div class="row">
            <!-- Table Section -->
            <div class="col-md-6">
                <h5>Bulawayo Membership Breakdown by Wing</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Wing</th>
                            <th>Male</th>
                            <th>Female</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Total Membership Row -->
                        <tr class="table-primary">
                            <td><strong>Total Membership</strong></td>
                            <td><strong>48,000</strong></td>
                            <td><strong>54,200</strong></td>
                            <td><strong>102,200</strong></td>
                        </tr>
                        <!-- Detailed Breakdown Rows -->
                        <tr>
                            <td>Main Wing</td>
                            <td>30,000</td>
                            <td>32,500</td>
                            <td>62,500</td>
                        </tr>
                        <tr>
                            <td>Youth League</td>
                            <td>10,000</td>
                            <td>12,000</td>
                            <td>22,000</td>
                        </tr>
                        <tr>
                            <td>Women's League</td>
                            <td>5,000</td>
                            <td>7,200</td>
                            <td>12,200</td>
                        </tr>
                        <tr>
                            <td>War Veterans League</td>
                            <td>3,000</td>
                            <td>2,500</td>
                            <td>5,500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Chart Section -->
            <div class="col-md-6">
                <h5>Graphical Representation</h5>
                <div id="bulawayo-chart"></div>
            </div>
            </div>




                </div>
                <div class="tab-pane" id="mashonaland-central" role="tabpanel">
                <div class="row">
                <!-- Table Section -->
                <div class="col-md-6">
                    <h5>Mashonaland Central Membership Breakdown by Wing</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Wing</th>
                                <th>Male</th>
                                <th>Female</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Total Membership Row -->
                            <tr class="table-primary">
                                <td><strong>Total Membership</strong></td>
                                <td><strong>50,000</strong></td>
                                <td><strong>58,000</strong></td>
                                <td><strong>108,000</strong></td>
                            </tr>
                            <!-- Detailed Breakdown Rows -->
                            <tr>
                                <td>Main Wing</td>
                                <td>28,000</td>
                                <td>32,000</td>
                                <td>60,000</td>
                            </tr>
                            <tr>
                                <td>Youth League</td>
                                <td>12,000</td>
                                <td>15,000</td>
                                <td>27,000</td>
                            </tr>
                            <tr>
                                <td>Women's League</td>
                                <td>6,000</td>
                                <td>8,500</td>
                                <td>14,500</td>
                            </tr>
                            <tr>
                                <td>War Veterans League</td>
                                <td>4,000</td>
                                <td>2,500</td>
                                <td>6,500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Chart Section -->
                <div class="col-md-6">
                    <h5>Graphical Representation</h5>
                    <div id="mashonaland-central-chart"></div>
                </div>
            </div>
                </div>

            <div class="tab-pane" id="mashonaland-east" role="tabpanel">
                <p class="mb-0">
                    <!-- Content for Mashonaland East -->
                    <div id="mashonaland-east-map" class="province-map"></div>
                </p>
            </div>
            <div class="tab-pane" id="mashonaland-west" role="tabpanel">
                <p class="mb-0">
                    <!-- Content for Mashonaland West -->
                    <div id="mashonaland-west-map" class="province-map"></div>
                </p>
            </div>
            <div class="tab-pane" id="manicaland" role="tabpanel">
                <p class="mb-0">
                    <!-- Content for Manicaland -->
                    <div id="manicaland-map" class="province-map"></div>
                </p>
            </div>
            <div class="tab-pane" id="matabeleland-north" role="tabpanel">
                <p class="mb-0">
                    <!-- Content for Matabeleland North -->
                    <div id="matabeleland-north-map" class="province-map"></div>
                </p>
            </div>
            <div class="tab-pane" id="matabeleland-south" role="tabpanel">
                <p class="mb-0">
                    <!-- Content for Matabeleland South -->
                    <div id="matabeleland-south-map" class="province-map"></div>
                </p>
            </div>
            <div class="tab-pane" id="masvingo" role="tabpanel">
                <p class="mb-0">
                    <!-- Content for Masvingo -->
                    <div id="masvingo-map" class="province-map"></div>
                </p>
            </div>
            <div class="tab-pane" id="midlands" role="tabpanel">
                <p class="mb-0">
                    <!-- Content for Midlands -->
                    <div id="midlands-map" class="province-map"></div>
                </p>
            </div>
        </div>
    </div>



                            </div>
                        </div> <!-- end col -->
                    </div> 

            </div> <!-- container-fluid -->
        </div> <!-- content -->

                    </div> <!-- container-fluid -->
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

        <!-- Apexcharts JS -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- for basic area chart -->
        <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>

        <!-- Widgets Init Js -->
        <script src="assets/js/pages/analytics-dashboard.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
// Function to create chart for Harare
function createHarareChart() {
    var options = {
        chart: {
            type: 'bar',
            height: 350
        },
        series: [
            {
                name: 'Male',
                data: [37500, 20000, 8500, 5000]
            },
            {
                name: 'Female',
                data: [42000, 22500, 15300, 4800]
            }
        ],
        xaxis: {
            categories: ['Main Wing', 'Youth League', 'Women\'s League', 'War Veterans League'],
        },
        title: {
            text: 'Harare Membership by Gender',
            align: 'center'
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '50%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            position: 'top',
            horizontalAlign: 'center',
            floating: true,
            offsetY: -15,
            offsetX: -5
        },
    };

    var chart = new ApexCharts(document.querySelector("#harare-chart"), options);
    chart.render();
}

// Call the function to create the chart when the tab is shown
document.addEventListener('DOMContentLoaded', function() {
    createHarareChart();
    createBulawayoChart();
    createMashonalandCentralChart();
    createMembersGraph();
    createVeteransChart();
    createYouthChart();
    createWomenChart();
});

// Function to create chart for Bulawayo
function createBulawayoChart() {
    var options = {
        chart: {
            type: 'bar',
            height: 350
        },
        series: [
            {
                name: 'Male',
                data: [30000, 10000, 5000, 3000]
            },
            {
                name: 'Female',
                data: [32500, 12000, 7200, 2500]
            }
        ],
        xaxis: {
            categories: ['Main Wing', 'Youth League', 'Women\'s League', 'War Veterans League'],
        },
        title: {
            text: 'Bulawayo Membership by Gender',
            align: 'center'
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '50%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            position: 'top',
            horizontalAlign: 'center',
            floating: true,
            offsetY: -15,
            offsetX: -5
        },
    };

    var chart = new ApexCharts(document.querySelector("#bulawayo-chart"), options);
    chart.render();
}

// Function to create chart for Mashonaland Central
function createMashonalandCentralChart() {
    var options = {
        chart: {
            type: 'bar',
            height: 350
        },
        series: [
            {
                name: 'Male',
                data: [28000, 12000, 6000, 4000]
            },
            {
                name: 'Female',
                data: [32000, 15000, 8500, 2500]
            }
        ],
        xaxis: {
            categories: ['Main Wing', 'Youth League', 'Women\'s League', 'War Veterans League'],
        },
        title: {
            text: 'Mashonaland Central Membership by Gender',
            align: 'center'
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '50%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            position: 'top',
            horizontalAlign: 'center',
            floating: true,
            offsetY: -15,
            offsetX: -5
        },
    };

    var chart = new ApexCharts(document.querySelector("#mashonaland-central-chart"), options);
    chart.render();
}

function createMembersGraph(){
    options = {
    chart: {
        type: "line",
        height: 45,
        sparkline: { enabled: !0 },
        animations: { enabled: !1 }
    },
    fill: { opacity: 1 },
    stroke: {
        width: [2],
        dashArray: [0],
        lineCap: "round",
        curve: "smooth"
    },
    series: [{
        name: "Main Wing Membership",
        data: [100, 110, 120, 130, 125, 135, 140, 150, 155, 160, 165, 170, 180, 190, 185, 200, 210, 220, 230, 225, 235, 245, 255, 265, 275, 280, 290, 300, 310, 320]
    }],
    tooltip: { theme: "light" },
    grid: { strokeDashArray: 4 },
    xaxis: {
        labels: { padding: 0 },
        tooltip: { enabled: !1 },
        type: "datetime"
    },
    yaxis: { labels: { padding: 4 } },
    labels: [
        "2015-01-01", "2015-06-01", "2016-01-01", "2016-06-01", "2017-01-01", "2017-06-01", "2018-01-01",
        "2018-06-01", "2019-01-01", "2019-06-01", "2020-01-01", "2020-06-01", "2021-01-01", "2021-06-01",
        "2022-01-01", "2022-06-01", "2023-01-01", "2023-06-01", "2024-01-01", "2024-06-01", "2025-01-01",
        "2025-06-01", "2026-01-01", "2026-06-01", "2027-01-01", "2027-06-01", "2028-01-01", "2028-06-01",
        "2029-01-01", "2029-06-01"
    ],
    colors: ["#2aaa85"], // Orange color for the main wing
    legend: { show: !1 }
};

chart = new ApexCharts(document.querySelector("#members-total"), options);
chart.render();

}

function createVeteransChart(){
    options = {
    chart: {
        type: "line",
        height: 45,
        sparkline: { enabled: !0 },
        animations: { enabled: !1 }
    },
    fill: { opacity: 1 },
    stroke: {
        width: [2],
        dashArray: [0, 3],
        lineCap: "round",
        curve: "smooth"
    },
    series: [{
        name: "May",
        data: [80, 75, 70, 65, 62, 60, 55, 53, 50, 46, 44, 40, 38, 35, 30, 28, 25, 22, 20, 18, 16, 14, 12, 10, 8, 6, 4, 2, 1, 0]
    }],
    tooltip: { theme: "light" },
    grid: { strokeDashArray: 4 },
    xaxis: {
        labels: { padding: 0 },
        tooltip: { enabled: !1 },
        type: "datetime"
    },
    yaxis: { labels: { padding: 4 } },
    labels: [
        "2020-06-21", "2020-06-22", "2020-06-23", "2020-06-24", "2020-06-25", "2020-06-26", "2020-06-27",
        "2020-06-28", "2020-06-29", "2020-06-30", "2020-07-01", "2020-07-02", "2020-07-03", "2020-07-04",
        "2020-07-05", "2020-07-06", "2020-07-07", "2020-07-08", "2020-07-09", "2020-07-10", "2020-07-11",
        "2020-07-12", "2020-07-13", "2020-07-14", "2020-07-15", "2020-07-16", "2020-07-17", "2020-07-18",
        "2020-07-19", "2020-07-20"
    ],
    colors: ["#ec8290", "#343a40"],
    legend: { show: !1 }
};
chartTwo = new ApexCharts(document.querySelector("#veterans-total"), options);
chartTwo.render();
}

function createYouthChart(){
    options = {
    chart: {
        type: "line",
        height: 45,
        sparkline: { enabled: !0 },
        animations: { enabled: !1 }
    },
    fill: { opacity: 1 },
    stroke: {
        width: [2],
        dashArray: [0, 3],
        lineCap: "round",
        curve: "smooth"
    },
    series: [{
        name: "Youth Wing Growth",
        data: [10, 12, 15, 20, 22, 22, 25, 30, 35, 40, 45, 45, 48, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100, 105, 110, 115, 120, 125, 130]
    }],
    tooltip: { theme: "light" },
    grid: { strokeDashArray: 4 },
    xaxis: {
        labels: { padding: 0 },
        tooltip: { enabled: !1 },
        type: "datetime"
    },
    yaxis: { labels: { padding: 4 } },
    labels: [
        "2015-01-01", "2015-06-01", "2016-01-01", "2016-06-01", "2017-01-01", "2017-06-01", "2018-01-01",
        "2018-06-01", "2019-01-01", "2019-06-01", "2020-01-01", "2020-06-01", "2021-01-01", "2021-06-01",
        "2022-01-01", "2022-06-01", "2023-01-01", "2023-06-01", "2024-01-01", "2024-06-01", "2025-01-01",
        "2025-06-01", "2026-01-01", "2026-06-01", "2027-01-01", "2027-06-01", "2028-01-01", "2028-06-01",
        "2029-01-01", "2029-06-01"
    ],
    colors: ["#2aaa85"], // Green color for growth
    legend: { show: !1 }
};
chartTwo = new ApexCharts(document.querySelector("#youth-total"), options);
chartTwo.render();
}

function createWomenChart(){
    options = {
    chart: {
        type: "line",
        height: 45,
        sparkline: { enabled: !0 },
        animations: { enabled: !1 }
    },
    fill: { opacity: 1 },
    stroke: {
        width: [2],
        dashArray: [0],
        lineCap: "round",
        curve: "smooth"
    },
    series: [{
        name: "Women's League Growth",
        data: [5, 10, 15, 22, 30, 35, 45, 55, 65, 75, 85, 95, 105, 115, 125, 135, 145, 155, 165, 175, 185, 195, 205, 215, 225, 235, 245, 255, 265, 275]
    }],
    tooltip: { theme: "light" },
    grid: { strokeDashArray: 4 },
    xaxis: {
        labels: { padding: 0 },
        tooltip: { enabled: !1 },
        type: "datetime"
    },
    yaxis: { labels: { padding: 4 } },
    labels: [
        "2015-01-01", "2015-06-01", "2016-01-01", "2016-06-01", "2017-01-01", "2017-06-01", "2018-01-01",
        "2018-06-01", "2019-01-01", "2019-06-01", "2020-01-01", "2020-06-01", "2021-01-01", "2021-06-01",
        "2022-01-01", "2022-06-01", "2023-01-01", "2023-06-01", "2024-01-01", "2024-06-01", "2025-01-01",
        "2025-06-01", "2026-01-01", "2026-06-01", "2027-01-01", "2027-06-01", "2028-01-01", "2028-06-01",
        "2029-01-01", "2029-06-01"
    ],
    colors: ["#2aaa85"], // Pink color for women's league
    legend: { show: !1 }
};
chartTwo = new ApexCharts(document.querySelector("#women-total"), options);
chartTwo.render();
}
       
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

       </script>
    </body>
</html>