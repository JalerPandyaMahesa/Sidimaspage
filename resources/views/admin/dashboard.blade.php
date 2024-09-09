<!DOCTYPE html>
<html lang="en">

<!--Head Code-->

<head>
    <meta charset="utf-8" />
    <title>SIDIMAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="MartDevelopers" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href=" {{ asset('img/Asset/favicon.ico') }} ">

    <!-- Plugins css -->
    <link href=" {{ asset('assets/libs/flatpickr/flatpickr.min.css') }} " rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href=" {{ asset('assets/css/bootstrap.min.css') }} " rel="stylesheet" type="text/css" />
    <link href=" {{ asset('assets/css/icons.min.css') }} " rel="stylesheet" type="text/css" />
    <link href=" {{ asset('assets/css/app.min.css') }} " rel="stylesheet" type="text/css" />
    <!-- Loading button css -->
    <link href=" {{ asset('assets/libs/ladda/ladda-themeless.min.css') }} " rel="stylesheet" type="text/css" />

    <!-- Footable css -->
    <link href=" {{ asset('assets/libs/footable/footable.core.min.css') }} " rel="stylesheet" type="text/css" />

    <!--Load Sweet Alert Javascript-->
    <script src=" {{ asset('assets/js/swal.js') }} "></script>

    <!--Inject SWAL-->


</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <!-- <img src=" {{ asset('assets/images/users/doc-icon.png') }} " alt="pic" class="rounded-circle"> -->
                        <span class="pro-user-name ml-1">
                            System Administrator <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <!-- <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div> -->

                        <!-- item-->
                        <!-- <a href="#" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a> -->


                        <!-- <div class="dropdown-divider"></div> -->

                        <!-- item-->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </div>
                </li>
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{ route('admin.dashboard') }}" class="logo text-center">
                    <span class="logo-sm">
                        <img src="{{ asset('img/Asset/Logo_Sidimas2.png') }}" alt="" height="13">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('img/Asset/Logo_Sidimas2.png') }}" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="fe-menu"></i>
                    </button>
                </li>

            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="{{route("admin.dashboard")}}">
                                <i class="fe-airplay"></i>
                                <span> Dashboard </span>
                            </a>

                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <img src="{{ asset('img/Asset/p&d.png') }}" alt="" height="14">
                                <span style="padding: 3px;"> Paud & Dikmas </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{route("admin.addSekolah")}}">Tambah Sekolah</a>
                                </li>
                                <li>
                                    <a href="{{route("admin.viewPaud")}}">Lihat</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <img src="{{ asset('img/Asset/sd.png') }}" alt="" height="14">
                                <span style="padding: 3px;"> SD </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{route("admin.addSekolah")}}">Tambah Sekolah</a>
                                </li>
                                <li>
                                    <a href="{{route("admin.viewSd")}}">Lihat</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <img src="{{ asset('img/Asset/smp.png') }}" alt="" height="12">
                                <span style="padding: 3px;"> SMP </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{route("admin.addSekolah")}}">Tambah Sekolah</a>
                                </li>
                                <li>
                                    <a href="{{route("admin.viewSmp")}}">Lihat</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <img src="{{ asset('img/Asset/pgtk.png') }}" alt="" height="22">
                                <span style="padding: 3px;"> PGTK </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="#">Tambah</a>
                                </li>
                                <li>
                                    <a href="{{route("admin.viewPgtk")}}">Lihat</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div> <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">SIDIMAS Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <!--Start Out-->
                        <div class="col-md-6 col-xl-6">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <!-- <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="font-22 avatar-title text-primary"></i>
                                            IMAGE SAJA
                                        </div> -->
                                        <img src="{{ asset('img/Asset/p&d.png') }}" style="width:50%">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="text-dark mt-1"><span
                                                    data-plugin="counterup">{{ $totalTk }}</span></h3>
                                            <p class="text-muted mb-1 text-truncate">Paud & Dikmas</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                        <!--End Out -->


                        <!--Start -->
                        <div class="col-md-6 col-xl-6">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <!-- <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="font-22 avatar-title text-primary"></i>
                                            IMAGE SAJA
                                        </div> -->
                                        <img src="{{ asset('img/Asset/sd.png') }}" style="width:50%">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="text-dark mt-1"><span
                                                    data-plugin="counterup">{{ $totalSd }}</span></h3>
                                            <p class="text-muted mb-1 text-truncate">SD</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                        <!--End -->

                        <!--Start Employees-->
                        <!-- end col-->
                        <!--End Employees-->

                    </div>

                    <div class="row">

                        <!--Start -->
                        <div class="col-md-6 col-xl-6">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <!-- <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="font-22 avatar-title text-primary"></i>
                                            IMAGE SAJA
                                        </div> -->
                                        <img src="{{ asset('img/Asset/pgtk.png') }}" style="width:30%">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $totalPgtk }}</span></h3>
                                            <p class="text-muted mb-1 text-truncate">PGTK</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                        <!--End -->
                        <div class="col-md-6 col-xl-6">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <!-- <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="font-22 avatar-title text-primary"></i>
                                            IMAGE SAJA
                                        </div> -->
                                        <img src="{{ asset('img/Asset/smp.png') }}" style="width:50%">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="text-dark mt-1"><span
                                                    data-plugin="counterup">{{ $totalSmp }}</span></h3>
                                            <p class="text-muted mb-1 text-truncate">SMP</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div>
                    </div>

                    <!--Bawah-->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card-box">
                                <h4 class="header-title mb-3">Lorem Ipsum</h4>

                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover table-centered m-0">

                                        <thead class="thead-light">
                                            <tr>
                                                <th colspan="2">A</th>
                                                <th>B</th>
                                                <th>C</th>
                                                <th>D</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 36px;">
                                                    <img src="#" alt="img" title="contact-img"
                                                        class="rounded-circle avatar-sm" />
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    #</td>
                                                <td>
                                                    # </td>
                                                <td>
                                                    D </td>
                                                <td>
                                                    <a href="#" class="btn btn-xs btn-primary"><i
                                                            class="mdi mdi-eye"></i>
                                                        View</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            2024 &copy; SIDIMAS</a>
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

    <!-- Vendor js -->
    <script src=" {{ asset('assets/js/vendor.min.js') }} "></script>

    <!-- Plugins js-->
    <script src=" {{ asset('assets/libs/flatpickr/flatpickr.min.js') }} "></script>
    <script src=" {{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }} "></script>
    <script src=" {{ asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js') }} "></script>
    <script src=" {{ asset('assets/libs/flot-charts/jquery.flot.js') }} "></script>
    <script src=" {{ asset('assets/libs/flot-charts/jquery.flot.time.js') }} "></script>
    <script src=" {{ asset('assets/libs/flot-charts/jquery.flot.tooltip.min.js') }} "></script>
    <script src=" {{ asset('assets/libs/flot-charts/jquery.flot.selection.js') }} "></script>
    <script src=" {{ asset('assets/libs/flot-charts/jquery.flot.crosshair.js') }} "></script>

    <!-- Dashboar 1 init js-->
    <script src=" {{ asset('assets/js/pages/dashboard-1.init.js') }} "></script>

    <!-- App js-->
    <script src=" {{ asset('assets/js/app.min.js') }} "></script>

</body>

</html>