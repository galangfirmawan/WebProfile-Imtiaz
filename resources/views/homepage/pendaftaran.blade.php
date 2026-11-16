@extends('homepage.header_footer')

@section('title', 'Pendaftaran Santri Baru 2027–2028 — Ma’had Imtiaz')

@section('meta_description', 'Formulir pendaftaran santri baru tahun ajaran 2027–2028 Ma’had Tahfizh Imtiaz Abu Bakar
    Ash-Shiddiq, Megamendung, Bogor.')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/pendaftaran.css') }}">
    @endpush

@section('content')

    <!-- PAGE HERO -->
    <section class="registration-hero">
        <div class="container">

            <div class="registration-hero-content" data-aos="fade-up">

                <span class="section-label">
                    PENERIMAAN SANTRI BARU
                </span>

                <h1>
                    Formulir Pendaftaran
                    <span>Santri Baru 2027–2028</span>
                </h1>

                <p>
                    Selamat datang di halaman pendaftaran Ma’had Tahfizh
                    Imtiaz Abu Bakar Ash-Shiddiq. Silakan lengkapi formulir
                    berikut dengan data yang benar untuk memulai proses
                    pendaftaran calon santri.
                </p>

                <div class="registration-hero-info">
                    <span>
                        <i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>
                        Jenjang SMP
                    </span>

                    <span>
                        <i class="fa-solid fa-mars" aria-hidden="true"></i>
                        Khusus Putra
                    </span>

                    <span>
                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                        Megamendung, Bogor
                    </span>
                </div>

            </div>

        </div>
    </section>


    <!-- REGISTRATION CONTENT -->
    <section class="registration-section">
        <div class="container">

            <div class="row gy-5">

                <!-- FORM -->
                <div class="col-lg-8">

                    <div class="registration-form-wrapper" data-aos="fade-up">

                        <div class="registration-form-heading">
                            <span class="section-label">FORMULIR PENDAFTARAN</span>

                            <h2>Data Calon Santri</h2>

                            <p>
                                Mohon isi seluruh informasi yang diperlukan
                                dengan lengkap dan sesuai kondisi sebenarnya.
                            </p>
                        </div>


                        <form action="#" method="POST" class="registration-form" id="registrationForm">

                            @csrf

                            <!-- 01 IDENTITAS CALON SANTRI -->
                            <div class="form-section">

                                <div class="form-section-heading">
                                    <span class="form-section-number">01</span>

                                    <div>
                                        <h3>Identitas Calon Santri</h3>
                                        <p>Informasi pribadi calon santri yang akan didaftarkan.</p>
                                    </div>
                                </div>

                                <div class="row g-3">

                                    <div class="col-12">
                                        <label for="nama_santri" class="form-label">
                                            Nama Lengkap Calon Santri
                                            <span class="required-mark">*</span>
                                        </label>

                                        <input type="text" id="nama_santri" name="nama_santri" class="form-control"
                                            placeholder="Masukkan nama lengkap sesuai dokumen" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="nama_panggilan" class="form-label">
                                            Nama Panggilan
                                        </label>

                                        <input type="text" id="nama_panggilan" name="nama_panggilan" class="form-control"
                                            placeholder="Nama panggilan">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="jenis_kelamin" class="form-label">
                                            Jenis Kelamin
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required>
                                            <option value="" selected disabled>Pilih jenis kelamin</option>
                                            <option value="L">Laki-laki</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="tempat_lahir" class="form-label">
                                            Tempat Lahir
                                            <span class="required-mark">*</span>
                                        </label>

                                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control"
                                            placeholder="Contoh: Bogor" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="tanggal_lahir" class="form-label">
                                            Tanggal Lahir
                                            <span class="required-mark">*</span>
                                        </label>

                                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control"
                                            required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="anak_ke" class="form-label">
                                            Anak Ke-
                                        </label>

                                        <input type="number" id="anak_ke" name="anak_ke" class="form-control"
                                            min="1" placeholder="Contoh: 2">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="jumlah_saudara" class="form-label">
                                            Jumlah Saudara
                                        </label>

                                        <input type="number" id="jumlah_saudara" name="jumlah_saudara" class="form-control"
                                            min="0" placeholder="Contoh: 3">
                                    </div>

                                </div>

                            </div>


                            <!-- 02 ALAMAT CALON SANTRI -->
                            <div class="form-section">

                                <div class="form-section-heading">
                                    <span class="form-section-number">02</span>

                                    <div>
                                        <h3>Alamat Calon Santri</h3>
                                        <p>Informasi alamat tempat tinggal calon santri.</p>
                                    </div>
                                </div>

                                <div class="row g-3">

                                    <div class="col-12">
                                        <label for="alamat_santri" class="form-label">
                                            Alamat Lengkap
                                            <span class="required-mark">*</span>
                                        </label>

                                        <textarea id="alamat_santri" name="alamat_santri" class="form-control" rows="3"
                                            placeholder="Nama jalan, nomor rumah, RT/RW, desa atau kelurahan" required></textarea>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="provinsi_santri" class="form-label">
                                            Provinsi
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="provinsi_santri" name="provinsi_santri" class="form-select" required>
                                            <option value="" selected disabled>Memuat provinsi...</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="kabupaten_santri" class="form-label">
                                            Kabupaten / Kota
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="kabupaten_santri" name="kabupaten_santri" class="form-select"
                                            disabled required>
                                            <option value="" selected disabled>Pilih provinsi dahulu</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="kecamatan_santri" class="form-label">
                                            Kecamatan
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="kecamatan_santri" name="kecamatan_santri" class="form-select"
                                            disabled required>
                                            <option value="" selected disabled>Pilih kabupaten/kota dahulu</option>
                                        </select>
                                    </div>

                                </div>

                            </div>


                            <!-- 03 DATA ORANG TUA / WALI -->
                            <div class="form-section">

                                <div class="form-section-heading">
                                    <span class="form-section-number">03</span>

                                    <div>
                                        <h3>Data Orang Tua / Wali</h3>
                                        <p>Informasi ayah, ibu, wali, dan kontak utama keluarga.</p>
                                    </div>
                                </div>

                                <div class="row g-3">

                                    <div class="col-12">
                                        <h6 class="fw-bold mb-1">Data Ayah</h6>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="nama_ayah" class="form-label">
                                            Nama Ayah
                                            <span class="required-mark">*</span>
                                        </label>

                                        <input type="text" id="nama_ayah" name="nama_ayah" class="form-control"
                                            placeholder="Nama lengkap ayah" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="pekerjaan_ayah" class="form-label">
                                            Pekerjaan Ayah
                                        </label>

                                        <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah"
                                            class="form-control" placeholder="Pekerjaan ayah">
                                    </div>


                                    <div class="col-12 mt-4">
                                        <h6 class="fw-bold mb-1">Data Ibu</h6>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="nama_ibu" class="form-label">
                                            Nama Ibu
                                            <span class="required-mark">*</span>
                                        </label>

                                        <input type="text" id="nama_ibu" name="nama_ibu" class="form-control"
                                            placeholder="Nama lengkap ibu" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="pekerjaan_ibu" class="form-label">
                                            Pekerjaan Ibu
                                        </label>

                                        <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu"
                                            class="form-control" placeholder="Pekerjaan ibu">
                                    </div>


                                    <div class="col-12 mt-4">
                                        <h6 class="fw-bold mb-1">Data Wali</h6>
                                        <p class="text-muted small mb-0">
                                            Isi apabila calon santri memiliki wali selain ayah atau ibu.
                                        </p>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="nama_wali" class="form-label">
                                            Nama Wali
                                        </label>

                                        <input type="text" id="nama_wali" name="nama_wali" class="form-control"
                                            placeholder="Nama lengkap wali">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="hubungan_wali" class="form-label">
                                            Hubungan Wali dengan Calon Santri
                                        </label>

                                        <select id="hubungan_wali" name="hubungan_wali" class="form-select">
                                            <option value="" selected>Pilih hubungan</option>
                                            <option value="Kakek/Nenek">Kakek / Nenek</option>
                                            <option value="Paman/Bibi">Paman / Bibi</option>
                                            <option value="Saudara">Saudara</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>


                                    <div class="col-12 mt-4">
                                        <h6 class="fw-bold mb-1">Kontak Utama Orang Tua / Wali</h6>
                                        <p class="text-muted small mb-0">
                                            Pilih siapa yang menjadi penanggung jawab komunikasi pendaftaran.
                                        </p>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="hubungan_kontak" class="form-label">
                                            Hubungan dengan Calon Santri
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="hubungan_kontak" name="hubungan_kontak" class="form-select" required>
                                            <option value="" selected disabled>Pilih hubungan</option>
                                            <option value="Ayah">Ayah</option>
                                            <option value="Ibu">Ibu</option>
                                            <option value="Wali">Wali</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="nomor_whatsapp" class="form-label">
                                            Nomor WhatsApp
                                            <span class="required-mark">*</span>
                                        </label>

                                        <input type="tel" id="nomor_whatsapp" name="nomor_whatsapp"
                                            class="form-control" placeholder="Contoh: 6281234567890" required>

                                        <small class="form-text">
                                            Pastikan nomor WhatsApp aktif dan dapat dihubungi.
                                        </small>
                                    </div>

                                    <div class="col-12">
                                        <label for="email_orang_tua" class="form-label">
                                            Email Orang Tua / Wali
                                        </label>

                                        <input type="email" id="email_orang_tua" name="email_orang_tua"
                                            class="form-control" placeholder="nama@email.com">
                                    </div>

                                    <div class="col-12">
                                        <label for="alamat_orang_tua" class="form-label">
                                            Alamat Orang Tua / Wali
                                            <span class="required-mark">*</span>
                                        </label>

                                        <textarea id="alamat_orang_tua" name="alamat_orang_tua" class="form-control" rows="3"
                                            placeholder="Alamat lengkap orang tua atau wali" required></textarea>
                                    </div>

                                </div>

                            </div>


                            <!-- 04 RIWAYAT PENDIDIKAN -->
                            <div class="form-section">

                                <div class="form-section-heading">
                                    <span class="form-section-number">04</span>

                                    <div>
                                        <h3>Riwayat Pendidikan</h3>
                                        <p>Informasi pendidikan terakhir calon santri.</p>
                                    </div>
                                </div>

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label for="asal_sekolah" class="form-label">
                                            Asal Sekolah
                                            <span class="required-mark">*</span>
                                        </label>

                                        <input type="text" id="asal_sekolah" name="asal_sekolah" class="form-control"
                                            placeholder="Nama sekolah asal" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="jenjang_sekolah" class="form-label">
                                            Jenjang Pendidikan Terakhir
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="jenjang_sekolah" name="jenjang_sekolah" class="form-select" required>
                                            <option value="" selected disabled>Pilih jenjang</option>
                                            <option value="SD">SD / MI</option>
                                            <option value="SMP">SMP / MTs</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="tahun_lulus" class="form-label">
                                            Tahun Lulus
                                        </label>

                                        <input type="number" id="tahun_lulus" name="tahun_lulus" class="form-control"
                                            min="2000" max="2035" placeholder="Contoh: 2027">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="pendidikan_sebelumnya" class="form-label">
                                            Pendidikan Agama Sebelumnya
                                        </label>

                                        <select id="pendidikan_sebelumnya" name="pendidikan_sebelumnya"
                                            class="form-select">
                                            <option value="" selected>Pilih keterangan</option>
                                            <option value="Sekolah Umum">Sekolah Umum</option>
                                            <option value="Madrasah">Madrasah</option>
                                            <option value="Pesantren">Pesantren</option>
                                            <option value="Homeschooling">Homeschooling</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label for="alamat_sekolah" class="form-label">
                                            Alamat Sekolah Asal
                                        </label>

                                        <textarea id="alamat_sekolah" name="alamat_sekolah" class="form-control" rows="2"
                                            placeholder="Kota atau alamat sekolah asal"></textarea>
                                    </div>

                                </div>

                            </div>


                            <!-- 05 KEMAMPUAN AL-QUR'AN -->
                            <div class="form-section">

                                <div class="form-section-heading">
                                    <span class="form-section-number">05</span>

                                    <div>
                                        <h3>Kemampuan Al-Qur’an</h3>
                                        <p>Gambaran kemampuan membaca dan hafalan Al-Qur’an calon santri.</p>
                                    </div>
                                </div>

                                <div class="row g-3">

                                    <div class="col-12">
                                        <label for="kemampuan_membaca" class="form-label">
                                            Apakah Calon Santri Sudah Lancar Membaca Al-Qur’an?
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="kemampuan_membaca" name="kemampuan_membaca" class="form-select"
                                            required>
                                            <option value="" selected disabled>Pilih kemampuan membaca</option>
                                            <option value="Sudah lancar">Sudah lancar</option>
                                            <option value="Belum lancar">Belum lancar</option>
                                            <option value="Belum bisa membaca">Belum bisa membaca</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="jumlah_hafalan" class="form-label">
                                            Jumlah Hafalan Saat Ini
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="jumlah_hafalan" name="jumlah_hafalan" class="form-select" required>
                                            <option value="" selected disabled>Pilih jumlah hafalan</option>
                                            <option value="Belum ada">Belum memiliki hafalan</option>
                                            <option value="Kurang dari 1 juz">Kurang dari 1 juz</option>
                                            <option value="1-5 juz">1–5 juz</option>
                                            <option value="6-10 juz">6–10 juz</option>
                                            <option value="11-15 juz">11–15 juz</option>
                                            <option value="16-20 juz">16–20 juz</option>
                                            <option value="21-29 juz">21–29 juz</option>
                                            <option value="30 juz">30 juz</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="metode_mengaji" class="form-label">
                                            Metode Belajar Al-Qur’an Sebelumnya
                                        </label>

                                        <input type="text" id="metode_mengaji" name="metode_mengaji"
                                            class="form-control" placeholder="Contoh: Iqra, At-Tibyan, dan lainnya">
                                    </div>

                                    <div class="col-12">
                                        <label for="detail_hafalan" class="form-label">
                                            Keterangan Hafalan
                                        </label>

                                        <textarea id="detail_hafalan" name="detail_hafalan" class="form-control" rows="3"
                                            placeholder="Tuliskan juz atau surah yang sudah dihafalkan, jika ada"></textarea>
                                    </div>

                                </div>

                            </div>


                            <!-- 06 INFORMASI TAMBAHAN -->
                            <div class="form-section">

                                <div class="form-section-heading">
                                    <span class="form-section-number">06</span>

                                    <div>
                                        <h3>Informasi Tambahan</h3>
                                        <p>Informasi lain yang dapat membantu proses penerimaan calon santri.</p>
                                    </div>
                                </div>

                                <div class="row g-3">

                                    <div class="col-12">
                                        <label for="alasan_mendaftar" class="form-label">
                                            Alasan Memilih Ma’had Imtiaz
                                        </label>

                                        <textarea id="alasan_mendaftar" name="alasan_mendaftar" class="form-control" rows="3"
                                            placeholder="Ceritakan alasan memilih Ma’had Imtiaz"></textarea>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="sumber_informasi" class="form-label">
                                            Mengetahui Imtiaz Dari
                                        </label>

                                        <select id="sumber_informasi" name="sumber_informasi" class="form-select">
                                            <option value="" selected disabled>Pilih sumber informasi</option>
                                            <option value="Keluarga">Keluarga</option>
                                            <option value="Teman">Teman atau kerabat</option>
                                            <option value="Alumni">Alumni</option>
                                            <option value="Media Sosial">Media sosial</option>
                                            <option value="Website">Website</option>
                                            <option value="Wadi Mubarak">Islamic Center Wadi Mubarak</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="informasi_lainnya" class="form-label">
                                            Informasi Tambahan
                                        </label>

                                        <input type="text" id="informasi_lainnya" name="informasi_lainnya"
                                            class="form-control" placeholder="Jika ada">
                                    </div>

                                    <div class="col-12">
                                        <label for="catatan_orang_tua" class="form-label">
                                            Catatan dari Orang Tua / Wali
                                        </label>

                                        <textarea id="catatan_orang_tua" name="catatan_orang_tua" class="form-control" rows="3"
                                            placeholder="Tuliskan informasi lain yang ingin disampaikan kepada pihak Ma’had"></textarea>
                                    </div>

                                </div>

                            </div>


                            <!-- PERSETUJUAN -->
                            <div class="registration-agreement">

                                <label class="agreement-label">
                                    <input type="checkbox" name="persetujuan_data" value="1" required>

                                    <span>
                                        Saya menyatakan bahwa seluruh informasi yang
                                        diisi dalam formulir ini adalah benar dan dapat
                                        dipertanggungjawabkan. Saya bersedia dihubungi
                                        oleh pihak Ma’had untuk proses informasi dan
                                        tindak lanjut pendaftaran calon santri.
                                        <span class="required-mark">*</span>
                                    </span>
                                </label>

                            </div>


                            <!-- FORM ACTION -->
                            <div class="registration-form-actions">

                                <button type="reset" class="btn btn-reset">
                                    <i class="fa-solid fa-rotate-left me-2" aria-hidden="true"></i>
                                    Reset Formulir
                                </button>

                                <button type="submit" class="btn btn-submit">
                                    Kirim Pendaftaran
                                    <i class="fa-solid fa-arrow-right ms-2" aria-hidden="true"></i>
                                </button>

                            </div>

                            <p class="registration-form-note">
                                <i class="fa-solid fa-circle-info me-1" aria-hidden="true"></i>
                                Pastikan seluruh data telah diperiksa sebelum formulir dikirimkan.
                            </p>

                        </form>

                    </div>

                </div>


                <!-- SIDEBAR INFORMASI -->
                <div class="col-lg-4">

                    <aside class="registration-sidebar" data-aos="fade-left">

                        <!-- INFORMASI PENDAFTARAN -->
                        <div class="registration-info-card">

                            <span class="section-label">INFORMASI</span>

                            <h3>Pendaftaran Santri Baru</h3>

                            <p>
                                Ma’had Tahfizh Imtiaz Abu Bakar Ash-Shiddiq
                                membuka penerimaan santri baru untuk tahun
                                ajaran 2027–2028.
                            </p>

                            <div class="registration-info-list">

                                <div class="registration-info-item">
                                    <span class="registration-info-icon">
                                        <i class="fa-solid fa-calendar-days" aria-hidden="true"></i>
                                    </span>

                                    <div>
                                        <small>Tahun Ajaran</small>
                                        <strong>2027–2028</strong>
                                    </div>
                                </div>

                                <div class="registration-info-item">
                                    <span class="registration-info-icon">
                                        <i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>
                                    </span>

                                    <div>
                                        <small>Jenjang Pendidikan</small>
                                        <strong>Nonformal Tingkat SMP</strong>
                                    </div>
                                </div>

                                <div class="registration-info-item">
                                    <span class="registration-info-icon">
                                        <i class="fa-solid fa-users" aria-hidden="true"></i>
                                    </span>

                                    <div>
                                        <small>Peserta Didik</small>
                                        <strong>Khusus Putra</strong>
                                    </div>
                                </div>

                                <div class="registration-info-item">
                                    <span class="registration-info-icon">
                                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                                    </span>

                                    <div>
                                        <small>Lokasi Ma’had</small>
                                        <strong>Megamendung, Bogor</strong>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <!-- PROGRAM PENDIDIKAN -->
                        <div class="registration-info-card">

                            <span class="section-label">PROGRAM PENDIDIKAN</span>

                            <h3>Pembinaan di Ma’had</h3>

                            <ul class="registration-program-list">
                                <li>
                                    <i class="fa-solid fa-check" aria-hidden="true"></i>
                                    Tahsin dan Tahfizh Al-Qur’an
                                </li>

                                <li>
                                    <i class="fa-solid fa-check" aria-hidden="true"></i>
                                    Bahasa Arab dan Ulum Syar’i
                                </li>

                                <li>
                                    <i class="fa-solid fa-check" aria-hidden="true"></i>
                                    Adab dan Akhlak Islami
                                </li>

                                <li>
                                    <i class="fa-solid fa-check" aria-hidden="true"></i>
                                    Hifdzul Mutun
                                </li>

                                <li>
                                    <i class="fa-solid fa-check" aria-hidden="true"></i>
                                    Ekstrakurikuler dan HIMMAH
                                </li>
                            </ul>

                        </div>


                        <!-- KONTAK -->
                        <div class="registration-contact-card">

                            <div class="registration-contact-icon">
                                <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                            </div>

                            <h3>Butuh Informasi Lebih Lanjut?</h3>

                            <p>
                                Silakan hubungi panitia penerimaan santri baru
                                melalui WhatsApp resmi Ma’had.
                            </p>

                            <a href="https://wa.me/6287753670367" target="_blank" rel="noopener noreferrer"
                                class="btn btn-contact-registration">

                                Hubungi Panitia
                                <i class="fa-solid fa-arrow-up-right-from-square ms-2" aria-hidden="true"></i>

                            </a>

                        </div>

                    </aside>

                </div>

            </div>

        </div>
    </section>


    <!-- DROPDOWN WILAYAH INDONESIA -->
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                const provinceSelect = document.getElementById('provinsi_santri');
                const regencySelect = document.getElementById('kabupaten_santri');
                const districtSelect = document.getElementById('kecamatan_santri');

                const API_URL = 'https://www.emsifa.com/api-wilayah-indonesia/api';

                function setOptions(select, items, placeholder) {
                    select.innerHTML = '';

                    const defaultOption = document.createElement('option');
                    defaultOption.value = '';
                    defaultOption.textContent = placeholder;
                    defaultOption.disabled = true;
                    defaultOption.selected = true;

                    select.appendChild(defaultOption);

                    items.forEach(function(item) {
                        const option = document.createElement('option');

                        option.value = item.id;
                        option.textContent = item.name;

                        select.appendChild(option);
                    });

                    select.disabled = false;
                }

                function resetSelect(select, placeholder) {
                    select.innerHTML = '';

                    const option = document.createElement('option');

                    option.value = '';
                    option.textContent = placeholder;
                    option.disabled = true;
                    option.selected = true;

                    select.appendChild(option);
                    select.disabled = true;
                }

                async function fetchRegions(url) {
                    const response = await fetch(url);

                    if (!response.ok) {
                        throw new Error('Gagal mengambil data wilayah.');
                    }

                    return await response.json();
                }


                // MEMUAT PROVINSI
                async function loadProvinces() {
                    try {
                        provinceSelect.disabled = true;

                        const data = await fetchRegions(`${API_URL}/provinces.json`);

                        setOptions(
                            provinceSelect,
                            data,
                            'Pilih provinsi'
                        );

                    } catch (error) {
                        resetSelect(provinceSelect, 'Gagal memuat provinsi');

                        console.error('Error provinsi:', error);
                    }
                }


                // MEMUAT KABUPATEN / KOTA
                provinceSelect.addEventListener('change', async function() {

                    resetSelect(regencySelect, 'Memuat kabupaten/kota...');
                    resetSelect(districtSelect, 'Pilih kabupaten/kota dahulu');

                    if (!this.value) {
                        resetSelect(regencySelect, 'Pilih provinsi dahulu');
                        return;
                    }

                    try {
                        const data = await fetchRegions(
                            `${API_URL}/regencies/${this.value}.json`
                        );

                        setOptions(
                            regencySelect,
                            data,
                            'Pilih kabupaten/kota'
                        );

                    } catch (error) {
                        resetSelect(regencySelect, 'Gagal memuat kabupaten/kota');

                        console.error('Error kabupaten/kota:', error);
                    }

                });


                // MEMUAT KECAMATAN
                regencySelect.addEventListener('change', async function() {

                    resetSelect(districtSelect, 'Memuat kecamatan...');

                    if (!this.value) {
                        resetSelect(districtSelect, 'Pilih kabupaten/kota dahulu');
                        return;
                    }

                    try {
                        const data = await fetchRegions(
                            `${API_URL}/districts/${this.value}.json`
                        );

                        setOptions(
                            districtSelect,
                            data,
                            'Pilih kecamatan'
                        );

                    } catch (error) {
                        resetSelect(districtSelect, 'Gagal memuat kecamatan');

                        console.error('Error kecamatan:', error);
                    }

                });


                loadProvinces();

            });
        </script>
    @endpush

@endsection
