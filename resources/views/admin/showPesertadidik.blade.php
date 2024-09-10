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
                                        <li class="breadcrumb-item active">View Sekolah</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Profile Sekolah</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div>
                        <div class="text-right" style="padding-bottom: 10px">
                            <a href="{{ route('admin.editSekolah', ['sekolah_id' => $sekolah->sekolah_id]) }}"
                                class="badge badge-warning"><i class="fas fa-clipboard-check "></i> Update</a>
                            <form action="{{ route('admin.destroySekolah', ['sekolah_id' => $sekolah->sekolah_id]) }}"
                                method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="badge badge-danger" style="border:none">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </div>
                        <div class="card-box">
                            <div class="text-center">
                                <img src="#.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <p class="text-muted mb-2 font-13"><strong>Peserta Didik ID :</strong> <span
                                            class="ml-2">{{ $peserta_didik->peserta_didik_id }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Sekolah ID :</strong> <span
                                            class="ml-2">{{ $peserta_didik->sekolah_id }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nama }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NISN :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nisn }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NIK :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nik }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>No KK :</strong> <span
                                            class="ml-2">{{ $peserta_didik->no_kk }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tempat Lahir :</strong> <span
                                            class="ml-2">{{ $peserta_didik->tempat_lahir }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tanggal Lahir :</strong> <span
                                            class="ml-2">{{ $peserta_didik->tanggal_lahir }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenis Kelamin :</strong> <span
                                            class="ml-2">{{ $peserta_didik->jenis_kelamin }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Agama :</strong> <span
                                            class="ml-2">{{ $peserta_didik->agama }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama Ayah :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nama_ayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NIK Ayah :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nik_ayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tahun Lahir Ayah :</strong> <span
                                            class="ml-2">{{ $peserta_didik->tahun_lahir_ayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Pendidikan Ayah :</strong> <span
                                            class="ml-2">{{ $peserta_didik->jenjang_pendidikan_ayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Pekerjaan Ayah :</strong> <span
                                            class="ml-2">{{ $peserta_didik->pekerjaan_ayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama Ibu :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nama_ibu_kandung }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NIK Ibu :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nik_ibu }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tahun Lahir Ibu :</strong> <span
                                            class="ml-2">{{ $peserta_didik->tahun_lahir_ibu }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Pendidikan Ibu :</strong> <span
                                            class="ml-2">{{ $peserta_didik->jenjang_pendidikan_ibu }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Pekerjaan Ibu :</strong> <span
                                            class="ml-2">{{ $peserta_didik->pekerjaan_ibu }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Alamat Jalan :</strong> <span
                                            class="ml-2">{{ $peserta_didik->alamat_jalan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>RT :</strong> <span
                                            class="ml-2">{{ $peserta_didik->rt }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>RW :</strong> <span
                                            class="ml-2">{{ $peserta_didik->rw }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama Dusun :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nama_dusun }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Desa/Kelurahan :</strong> <span
                                            class="ml-2">{{ $peserta_didik->desa_kelurahan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Wilayah :</strong> <span
                                            class="ml-2">{{ $peserta_didik->kode_wilayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kecamatan :</strong> <span
                                            class="ml-2">{{ $peserta_didik->kecamatan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kabupaten :</strong> <span
                                            class="ml-2">{{ $peserta_didik->kabupaten }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Provinsi :</strong> <span
                                            class="ml-2">{{ $peserta_didik->provinsi }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Pos :</strong> <span
                                            class="ml-2">{{ $peserta_didik->kode_pos }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Lintang :</strong> <span
                                            class="ml-2">{{ $peserta_didik->lintang }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Bujur :</strong> <span
                                            class="ml-2">{{ $peserta_didik->bujur }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama Wali :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nama_wali }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tahun Lahir Wali :</strong> <span
                                            class="ml-2">{{ $peserta_didik->tahun_lahir_wali }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NIPD :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nipd }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tanggal Masuk Sekolah :</strong> <span
                                            class="ml-2">{{ $peserta_didik->tanggal_masuk_sekolah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kebutuhan Khusus :</strong> <span
                                            class="ml-2">{{ $peserta_didik->kebutuhan_khusus }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenis Tinggal :</strong> <span
                                            class="ml-2">{{ $peserta_didik->jenis_tinggal }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Alat Transportasi :</strong> <span
                                            class="ml-2">{{ $peserta_didik->alat_transportasi }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Anak Keberapa :</strong> <span
                                            class="ml-2">{{ $peserta_didik->anak_keberapa }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NIK Wali :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nik_wali }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>No Telepon Rumah :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nomor_telepon_rumah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>No Telepon Seluler :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nomor_telepon_seluler }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                            class="ml-2">{{ $peserta_didik->email }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>No Peserta Ujian :</strong> <span
                                            class="ml-2">{{ $peserta_didik->no_peserta_ujian }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>No Seri Ijazah :</strong> <span
                                            class="ml-2">{{ $peserta_didik->no_seri_ijazah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Sekolah Asal :</strong> <span
                                            class="ml-2">{{ $peserta_didik->sekolah_asal }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama Negara :</strong> <span
                                            class="ml-2">{{ $peserta_didik->nama_negara }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Pekerjaan Wali :</strong> <span
                                            class="ml-2">{{ $peserta_didik->pekerjaan_wali }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Pendidikan Wali :</strong> <span
                                            class="ml-2">{{ $peserta_didik->jenjang_pendidikan_wali }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tahun Ajaran :</strong> <span
                                            class="ml-2">{{ $peserta_didik->tahun_ajaran }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>No SKHUN :</strong> <span
                                            class="ml-2">{{ $peserta_didik->no_skhun }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jenis Pendaftaran :</strong> <span
                                            class="ml-2">{{ $peserta_didik->jenis_pendaftaran }}</span></p>
                                </div>
                                <div class="col-md-6 mt-3">
                                    
                                </div>
                            </div>
                        </div> <!-- end card-box -->
                    </div> <!-- end col-->
                    <!-- end row-->
                </div> <!-- container -->

            </div> <!-- content -->

            <h2>Peserta Didik</h2>
            <div class="table-responsive">
                <table class="table table-bordered toggle-circle mb-0" data-page-size="7">
                    <tr>
                        <th>#</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>

                        <!-- Add other columns as needed -->
                    </tr>
                    @foreach($sekolah->pesertaDidik as $index => $peserta)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $peserta->nisn }}</td>
                            <td>{{ $peserta->nama }}</td>
                            <td>{{ $peserta->tempat_lahir }}</td>
                            <td>{{ $peserta->tanggal_lahir }}</td>
                            <td>{{ $peserta->jenis_kelamin }}</td>
                            <td>{{ $peserta->agama }}</td>

                            <!-- Add other data fields as needed -->
                        </tr>
                    @endforeach
                </table>
                <a href="{{ route('pesertadidik.create', $sekolah->sekolah_id) }}">Add New Peserta Didik</a>
            </div>

            <h2>PGTK</h2>
            <div class="table-responsive">
                <table class="table table-bordered toggle-circle mb-0" data-page-size="7">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Jenis Kelamin</th>
                        <th>Status Kepegawaian</th>
                        <th>Jenis PTK</th>
                        <th>Agama</th>
                        <th>Status Keaktifan</th>
                        <th>No HP</th>
                        <th>Email</th>
                    </tr>
                    @foreach($sekolah->ptk as $index => $ptk)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $ptk->nama }}</td>
                            <td>{{ $ptk->nip }}</td>
                            <td>{{ $ptk->jenis_kelamin }}</td>
                            <td>{{ $ptk->status_kepegawaian }}</td>
                            <td>{{ $ptk->jenis_ptk }}</td>
                            <td>{{ $ptk->agama }}</td>
                            <td>{{ $ptk->status_keaktifan }}</td>
                            <td>{{ $ptk->no_hp }}</td>
                            <td>{{ $ptk->email }}</td>
                        </tr>
                    @endforeach
                </table>
                <a href="{{ route('ptk.create', $sekolah->sekolah_id) }}">Add New ptgk</a>
            </div>

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