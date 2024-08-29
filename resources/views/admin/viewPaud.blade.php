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
                        <a href="#" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{route("admin.dashboard")}}" class="logo text-center">
                    <span class="logo-lg">
                        <img src="{{ asset('img/Asset/Logo_Sidimas2.png') }}" alt="" height="24">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('img/Asset/Logo_Sidimas2.png') }}" alt="" height="13">
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
                                    <a href="#">Lihat</a>
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
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Paud & Dikmas</a>
                                        </li>
                                        <li class="breadcrumb-item active">View Paud & Dikmas</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">List Paud & Dikmas</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title"></h4>
                                <div class="mb-2">
                                    <div class="row">
                                        <div class="col-12 text-sm-center form-inline">
                                            <div class="form-group mr-2" style="display:none">
                                            </div>
                                            <div class="form-group">
                                                <select id="filter-kecamatan" class="custom-select custom-select-sm">
                                                    <option value="">Pilih Kecamatan</option>
                                                    <option value="Kec. Ajibarang">Kec. Ajibarang</option>
                                                    <option value="Kec. Banyumas">Kec. Banyumas</option>
                                                    <option value="Kec. Baturaden">Kec. Baturaden</option>
                                                    <option value="Kec. Cilongok">Kec. Cilongok</option>
                                                    <option value="Kec. Gumelar">Kec. Gumelar</option>
                                                    <option value="Kec. Jatilawang">Kec. Jatilawang</option>
                                                    <option value="Kec. Kalibagor">Kec. Kalibagor</option>
                                                    <option value="Kec. Karanglewas">Kec. Karanglewas</option>
                                                    <option value="Kec. Kebasen">Kec. Kebasen</option>
                                                    <option value="Kec. Kedung Banteng">Kec. Kedung Banteng</option>
                                                    <option value="Kec. Kembaran">Kec. Kembaran</option>
                                                    <option value="Kec. Kemranjen">Kec. Kemranjen</option>
                                                    <option value="Kec. Lumbir">Kec. Lumbir</option>
                                                    <option value="Kec. Patikraja">Kec. Patikraja</option>
                                                    <option value="Kec. Pekuncen">Kec. Pekuncen</option>
                                                    <option value="Kec. Purwojati">Kec. Purwojati</option>
                                                    <option value="Kec. Purwokerto Barat">Kec. Purwokerto Barat</option>
                                                    <option value="Kec. Purwokerto Selatan">Kec. Purwokerto Selatan
                                                    </option>
                                                    <option value="Kec. Purwokerto Timur">Kec. Purwokerto Timur</option>
                                                    <option value="Kec. Purwokerto Utara">Kec. Purwokerto Utara</option>
                                                    <option value="Kec. Rawalo">Kec. Rawalo</option>
                                                    <option value="Kec. Sokaraja">Kec. Sokaraja</option>
                                                    <option value="Kec. Somagede">Kec. Somagede</option>
                                                    <option value="Kec. Sumbang">Kec. Sumbang</option>
                                                    <option value="Kec. Sumpiuh">Kec. Sumpiuh</option>
                                                    <option value="Kec. Tambak">Kec. Tambak</option>
                                                    <option value="Kec. Wangon">Kec. Wangon</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0 "
                                        data-page-size="7">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-toggle="true">NPSN</th>
                                                <th data-hide="phone">Nama</th>
                                                <th data-hide="phone">Kecamatan</th>
                                                <th data-hide="phone">Bentuk Pendidikan</th>
                                                <th data-hide="phone">Status Sekolah</th>
                                                <th data-hide="phone">Peserta Didik</th>
                                                <th data-hide="phone">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sekolah as $index => $s)
                                                <tr data-index="{{ $index }}">
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $s->npsn }}</td>
                                                    <td>{{ $s->nama }}</td>
                                                    <td>{{ $s->kecamatan }}</td>
                                                    <td>{{ $s->bentuk_pendidikan }}</td>
                                                    <td>{{ $s->status_sekolah }}</td>
                                                    <td>#</td>
                                                    <td><a href="{{ route('admin.showSekolah', ['sekolah_id' => $s->sekolah_id]) }}"
                                                            class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                        <a href="{{ route('admin.editSekolah', ['sekolah_id' => $sekolah->sekolah_id]) }}"
                                                            class="badge badge-warning"><i
                                                                class="fas fa-clipboard-check "></i> Update</a>
                                                        <button class="badge badge-danger" style="border:none">
                                                            <form
                                                                action="{{ route('admin.destroySekolah', ['sekolah_id' => $sekolah->sekolah_id]) }}"
                                                                method="POST" style="display:inline;"><i
                                                                    class="fas fa-trash-alt "></i> Delete
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="active">
                                                <td colspan="8">
                                                    <div class="text-right">
                                                        <ul
                                                            class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0">
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div> <!-- end .table-responsive-->
                            </div> <!-- end card-box -->
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterKecamatan = document.getElementById('filter-kecamatan');
            const tableRows = document.querySelectorAll('#demo-foo-filtering tbody tr');

            filterKecamatan.addEventListener('change', function () {
                const selectedKecamatan = filterKecamatan.value.toLowerCase();
                let rowIndex = 1; // Start row index from 1

                tableRows.forEach(row => {
                    const kecamatanCell = row.querySelector('td:nth-child(4)');
                    const kecamatan = kecamatanCell ? kecamatanCell.textContent.toLowerCase() : '';

                    if (selectedKecamatan === '' || kecamatan.includes(selectedKecamatan)) {
                        row.style.display = '';  // Show the row
                        row.querySelector('td').textContent = rowIndex++;  // Update the row number
                    } else {
                        row.style.display = 'none';  // Hide the row
                    }
                });
            });
        });
    </script>


</body>

</html>