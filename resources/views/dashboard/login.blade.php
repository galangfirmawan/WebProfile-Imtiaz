<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Administrator — Ma'had Imtiaz</title>

    <meta name="description" content="Halaman login administrator Ma'had Imtiaz Abu Bakar Ash-Shiddiq.">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Login CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>

    <main class="login-page">

        <div class="login-container">

            <!-- LEFT PANEL -->
            <section class="login-intro">

                <div class="login-brand">
                    <div class="login-logo">
                        <img src="{{ asset('assets/images/Logo Hitam Imtiaz.png') }}" alt="Logo Ma'had Imtiaz">
                    </div>

                    <div class="login-brand-text">
                        <strong>IMTIAZ</strong>
                        <span>ADMINISTRATION SYSTEM</span>
                    </div>
                </div>

                <div class="login-intro-content">

                    <span class="intro-eyebrow">
                        <span class="intro-dot"></span>
                        MANAGEMENT PORTAL
                    </span>

                    <h1>
                        Selamat Datang
                        <span>Kembali.</span>
                    </h1>

                    <p>
                        Kelola administrasi, data santri, tenaga pengajar,
                        serta informasi Ma'had Imtiaz melalui satu sistem
                        manajemen yang terintegrasi.
                    </p>

                    <div class="login-feature-list">

                        <div class="login-feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <span>Manajemen Data Santri</span>
                        </div>

                        <div class="login-feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <span>Administrasi Pendidikan</span>
                        </div>

                        <div class="login-feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <span>Monitoring dan Pelaporan</span>
                        </div>

                    </div>

                </div>

                <div class="login-intro-footer">
                    <span>MA'HAD TAHFIZH IMTIAZ ABU BAKAR ASH-SHIDDIQ</span>
                    <span>MEGAMENDUNG, BOGOR</span>
                </div>

                <div class="intro-decoration intro-decoration-one"></div>
                <div class="intro-decoration intro-decoration-two"></div>

            </section>


            <!-- RIGHT PANEL -->
            <section class="login-form-section">

                <div class="login-form-wrapper">

                    <div class="login-mobile-brand">
                        <img src="{{ asset('assets/images/Logo Hitam Imtiaz.png') }}" alt="Logo Imtiaz">
                        <span>IMTIAZ ADMINISTRATION SYSTEM</span>
                    </div>

                    <div class="login-heading">
                        <span class="login-heading-label">ADMINISTRATOR PORTAL</span>

                        <h2>Masuk ke Akun</h2>

                        <p>
                            Silakan masukkan email dan kata sandi
                            untuk melanjutkan ke dashboard.
                        </p>
                    </div>


                    <!-- LOGIN ERROR -->
                    @if ($errors->any())
                        <div class="login-alert login-alert-danger">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <div>
                                <strong>Login gagal</strong>
                                <span>{{ $errors->first() }}</span>
                            </div>
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="login-alert login-alert-success">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>
                                <strong>Informasi</strong>
                                <span>{{ session('status') }}</span>
                            </div>
                        </div>
                    @endif


                    <!-- LOGIN FORM -->
                    <form action="{{ url('/login') }}" method="POST" class="login-form">

                        @csrf

                        <!-- EMAIL -->
                        <div class="login-form-group">

                            <label for="email">
                                Alamat Email
                            </label>

                            <div class="login-input-wrapper">
                                <span class="login-input-icon">
                                    <i class="fa-regular fa-envelope"></i>
                                </span>

                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    placeholder="nama@email.com" autocomplete="username" required autofocus>
                            </div>

                        </div>


                        <!-- PASSWORD -->
                        <div class="login-form-group">

                            <div class="password-label-row">
                                <label for="password">
                                    Kata Sandi
                                </label>
                            </div>

                            <div class="login-input-wrapper">
                                <span class="login-input-icon">
                                    <i class="fa-solid fa-lock"></i>
                                </span>

                                <input type="password" id="password" name="password" placeholder="Masukkan kata sandi"
                                    autocomplete="current-password" required>

                                <button type="button" class="password-toggle" id="togglePassword"
                                    aria-label="Tampilkan kata sandi">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                            </div>

                        </div>


                        <!-- REMEMBER -->
                        <div class="login-form-options">

                            <label class="remember-checkbox">
                                <input type="checkbox" name="remember" value="1">

                                <span class="custom-checkbox"></span>

                                <span>Ingat saya</span>
                            </label>

                        </div>


                        <!-- SUBMIT -->
                        <button type="submit" class="login-submit-button">

                            <span>Masuk ke Dashboard</span>

                            <i class="fa-solid fa-arrow-right"></i>

                        </button>

                    </form>


                    <div class="login-security-note">
                        <i class="fa-solid fa-shield-halved"></i>

                        <span>
                            Akses terbatas untuk pengguna yang memiliki
                            akun dan izin akses.
                        </span>
                    </div>

                    <div class="login-form-footer">
                        <span>&copy; {{ date('Y') }} Ma'had Imtiaz Abu Bakar Ash-Shiddiq</span>
                        <span>Administration System</span>
                    </div>

                </div>

            </section>

        </div>

    </main>


    <!-- PASSWORD TOGGLE -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');

            if (passwordInput && togglePassword) {

                togglePassword.addEventListener('click', function() {

                    const isPassword = passwordInput.type === 'password';

                    passwordInput.type = isPassword ? 'text' : 'password';

                    this.innerHTML = isPassword ?
                        '<i class="fa-regular fa-eye-slash"></i>' :
                        '<i class="fa-regular fa-eye"></i>';

                    this.setAttribute(
                        'aria-label',
                        isPassword ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi'
                    );

                });

            }

        });
    </script>

</body>

</html>
