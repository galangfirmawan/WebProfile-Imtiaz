<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="@yield('meta_description', 'Ma’had Tahfizh Imtiaz Abu Bakar Ash-Shiddiq merupakan lembaga pendidikan nonformal tingkat SMP khusus putra di bawah naungan Islamic Center Wadi Mubarak.')">

    <meta name="theme-color" content="#2a3956">

    <title>@yield('title', 'Ma’had Tahfizh Imtiaz Abu Bakar Ash-Shiddiq — Megamendung, Bogor')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Global / Shared CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">

    <!-- CSS Khusus Halaman -->
    @stack('styles')
</head>

<body>

    <!-- NAVBAR -->
    <header class="site-header" id="siteHeader">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <a class="navbar-brand brand-wrapper" href="{{ url('/#beranda') }}">
                    <img src="{{ asset('assets/images/Logo Hitam Imtiaz.png') }}" alt="Logo Ma’had Tahfizh Imtiaz"
                        class="brand-logo">

                    <span class="brand-text">
                        <strong>Imtiaz Alhafiz</strong>
                        <small>Ma’had Tahfizh Abu Bakar Ash-Shiddiq</small>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Buka navigasi">

                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ms-auto align-items-lg-center">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#beranda') }}">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#profil') }}">Profil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#pilar') }}">5 Pilar</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#program') }}">Program</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#keunggulan') }}">Keunggulan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#berita') }}">Berita</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#kontak') }}">Kontak</a>
                        </li>
                        <li class="nav-item ms-lg-3">
                            <a href="{{ route('pendaftaran') }}" class="btn btn-navbar">
                                Pendaftaran
                                <i class="fa-solid fa-arrow-up-right-from-square ms-2" aria-hidden="true"></i>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
    </header>

    <!-- KONTEN HALAMAN -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up">

                    <a href="{{ url('/#beranda') }}" class="footer-brand">
                        Imtiaz Alhafiz
                    </a>

                    <p class="footer-description">
                        Ma’had Tahfizh Imtiaz Abu Bakar Ash-Shiddiq.
                        Nurturing Qur’anic Leaders for the Future.
                    </p>

                </div>

                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">

                    <h3 class="footer-heading">Jelajahi</h3>

                    <ul class="footer-links">
                        <li><a href="{{ url('/#profil') }}">Profil</a></li>
                        <li><a href="{{ url('/#pilar') }}">5 Pilar Imtiaz</a></li>
                        <li><a href="{{ url('/#program') }}">Program</a></li>
                        <li><a href="{{ url('/#himmah') }}">HIMMAH</a></li>
                        <li><a href="{{ url('/#kompetensi') }}">Kompetensi Alumni</a></li>
                    </ul>

                </div>

                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">

                    <h3 class="footer-heading">Informasi</h3>

                    <ul class="footer-links">
                        <li><a href="{{ url('/#pengajar') }}">Pengajar</a></li>
                        <li><a href="{{ url('/#keunggulan') }}">Keunggulan</a></li>
                        <li><a href="{{ url('/#berita') }}">Berita</a></li>
                        <li><a href="{{ url('/#testimoni') }}">Testimoni</a></li>
                        <li><a href="">Pendaftaran</a></li>
                        <li><a href="{{ url('/#kontak') }}">Kontak</a></li>
                    </ul>

                </div>

            </div>

            <div class="footer-bottom">

                <p>
                    &copy; {{ date('Y') }}
                    Ma’had Tahfizh Imtiaz Abu Bakar Ash-Shiddiq.
                    Hak cipta dilindungi.
                </p>

                <a href="{{ url('/#beranda') }}" class="back-to-top">
                    Kembali ke atas
                    <i class="fa-solid fa-arrow-up ms-2" aria-hidden="true"></i>
                </a>

            </div>

        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation JavaScript -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <!-- AOS Initialization -->
    <script>
        AOS.init({
            duration: 900,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100,
            mirror: false,
            anchorPlacement: 'top-bottom'
        });
    </script>

    <!-- Global JavaScript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- JavaScript Khusus Halaman -->
    @stack('scripts')

</body>

</html>
