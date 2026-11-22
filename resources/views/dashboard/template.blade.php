<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Dashboard Admin | Ma’had Imtiaz')</title>

    <meta name="description" content="@yield('meta_description', 'Dashboard Administrasi Ma’had Imtiaz Abu Bakar Ash-Shiddiq.')">
    <meta name="theme-color" content="#2A3956">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Dashboard CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/template.css') }}">
    

    @stack('styles')
</head>

<body>

    <div class="dashboard-wrapper">

        <!-- SIDEBAR OVERLAY -->
        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <!-- SIDEBAR -->
        <aside class="dashboard-sidebar" id="dashboardSidebar">

            <!-- BRAND -->
            <div class="sidebar-brand">
                <a href="{{ url('/dashboard') }}" class="brand-link">
                    <img src="{{ asset('assets/images/Logo Hitam Imtiaz.png') }}" alt="Logo Imtiaz">

                    <div class="brand-text">
                        <span class="brand-name">IMTIAZ</span>
                        <span class="brand-subtitle">ADMINISTRATION</span>
                    </div>
                </a>

                <button type="button" class="sidebar-close" id="sidebarClose" aria-label="Tutup sidebar">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- SIDEBAR MENU -->
            <div class="sidebar-content">

                <div class="sidebar-menu-label">MENU UTAMA</div>

                <nav class="sidebar-nav">

                    <a href="{{ url('/dashboard') }}"
                        class="sidebar-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <span class="sidebar-icon">
                            <i class="fa-solid fa-gauge-high"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('pendaftaran.index') }}"
                        class="sidebar-link {{ request()->routeIs('pendaftaran.*') ? 'active' : '' }}">
                        <span class="sidebar-icon">
                            <i class="fa-solid fa-file-signature"></i>
                        </span>
                        <span>Pendaftaran</span>
                    </a>

                    <a href="#" class="sidebar-link">
                        <span class="sidebar-icon">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span>Data Santri</span>
                    </a>

                    <a href="#" class="sidebar-link">
                        <span class="sidebar-icon">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </span>
                        <span>Data Pengajar</span>
                    </a>

                    <div class="sidebar-menu-label sidebar-menu-label-spaced">
                        WEBSITE
                    </div>

                    <a href="#" class="sidebar-link">
                        <span class="sidebar-icon">
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span>Berita & Artikel</span>
                    </a>

                    <a href="#" class="sidebar-link">
                        <span class="sidebar-icon">
                            <i class="fa-solid fa-book-open"></i>
                        </span>
                        <span>Program Pendidikan</span>
                    </a>

                    <a href="#" class="sidebar-link">
                        <span class="sidebar-icon">
                            <i class="fa-solid fa-images"></i>
                        </span>
                        <span>Galeri</span>
                    </a>

                    <div class="sidebar-menu-label sidebar-menu-label-spaced">
                        PENGATURAN
                    </div>

                    <a href="#" class="sidebar-link">
                        <span class="sidebar-icon">
                            <i class="fa-solid fa-user-gear"></i>
                        </span>
                        <span>Pengguna</span>
                    </a>

                    <a href="#" class="sidebar-link">
                        <span class="sidebar-icon">
                            <i class="fa-solid fa-gear"></i>
                        </span>
                        <span>Pengaturan Website</span>
                    </a>

                </nav>
            </div>

            <!-- SIDEBAR FOOTER -->
            <div class="sidebar-footer">
                <div class="sidebar-footer-content">
                    <div class="sidebar-footer-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <div>
                        <span class="sidebar-footer-title">Admin Panel</span>
                        <span class="sidebar-footer-subtitle">Sistem Manajemen Imtiaz</span>
                    </div>
                </div>
            </div>

        </aside>


        <!-- MAIN AREA -->
        <div class="dashboard-main">

            <!-- NAVBAR -->
            <header class="dashboard-navbar">

                <div class="navbar-left">
                    <button type="button" class="sidebar-toggle" id="sidebarToggle"
                        aria-label="Buka atau tutup sidebar">
                        <i class="fa-solid fa-bars"></i>
                    </button>

                    <div class="navbar-page-info">
                        <span class="navbar-breadcrumb">Administrator</span>
                        <h1 class="navbar-page-title">@yield('page_title', 'Dashboard')</h1>
                    </div>
                </div>

                <div class="navbar-right">

                    <a href="{{ url('/') }}" target="_blank" class="navbar-website-link">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        <span>Lihat Website</span>
                    </a>

                    <div class="navbar-divider"></div>

                    <div class="navbar-user">
                        <div class="navbar-user-avatar">
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <div class="navbar-user-info">
                            <span class="navbar-user-name">{{ auth()->user()->name ?? 'Administrator' }}</span>
                            <span class="navbar-user-role">Administrator</span>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="navbar-dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" aria-label="Menu akun">
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end navbar-user-dropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-user me-2"></i>
                                    Profil Saya
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>


                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf

                                    <button type="submit" class="dropdown-item dropdown-logout">
                                        <i class="fa-solid fa-right-from-bracket me-2"></i>
                                        Keluar
                                    </button>
                                </form>
                            </li>

                        </ul>
                    </div>

                </div>

            </header>


            <!-- PAGE CONTENT -->
            <main class="dashboard-content">

                @yield('content')

            </main>


            <!-- FOOTER -->
            <footer class="dashboard-footer">
                <div class="footer-left">
                    <span>© {{ date('Y') }} Ma’had Imtiaz Abu Bakar Ash-Shiddiq.</span>
                    <span class="footer-separator">•</span>
                    <span>All rights reserved.</span>
                </div>

                <div class="footer-right">
                    <span>Administrator Panel</span>
                    <span class="footer-version">v1.0</span>
                </div>
            </footer>

        </div>

    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SIDEBAR SCRIPT -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const body = document.body;
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebarClose = document.getElementById('sidebarClose');
            const sidebarOverlay = document.getElementById('sidebarOverlay');

            function openSidebar() {
                body.classList.add('sidebar-open');
            }

            function closeSidebar() {
                body.classList.remove('sidebar-open');
            }

            sidebarToggle?.addEventListener('click', function() {
                if (window.innerWidth <= 991) {
                    body.classList.toggle('sidebar-open');
                } else {
                    body.classList.toggle('sidebar-collapsed');
                }
            });

            sidebarClose?.addEventListener('click', closeSidebar);
            sidebarOverlay?.addEventListener('click', closeSidebar);

            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    closeSidebar();
                }
            });

            window.addEventListener('resize', function() {
                if (window.innerWidth > 991) {
                    closeSidebar();
                }
            });
        });
    </script>

    @stack('scripts')

</body>

</html>
