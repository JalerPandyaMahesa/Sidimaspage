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

    <title>Dinas Pendidikan Kabupaten Banyumas</title>
    <style>
        .master-bg {
            background-image: url({{ asset('img/bg.png') }});
            background-size: cover;
            background-repeat: no-repeat;
            z-index: -2;
        }
    </style>
</head>


<body>
    <!-- Master BG -->
    <div class="master-bg">
        <div class="hero_area">

            <div class="hero_bg_box">
                <div class="bg_img_box">
                    <img src="{{ asset('img/hero-red3.png') }}" alt="">
                </div>
            </div>
            <!-- header section strats -->
            <header class="header_section">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand" href="{{ route('home.index') }}">
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
                                    <a class="nav-link" href="{{ route('home.index') }}">Beranda <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="team.html">Jenjang</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">Sekolah</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="service.html">Grafik</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="why.html">Tentang</a>
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
                <!-- slider section -->
                <section class="slider_section ">
                    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="detail-box">
                                                <h1>
                                                    Dinas Pendidikan <br>
                                                    Kabupaten Banyumas
                                                </h1>
                                                <p>
                                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque
                                                    magnam
                                                    fugiat hic? Esse dicta aliquid error repudiandae earum suscipit
                                                    fugiat
                                                    molestias, veniam, vel architecto veritatis delectus repellat
                                                    modi
                                                    impedit
                                                    sequi.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="img-box ">
                                                <img style='padding: 45px 0 40px' class="logo-bms tengah"
                                                    src="img/LogoBMS2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end slider section -->


                <!-- jenjang section -->
                <section class="service_section layout_padding " style="padding: 100px 0">
                    <div class="service_container">
                        <div class="container ">
                            <div class="heading_container heading_center">
                                <h2>
                                    Jenjang <span>Pendidikan</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="col-md-4 ">
                                    <div class="jenjang-pendidikan">
                                        <div class="box jenjang-box paud">
                                            <div class="content-wrapper">
                                                <img src="{{ asset('img/paud.png') }}" alt="PAUD & Dikmas">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 ">
                                    <div class="jenjang-pendidikan">
                                        <div class="box jenjang-box sd">
                                            <div class="content-wrapper">
                                                <img src="{{ asset('img/sd.png') }}" alt="SEKOLAH Dasar">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 ">
                                    <div class="jenjang-pendidikan">
                                        <div class="box jenjang-box smp">
                                            <div class="content-wrapper">
                                                <img src="{{ asset('img/smp.png') }}" alt="SEKOLAH Menengah">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- end jenjang section -->

                <!-- Jumlah Sekolah -->
                <section class="service_section layout_padding" style="padding: 100px 0">
                    <div class="service_container">
                        <div class="container">
                            <div class="heading_container heading_center">
                                <h2>
                                    Jumlah <span>Sekolah</span>
                                </h2>
                            </div>
                            <div class="grid-container">
                                <div class="grid-item">
                                    <div class="school-box">
                                        <h3>PAUD & DIKMAS</h3>
                                        <p>999</p>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="school-box">
                                        <h3>Sekolah Menengah</h3>
                                        <p>999</p>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="school-box">
                                        <h3>Sekolah Dasar</h3>
                                        <p>999</p>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="school-box">
                                        <h3>Jumlah Guru & PGTK</h3>
                                        <p>999</p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <div class="grid-item">
                                        <div class="school-box">
                                            <h3>PAUD & DIKMAS</h3>
                                            <p>999</p>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="school-box">
                                            <h3>Sekolah Menengah</h3>
                                            <p>999</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="grid-item">
                                        <div class="school-box">
                                            <h3>Sekolah Dasar</h3>
                                            <p>999</p>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="school-box">
                                            <h3>Jumlah Guru & PGTK</h3>
                                            <p>999</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </section>
                <!-- end Jumlah Sekolah -->

                <!-- Grafik Section -->
                <section class="grafik-section layout_padding ">
                    <div class="grafik-container">
                        <div class="row">
                            <div class="col-4">
                                <div class="isi-text-grafik">
                                    <p class="isi-text-kepala" >Grafik Siswa</p>
                                    <p class="isi-text-badan" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="grafik-isi justify-content-center align-items-center">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Grafik Siswa</h6>
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="chart-area">
                                                <canvas id="myAreaChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Grafik Section -->

                <!-- Tentang Section -->
                `<section class="tentang-section layout padding">
                    <div class="tentang-container">
                        <div class="row">
                            <div class="col-6">
                                <div class="isi-tentang">
                                    <div class="">
                                        <img src="{{ asset('img/logo_sidimas.png') }}" alt="">
                                    </div>
                                    <div>
                                        tulisan
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="isi-tentang">
                                    <div class="">
                                        gamabr
                                    </div>
                                    <div>
                                        tulisan
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- End Tentang Section -->



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
        {{-- <!-- scroll -->
        <script>
            window.addEventListener('scroll', () => {
                const header = document.querySelector('.header_section');
                if (window.scrollY > 0) {
                    header.style.backgroundColor = 'white';
                    header.querySelectorAll('.navbar-nav .nav-link, .navbar-brand span').forEach(item => {
                        item.style.color = 'black';
                    });
                    header.querySelector('.navbar-brand img').src = '{{ asset('img / Logo - hitam.png   ') }}';
                    header.classList.add('scrolled'); // Tambahkan kelas 'scrolled'
                    if (navbarToggler && window.getComputedStyle(navbarToggler).display !== 'none') {
                        navbarToggler.querySelectorAll('span').forEach(span => {
                            span.style.backgroundColor = 'black'; // Ubah warna span menjadi hitam
                        });
                    }
                } else {
                    header.style.backgroundColor = 'transparent';
                    header.querySelectorAll('.navbar-nav .nav-link, .navbar-brand span').forEach(item => {
                        item.style.color = 'white';
                    });
                    header.querySelector('.navbar-brand img').src = '{{ asset('img / Logo_Sidimas2.png    ') }}';
                    header.classList.remove('scrolled');
                    if (navbarToggler && window.getComputedStyle(navbarToggler).display !== 'none') {
                        navbarToggler.querySelectorAll('span').forEach(span => {
                            span.style.backgroundColor = '';
                        });
                    }
                }

            });
        </script> --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('myAreaChart').getContext('2d');
            var myBarChart = new Chart(ctx, {
                type: 'bar', // Ganti tipe grafik menjadi 'bar'
                data: {
                    labels: ['Paud & Dikmas', 'Sekolah Dasar', 'Sekolah Menengah'],
                    datasets: [{
                        label: 'Jumlah Siswa',
                        data: [100, 200, 150,],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
</body>

</html>
