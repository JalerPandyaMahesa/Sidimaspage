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
                                        <li class="breadcrumb-item active">Create Peserta Didik</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Create Peserta Didik Details</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- Form row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <label class="col-form-label">Create Peserta Didik (xls, xlsx)</label>
                                    <form action="{{ route('pesertadidik.import', $sekolah_id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                            <label for="file">Import Peserta Didik:</label>
                                            <input type="file" name="file" required>
                                        </div>
                                        <button type="submit">Upload</button>
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

                                    <h2></h2>
                                    <!-- <h4 class="header-title">Fill all fields</h4> -->
                                    <!--Create Peserta Didik Form-->
                                    <form action="{{ isset($pesertadidik) ? route('pesertadidik.update', $pesertadidik->peserta_didik_id) : route('pesertadidik.store') }}" method="POST">
                                        @csrf
                                        @if (isset($pesertadidik))
                                            @method('PUT')
                                        @endif
                                    
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nama" class="col-form-label">Nama:</label>
                                                <input type="text" id="nama" name="nama" class="form-control"
                                                    value="{{ isset($pesertadidik) ? $pesertadidik->nama : '' }}" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir:</label>
                                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control"
                                                    value="{{ isset($pesertadidik) ? $pesertadidik->nama : '' }}" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
    <div class="form-group col-md-6">
        <label for="nisn" class="col-form-label">NISN:</label>
        <input type="text" id="nisn" name="nisn" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->nisn : '' }}" required>
    </div>
    <div class="form-group col-md-6">
        <label for="nik" class="col-form-label">NIK:</label>
        <input type="text" id="nik" name="nik" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->nik : '' }}" required>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="no_kk" class="col-form-label">No KK:</label>
        <input type="text" id="no_kk" name="no_kk" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->no_kk : '' }}" required>
    </div>
    <div class="form-group col-md-6">
        <label for="tempat_lahir" class="col-form-label">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->tempat_lahir : '' }}" required>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin:</label>
        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="Laki-laki" {{ isset($pesertadidik) && $pesertadidik->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ isset($pesertadidik) && $pesertadidik->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="agama" class="col-form-label">Agama:</label>
        <input type="text" id="agama" name="agama" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->agama : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nama_ayah" class="col-form-label">Nama Ayah:</label>
        <input type="text" id="nama_ayah" name="nama_ayah" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->nama_ayah : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="nik_ayah" class="col-form-label">NIK Ayah:</label>
        <input type="text" id="nik_ayah" name="nik_ayah" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->nik_ayah : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="tahun_lahir_ayah" class="col-form-label">Tahun Lahir Ayah:</label>
        <input type="number" id="tahun_lahir_ayah" name="tahun_lahir_ayah" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->tahun_lahir_ayah : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="jenjang_pendidikan_ayah_keterangan" class="col-form-label">Jenjang Pendidikan Ayah:</label>
        <input type="text" id="jenjang_pendidikan_ayah_keterangan" name="jenjang_pendidikan_ayah_keterangan" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->jenjang_pendidikan_ayah_keterangan : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="pekerjaan_ayah" class="col-form-label">Pekerjaan Ayah:</label>
        <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->pekerjaan_ayah : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="nama_ibu_kandung" class="col-form-label">Nama Ibu Kandung:</label>
        <input type="text" id="nama_ibu_kandung" name="nama_ibu_kandung" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->nama_ibu_kandung : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nik_ibu" class="col-form-label">NIK Ibu:</label>
        <input type="text" id="nik_ibu" name="nik_ibu" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->nik_ibu : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="tahun_lahir_ibu" class="col-form-label">Tahun Lahir Ibu:</label>
        <input type="number" id="tahun_lahir_ibu" name="tahun_lahir_ibu" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->tahun_lahir_ibu : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="jenjang_pendidikan_ibu_keterangan" class="col-form-label">Jenjang Pendidikan Ibu:</label>
        <input type="text" id="jenjang_pendidikan_ibu_keterangan" name="jenjang_pendidikan_ibu_keterangan" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->jenjang_pendidikan_ibu_keterangan : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="pekerjaan_ibu" class="col-form-label">Pekerjaan Ibu:</label>
        <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->pekerjaan_ibu : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="alamat_jalan" class="col-form-label">Alamat Jalan:</label>
        <input type="text" id="alamat_jalan" name="alamat_jalan" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->alamat_jalan : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="rt" class="col-form-label">RT:</label>
        <input type="number" id="rt" name="rt" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->rt : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="rw" class="col-form-label">RW:</label>
        <input type="number" id="rw" name="rw" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->rw : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="nama_dusun" class="col-form-label">Nama Dusun:</label>
        <input type="text" id="nama_dusun" name="nama_dusun" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->nama_dusun : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="desa_kelurahan" class="col-form-label">Desa/Kelurahan:</label>
        <input type="text" id="desa_kelurahan" name="desa_kelurahan" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->desa_kelurahan : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="kode_wilayah" class="col-form-label">Kode Wilayah:</label>
        <input type="text" id="kode_wilayah" name="kode_wilayah" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->kode_wilayah : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="kode_kecamatan" class="col-form-label">Kode Kecamatan:</label>
        <input type="text" id="kode_kecamatan" name="kode_kecamatan" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->kode_kecamatan : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="kecamatan" class="col-form-label">Kecamatan:</label>
        <input type="text" id="kecamatan" name="kecamatan" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->kecamatan : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="kode_kabupaten" class="col-form-label">Kode Kabupaten:</label>
        <input type="text" id="kode_kabupaten" name="kode_kabupaten" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->kode_kabupaten : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="kabupaten" class="col-form-label">Kabupaten:</label>
        <input type="text" id="kabupaten" name="kabupaten" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->kabupaten : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="kode_provinsi" class="col-form-label">Kode Provinsi:</label>
        <input type="text" id="kode_provinsi" name="kode_provinsi" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->kode_provinsi : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="provinsi" class="col-form-label">Provinsi:</label>
        <input type="text" id="provinsi" name="provinsi" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->provinsi : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="kode_pos" class="col-form-label">Kode Pos:</label>
        <input type="text" id="kode_pos" name="kode_pos" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->kode_pos : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="lintang" class="col-form-label">Lintang:</label>
        <input type="text" id="lintang" name="lintang" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->lintang : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="bujur" class="col-form-label">Bujur:</label>
        <input type="text" id="bujur" name="bujur" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->bujur : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="nama_wali" class="col-form-label">Nama Wali:</label>
        <input type="text" id="nama_wali" name="nama_wali" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->nama_wali : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="tahun_lahir_wali" class="col-form-label">Tahun Lahir Wali:</label>
        <input type="number" id="tahun_lahir_wali" name="tahun_lahir_wali" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->tahun_lahir_wali : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="nipd" class="col-form-label">NIPD:</label>
        <input type="text" id="nipd" name="nipd" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->nipd : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="tanggal_masuk_sekolah" class="col-form-label">Tanggal Masuk Sekolah:</label>
        <input type="date" id="tanggal_masuk_sekolah" name="tanggal_masuk_sekolah" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->tanggal_masuk_sekolah : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="kebutuhan_khusus" class="col-form-label">Kebutuhan Khusus:</label>
        <input type="text" id="kebutuhan_khusus" name="kebutuhan_khusus" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->kebutuhan_khusus : '' }}" >
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="jenis_tinggal" class="col-form-label">Jenis Tinggal:</label>
        <input type="text" id="jenis_tinggal" name="jenis_tinggal" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->jenis_tinggal : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="alat_transportasi" class="col-form-label">Alat Transportasi:</label>
        <input type="text" id="alat_transportasi" name="alat_transportasi" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->alat_transportasi : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="anak_keberapa" class="col-form-label">Anak Keberapa:</label>
        <input type="number" id="anak_keberapa" name="anak_keberapa" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->anak_keberapa : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="nik_wali" class="col-form-label">NIK Wali:</label>
        <input type="text" id="nik_wali" name="nik_wali" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->nik_wali : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nomor_telepon_rumah" class="col-form-label">Nomor Telepon Rumah:</label>
        <input type="text" id="nomor_telepon_rumah" name="nomor_telepon_rumah" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->nomor_telepon_rumah : '' }}">
    </div>
    <div class="form-group col-md-6">
        <label for="nomor_telepon_seluler" class="col-form-label">Nomor Telepon Seluler:</label>
        <input type="text" id="nomor_telepon_seluler" name="nomor_telepon_seluler" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->nomor_telepon_seluler : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="email" class="col-form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->email : '' }}">
    </div>
    <div class="form-group col-md-6">
        <label for="reg_akta_lahir" class="col-form-label">Registrasi Akta Lahir:</label>
        <input type="text" id="reg_akta_lahir" name="reg_akta_lahir" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->reg_akta_lahir : '' }}">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="tinggi_badan" class="col-form-label">Tinggi Badan (cm):</label>
        <input type="number" id="tinggi_badan" name="tinggi_badan" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->tinggi_badan : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="berat_badan" class="col-form-label">Berat Badan (kg):</label>
        <input type="number" id="berat_badan" name="berat_badan" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->berat_badan : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="lingkar_kepala" class="col-form-label">Lingkar Kepala (cm):</label>
        <input type="number" id="lingkar_kepala" name="lingkar_kepala" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->lingkar_kepala : '' }}">
    </div>
    <div class="form-group col-md-6">
        <label for="jarak_rumah_ke_sekolah_km" class="col-form-label">Jarak Rumah ke Sekolah (km):</label>
        <input type="number" id="jarak_rumah_ke_sekolah_km" name="jarak_rumah_ke_sekolah_km" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->jarak_rumah_ke_sekolah_km : '' }}" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="menit_tempuh_ke_sekolah" class="col-form-label">Waktu Tempuh ke Sekolah (menit):</label>
        <input type="number" id="menit_tempuh_ke_sekolah" name="menit_tempuh_ke_sekolah" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->menit_tempuh_ke_sekolah : '' }}" >
    </div>
    <div class="form-group col-md-6">
        <label for="jumlah_saudara_kandung" class="col-form-label">Jumlah Saudara Kandung:</label>
        <input type="number" id="jumlah_saudara_kandung" name="jumlah_saudara_kandung" class="form-control"
               value="{{ isset($pesertadidik) ? $pesertadidik->jumlah_saudara_kandung : '' }}" >
    </div>
</div>

                                    
                                        <input type="hidden" name="sekolah_id" value="{{ $sekolah_id }}">
                                    
                                        <button type="submit" class="btn btn-success">
                                            {{ isset($pesertadidik) ? 'Update' : 'Create' }}
                                        </button>
                                    </form>                                    
                                    <!--End Create Peserta Didik Form-->
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
        $(document).ready(function() {
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
