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
                                        <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sekolah</a></li>
                                        <li class="breadcrumb-item active">View Peserta Didik</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Profile Peserta Didik</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div>
                        <div class="card-box">
                            <div class="text-center">
                                <img src="#.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <p class="text-muted mb-2 font-13"><strong>Sekolah ID :</strong> <span
                                            class="ml-2">{{ $pesertadidik->sekolah_id }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Sekolah :</strong> <span
                                            class="ml-2">{{ $pesertadidik->sekolah->nama }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama :</strong> <span
                                            class="ml-2">{{ $pesertadidik->nama }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NISN :</strong> <span
                                            class="ml-2">{{ $pesertadidik->nisn }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NIK :</strong> <span
                                            class="ml-2">{{ $pesertadidik->nik }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>No KK :</strong> <span
                                            class="ml-2">{{ $pesertadidik->no_kk }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tempat Lahir :</strong> <span
                                            class="ml-2">{{ $pesertadidik->tempat_lahir }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tanggal Lahir :</strong> <span
                                            class="ml-2">{{ $pesertadidik->tanggal_lahir }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenis Kelamin :</strong> <span
                                            class="ml-2">{{ $pesertadidik->jenis_kelamin }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Agama :</strong> <span
                                            class="ml-2">{{ $pesertadidik->agama }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama Ayah :</strong> <span
                                            class="ml-2">{{ $pesertadidik->nama_ayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NIK Ayah :</strong> <span
                                            class="ml-2">{{ $pesertadidik->nik_ayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tahun Lahir Ayah :</strong> <span
                                            class="ml-2">{{ $pesertadidik->tahun_lahir_ayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenjang Pendidikan Ayah :</strong> <span
                                            class="ml-2">{{ $pesertadidik->jenjang_pendidikan_ayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Pekerjaan Ayah :</strong> <span
                                            class="ml-2">{{ $pesertadidik->pekerjaan_ayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama Ibu Kandung :</strong> <span
                                            class="ml-2">{{ $pesertadidik->nama_ibu_kandung }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NIK Ibu :</strong> <span
                                            class="ml-2">{{ $pesertadidik->nik_ibu }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tahun Lahir Ibu :</strong> <span
                                            class="ml-2">{{ $pesertadidik->tahun_lahir_ibu }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenjang Pendidikan Ibu :</strong> <span
                                            class="ml-2">{{ $pesertadidik->jenjang_pendidikan_ibu }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Pekerjaan Ibu :</strong> <span
                                            class="ml-2">{{ $pesertadidik->pekerjaan_ibu }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Semester ID :</strong> <span
                                            class="ml-2">{{ $pesertadidik->semester_id }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Rombongan Belajar ID :</strong> <span
                                            class="ml-2">{{ $pesertadidik->rombongan_belajar_id }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Anggota Rombel ID :</strong> <span
                                            class="ml-2">{{ $pesertadidik->anggota_rombel_id }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Agama ID :</strong> <span
                                            class="ml-2">{{ $pesertadidik->agama_id }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Alamat Jalan :</strong> <span
                                            class="ml-2">{{ $pesertadidik->alamat_jalan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>RT :</strong> <span
                                            class="ml-2">{{ $pesertadidik->rt }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>RW :</strong> <span
                                            class="ml-2">{{ $pesertadidik->rw }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama Dusun :</strong> <span
                                            class="ml-2">{{ $pesertadidik->nama_dusun }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Desa/Kelurahan :</strong> <span
                                            class="ml-2">{{ $pesertadidik->desa_kelurahan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Wilayah :</strong> <span
                                            class="ml-2">{{ $pesertadidik->kode_wilayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Kecamatan :</strong> <span
                                            class="ml-2">{{ $pesertadidik->kode_kecamatan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kecamatan :</strong> <span
                                            class="ml-2">{{ $pesertadidik->kecamatan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Kabupaten :</strong> <span
                                            class="ml-2">{{ $pesertadidik->kode_kabupaten }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kabupaten :</strong> <span
                                            class="ml-2">{{ $pesertadidik->kabupaten }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Provinsi :</strong> <span
                                            class="ml-2">{{ $pesertadidik->kode_provinsi }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Provinsi :</strong> <span
                                            class="ml-2">{{ $pesertadidik->provinsi }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Pos :</strong> <span
                                            class="ml-2">{{ $pesertadidik->kode_pos }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Lintang :</strong> <span
                                            class="ml-2">{{ $pesertadidik->lintang }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Bujur :</strong> <span
                                            class="ml-2">{{ $pesertadidik->bujur }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama Wali :</strong> <span
                                            class="ml-2">{{ $pesertadidik->nama_wali }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tahun Lahir Wali :</strong> <span
                                            class="ml-2">{{ $pesertadidik->tahun_lahir_wali }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NIPD :</strong> <span
                                            class="ml-2">{{ $pesertadidik->nipd }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tanggal Masuk Sekolah :</strong>
                                        <span class="ml-2">{{ $pesertadidik->tanggal_masuk_sekolah }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Kebutuhan Khusus ID :</strong> <span
                                            class="ml-2">{{ $pesertadidik->kebutuhan_khusus_id }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kebutuhan Khusus :</strong> <span
                                            class="ml-2">{{ $pesertadidik->kebutuhan_khusus }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenis Tinggal ID :</strong> <span
                                            class="ml-2">{{ $pesertadidik->jenis_tinggal_id }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenis Tinggal :</strong> <span
                                            class="ml-2">{{ $pesertadidik->jenis_tinggal }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Alat Transportasi ID :</strong> <span
                                            class="ml-2">{{ $pesertadidik->alat_transportasi_id }}</span></p>


                                </div>
                                <div class="col-md-6 mt-3">
                                    <p class="text-muted mb-2 font-13"><strong>Alat Transportasi :</strong> <span
                                            class="ml-2">{{ $pesertadidik->alat_transportasi }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Anak Keberapa :</strong> <span
                                            class="ml-2">{{ $pesertadidik->anak_keberapa }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NIK Wali :</strong> <span
                                            class="ml-2">{{ $pesertadidik->nik_wali }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nomor Telepon Rumah :</strong> <span
                                            class="ml-2">{{ $pesertadidik->nomor_telepon_rumah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nomor Telepon Seluler :</strong>
                                        <span class="ml-2">{{ $pesertadidik->nomor_telepon_seluler }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                            class="ml-2">{{ $pesertadidik->email }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Reg Akta Lahir :</strong> <span
                                            class="ml-2">{{ $pesertadidik->reg_akta_lahir }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenjang Pendidikan Ayah :</strong>
                                        <span class="ml-2">{{ $pesertadidik->jenjang_pendidikan_ayah }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Pekerjaan ID Ayah :</strong> <span
                                            class="ml-2">{{ $pesertadidik->pekerjaan_id_ayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Penghasilan ID Ayah :</strong> <span
                                            class="ml-2">{{ $pesertadidik->penghasilan_id_ayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Penghasilan Ayah :</strong> <span
                                            class="ml-2">{{ $pesertadidik->penghasilan_ayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kebutuhan Khusus ID Ayah :</strong>
                                        <span class="ml-2">{{ $pesertadidik->kebutuhan_khusus_id_ayah }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Kebutuhan Khusus Ayah :</strong>
                                        <span class="ml-2">{{ $pesertadidik->kebutuhan_khusus_ayah }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenjang Pendidikan Ibu :</strong>
                                        <span class="ml-2">{{ $pesertadidik->jenjang_pendidikan_ibu }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Pekerjaan ID Ibu :</strong> <span
                                            class="ml-2">{{ $pesertadidik->pekerjaan_id_ibu }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Penghasilan ID Ibu :</strong> <span
                                            class="ml-2">{{ $pesertadidik->penghasilan_id_ibu }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Penghasilan Ibu :</strong> <span
                                            class="ml-2">{{ $pesertadidik->penghasilan_ibu }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kebutuhan Khusus ID Ibu :</strong>
                                        <span class="ml-2">{{ $pesertadidik->kebutuhan_khusus_id_ibu }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Kebutuhan Khusus Ibu :</strong> <span
                                            class="ml-2">{{ $pesertadidik->kebutuhan_khusus_ibu }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenjang Pendidikan Wali :</strong>
                                        <span class="ml-2">{{ $pesertadidik->jenjang_pendidikan_wali }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenjang Pendidikan Wali Keterangan
                                            :</strong> <span
                                            class="ml-2">{{ $pesertadidik->jenjang_pendidikan_wali_keterangan }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Pekerjaan ID Wali :</strong> <span
                                            class="ml-2">{{ $pesertadidik->pekerjaan_id_wali }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Pekerjaan Wali :</strong> <span
                                            class="ml-2">{{ $pesertadidik->pekerjaan_wali }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Penghasilan ID Wali :</strong> <span
                                            class="ml-2">{{ $pesertadidik->penghasilan_id_wali }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Penghasilan Wali :</strong> <span
                                            class="ml-2">{{ $pesertadidik->penghasilan_wali }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>ID Bank :</strong> <span
                                            class="ml-2">{{ $pesertadidik->id_bank }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Bank :</strong> <span
                                            class="ml-2">{{ $pesertadidik->bank }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama KCP :</strong> <span
                                            class="ml-2">{{ $pesertadidik->nama_kcp }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Rekening Bank :</strong> <span
                                            class="ml-2">{{ $pesertadidik->rekening_bank }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Rekening Atas Nama :</strong> <span
                                            class="ml-2">{{ $pesertadidik->rekening_atas_nama }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenis Keluar ID :</strong> <span
                                            class="ml-2">{{ $pesertadidik->jenis_keluar_id }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenis Keluar :</strong> <span
                                            class="ml-2">{{ $pesertadidik->jenis_keluar }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tanggal Keluar :</strong> <span
                                            class="ml-2">{{ $pesertadidik->tanggal_keluar }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Keterangan Registrasi :</strong>
                                        <span class="ml-2">{{ $pesertadidik->keterangan_registrasi }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>No Peserta Ujian :</strong> <span
                                            class="ml-2">{{ $pesertadidik->no_peserta_ujian }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>No Seri Ijazah :</strong> <span
                                            class="ml-2">{{ $pesertadidik->no_seri_ijazah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>A Pernah PAUD :</strong> <span
                                            class="ml-2">{{ $pesertadidik->a_pernah_paud }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>A Pernah TK :</strong> <span
                                            class="ml-2">{{ $pesertadidik->a_pernah_tk }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Sekolah Asal :</strong> <span
                                            class="ml-2">{{ $pesertadidik->sekolah_asal }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenis Pendaftaran Rombel :</strong>
                                        <span class="ml-2">{{ $pesertadidik->jenis_pendaftaran_rombel }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenis Pendaftaran Rombel Keterangan
                                            :</strong> <span
                                            class="ml-2">{{ $pesertadidik->jenis_pendaftaran_rombel_keterangan }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Tingkat Pendidikan ID :</strong>
                                        <span class="ml-2">{{ $pesertadidik->tingkat_pendidikan_id }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Tingkat Pendidikan :</strong> <span
                                            class="ml-2">{{ $pesertadidik->tingkat_pendidikan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jurusan SP :</strong> <span
                                            class="ml-2">{{ $pesertadidik->jurusan_sp }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jurusan ID :</strong> <span
                                            class="ml-2">{{ $pesertadidik->jurusan_id }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jurusan :</strong> <span
                                            class="ml-2">{{ $pesertadidik->jurusan }}</span></p>

                                </div>
                            </div>
                        </div> <!-- end card-box -->
                    </div> <!-- end col-->
                    <!-- end row-->
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