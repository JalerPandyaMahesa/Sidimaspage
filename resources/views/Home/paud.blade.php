<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ asset('img/LogoBMS2.png') }}" type="">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/3/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="{{ asset('asset/3/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('asset/3/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('asset/3/css/responsive.css') }}" rel="stylesheet" />

    <title>Paud & Dikmas</title>
    <style>
        .master-bg {
            background-image: url({{ asset('img/bg.png') }});
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            //height: 100vh;
            z-index: 0;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

</head>

<body>
    <!-- Master BG -->
    <div class="master-bg">

        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ route('Home.index') }}">
                        <img src="{{ asset('img/Logo_Sidimas2.png') }}" alt="Logo SiDimas">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('Home.index') }}">Beranda <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="team.html">Paud & Dikmas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">SD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="service.html">SMP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i>
                                    Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <div class="content">

            <!-- Tabel Section -->
            <section id="tabel-paud" class="paud_section">
                <div class="container">
                    <div class="card-box">
                        <h4 class="header-title"></h4>
                        <div class="table-container"> <!-- Mulai kotak putih -->
                            <div class="mb-2">
                                <div class="row">
                                    <div class="col-12 text-sm-center form-inline">
                                        <div class="form-group mr-2" style="display:none"></div>
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
                                <button id="export-button" class="btn btn-primary mb-3">Export to Excel</button>
                                <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0"
                                    data-page-size="7">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th data-toggle="true">NPSN</th>
                                            <th data-hide="phone">Nama</th>
                                            <th data-hide="phone">Bentuk Pendidikan</th>
                                            <th data-hide="phone">Status Sekolah</th>
                                            <th data-hide="phone">Kecamatan</th>
                                            <th data-hide="phone">Alamat</th>
                                        </tr>
                                    </thead>
                                    @foreach ($sekolah as $index => $s)
                                        <tbody>
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $s->npsn }}</td>
                                                <td>{{ $s->nama }}</td>
                                                <td>{{ $s->bentuk_pendidikan }}</td>
                                                <td>{{ $s->status_sekolah }}</td>
                                                <td>{{ $s->kecamatan }}</td>
                                                <td>{{ $s->alamat_jalan }}</td>
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
                            </div> <!-- end .table-responsive -->
                        </div> <!-- end .table-container -->
                    </div> <!-- end card-box -->
                </div> <!-- end container -->
            </section>
            <!-- End Tabel Section -->

            <!-- Footer -->
            <section class="footer_section">
                <div class="container">
                    <div>
                        <p class="text-atas">
                            Di Desain Oleh : <span>Dinas Pendidikan Pemerintahan Kab. Banyumas</span>
                        </p>
                        <p class="text-bawah">
                            - V01.2024 <a href="https://ittelkom-pwt.ac.id/">Tel-U Purwokerto</a>
                        </p>
                    </div>

                </div>
            </section>
            <!-- end Footer -->


        </div>
        <!-- End Master BG -->

        <!-- jQery -->
        <script type="text/javascript" src="{{ asset('asset/3/js/jquery-3.4.1.min.js') }}"></script>
        <!-- popper js -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <!-- bootstrap js -->
        <script type="text/javascript" src="{{ asset('asset/3/js/bootstrap.js') }}"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

        <!-- owl slider -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
        </script>
        <!-- custom js -->
        <script type="text/javascript" src="{{ asset('asset/3/js/custom.js') }}"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterKecamatan = document.getElementById('filter-kecamatan');
                const tableRows = document.querySelectorAll('#demo-foo-filtering tbody tr');

                filterKecamatan.addEventListener('change', function() {
                    const selectedKecamatan = filterKecamatan.value.toLowerCase();
                    let rowIndex = 1; // Start row index from 1

                    tableRows.forEach(row => {
                        const kecamatanCell = row.querySelector('td:nth-child(4)');
                        const kecamatan = kecamatanCell ? kecamatanCell.textContent.toLowerCase() : '';

                        if (selectedKecamatan === '' || kecamatan.includes(selectedKecamatan)) {
                            row.style.display = ''; // Show the row
                            row.querySelector('td').textContent = rowIndex++; // Update the row number
                        } else {
                            row.style.display = 'none'; // Hide the row
                        }
                    });
                });

                document.getElementById('export-button').addEventListener('click', function() {
                    const table = document.getElementById('demo-foo-filtering');
                    const workbook = XLSX.utils.table_to_book(table, {
                        sheet: "Sheet1"
                    });
                    XLSX.writeFile(workbook, 'table-export.xlsx');
                });
            });
        </script>
</body>

</html>
