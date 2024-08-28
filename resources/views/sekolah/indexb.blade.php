<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Data Pokok Pendidikan Kab.Banyumas</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/Logo.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div class="min-h-full">
        <nav class="bg-[#DA1212]" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex items-center space-x-2 bg-[#11468F] px-3 py-2 rounded-md">
                            <!-- Logo -->
                            <img class="h-8 w-8" src="{{ asset('img/Logo.png') }}" alt="Your Company">

                            <!-- SIMDINDIK Text -->
                            <div class="flex flex-col">
                                <a href="#" class="text-sm font-medium text-white">
                                    DINAS PENDIDIKAN
                                </a>
                                <a href="#" class="text-xs font-medium text-white">
                                    KABUPATEN BANYUMAS
                                </a>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

                                {{-- <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#041562] hover:text-white">Team</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#041562] hover:text-white">Projects</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#041562] hover:text-white">Calendar</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#041562] hover:text-white">Reports</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div class="relative ml-3 flex items-center">
                                    <img class="h-10 w-15 mr-6" src="{{ asset('img/SDM.png') }}" alt="SDM">
                                    <button type="button" @click="isOpen = !isOpen"
                                        class="relative flex max-w-xs items-center rounded-full bg-[#DA1212]" text-sm
                                        focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2
                                        focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false"
                                        aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="{{ asset('img/profile2.png') }}"
                                            alt="">
                                    </button>
                                </div>

                                <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" @click="isOpen = !isOpen"
                            class="relative inline-flex items-center justify-center rounded-md bg-[#11468F] p-2 text-white hover:bg-[#041562] hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="{{ route('sekolah.index') }}"
                        class="block rounded-md bg-[#11468F] px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Dashboard</a>
                    {{-- <a href="{{ route('sekolah.tk') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">PAUD
                        & DIKMAS</a>
                    <a href="{{ route('sekolah.sd') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">SD</a>
                    <a href="{{ route('sekolah.smp') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">SMP</a>
                    <a href="{{ route('sekolah.index') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">All</a> --}}
                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="{{ asset('img/profile2.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">Your
                            Profile</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">Settings</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#041562] hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body mx-3">
                    <div class="text-center w-100 mb-3">
                        <img src="{{ asset('assets/img/Logo.png') }}" class="img-fluid" width="100px">
                    </div>
                    <h5 class="w-100 fs-3">Login</h5>
                    <form method="POST" action="">
                        <div class="mb-4">
                            <i class="bi bi-person-fill"></i>
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username"
                                value="">
                        </div>
                        <div class="mb-4">
                            <i class="bi bi-eye-fill"></i>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <input type="submit" class="btn btn-primary text-center w-100" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <img src="{{ asset('assets/img/logo.png') }}" width="200px">
            <h1></h1>
            <h2>Dinas Pendidikan Kab. Banyumas</h2>
            <h3>"Profile Pendidikan"</h3>
        </div>
    </section>

    <main id="main">
        <section id="featured-services" class="featured-services">
            <div class="container">
                <div
                    class="container d-flex flex-column justify-content-center align-items-center text-center position-relative">
                    <h1> </h1>
                    <h2> </h2>
                    <h3><a>Jenjang Pendidikan</a></h3>
                </div>
                <div
                    class="row center d-flex flex-row justify-content-center align-items-center text-center position-relative">
                    <div class="col-xl-3 col-md-4 d-flex col-sm-6" data-aos="zoom-out">
                        <div class="service-item position-relative col-12 text-center">
                            <div class="icon"><img src="../assets/img/IconTK.png" alt=""
                                    class="img-fluid icon" width="160"></div>
                            <h4><a href="{{ route('sekolah.tk') }}" class="stretched-link">PAUD & DIKMAS</a></h4>
                            <p>Jumlah Sekolah: {{ $totalTk ?? 1 }}</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4 d-flex col-sm-6" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative col-12 text-center">
                            <div class="icon"><img src="../assets/img/IconSD.png" alt=""
                                    class="img-fluid icon" width="180"></div>
                            <h4><a href="{{ route('sekolah.sd') }}" class="stretched-link">SD</a></h4>
                            <p>Jumlah Sekolah: {{ $totalSd ?? 0 }}</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4 d-flex col-sm-6" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative col-12 text-center">
                            <div class="icon"><img src="../assets/img/IconSSMP.png" alt=""
                                    class="img-fluid icon" width="200"></div>
                            <h4><a href="{{ route('sekolah.smp') }}" class="stretched-link">SMP</a></h4>
                            <p>Jumlah Sekolah: {{ $totalSmp ?? 0 }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- grafik --}}
        <!-- Area Chart -->
        <div class="container">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold merah-fonty">Grafik Sekolah</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer bg-danger">
        <div class="footer-legal text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        Didesain Oleh : <strong><span>Dinas Pendidikan Kab. Banyumas</span></strong>
                    </div>
                    <div class="credits">
                        - V01.2024 <a href="https://ittelkom-pwt.ac.id/">ITTP</a>
                    </div>
                </div>
                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="google"><i class="bi bi-google"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        (function() {
            const form = document.querySelector('#checkform');
            const checkboxes = form.querySelectorAll('input[type=checkbox]');
            const firstCheckbox = checkboxes[0];
            const checkboxLength = checkboxes.length;

            function init() {
                for (let i = 0; i < checkboxLength; i++) {
                    checkboxes[i].addEventListener('change', checkValidity);
                }

                checkValidity();
            }

            function isChecked() {
                for (let i = 0; i < checkboxLength; i++) {
                    if (checkboxes[i].checked) return true;
                }

                return false;
            }

            function checkValidity() {
                const errorMessage = !isChecked() ? 'At least one checkbox must be selected.' : '';
                firstCheckbox.setCustomValidity(errorMessage);
            }

            init();
        })();
    </script>

</body>

</html>
