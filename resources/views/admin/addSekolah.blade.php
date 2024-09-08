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
                <a href="dashboard" class="logo text-center">
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
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sekolah</a></li>
                                        <li class="breadcrumb-item active">Add Sekolah</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add Sekolah Details</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- Form row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="header-title">Fill all fields</h4> -->
                                    <!--Add Sekolah Form-->
                                    <form action="{{ route('admin.store') }}" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" class="col-form-label">NPSN</label>
                                                <input type="text" required="required" name="npsn" class="form-control"
                                                    id="npsn">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputAddress" class="col-form-label">Nama Sekolah</label>
                                                <input required="required" type="text" class="form-control" name="nama"
                                                    id="nama">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputAddress" class="col-form-label">Bentuk
                                                    Pendidikan</label>
                                                <input required="required" type="text" class="form-control"
                                                    name="bentuk_pendidikan" id="bentuk_pendidikan">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="status_sekolah">Status Sekolah:</label>
                                                <select id="status_sekolah" class="form-control"
                                                    name="status_sekolah"><br>
                                                    <option value="SWASTA">SWASTA</option>
                                                    <option value="NEGERI">NEGERI</option>
                                                </select>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="kabupaten" class="col-form-label">Kabupaten:</label>
                                                <input type="text" id="kabupaten" name="kabupaten" class="form-control"
                                                    required><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="kecamatan" class="col-form-label">Kecamatan:</label>
                                                <input type="text" id="kecamatan" name="kecamatan" class="form-control"
                                                    required><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="provinsi" class="col-form-label">Provinsi:</label>
                                                <input type="text" id="provinsi" name="provinsi" class="form-control"
                                                    required><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="akreditasi" class="col-form-label">Akreditasi:</label>
                                                <input type="text" id="akreditasi" name="akreditasi"
                                                    class="form-control" required><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="rt" class="col-form-label">RT:</label>
                                                <input type="number" id="rt" name="rt" class="form-control"
                                                    required><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="rw" class="col-form-label">RW:</label>
                                                <input type="number" id="rw" name="rw" class="form-control"
                                                    required><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nss" class="col-form-label">NSS:</label>
                                                <input type="text" id="nss" name="nss" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nama_dusun" class="col-form-label">Nama Dusun:</label>
                                                <input type="text" id="nama_dusun" name="nama_dusun"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="kode_wilayah" class="col-form-label">Kode Wilayah:</label>
                                                <input type="text" id="kode_wilayah" name="kode_wilayah"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="kode_desa_kelurahan" class="col-form-label">Kode Desa
                                                    Kelurahan:</label>
                                                <input type="text" id="kode_desa_kelurahan" name="kode_desa_kelurahan"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="desa_kelurahan" class="col-form-label">Desa
                                                    Kelurahan:</label>
                                                <input type="text" id="desa_kelurahan" name="desa_kelurahan"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="kode_kecamatan" class="col-form-label">Kode
                                                    Kecamatan:</label>
                                                <input type="text" id="kode_kecamatan" name="kode_kecamatan"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="kode_kabupaten" class="col-form-label">Kode
                                                    Kabupaten:</label>
                                                <input type="text" id="kode_kabupaten" name="kode_kabupaten"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="kode_provinsi" class="col-form-label">Kode Provinsi:</label>
                                                <input type="text" id="kode_provinsi" name="kode_provinsi"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="kode_pos" class="col-form-label">Kode Pos:</label>
                                                <input type="text" id="kode_pos" name="kode_pos"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="lintang" class="col-form-label">Lintang:</label>
                                                <input type="text" id="lintang" name="lintang" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">

                                                <label for="bujur" class="col-form-label">Bujur:</label>
                                                <input type="text" id="bujur" name="bujur" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nomor_telepon" class="col-form-label">Nomor Telepon:</label>
                                                <input type="number" id="nomor_telepon" name="nomor_telepon"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">

                                                <label for="nomor_fax" class="col-form-label">Nomor Fax:</label>
                                                <input type="number" id="nomor_fax" name="nomor_fax"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="email" class="col-form-label">Email:</label>
                                                <input type="email" id="email" name="email" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="website" class="col-form-label">Website:</label>
                                                <input type="text" id="website" name="website" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="kebutuhan_khusus" class="col-form-label">Kebutuhan
                                                    Khusus:</label>
                                                <input type="text" id="kebutuhan_khusus" name="kebutuhan_khusus"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="sk_pendirian_sekolah" class="col-form-label">SK Pendirian
                                                    Sekolah:</label>
                                                <input type="text" id="sk_pendirian_sekolah" name="sk_pendirian_sekolah"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="tanggal_sk_pendirian" class="col-form-label">Tanggal SK
                                                    Pendirian:</label>
                                                <input type="date" id="tanggal_sk_pendirian" name="tanggal_sk_pendirian"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="status_kepemilikan" class="col-form-label">Status
                                                    Kepemilikan:</label>
                                                <input type="text" id="status_kepemilikan" name="status_kepemilikan"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="yayasan" class="col-form-label">Yayasan:</label>
                                                <input type="text" id="yayasan" name="yayasan" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="sk_izin_operasional" class="col-form-label">SK Izin
                                                    Operasional:</label>
                                                <input type="text" id="sk_izin_operasional" name="sk_izin_operasional"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="tanggal_sk_izin_operasional" class="col-form-label">Tanggal
                                                    SK Izin Operasional:</label>
                                                <input type="date" id="tanggal_sk_izin_operasional"
                                                    name="tanggal_sk_izin_operasional" class="form-control"><br>

                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="no_rekening" class="col-form-label">No Rekening:</label>
                                                <input type="number" id="no_rekening" name="no_rekening"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nama_bank" class="col-form-label">Nama Bank:</label>
                                                <input type="text" id="nama_bank" name="nama_bank"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="cabang_kcp_unit" class="col-form-label">Cabang KCP
                                                    Unit:</label>
                                                <input type="text" id="cabang_kcp_unit" name="cabang_kcp_unit"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="rekening_atas_nama" class="col-form-label">Rekening Atas
                                                    Nama:</label>
                                                <input type="text" id="rekening_atas_nama" name="rekening_atas_nama"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="mbs" class="col-form-label">MBs:</label>
                                                <input type="number" id="mbs" name="mbs" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="npwp" class="col-form-label">NPWP:</label>
                                                <input type="text" id="npwp" name="npwp" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nm_wp" class="col-form-label">NM WP:</label>
                                                <input type="text" id="nm_wp" name="nm_wp" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="keaktifan" class="col-form-label">Keaktifan:</label>
                                                <input type="text" id="keaktifan" name="keaktifan"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="flag" class="col-form-label">Flag:</label>
                                                <input type="text" id="flag" name="flag" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="wilayah_terpencil" class="col-form-label">Wilayah
                                                    Terpencil:</label>
                                                <input type="text" id="wilayah_terpencil" name="wilayah_terpencil"
                                                    class="form-control"><br>

                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="wilayah_perbatasan" class="col-form-label">Wilayah
                                                    Perbatasan:</label>
                                                <input type="text" id="wilayah_perbatasan" name="wilayah_perbatasan"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="wilayah_transmigrasi" class="col-form-label">Wilayah
                                                    Transmigrasi:</label>
                                                <input type="text" id="wilayah_transmigrasi" name="wilayah_transmigrasi"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">

                                                <label for="wilayah_adat_terpencil" class="col-form-label">Wilayah Adat
                                                    Terpencil:</label>
                                                <input type="text" id="wilayah_adat_terpencil"
                                                    name="wilayah_adat_terpencil" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="wilayah_bencana_alam" class="col-form-label">Wilayah Bencana
                                                    Alam:</label>
                                                <input type="text" id="wilayah_bencana_alam" name="wilayah_bencana_alam"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="wilayah_bencana_sosial" class="col-form-label">Wilayah
                                                    Bencana Sosial:</label>
                                                <input type="text" id="wilayah_bencana_sosial"
                                                    name="wilayah_bencana_sosial" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="partisipasi_bos" class="col-form-label">Partisipasi
                                                    BOS:</label>
                                                <input type="text" id="partisipasi_bos" name="partisipasi_bos"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="waktu_penyelenggaraan" class="col-form-label">Waktu
                                                    Penyelenggaraan:</label>
                                                <input type="text" id="waktu_penyelenggaraan"
                                                    name="waktu_penyelenggaraan" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="sumber_listrik" class="col-form-label">Sumber
                                                    Listrik:</label>
                                                <input type="text" id="sumber_listrik" name="sumber_listrik"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="sertifikasi_iso" class="col-form-label">Sertifikasi
                                                    ISO:</label>
                                                <input type="text" id="sertifikasi_iso" name="sertifikasi_iso"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="akses_internet" class="col-form-label">Akses
                                                    Internet:</label>
                                                <input type="text" id="akses_internet" name="akses_internet"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="akses_internet_2" class="col-form-label">Akses Internet
                                                    2:</label>
                                                <input type="text" id="akses_internet_2" name="akses_internet_2"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">

                                                <label for="luas_tanah_milik" class="col-form-label">Luas Tanah
                                                    Milik:</label>
                                                <input type="number" id="luas_tanah_milik" name="luas_tanah_milik"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="luas_tanah_bukan_milik" class="col-form-label">Luas Tanah
                                                    Bukan Milik:</label>
                                                <input type="number" id="luas_tanah_bukan_milik"
                                                    name="luas_tanah_bukan_milik" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="kode_registrasi" class="col-form-label">Kode
                                                    Registrasi:</label>
                                                <input type="text" id="kode_registrasi" name="kode_registrasi"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="daya_listrik" class="col-form-label">Daya Listrik:</label>
                                                <input type="number" id="daya_listrik" name="daya_listrik"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="kontinuitas_listrik" class="col-form-label">Kontinuitas
                                                    Listrik:</label>
                                                <input type="text" id="kontinuitas_listrik" name="kontinuitas_listrik"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="jarak_listrik" class="col-form-label">Jarak Listrik:</label>
                                                <input type="number" id="jarak_listrik" name="jarak_listrik"
                                                    class="form-control"><br>
                                            </div>
                                        </div>
                                        <button type="submit" class="ladda-button btn btn-success"
                                            data-style="expand-right">Add Sekolah</button>

                                    </form>
                                    <!--End Sekolah Form-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
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