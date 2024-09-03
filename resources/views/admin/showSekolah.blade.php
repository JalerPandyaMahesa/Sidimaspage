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

                            <!-- <a href="{{ route('admin.destroySekolah', ['sekolah_id' => $sekolah->sekolah_id]) }}"
                                class="badge badge-danger"><i class="fas fa-trash-alt ">@csrf
                                    @method('DELETE')</i>Delete</a> -->
                        </div>
                        <div class="card-box">
                            <div class="text-center">
                                <img src="#.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <p class="text-muted mb-2 font-13"><strong>Sekolah ID :</strong> <span
                                            class="ml-2">{{ $sekolah->sekolah_id }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NPSN :</strong> <span
                                            class="ml-2">{{ $sekolah->npsn }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama :</strong> <span
                                            class="ml-2">{{ $sekolah->nama }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Provinsi :</strong> <span
                                            class="ml-2">{{ $sekolah->provinsi }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Akreditasi :</strong> <span
                                            class="ml-2">{{ $sekolah->akreditasi }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Alamat Jalan :</strong> <span
                                            class="ml-2">{{ $sekolah->alamat_jalan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>RT :</strong> <span
                                            class="ml-2">{{ $sekolah->rt }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>RW :</strong> <span
                                            class="ml-2">{{ $sekolah->rw }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NSS :</strong> <span
                                            class="ml-2">{{ $sekolah->nss }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama Dusun :</strong> <span
                                            class="ml-2">{{ $sekolah->nama_dusun }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Wilayah :</strong> <span
                                            class="ml-2">{{ $sekolah->kode_wilayah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Desa Kelurahan :</strong> <span
                                            class="ml-2">{{ $sekolah->kode_desa_kelurahan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Desa Kelurahan :</strong> <span
                                            class="ml-2">{{ $sekolah->desa_kelurahan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Kecamatan :</strong> <span
                                            class="ml-2">{{ $sekolah->kode_kecamatan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Kabupaten :</strong> <span
                                            class="ml-2">{{ $sekolah->kode_kabupaten }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Provinsi :</strong> <span
                                            class="ml-2">{{ $sekolah->kode_provinsi }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Pos :</strong> <span
                                            class="ml-2">{{ $sekolah->kode_pos }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Lintang :</strong> <span
                                            class="ml-2">{{ $sekolah->lintang }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Bujur :</strong> <span
                                            class="ml-2">{{ $sekolah->bujur }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nomor Telepon :</strong> <span
                                            class="ml-2">{{ $sekolah->nomor_telepon }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nomor Fax :</strong> <span
                                            class="ml-2">{{ $sekolah->nomor_fax }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                            class="ml-2">{{ $sekolah->email }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Website :</strong> <span
                                            class="ml-2">{{ $sekolah->website }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kebutuhan Khusus :</strong> <span
                                            class="ml-2">{{ $sekolah->kebutuhan_khusus }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>SK Pendirian Sekolah :</strong> <span
                                            class="ml-2">{{ $sekolah->sk_pendirian_sekolah }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tanggal SK Pendirian :</strong> <span
                                            class="ml-2">{{ $sekolah->tanggal_sk_pendirian }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Status Kepemilikan :</strong> <span
                                            class="ml-2">{{ $sekolah->status_kepemilikan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Yayasan :</strong> <span
                                            class="ml-2">{{ $sekolah->yayasan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>SK Izin Operasional :</strong> <span
                                            class="ml-2">{{ $sekolah->sk_izin_operasional }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Tanggal SK Izin Operasional :</strong>
                                        <span class="ml-2">{{ $sekolah->tanggal_sk_izin_operasional }}</span>
                                    </p>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <p class="text-muted mb-2 font-13"><strong>No Rekening :</strong> <span
                                            class="ml-2">{{ $sekolah->no_rekening }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Nama Bank :</strong> <span
                                            class="ml-2">{{ $sekolah->nama_bank }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Cabang KCP Unit :</strong> <span
                                            class="ml-2">{{ $sekolah->cabang_kcp_unit }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Rekening Atas Nama :</strong> <span
                                            class="ml-2">{{ $sekolah->rekening_atas_nama }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>MBs :</strong> <span
                                            class="ml-2">{{ $sekolah->mbs }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NPWP :</strong> <span
                                            class="ml-2">{{ $sekolah->npwp }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>NM WP :</strong> <span
                                            class="ml-2">{{ $sekolah->nm_wp }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Keaktifan :</strong> <span
                                            class="ml-2">{{ $sekolah->keaktifan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Flag :</strong> <span
                                            class="ml-2">{{ $sekolah->flag }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Wilayah Terpencil :</strong> <span
                                            class="ml-2">{{ $sekolah->wilayah_terpencil }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Wilayah Perbatasan :</strong> <span
                                            class="ml-2">{{ $sekolah->wilayah_perbatasan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Wilayah Transmigrasi :</strong> <span
                                            class="ml-2">{{ $sekolah->wilayah_transmigrasi }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Wilayah Adat Terpencil :</strong> <span
                                            class="ml-2">{{ $sekolah->wilayah_adat_terpencil }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Wilayah Bencana Alam :</strong> <span
                                            class="ml-2">{{ $sekolah->wilayah_bencana_alam }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Wilayah Bencana Sosial :</strong> <span
                                            class="ml-2">{{ $sekolah->wilayah_bencana_sosial }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Partisipasi BOS :</strong> <span
                                            class="ml-2">{{ $sekolah->partisipasi_bos }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Waktu Penyelenggaraan :</strong> <span
                                            class="ml-2">{{ $sekolah->waktu_penyelenggaraan }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Sumber Listrik :</strong> <span
                                            class="ml-2">{{ $sekolah->sumber_listrik }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Sertifikasi Iso :</strong> <span
                                            class="ml-2">{{ $sekolah->sertifikasi_iso }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Akses Internet :</strong> <span
                                            class="ml-2">{{ $sekolah->akses_internet }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Akses Internet2 :</strong> <span
                                            class="ml-2">{{ $sekolah->akses_internet_2 }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Luas Tanah Milik :</strong> <span
                                            class="ml-2">{{ $sekolah->luas_tanah_milik }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Luas Tanah Bukan Milik :</strong> <span
                                            class="ml-2">{{ $sekolah->luas_tanah_bukan_milik }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kode Registrasi :</strong> <span
                                            class="ml-2">{{ $sekolah->kode_registrasi }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Daya Listrik :</strong> <span
                                            class="ml-2">{{ $sekolah->daya_listrik }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Kontinuitas Listrik :</strong> <span
                                            class="ml-2">{{ $sekolah->kontinuitas_listrik }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>Jarak Listrik :</strong> <span
                                            class="ml-2">{{ $sekolah->jarak_listrik }}</span></p>
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
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <!-- Add other columns as needed -->
                    </tr>
                    @foreach($sekolah->pesertaDidik as $peserta)
                        <tr>
                            <td>{{ $peserta->nisn }}</td>
                            <td>{{ $peserta->nama }}</td>
                            <td>{{ $peserta->tempat_lahir }}</td>
                            <td>{{ $peserta->tanggal_lahir }}</td>
                            <td>{{ $peserta->jenis_kelamin }}</td>
                            <td>{{ $peserta->Agama }}</td>
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
                        <th>Nama</th>
                        <!-- Add other columns as needed -->
                    </tr>
                    @foreach($sekolah->ptk as $ptk)
                        <tr>
                            <td>{{ $ptk->nama }}</td>
                            <!-- Add other data fields as needed -->
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