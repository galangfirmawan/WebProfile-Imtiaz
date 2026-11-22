@extends('homepage.header_footer')

@section('title', 'Ma’had Tahfizh Imtiaz Abu Bakar Ash-Shiddiq — Megamendung, Bogor')

@section('meta_description',
    'Ma’had Tahfizh Imtiaz Abu Bakar Ash-Shiddiq merupakan lembaga pendidikan nonformal tingkat
    SMP khusus putra di bawah naungan Islamic Center Wadi Mubarak. Berfokus pada Tahfizh Al-Qur’an, Bahasa Arab, Ulum
    Syar’i, adab, dan kepemimpinan.')

@section('content')

    <!-- HERO -->
    <section class="hero-section" id="beranda">
        <div class="container">
            <div class="row align-items-center gy-5">

                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-right">

                        <div class="eyebrow">
                            <span class="eyebrow-dot"></span>
                            Tahfizh Al-Qur'an
                            <span aria-hidden="true">&middot;</span>
                            Ulum Syar'i
                            <span aria-hidden="true">&middot;</span>
                            Kepemimpinan
                        </div>

                        <h1 class="hero-title">
                            Nurturing Qur’anic Leaders
                            <span>for the Future.</span>
                        </h1>

                        <p class="hero-description">
                            Ma’had Tahfizh Imtiaz Abu Bakar Ash-Shiddiq
                            menghadirkan pendidikan jenjang SMP khusus putra
                            dengan fokus pada Tahfizh Al-Qur’an, Bahasa Arab,
                            pembinaan adab dan akhlak, serta penguatan karakter.
                        </p>

                        <div class="hero-actions">
                            <a href="#profil" class="btn btn-primary-custom">
                                Mengenal Ma’had
                                <i class="fa-solid fa-arrow-up-right-from-square ms-2" aria-hidden="true"></i>
                            </a>

                            <a href="#program" class="btn btn-text-custom">
                                Program Kami
                                <i class="fa-solid fa-arrow-right ms-2" aria-hidden="true"></i>
                            </a>
                        </div>

                        <div class="hero-note">
                            <span class="hero-note-line"></span>
                            <p>
                                Membina generasi Qur’ani yang berilmu,
                                beradab, dan siap memimpin masa depan.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-visual" data-aos="fade-left">

                        <div class="hero-image-frame">
                            <img src="{{ asset('assets/images/ngaji gazebo.jpeg') }}"
                                alt="Kegiatan santri dalam lingkungan Ma’had" class="hero-image">
                        </div>

                        <div class="hero-caption">
                            <div class="caption-mark" aria-hidden="true">
                                <i class="fa-solid fa-book-open"></i>
                            </div>

                            <div>
                                <strong>Ma’had Tahfizh Imtiaz</strong>
                                <span>Nurturing Qur’anic Leaders for the Future</span>
                            </div>
                        </div>

                        <div class="hero-decoration hero-decoration-one"></div>
                        <div class="hero-decoration hero-decoration-two"></div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- PROFIL MA'HAD -->
    <section class="intro-section" id="profil">
        <div class="container">
            <div class="row align-items-start gy-4">

                <div class="col-lg-4" data-aos="fade-right">
                    <span class="section-label">MENGENAL IMTIAZ</span>

                    <h2 class="intro-title">
                        Pendidikan Qur’ani untuk membentuk generasi masa depan.
                    </h2>
                </div>

                <div class="col-lg-7 offset-lg-1" data-aos="fade-left">

                    <p class="intro-description">
                        Ma’had Tahfizh Imtiaz Abu Bakar Ash-Shiddiq
                        merupakan lembaga pendidikan nonformal tingkat
                        SMP khusus putra yang berada di bawah naungan
                        Islamic Center Wadi Mubarak.
                    </p>

                    <p class="intro-description">
                        Hadir sejak tahun 2022, Ma’had berkomitmen
                        menghadirkan pendidikan berkualitas melalui
                        kurikulum komprehensif yang mengintegrasikan
                        Tahfizh Al-Qur’an dan Ulum Syar’i.
                    </p>

                    <p class="intro-description">
                        Proses pendidikan berada di bawah pengawasan
                        Islamic Center Wadi Mubarak serta dibimbing
                        oleh para asatidz yang kompeten dan berpengalaman,
                        termasuk yang telah berguru kepada para masyaikh
                        dari Timur Tengah.
                    </p>

                    <a href="#pengajar" class="text-link">
                        Mengenal pengajar kami
                        <i class="fa-solid fa-arrow-up-right-from-square ms-2" aria-hidden="true"></i>
                    </a>

                </div>

            </div>
        </div>
    </section>


    <!-- 5 PILAR IMTIAZ -->
    <section class="vision-mission-section" id="pilar">
        <div class="container">

            <div class="section-heading" data-aos="fade-up">
                <span class="section-label">OUR 5 PILLARS</span>

                <h2 class="section-title">
                    Lima Pilar Pendidikan Imtiaz
                </h2>

                <p class="section-description">
                    Lima pilar yang menjadi landasan pembinaan kemampuan
                    Al-Qur’an, adab, keilmuan, minat, dan penguatan hafalan santri.
                </p>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-5 g-3">

                <!-- Pilar 1 -->
                <div class="col" data-aos="fade-up">
                    <article class="value-card pilar-card h-100">
                        <span class="value-number">01</span>

                        <div class="value-symbol" aria-hidden="true">
                            <i class="fa-solid fa-book-quran"></i>
                        </div>

                        <h3>Tahsin & Tahfizh</h3>

                        <p>
                            Membaca Al-Qur’an dengan tajwid yang benar
                            dan menghafalkan Al-Qur’an 30 juz secara tartil.
                        </p>

                        <span class="value-line"></span>
                    </article>
                </div>

                <!-- Pilar 2 -->
                <div class="col" data-aos="fade-up" data-aos-delay="50">
                    <article class="value-card pilar-card h-100">
                        <span class="value-number">02</span>

                        <div class="value-symbol" aria-hidden="true">
                            <i class="fa-solid fa-handshake"></i>
                        </div>

                        <h3>Adab & Akhlaq</h3>

                        <p>
                            Menanamkan nilai-nilai Islam melalui pembiasaan
                            sopan santun dan kedisiplinan dalam kehidupan sehari-hari.
                        </p>

                        <span class="value-line"></span>
                    </article>
                </div>

                <!-- Pilar 3 -->
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <article class="value-card pilar-card h-100">
                        <span class="value-number">03</span>

                        <div class="value-symbol" aria-hidden="true">
                            <i class="fa-solid fa-book-open"></i>
                        </div>

                        <h3>Bahasa Arab & Ulum Syar’i</h3>

                        <p>
                            Menguasai Bahasa Arab melalui Nahwu, Shorof,
                            dan Hiwar, serta mempelajari ilmu syar’i seperti
                            Akidah, Fiqih, dan Hadits.
                        </p>

                        <span class="value-line"></span>
                    </article>
                </div>

                <!-- Pilar 4 -->
                <div class="col" data-aos="fade-up" data-aos-delay="150">
                    <article class="value-card pilar-card h-100">
                        <span class="value-number">04</span>

                        <div class="value-symbol" aria-hidden="true">
                            <i class="fa-solid fa-futbol"></i>
                        </div>

                        <h3>Ekstrakurikuler</h3>

                        <p>
                            Mengembangkan minat dan bakat santri melalui
                            kegiatan memanah, berkuda, olahraga, dan teknologi.
                        </p>

                        <span class="value-line"></span>
                    </article>
                </div>

                <!-- Pilar 5 -->
                <div class="col" data-aos="fade-up" data-aos-delay="200">
                    <article class="value-card pilar-card h-100">
                        <span class="value-number">05</span>

                        <div class="value-symbol" aria-hidden="true">
                            <i class="fa-solid fa-scroll"></i>
                        </div>

                        <h3>Hifdzul Mutun</h3>

                        <p>
                            Menghafalkan matan-matan ilmiah sebagai pondasi
                            keilmuan, meliputi Tajwid, Hadits, Fiqih, dan Nahwu.
                        </p>

                        <span class="value-line"></span>
                    </article>
                </div>

            </div>

        </div>
    </section>


    <!-- PENGAJAR -->
    <section class="mudir-section section-soft" id="pengajar">
        <div class="container">

            <div class="row align-items-center gy-5">


                <div class="col-lg-5" data-aos="fade-right">
                    <div class="mudir-photo-wrapper">

                        <!-- DEKORASI BELAKANG -->
                        <span class="mudir-decoration mudir-circle-one"></span>
                        <span class="mudir-decoration mudir-circle-two"></span>

                        <!-- FOTO -->
                        <img src="{{ asset('assets/images/ngaji gazebo.jpeg') }}"
                            alt="Kegiatan pembelajaran Al-Qur’an di Ma’had" class="mudir-photo" loading="lazy">

                        <!-- DEKORASI DEPAN -->
                        <span class="mudir-decoration mudir-square"></span>

                        <!-- CAPTION -->
                        <div class="mudir-photo-caption">
                            <span class="mudir-caption-icon" aria-hidden="true">
                                <i class="fa-solid fa-book-quran"></i>
                            </span>

                            <div>
                                <strong>Pengajar Huffazh</strong>
                                <span>Pembinaan Qur’ani dan keilmuan</span>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-lg-7" data-aos="fade-left">

                    <span class="section-label">MEET OUR TEACHERS</span>

                    <h2 class="section-title mudir-title">
                        Dibimbing oleh pengajar yang kompeten dan bersanad.
                    </h2>

                    <div class="mudir-quote-mark" aria-hidden="true">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>

                    <blockquote class="mudir-quote">
                        Sebagai langkah strategis untuk memperkuat
                        kualitas pendidikan Qur’ani dan spiritualitas
                        di lingkungan santri, Ma’had Tahfizh Imtiaz
                        Abu Bakar Ash-Shiddiq memiliki para pengajar
                        Huffazh yang kompeten dan bersanad.

                        <br><br>

                        Para pengajar tersebut telah melalui pengujian
                        oleh para masyaikh dari Timur Tengah. Kehadiran
                        mereka menjadi bagian dari komitmen Ma’had
                        dalam menghidupkan lingkungan Qur’ani,
                        menjaga kesinambungan keilmuan, serta
                        menanamkan nilai adab dan kedalaman spiritual
                        kepada para santri.
                    </blockquote>

                    <div class="mudir-profile">
                        <strong>Pengajar Ma’had Imtiaz</strong>
                        <span>Pengajar Huffazh dan pembinaan keislaman</span>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- PROGRAM PENDIDIKAN -->
    <section class="program-section" id="program">
        <div class="container">

            <div class="section-heading" data-aos="fade-up">
                <span class="section-label">OUR PROGRAMS</span>

                <h2 class="section-title">
                    Program Pendidikan dan Pembinaan
                </h2>

                <p class="section-description">
                    Berbagai program pembelajaran dan pembinaan untuk
                    membentuk santri yang berilmu, beradab, dan berkarakter.
                </p>
            </div>

            <div class="program-list">

                <div class="program-item" data-aos="fade-up">
                    <span class="program-item-number">01</span>
                    <div class="program-item-icon">
                        <i class="fa-solid fa-book-quran"></i>
                    </div>
                    <div class="program-item-content">
                        <h3>Tahsin & Tahfizh Al-Qur’an 30 Juz</h3>
                        <p>
                            Pembinaan kualitas bacaan Al-Qur’an dan hafalan
                            hingga 30 juz secara tartil.
                        </p>
                    </div>
                </div>

                <div class="program-item" data-aos="fade-up">
                    <span class="program-item-number">02</span>
                    <div class="program-item-icon">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div class="program-item-content">
                        <h3>Daurah Metode At-Tibyan</h3>
                        <p>
                            Program pembelajaran metode At-Tibyan
                            dalam pendidikan Al-Qur’an.
                        </p>
                    </div>
                </div>

                <div class="program-item" data-aos="fade-up">
                    <span class="program-item-number">03</span>
                    <div class="program-item-icon">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <div class="program-item-content">
                        <h3>Daurah Adab Penuntut Ilmu</h3>
                        <p>
                            Pembinaan adab dan akhlak dalam proses
                            menuntut ilmu serta kehidupan sehari-hari.
                        </p>
                    </div>
                </div>

                <div class="program-item" data-aos="fade-up">
                    <span class="program-item-number">04</span>
                    <div class="program-item-icon">
                        <i class="fa-solid fa-mosque"></i>
                    </div>
                    <div class="program-item-content">
                        <h3>Pelatihan Muazin dan Imam</h3>
                        <p>
                            Pembekalan kemampuan dan tanggung jawab
                            sebagai muazin dan imam.
                        </p>
                    </div>
                </div>

                <div class="program-item" data-aos="fade-up">
                    <span class="program-item-number">05</span>
                    <div class="program-item-icon">
                        <i class="fa-solid fa-book-open-reader"></i>
                    </div>
                    <div class="program-item-content">
                        <h3>Kajian Tadabbur Al-Qur’an</h3>
                        <p>
                            Kajian untuk memahami dan mengambil pelajaran
                            dari ayat-ayat Al-Qur’an.
                        </p>
                    </div>
                </div>

                <div class="program-item" data-aos="fade-up">
                    <span class="program-item-number">06</span>
                    <div class="program-item-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="program-item-content">
                        <h3>Program Ulum Syar’i</h3>
                        <p>
                            Pembelajaran ilmu keislaman meliputi Akidah,
                            Fiqih, dan Sirah.
                        </p>
                    </div>
                </div>

                <div class="program-item" data-aos="fade-up">
                    <span class="program-item-number">07</span>
                    <div class="program-item-icon">
                        <i class="fa-solid fa-child-reaching"></i>
                    </div>
                    <div class="program-item-content">
                        <h3>Daurah Pendidikan Fase Baligh</h3>
                        <p>
                            Pendidikan dan pembekalan santri dalam
                            menghadapi fase baligh.
                        </p>
                    </div>
                </div>

                <div class="program-item" data-aos="fade-up">
                    <span class="program-item-number">08</span>
                    <div class="program-item-icon">
                        <i class="fa-solid fa-language"></i>
                    </div>
                    <div class="program-item-content">
                        <h3>Pendidikan Bahasa Arab</h3>
                        <p>
                            Pembelajaran Bahasa Arab untuk menunjang
                            pemahaman sumber-sumber keislaman.
                        </p>
                    </div>
                </div>

                <div class="program-item" data-aos="fade-up">
                    <span class="program-item-number">09</span>
                    <div class="program-item-icon">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div class="program-item-content">
                        <h3>Pendidikan Bahasa Inggris</h3>
                        <p>
                            Pembelajaran Bahasa Inggris untuk
                            mengembangkan kemampuan komunikasi santri.
                        </p>
                    </div>
                </div>

                <div class="program-item" data-aos="fade-up">
                    <span class="program-item-number">10</span>
                    <div class="program-item-icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <div class="program-item-content">
                        <h3>Pelatihan Kedisiplinan HIMMAH</h3>
                        <p>
                            Pembinaan kedisiplinan, karakter, dan
                            kepemimpinan melalui HIMMAH.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- HIMMAH -->
    <section class="facility-section section-soft" id="himmah">
        <div class="container">

            <div class="row align-items-center gy-5">

                <div class="col-lg-6" data-aos="fade-right">
                    <div class="facility-visual">

                        <img src="{{ asset('assets/img/fasilitas-pesantren.svg') }}" alt="Ilustrasi pembinaan santri"
                            class="facility-image" loading="lazy">

                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1" data-aos="fade-left">

                    <span class="section-label">HIMMAH IMTIAZ</span>

                    <h2 class="section-title facility-title">
                        Membentuk santri yang tangguh, mandiri, dan amanah.
                    </h2>

                    <p class="section-description">
                        HIMMAH merupakan singkatan dari Himpunan
                        Mujahid Muda Amanah. Pola kepengasuhan ini
                        menjadi bagian dari pembinaan kedisiplinan
                        santri untuk membentuk karakter tangguh,
                        berjiwa pemimpin, dan penuh semangat juang.
                    </p>

                    <p class="section-description">
                        Kegiatannya memadukan kemandirian, cinta alam,
                        latihan ketangkasan, dan kekompakan. Selain
                        melatih fisik dan mental, HIMMAH juga
                        menanamkan nilai cinta Islam dan ukhuwah
                        Islamiyah.
                    </p>

                    <p class="section-description">
                        Melalui pembinaan ini, santri diarahkan
                        menjadi pribadi yang amanah, peduli lingkungan,
                        dan siap berkontribusi bagi masyarakat.
                    </p>

                </div>

            </div>

        </div>
    </section>


    <!-- 6 KOMPETENSI ALUMNI -->
    <section class="intro-section competency-section" id="kompetensi">
        <div class="container">

            <div class="competency-heading" data-aos="fade-up">
                <span class="section-label">GRADUATE COMPETENCIES</span>

                <h2 class="section-title">
                    Enam Kompetensi Alumni Imtiaz
                </h2>

                <p class="section-description">
                    Kompetensi yang menjadi arah pengembangan kemampuan,
                    keilmuan, dan karakter lulusan Ma’had.
                </p>
            </div>

            <div class="competency-timeline">

                <div class="competency-track" data-aos="timeline-line"></div>

                <!-- 01 -->
                <article class="competency-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="competency-point">
                        <span class="competency-number">01</span>

                        <div class="competency-icon">
                            <i class="fa-solid fa-book-quran"></i>
                        </div>
                    </div>

                    <div class="competency-content">
                        <h3>Penguasaan Al-Qur’an</h3>
                        <p>
                            Memiliki penguasaan Al-Qur’an sebagai
                            salah satu kompetensi utama lulusan.
                        </p>
                    </div>
                </article>

                <!-- 02 -->
                <article class="competency-item" data-aos="fade-up" data-aos-delay="350">
                    <div class="competency-point">
                        <span class="competency-number">02</span>

                        <div class="competency-icon">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                    </div>

                    <div class="competency-content">
                        <h3>Ulum Syar’i yang Kuat dan Adaptif</h3>
                        <p>
                            Mengembangkan penguasaan ilmu syar’i
                            sebagai bekal keilmuan dan kehidupan.
                        </p>
                    </div>
                </article>

                <!-- 03 -->
                <article class="competency-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="competency-point">
                        <span class="competency-number">03</span>

                        <div class="competency-icon">
                            <i class="fa-solid fa-people-group"></i>
                        </div>
                    </div>

                    <div class="competency-content">
                        <h3>Kemandirian & Kepemimpinan</h3>
                        <p>
                            Memiliki kemandirian dan kesiapan
                            untuk memikul tanggung jawab.
                        </p>
                    </div>
                </article>

                <!-- 04 -->
                <article class="competency-item" data-aos="fade-up" data-aos-delay="650">
                    <div class="competency-point">
                        <span class="competency-number">04</span>

                        <div class="competency-icon">
                            <i class="fa-solid fa-handshake-angle"></i>
                        </div>
                    </div>

                    <div class="competency-content">
                        <h3>Kontribusi Sosial & Keumatan</h3>
                        <p>
                            Memiliki orientasi untuk memberikan
                            kontribusi bagi masyarakat dan umat.
                        </p>
                    </div>
                </article>

                <!-- 05 -->
                <article class="competency-item" data-aos="fade-up" data-aos-delay="800">
                    <div class="competency-point">
                        <span class="competency-number">05</span>

                        <div class="competency-icon">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                    </div>

                    <div class="competency-content">
                        <h3>Akhlak & Adab Islami</h3>
                        <p>
                            Menjadikan akhlak dan adab Islami
                            sebagai bagian dari karakter lulusan.
                        </p>
                    </div>
                </article>

                <!-- 06 -->
                <article class="competency-item" data-aos="fade-up" data-aos-delay="950">
                    <div class="competency-point">
                        <span class="competency-number">06</span>

                        <div class="competency-icon">
                            <i class="fa-solid fa-language"></i>
                        </div>
                    </div>

                    <div class="competency-content">
                        <h3>Keterampilan Bahasa Arab</h3>
                        <p>
                            Mengembangkan keterampilan Bahasa Arab
                            sebagai salah satu kompetensi lulusan.
                        </p>
                    </div>
                </article>

            </div>
        </div>
    </section>


    <!-- KEUNGGULAN -->
    <section class="facility-section section-soft" id="keunggulan">
        <div class="container">

            <div class="section-heading" data-aos="fade-up">

                <span class="section-label">OUR EXCELLENCE</span>

                <h2 class="section-title">
                    Keunggulan Ma’had Imtiaz.
                </h2>

                <p class="section-description">
                    Hal-hal yang menjadi bagian dari pendekatan
                    pendidikan dan pembinaan santri di Ma’had.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <article class="value-card h-100" data-aos="fade-up">
                        <span class="value-number">01</span>

                        <div class="value-symbol">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>

                        <h3>SDM Pengajar Bersanad</h3>

                        <p>
                            Didukung pengajar bersanad yang merupakan
                            alumni Sekolah Tinggi Ilmu Ushuluddin
                            (STIU) Wadi Mubarak dan Lembaga Ilmu
                            Pengetahuan Islam dan Arab (LIPIA) Jakarta.
                        </p>

                        <span class="value-line"></span>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="value-card h-100" data-aos="fade-up" data-aos-delay="100">
                        <span class="value-number">02</span>

                        <div class="value-symbol">
                            <i class="fa-solid fa-book-open"></i>
                        </div>

                        <h3>Integrasi Kurikulum</h3>

                        <p>
                            Mengintegrasikan kurikulum Tahfizh
                            Al-Qur’an dan Ulum Syar’i dalam
                            proses pendidikan.
                        </p>

                        <span class="value-line"></span>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="value-card h-100" data-aos="fade-up" data-aos-delay="200">
                        <span class="value-number">03</span>

                        <div class="value-symbol">
                            <i class="fa-solid fa-building-columns"></i>
                        </div>

                        <h3>Pengawasan Wadi Mubarak</h3>

                        <p>
                            Berada di bawah pengawasan Islamic Center
                            Wadi Mubarak serta para asatidz di
                            lingkungan Wadi Mubarak.
                        </p>

                        <span class="value-line"></span>
                    </article>
                </div>

                <div class="col-md-6 col-lg-6">
                    <article class="value-card h-100" data-aos="fade-up">
                        <span class="value-number">04</span>

                        <div class="value-symbol">
                            <i class="fa-solid fa-leaf"></i>
                        </div>

                        <h3>Suasana Sejuk dan Asri</h3>

                        <p>
                            Lingkungan Ma’had Tahfizh Abu Bakar
                            Ash-Shiddiq memiliki suasana yang
                            sejuk dan asri.
                        </p>

                        <span class="value-line"></span>
                    </article>
                </div>

                <div class="col-md-6 col-lg-6">
                    <article class="value-card h-100" data-aos="fade-up" data-aos-delay="100">
                        <span class="value-number">05</span>

                        <div class="value-symbol">
                            <i class="fa-solid fa-people-roof"></i>
                        </div>

                        <h3>Pembinaan Berbasis Kekeluargaan</h3>

                        <p>
                            Pembinaan santri dilakukan dengan
                            pendekatan kekeluargaan dan
                            pendampingan personal.
                        </p>

                        <span class="value-line"></span>
                    </article>
                </div>

            </div>

        </div>
    </section>


    <!-- BERITA -->
    <section class="news-section section-soft" id="berita">
        <div class="container">

            <div class="news-heading" data-aos="fade-up">

                <div>
                    <span class="section-label">KABAR PESANTREN</span>

                    <h2 class="section-title">
                        Kegiatan dan cerita dari Ma’had.
                    </h2>
                </div>

                <a href="#berita" class="text-link">
                    Semua berita
                    <i class="fa-solid fa-arrow-up-right-from-square ms-2" aria-hidden="true"></i>
                </a>

            </div>

            <div class="news-empty" data-aos="fade-up" data-aos-delay="150">

                <div class="news-empty-mark" aria-hidden="true">
                    <i class="fa-regular fa-newspaper"></i>
                </div>

                <h3>Setiap proses memiliki cerita.</h3>

                <p>
                    Informasi kegiatan santri, pembelajaran,
                    prestasi, pengumuman, dan dokumentasi
                    Ma’had akan ditampilkan di sini.
                </p>

            </div>

        </div>
    </section>


    <!-- TESTIMONI -->
    <section class="testimonials-section" id="testimoni">
        <div class="container">

            <div class="section-heading" data-aos="fade-up">
                <span class="section-label">FEEDBACK & TESTIMONI</span>

                <h2 class="section-title">
                    Cerita dari wali santri Imtiaz.
                </h2>

                <p class="section-description">
                    Pengalaman wali santri mengenai proses pendidikan
                    dan pembinaan putra mereka di Ma’had Tahfizh Imtiaz.
                </p>
            </div>

            <div class="testimonial-slider-wrapper" data-aos="fade-up">

                <button type="button" class="testimonial-nav-btn testimonial-prev" id="testimonialPrev"
                    aria-label="Testimoni sebelumnya">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <div class="testimonial-slider" id="testimonialSlider">

                    <!-- 01 -->
                    <article class="testimonial-card">
                        <div class="testimonial-card-header">
                            <span class="testimonial-category">PENGALAMAN ALUMNI</span>
                            <i class="fa-solid fa-quote-right testimonial-quote-icon"></i>
                        </div>

                        <p class="testimonial-text">
                            Alhamdulillah, bimbingan asatidzah Ma'had
                            Imtiaz yang penuh kekeluargaan membuat
                            Fahma tumbuh mencintai Al-Qur'an hingga
                            menjadi Wisudawan Terbaik Wadi Mubarak
                            2026. Terima kasih atas wasilah kebaikan
                            ini, semoga Imtiaz selalu diberkahi.
                            Aamiin.
                        </p>

                        <div class="testimonial-author">
                            <div class="testimonial-avatar">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="testimonial-author-info">
                                <strong>Ummu Fahma</strong>
                                <span>Wali Santri Alumni Imtiaz</span>
                            </div>
                        </div>
                    </article>

                    <!-- 02 -->
                    <article class="testimonial-card">
                        <div class="testimonial-card-header">
                            <span class="testimonial-category">PERKEMBANGAN SANTRI</span>
                            <i class="fa-solid fa-quote-right testimonial-quote-icon"></i>
                        </div>

                        <p class="testimonial-text">
                            Alhamdulillah, hafalan, kedisiplinan,
                            dan akhlak Azami berkembang luar biasa
                            selama di Ma’had Tahfizh Imtiaz.
                            Imtiaz benar-benar membentuk pribadi
                            yang bertanggung jawab dan mencintai
                            Al-Qur’an. Terima kasih asatidzah atas
                            bimbingan tulusnya, semoga menjadi
                            amal jariyah dan Imtiaz terus mencetak
                            generasi Qur'ani. Jazakumullahu khairan.
                        </p>

                        <div class="testimonial-author">
                            <div class="testimonial-avatar">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="testimonial-author-info">
                                <strong>Wali Azami</strong>
                                <span>Wali Santri Imtiaz</span>
                            </div>
                        </div>
                    </article>

                    <!-- 03 -->
                    <article class="testimonial-card">
                        <div class="testimonial-card-header">
                            <span class="testimonial-category">PEMBINAAN AKHLAK</span>
                            <i class="fa-solid fa-quote-right testimonial-quote-icon"></i>
                        </div>

                        <p class="testimonial-text">
                            Bismillah, Alhamdulillah. Di Ma'had
                            Tahfiz Imtiaz, putra kami tidak sekadar
                            menghafal Al-Qur'an, tapi benar-benar
                            dibentuk adab dan akhlaknya. Perubahannya
                            sangat nyata; tutur kata dan sikapnya
                            menjadi jauh lebih santun. Kami sangat
                            terkesan dengan ketulusan asatidz serta
                            suasana kekeluargaannya yang erat bak
                            rumah kedua. InsyaAllah, Imtiaz adalah
                            pilihan terbaik untuk menitipkan anak
                            menghafal Al-Qur'an. Barakallahu fiikum.
                        </p>

                        <div class="testimonial-author">
                            <div class="testimonial-avatar">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="testimonial-author-info">
                                <strong>Wali Zakiri</strong>
                                <span>Wali Santri Imtiaz</span>
                            </div>
                        </div>
                    </article>

                    <!-- 04 -->
                    <article class="testimonial-card">
                        <div class="testimonial-card-header">
                            <span class="testimonial-category">HAFALAN & KEMANDIRIAN</span>
                            <i class="fa-solid fa-quote-right testimonial-quote-icon"></i>
                        </div>

                        <p class="testimonial-text">
                            Hafalan anak kami semakin mutqin, santun,
                            dan mandiri sejak di Pondok Tahfidz Imtiaz.
                            Berkat bimbingan asatidz yang sabar,
                            program muraja'ah terstruktur, serta
                            suasana kekeluargaan pondok yang hangat
                            hingga terbawa sampai alumni, kami merasa
                            sangat tenang dan yakin menitipkan anak
                            kami di sini.
                        </p>

                        <div class="testimonial-author">
                            <div class="testimonial-avatar">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="testimonial-author-info">
                                <strong>Wali Ardileyo</strong>
                                <span>Wali Santri Imtiaz</span>
                            </div>
                        </div>
                    </article>

                </div>

                <button type="button" class="testimonial-nav-btn testimonial-next" id="testimonialNext"
                    aria-label="Testimoni berikutnya">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

            </div>
        </div>
    </section>


    <!-- PENDAFTARAN -->
    <section class="admission-section" id="pendaftaran">
        <div class="container">

            <div class="admission-banner" data-aos="zoom-in">

                <div class="admission-content">

                    <span class="section-label admission-label">
                        PENERIMAAN SANTRI BARU
                    </span>

                    <h2>
                        Mari tumbuh bersama dalam lingkungan pendidikan Qur’ani.
                    </h2>

                    <p>
                        Kenali lebih dekat Ma’had Tahfizh Imtiaz
                        Abu Bakar Ash-Shiddiq dan informasi
                        penerimaan santri baru tahun ajaran 2027–2028.
                    </p>

                    <a href="https://www.imtiaz.tsirwah.com/ppsb2027-2028-ddiq" target="_blank" rel="noopener noreferrer"
                        class="btn btn-admission">

                        Daftar Sekarang

                        <i class="fa-solid fa-arrow-up-right-from-square ms-2" aria-hidden="true"></i>

                    </a>

                </div>

                <div class="admission-decoration" aria-hidden="true">
                    <i class="fa-solid fa-book-open"></i>
                </div>

            </div>

        </div>
    </section>


    <!-- KONTAK -->
    <section class="contact-section" id="kontak">
        <div class="container">

            <div class="row gy-5">

                <div class="col-lg-5" data-aos="fade-right">

                    <span class="section-label">HUBUNGI KAMI</span>

                    <h2 class="section-title contact-title">
                        Mari mengenal Imtiaz lebih dekat.
                    </h2>

                    <p class="section-description">
                        Untuk informasi mengenai program pendidikan
                        dan penerimaan santri baru, silakan
                        menghubungi kontak resmi Ma’had.
                    </p>

                </div>

                <div class="col-lg-6 offset-lg-1" data-aos="fade-left">

                    <div class="contact-details">

                        <div class="contact-item">
                            <span class="contact-label">Nama lembaga</span>
                            <p>Ma’had Tahfizh Imtiaz Abu Bakar Ash-Shiddiq</p>
                        </div>

                        <div class="contact-item">
                            <span class="contact-label">Jenjang pendidikan</span>
                            <p>Pendidikan nonformal tingkat SMP khusus putra</p>
                        </div>

                        <div class="contact-item">
                            <span class="contact-label">Naungan</span>
                            <p>Islamic Center Wadi Mubarak</p>
                        </div>

                        <div class="contact-item">
                            <span class="contact-label">Lokasi</span>
                            <p>Megamendung, Bogor, Jawa Barat</p>
                        </div>

                        <div class="contact-item">
                            <span class="contact-label">Telepon / WhatsApp Pendaftaran</span>
                            <p>
                                <a href="https://wa.me/6287753670367" target="_blank" rel="noopener noreferrer">
                                    +62 877-5367-0367
                                </a>
                            </p>
                        </div>

                        <div class="contact-item">
                            <span class="contact-label">Pendaftaran Online</span>
                            <p>
                                <a href="https://www.imtiaz.tsirwah.com/ppsb2027-2028-ddiq" target="_blank"
                                    rel="noopener noreferrer">
                                    Formulir Pendaftaran 2027–2028
                                </a>
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection
