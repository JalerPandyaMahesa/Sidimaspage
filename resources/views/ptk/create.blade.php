<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDIMAS</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="MartDevelopers" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <style>
    /* Styling untuk modal */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
      background-color: #fff;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 50%;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    .close-btn {
      background-color: #ff5c5c;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 4px;
    }

    button#openModal {
  width: 80px; /* Lebar tombol */
  height: 50px; /* Tinggi tombol */
  font-size: 10px; /* Ukuran teks */
  padding: 10px; /* Padding dalam tombol */
  border-radius: 5px; /* Sudut melengkung tombol */
}

    .close-btn:hover {
      background-color: #ff3232;

    }
  </style>
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
                            <a href="{{ route('admin.dashboard') }}">
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
                                    <a href="{{ route('admin.addSekolah') }}">Tambah Sekolah</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.viewPaud') }}">Lihat</a>
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
                                    <a href="{{ route('admin.addSekolah') }}">Tambah Sekolah</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.viewSd') }}">Lihat</a>
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
                                    <a href="{{ route('admin.addSekolah') }}">Tambah Sekolah</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.viewSmp') }}">Lihat</a>
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
                                    <a href="{{ route('admin.viewPgtk') }}">Lihat</a>
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
                                        <li class="breadcrumb-item"><a
                                                href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sekolah</a></li>
                                        <li class="breadcrumb-item active">Create PTK</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Create PTK Details</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- Form row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <label class="col-form-label">Create PTK (xls, xlsx)</label>
                                    <form action="{{ route('ptk.import', $sekolah_id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                            <label for="file">Import PTK dengan file = </label>
                                            <input type="file" name="file" required>
                                            <button type="submit">Upload</button>
                                        </div>
                                        
                                    </form>

                                    <button class="col-form-label" id="openModal">Panduan Import</button>
                                    <button class="col-form-label" id="openModal">Unduh Template</button>

  <!-- Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <h2>Panduan Import</h2>
      <p>Berikut adalah panduan untuk mengimport data:</p>
      <ul>
        <li>Gunakan format Excel (.xlsx atau .csv).</li>
        <li>Pastikan kolom-kolom sesuai dengan template yang diberikan.</li>
        <li>Periksa data sebelum melakukan upload untuk memastikan kevalidannya.</li>
      </ul>
      <button class="close-btn" id="closeModal">Tutup</button>
    </div>
  </div>

  <script>
    // Ambil elemen
    const openModal = document.getElementById('openModal');
    const closeModal = document.getElementById('closeModal');
    const modal = document.getElementById('myModal');

    // Event listener untuk membuka modal
    openModal.addEventListener('click', () => {
      modal.style.display = 'block';
    });

    // Event listener untuk menutup modal
    closeModal.addEventListener('click', () => {
      modal.style.display = 'none';
    });

    // Klik di luar modal untuk menutupnya
    window.addEventListener('click', (event) => {
      if (event.target === modal) {
        modal.style.display = 'none';
      }
    });
  </script>

                                    <div class="pt-3" >

                                    </div>

                                    <h3>Input Manual PTK</h3>
                                    <!-- <h4 class="header-title">Fill all fields</h4> -->
                                    <!--Create Ptk Form-->
                                    <form
                                        action="{{ isset($ptk) ? route('ptk.update', $ptk->ptk_id) : route('ptk.store') }}"
                                        method="POST">
                                        @csrf
                                        @if (isset($ptk))
                                            @method('PUT')
                                        @endif

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nama">Nama</label>
                                                <input type="text" name="nama" class="form-control" id="nama"
                                                    value="{{ isset($ptk) ? $ptk->nama : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nuptk">NUPTK</label>
                                                <input type="text" name="nuptk" class="form-control" id="nuptk"
                                                    value="{{ isset($ptk) ? $ptk->nuptk : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="jk">Jenis Kelamin</label>
                                                <input type="text" name="jk" class="form-control" id="jk"
                                                    value="{{ isset($ptk) ? $ptk->jk : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" class="form-control"
                                                    id="tempat_lahir"
                                                    value="{{ isset($ptk) ? $ptk->tempat_lahir : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" class="form-control"
                                                    id="tanggal_lahir"
                                                    value="{{ isset($ptk) ? $ptk->tanggal_lahir : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nip">NIP</label>
                                                <input type="text" name="nip" class="form-control" id="nip"
                                                    value="{{ isset($ptk) ? $ptk->nip : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="status_kepegawaian">Status Kepegawaian</label>
                                                <input type="text" name="status_kepegawaian" class="form-control"
                                                    id="status_kepegawaian"
                                                    value="{{ isset($ptk) ? $ptk->status_kepegawaian : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="jenis_ptk">Jenis PTK</label>
                                                <input type="text" name="jenis_ptk" class="form-control" id="jenis_ptk"
                                                    value="{{ isset($ptk) ? $ptk->jenis_ptk : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="agama">Agama</label>
                                                <input type="text" name="agama" class="form-control" id="agama"
                                                    value="{{ isset($ptk) ? $ptk->agama : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="alamat_jalan">Alamat Jalan</label>
                                                <input type="text" name="alamat_jalan" class="form-control"
                                                    id="alamat_jalan"
                                                    value="{{ isset($ptk) ? $ptk->alamat_jalan : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="rt">RT</label>
                                                <input type="text" name="rt" class="form-control" id="rt"
                                                    value="{{ isset($ptk) ? $ptk->rt : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="rw">RW</label>
                                                <input type="text" name="rw" class="form-control" id="rw"
                                                    value="{{ isset($ptk) ? $ptk->rw : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nama_dusun">Nama Dusun</label>
                                                <input type="text" name="nama_dusun" class="form-control"
                                                    id="nama_dusun" value="{{ isset($ptk) ? $ptk->nama_dusun : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="desa_kelurahan">Desa/Kelurahan</label>
                                                <input type="text" name="desa_kelurahan" class="form-control"
                                                    id="desa_kelurahan"
                                                    value="{{ isset($ptk) ? $ptk->desa_kelurahan : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="kecamatan">Kecamatan</label>
                                                <input type="text" name="kecamatan" class="form-control" id="kecamatan"
                                                    value="{{ isset($ptk) ? $ptk->kecamatan : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="kode_pos">Kode Pos</label>
                                                <input type="text" name="kode_pos" class="form-control" id="kode_pos"
                                                    value="{{ isset($ptk) ? $ptk->kode_pos : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="telepon">Telepon</label>
                                                <input type="text" name="telepon" class="form-control" id="telepon"
                                                    value="{{ isset($ptk) ? $ptk->telepon : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="hp">HP</label>
                                                <input type="text" name="hp" class="form-control" id="hp"
                                                    value="{{ isset($ptk) ? $ptk->hp : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control" id="email"
                                                    value="{{ isset($ptk) ? $ptk->email : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tugas_tambahan">Tugas Tambahan</label>
                                                <input type="text" name="tugas_tambahan" class="form-control"
                                                    id="tugas_tambahan"
                                                    value="{{ isset($ptk) ? $ptk->tugas_tambahan : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="sk_cpns">SK CPNS</label>
                                                <input type="text" name="sk_cpns" class="form-control" id="sk_cpns"
                                                    value="{{ isset($ptk) ? $ptk->sk_cpns : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tanggal_cpns">Tanggal CPNS</label>
                                                <input type="date" name="tanggal_cpns" class="form-control"
                                                    id="tanggal_cpns"
                                                    value="{{ isset($ptk) ? $ptk->tanggal_cpns : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="sk_pengangkatan">SK Pengangkatan</label>
                                                <input type="text" name="sk_pengangkatan" class="form-control"
                                                    id="sk_pengangkatan"
                                                    value="{{ isset($ptk) ? $ptk->sk_pengangkatan : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tmt_pengangkatan">TMT Pengangkatan</label>
                                                <input type="date" name="tmt_pengangkatan" class="form-control"
                                                    id="tmt_pengangkatan"
                                                    value="{{ isset($ptk) ? $ptk->tmt_pengangkatan : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="lembaga_pengangkatan">Lembaga Pengangkatan</label>
                                                <input type="text" name="lembaga_pengangkatan" class="form-control"
                                                    id="lembaga_pengangkatan"
                                                    value="{{ isset($ptk) ? $ptk->lembaga_pengangkatan : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="pangkat_golongan">Pangkat Golongan</label>
                                                <input type="text" name="pangkat_golongan" class="form-control"
                                                    id="pangkat_golongan"
                                                    value="{{ isset($ptk) ? $ptk->pangkat_golongan : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="sumber_gaji">Sumber Gaji</label>
                                                <input type="text" name="sumber_gaji" class="form-control"
                                                    id="sumber_gaji" value="{{ isset($ptk) ? $ptk->sumber_gaji : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nama_ibu_kandung">Nama Ibu Kandung</label>
                                                <input type="text" name="nama_ibu_kandung" class="form-control"
                                                    id="nama_ibu_kandung"
                                                    value="{{ isset($ptk) ? $ptk->nama_ibu_kandung : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="status_perkawinan">Status Perkawinan</label>
                                                <input type="text" name="status_perkawinan" class="form-control"
                                                    id="status_perkawinan"
                                                    value="{{ isset($ptk) ? $ptk->status_perkawinan : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nama_suami_istri">Nama Suami/Istri</label>
                                                <input type="text" name="nama_suami_istri" class="form-control"
                                                    id="nama_suami_istri"
                                                    value="{{ isset($ptk) ? $ptk->nama_suami_istri : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nip_suami_istri">NIP Suami/Istri</label>
                                                <input type="text" name="nip_suami_istri" class="form-control"
                                                    id="nip_suami_istri"
                                                    value="{{ isset($ptk) ? $ptk->nip_suami_istri : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="pekerjaan_suami_istri">Pekerjaan Suami/Istri</label>
                                                <input type="text" name="pekerjaan_suami_istri" class="form-control"
                                                    id="pekerjaan_suami_istri"
                                                    value="{{ isset($ptk) ? $ptk->pekerjaan_suami_istri : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tmt_pns">TMT PNS</label>
                                                <input type="date" name="tmt_pns" class="form-control" id="tmt_pns"
                                                    value="{{ isset($ptk) ? $ptk->tmt_pns : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="npwp">NPWP</label>
                                                <input type="text" name="npwp" class="form-control" id="npwp"
                                                    value="{{ isset($ptk) ? $ptk->npwp : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nama_wajib_pajak">Nama Wajib Pajak</label>
                                                <input type="text" name="nama_wajib_pajak" class="form-control"
                                                    id="nama_wajib_pajak"
                                                    value="{{ isset($ptk) ? $ptk->nama_wajib_pajak : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                                <input type="text" name="kewarganegaraan" class="form-control"
                                                    id="kewarganegaraan"
                                                    value="{{ isset($ptk) ? $ptk->kewarganegaraan : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="bank">Bank</label>
                                                <input type="text" name="bank" class="form-control" id="bank"
                                                    value="{{ isset($ptk) ? $ptk->bank : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nomor_rekening_bank">Nomor Rekening Bank</label>
                                                <input type="text" name="nomor_rekening_bank" class="form-control"
                                                    id="nomor_rekening_bank"
                                                    value="{{ isset($ptk) ? $ptk->nomor_rekening_bank : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="rekening_atas_nama">Rekening Atas Nama</label>
                                                <input type="text" name="rekening_atas_nama" class="form-control"
                                                    id="rekening_atas_nama"
                                                    value="{{ isset($ptk) ? $ptk->rekening_atas_nama : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nik">NIK</label>
                                                <input type="text" name="nik" class="form-control" id="nik"
                                                    value="{{ isset($ptk) ? $ptk->nik : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="no_kk">Nomor KK</label>
                                                <input type="text" name="no_kk" class="form-control" id="no_kk"
                                                    value="{{ isset($ptk) ? $ptk->no_kk : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="karpeg">Karpeg</label>
                                                <input type="text" name="karpeg" class="form-control" id="karpeg"
                                                    value="{{ isset($ptk) ? $ptk->karpeg : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="karis_karsu">Karis/Karsu</label>
                                                <input type="text" name="karis_karsu" class="form-control"
                                                    id="karis_karsu" value="{{ isset($ptk) ? $ptk->karis_karsu : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="lintang">Lintang</label>
                                                <input type="text" name="lintang" class="form-control" id="lintang"
                                                    value="{{ isset($ptk) ? $ptk->lintang : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="bujur">Bujur</label>
                                                <input type="text" name="bujur" class="form-control" id="bujur"
                                                    value="{{ isset($ptk) ? $ptk->bujur : '' }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nuks">NUKS</label>
                                                <input type="text" name="nuks" class="form-control" id="nuks"
                                                    value="{{ isset($ptk) ? $ptk->nuks : '' }}">
                                            </div>
                                        </div>

                                        <input type="hidden" name="sekolah_id" value="{{ $sekolah_id }}">

                                        <button type="submit" class="btn btn-success">
                                            {{ isset($ptk) ? 'Update' : 'Create' }}
                                        </button>
                                    </form>
                                    <!--End Create Ptk Form-->
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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#sekolah_id').select2({
                placeholder: 'Select a school',
                allowClear: true
            });
        });
    </script>

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