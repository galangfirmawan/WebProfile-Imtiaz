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


                        <!-- NOTIFIKASI VALIDASI -->
                        @if ($errors->any())
                            <div class="alert alert-danger mb-4">
                                <strong>Formulir belum dapat dikirim.</strong>

                                <p class="mb-2">
                                    Mohon periksa kembali data yang Anda masukkan.
                                </p>

                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <!-- FORM PENDAFTARAN -->
                        <form action="{{ route('pendaftaran.store') }}" method="POST" class="registration-form"
                            id="registrationForm">

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

                                        <input type="text" id="nama_santri" name="nama_santri"
                                            class="form-control @error('nama_santri') is-invalid @enderror"
                                            value="{{ old('nama_santri') }}"
                                            placeholder="Masukkan nama lengkap sesuai dokumen" required>

                                        @error('nama_santri')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="nama_panggilan" class="form-label">
                                            Nama Panggilan
                                        </label>

                                        <input type="text" id="nama_panggilan" name="nama_panggilan"
                                            class="form-control @error('nama_panggilan') is-invalid @enderror"
                                            value="{{ old('nama_panggilan') }}" placeholder="Nama panggilan">

                                        @error('nama_panggilan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="jenis_kelamin" class="form-label">
                                            Jenis Kelamin
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="jenis_kelamin" name="jenis_kelamin"
                                            class="form-select @error('jenis_kelamin') is-invalid @enderror" required>

                                            <option value="" disabled @selected(old('jenis_kelamin') === null)>
                                                Pilih jenis kelamin
                                            </option>

                                            <option value="L" @selected(old('jenis_kelamin') === 'L')>
                                                Laki-laki
                                            </option>

                                        </select>

                                        @error('jenis_kelamin')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="tempat_lahir" class="form-label">
                                            Tempat Lahir
                                            <span class="required-mark">*</span>
                                        </label>

                                        <input type="text" id="tempat_lahir" name="tempat_lahir"
                                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                                            value="{{ old('tempat_lahir') }}" placeholder="Contoh: Bogor" required>

                                        @error('tempat_lahir')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="tanggal_lahir" class="form-label">
                                            Tanggal Lahir
                                            <span class="required-mark">*</span>
                                        </label>

                                        <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            value="{{ old('tanggal_lahir') }}" required>

                                        @error('tanggal_lahir')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="anak_ke" class="form-label">
                                            Anak Ke-
                                        </label>

                                        <input type="number" id="anak_ke" name="anak_ke"
                                            class="form-control @error('anak_ke') is-invalid @enderror"
                                            value="{{ old('anak_ke') }}" min="1" placeholder="Contoh: 2">

                                        @error('anak_ke')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="jumlah_saudara" class="form-label">
                                            Jumlah Saudara
                                        </label>

                                        <input type="number" id="jumlah_saudara" name="jumlah_saudara"
                                            class="form-control @error('jumlah_saudara') is-invalid @enderror"
                                            value="{{ old('jumlah_saudara') }}" min="0" placeholder="Contoh: 3">

                                        @error('jumlah_saudara')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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

                                        <textarea id="alamat_santri" name="alamat_santri" class="form-control @error('alamat_santri') is-invalid @enderror"
                                            rows="3" placeholder="Nama jalan, nomor rumah, RT/RW, desa atau kelurahan" required>{{ old('alamat_santri') }}</textarea>

                                        @error('alamat_santri')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-4">
                                        <label for="provinsi_santri" class="form-label">
                                            Provinsi
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="provinsi_santri" name="provinsi_santri"
                                            class="form-select @error('provinsi_santri') is-invalid @enderror" required>

                                            <option value="" selected disabled>
                                                Memuat provinsi...
                                            </option>

                                        </select>

                                        @error('provinsi_santri')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-4">
                                        <label for="kabupaten_santri" class="form-label">
                                            Kabupaten / Kota
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="kabupaten_santri" name="kabupaten_santri"
                                            class="form-select @error('kabupaten_santri') is-invalid @enderror" disabled
                                            required>

                                            <option value="" selected disabled>
                                                Pilih provinsi dahulu
                                            </option>

                                        </select>

                                        @error('kabupaten_santri')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-4">
                                        <label for="kecamatan_santri" class="form-label">
                                            Kecamatan
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="kecamatan_santri" name="kecamatan_santri"
                                            class="form-select @error('kecamatan_santri') is-invalid @enderror" disabled
                                            required>

                                            <option value="" selected disabled>
                                                Pilih kabupaten/kota dahulu
                                            </option>

                                        </select>

                                        @error('kecamatan_santri')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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

                                        <input type="text" id="nama_ayah" name="nama_ayah"
                                            class="form-control @error('nama_ayah') is-invalid @enderror"
                                            value="{{ old('nama_ayah') }}" placeholder="Nama lengkap ayah" required>

                                        @error('nama_ayah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="pekerjaan_ayah" class="form-label">
                                            Pekerjaan Ayah
                                        </label>

                                        <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah"
                                            class="form-control @error('pekerjaan_ayah') is-invalid @enderror"
                                            value="{{ old('pekerjaan_ayah') }}" placeholder="Pekerjaan ayah">

                                        @error('pekerjaan_ayah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-12 mt-4">
                                        <h6 class="fw-bold mb-1">Data Ibu</h6>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="nama_ibu" class="form-label">
                                            Nama Ibu
                                            <span class="required-mark">*</span>
                                        </label>

                                        <input type="text" id="nama_ibu" name="nama_ibu"
                                            class="form-control @error('nama_ibu') is-invalid @enderror"
                                            value="{{ old('nama_ibu') }}" placeholder="Nama lengkap ibu" required>

                                        @error('nama_ibu')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="pekerjaan_ibu" class="form-label">
                                            Pekerjaan Ibu
                                        </label>

                                        <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu"
                                            class="form-control @error('pekerjaan_ibu') is-invalid @enderror"
                                            value="{{ old('pekerjaan_ibu') }}" placeholder="Pekerjaan ibu">

                                        @error('pekerjaan_ibu')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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

                                        <input type="text" id="nama_wali" name="nama_wali"
                                            class="form-control @error('nama_wali') is-invalid @enderror"
                                            value="{{ old('nama_wali') }}" placeholder="Nama lengkap wali">

                                        @error('nama_wali')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="hubungan_wali" class="form-label">
                                            Hubungan Wali dengan Calon Santri
                                        </label>

                                        <select id="hubungan_wali" name="hubungan_wali"
                                            class="form-select @error('hubungan_wali') is-invalid @enderror">

                                            <option value="" @selected(old('hubungan_wali') === null)>
                                                Pilih hubungan
                                            </option>

                                            <option value="Kakek/Nenek" @selected(old('hubungan_wali') === 'Kakek/Nenek')>
                                                Kakek / Nenek
                                            </option>

                                            <option value="Paman/Bibi" @selected(old('hubungan_wali') === 'Paman/Bibi')>
                                                Paman / Bibi
                                            </option>

                                            <option value="Saudara" @selected(old('hubungan_wali') === 'Saudara')>
                                                Saudara
                                            </option>

                                            <option value="Lainnya" @selected(old('hubungan_wali') === 'Lainnya')>
                                                Lainnya
                                            </option>

                                        </select>

                                        @error('hubungan_wali')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-12 mt-4">
                                        <h6 class="fw-bold mb-1">
                                            Kontak Utama Orang Tua / Wali
                                        </h6>

                                        <p class="text-muted small mb-0">
                                            Pilih siapa yang menjadi penanggung jawab komunikasi pendaftaran.
                                        </p>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="hubungan_kontak" class="form-label">
                                            Hubungan dengan Calon Santri
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="hubungan_kontak" name="hubungan_kontak"
                                            class="form-select @error('hubungan_kontak') is-invalid @enderror" required>

                                            <option value="" disabled @selected(old('hubungan_kontak') === null)>
                                                Pilih hubungan
                                            </option>

                                            <option value="Ayah" @selected(old('hubungan_kontak') === 'Ayah')>
                                                Ayah
                                            </option>

                                            <option value="Ibu" @selected(old('hubungan_kontak') === 'Ibu')>
                                                Ibu
                                            </option>

                                            <option value="Wali" @selected(old('hubungan_kontak') === 'Wali')>
                                                Wali
                                            </option>

                                        </select>

                                        @error('hubungan_kontak')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="nomor_whatsapp" class="form-label">
                                            Nomor WhatsApp
                                            <span class="required-mark">*</span>
                                        </label>

                                        <input type="tel" id="nomor_whatsapp" name="nomor_whatsapp"
                                            class="form-control @error('nomor_whatsapp') is-invalid @enderror"
                                            value="{{ old('nomor_whatsapp') }}" placeholder="Contoh: 6281234567890"
                                            required>

                                        <small class="form-text">
                                            Pastikan nomor WhatsApp aktif dan dapat dihubungi.
                                        </small>

                                        @error('nomor_whatsapp')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-12">
                                        <label for="email_orang_tua" class="form-label">
                                            Email Orang Tua / Wali
                                        </label>

                                        <input type="email" id="email_orang_tua" name="email_orang_tua"
                                            class="form-control @error('email_orang_tua') is-invalid @enderror"
                                            value="{{ old('email_orang_tua') }}" placeholder="nama@email.com">

                                        @error('email_orang_tua')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-12">
                                        <label for="alamat_orang_tua" class="form-label">
                                            Alamat Orang Tua / Wali
                                            <span class="required-mark">*</span>
                                        </label>

                                        <textarea id="alamat_orang_tua" name="alamat_orang_tua"
                                            class="form-control @error('alamat_orang_tua') is-invalid @enderror" rows="3"
                                            placeholder="Alamat lengkap orang tua atau wali" required>{{ old('alamat_orang_tua') }}</textarea>

                                        @error('alamat_orang_tua')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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

                                        <input type="text" id="asal_sekolah" name="asal_sekolah"
                                            class="form-control @error('asal_sekolah') is-invalid @enderror"
                                            value="{{ old('asal_sekolah') }}" placeholder="Nama sekolah asal" required>

                                        @error('asal_sekolah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="jenjang_sekolah" class="form-label">
                                            Jenjang Pendidikan Terakhir
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="jenjang_sekolah" name="jenjang_sekolah"
                                            class="form-select @error('jenjang_sekolah') is-invalid @enderror" required>

                                            <option value="" disabled @selected(old('jenjang_sekolah') === null)>
                                                Pilih jenjang
                                            </option>

                                            <option value="SD" @selected(old('jenjang_sekolah') === 'SD')>
                                                SD / MI
                                            </option>

                                            <option value="SMP" @selected(old('jenjang_sekolah') === 'SMP')>
                                                SMP / MTs
                                            </option>

                                            <option value="Lainnya" @selected(old('jenjang_sekolah') === 'Lainnya')>
                                                Lainnya
                                            </option>

                                        </select>

                                        @error('jenjang_sekolah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="tahun_lulus" class="form-label">
                                            Tahun Lulus
                                        </label>

                                        <input type="number" id="tahun_lulus" name="tahun_lulus"
                                            class="form-control @error('tahun_lulus') is-invalid @enderror"
                                            value="{{ old('tahun_lulus') }}" min="2000" max="2035"
                                            placeholder="Contoh: 2027">

                                        @error('tahun_lulus')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="pendidikan_sebelumnya" class="form-label">
                                            Pendidikan Agama Sebelumnya
                                        </label>

                                        <select id="pendidikan_sebelumnya" name="pendidikan_sebelumnya"
                                            class="form-select @error('pendidikan_sebelumnya') is-invalid @enderror">

                                            <option value="" @selected(old('pendidikan_sebelumnya') === null)>
                                                Pilih keterangan
                                            </option>

                                            <option value="Sekolah Umum" @selected(old('pendidikan_sebelumnya') === 'Sekolah Umum')>
                                                Sekolah Umum
                                            </option>

                                            <option value="Madrasah" @selected(old('pendidikan_sebelumnya') === 'Madrasah')>
                                                Madrasah
                                            </option>

                                            <option value="Pesantren" @selected(old('pendidikan_sebelumnya') === 'Pesantren')>
                                                Pesantren
                                            </option>

                                            <option value="Homeschooling" @selected(old('pendidikan_sebelumnya') === 'Homeschooling')>
                                                Homeschooling
                                            </option>

                                            <option value="Lainnya" @selected(old('pendidikan_sebelumnya') === 'Lainnya')>
                                                Lainnya
                                            </option>

                                        </select>

                                        @error('pendidikan_sebelumnya')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-12">
                                        <label for="alamat_sekolah" class="form-label">
                                            Alamat Sekolah Asal
                                        </label>

                                        <textarea id="alamat_sekolah" name="alamat_sekolah"
                                            class="form-control @error('alamat_sekolah') is-invalid @enderror" rows="2"
                                            placeholder="Kota atau alamat sekolah asal">{{ old('alamat_sekolah') }}</textarea>

                                        @error('alamat_sekolah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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

                                        <select id="kemampuan_membaca" name="kemampuan_membaca"
                                            class="form-select @error('kemampuan_membaca') is-invalid @enderror" required>

                                            <option value="" disabled @selected(old('kemampuan_membaca') === null)>
                                                Pilih kemampuan membaca
                                            </option>

                                            <option value="Sudah lancar" @selected(old('kemampuan_membaca') === 'Sudah lancar')>
                                                Sudah lancar
                                            </option>

                                            <option value="Belum lancar" @selected(old('kemampuan_membaca') === 'Belum lancar')>
                                                Belum lancar
                                            </option>

                                            <option value="Belum bisa membaca" @selected(old('kemampuan_membaca') === 'Belum bisa membaca')>
                                                Belum bisa membaca
                                            </option>

                                        </select>

                                        @error('kemampuan_membaca')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="jumlah_hafalan" class="form-label">
                                            Jumlah Hafalan Saat Ini
                                            <span class="required-mark">*</span>
                                        </label>

                                        <select id="jumlah_hafalan" name="jumlah_hafalan"
                                            class="form-select @error('jumlah_hafalan') is-invalid @enderror" required>

                                            <option value="" disabled @selected(old('jumlah_hafalan') === null)>
                                                Pilih jumlah hafalan
                                            </option>

                                            <option value="Belum ada" @selected(old('jumlah_hafalan') === 'Belum ada')>
                                                Belum memiliki hafalan
                                            </option>

                                            <option value="Kurang dari 1 juz" @selected(old('jumlah_hafalan') === 'Kurang dari 1 juz')>
                                                Kurang dari 1 juz
                                            </option>

                                            <option value="1-5 juz" @selected(old('jumlah_hafalan') === '1-5 juz')>
                                                1–5 juz
                                            </option>

                                            <option value="6-10 juz" @selected(old('jumlah_hafalan') === '6-10 juz')>
                                                6–10 juz
                                            </option>

                                            <option value="11-15 juz" @selected(old('jumlah_hafalan') === '11-15 juz')>
                                                11–15 juz
                                            </option>

                                            <option value="16-20 juz" @selected(old('jumlah_hafalan') === '16-20 juz')>
                                                16–20 juz
                                            </option>

                                            <option value="21-29 juz" @selected(old('jumlah_hafalan') === '21-29 juz')>
                                                21–29 juz
                                            </option>

                                            <option value="30 juz" @selected(old('jumlah_hafalan') === '30 juz')>
                                                30 juz
                                            </option>

                                        </select>

                                        @error('jumlah_hafalan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="metode_mengaji" class="form-label">
                                            Metode Belajar Al-Qur’an Sebelumnya
                                        </label>

                                        <input type="text" id="metode_mengaji" name="metode_mengaji"
                                            class="form-control @error('metode_mengaji') is-invalid @enderror"
                                            value="{{ old('metode_mengaji') }}"
                                            placeholder="Contoh: Iqra, At-Tibyan, dan lainnya">

                                        @error('metode_mengaji')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-12">
                                        <label for="detail_hafalan" class="form-label">
                                            Keterangan Hafalan
                                        </label>

                                        <textarea id="detail_hafalan" name="detail_hafalan"
                                            class="form-control @error('detail_hafalan') is-invalid @enderror" rows="3"
                                            placeholder="Tuliskan juz atau surah yang sudah dihafalkan, jika ada">{{ old('detail_hafalan') }}</textarea>

                                        @error('detail_hafalan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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

                                        <textarea id="alasan_mendaftar" name="alasan_mendaftar"
                                            class="form-control @error('alasan_mendaftar') is-invalid @enderror" rows="3"
                                            placeholder="Ceritakan alasan memilih Ma’had Imtiaz">{{ old('alasan_mendaftar') }}</textarea>

                                        @error('alasan_mendaftar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="sumber_informasi" class="form-label">
                                            Mengetahui Imtiaz Dari
                                        </label>

                                        <select id="sumber_informasi" name="sumber_informasi"
                                            class="form-select @error('sumber_informasi') is-invalid @enderror">

                                            <option value="" disabled @selected(old('sumber_informasi') === null)>
                                                Pilih sumber informasi
                                            </option>

                                            <option value="Keluarga" @selected(old('sumber_informasi') === 'Keluarga')>
                                                Keluarga
                                            </option>

                                            <option value="Teman" @selected(old('sumber_informasi') === 'Teman')>
                                                Teman atau kerabat
                                            </option>

                                            <option value="Alumni" @selected(old('sumber_informasi') === 'Alumni')>
                                                Alumni
                                            </option>

                                            <option value="Media Sosial" @selected(old('sumber_informasi') === 'Media Sosial')>
                                                Media sosial
                                            </option>

                                            <option value="Website" @selected(old('sumber_informasi') === 'Website')>
                                                Website
                                            </option>

                                            <option value="Wadi Mubarak" @selected(old('sumber_informasi') === 'Wadi Mubarak')>
                                                Islamic Center Wadi Mubarak
                                            </option>

                                            <option value="Lainnya" @selected(old('sumber_informasi') === 'Lainnya')>
                                                Lainnya
                                            </option>

                                        </select>

                                        @error('sumber_informasi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="informasi_lainnya" class="form-label">
                                            Informasi Tambahan
                                        </label>

                                        <input type="text" id="informasi_lainnya" name="informasi_lainnya"
                                            class="form-control @error('informasi_lainnya') is-invalid @enderror"
                                            value="{{ old('informasi_lainnya') }}" placeholder="Jika ada">

                                        @error('informasi_lainnya')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-12">
                                        <label for="catatan_orang_tua" class="form-label">
                                            Catatan dari Orang Tua / Wali
                                        </label>

                                        <textarea id="catatan_orang_tua" name="catatan_orang_tua"
                                            class="form-control @error('catatan_orang_tua') is-invalid @enderror" rows="3"
                                            placeholder="Tuliskan informasi lain yang ingin disampaikan kepada pihak Ma’had">{{ old('catatan_orang_tua') }}</textarea>

                                        @error('catatan_orang_tua')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                            </div>


                            <!-- PERSETUJUAN -->
                            <div class="registration-agreement">

                                <label class="agreement-label">

                                    <input type="checkbox" name="persetujuan_data" value="1" required
                                        @checked(old('persetujuan_data'))>

                                    <span>
                                        Saya menyatakan bahwa seluruh informasi yang
                                        diisi dalam formulir ini adalah benar dan dapat
                                        dipertanggungjawabkan. Saya bersedia dihubungi
                                        oleh pihak Ma’had untuk proses informasi dan
                                        tindak lanjut pendaftaran calon santri.

                                        <span class="required-mark">*</span>
                                    </span>

                                </label>

                                @error('persetujuan_data')
                                    <div class="text-danger small mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

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

                // Data lama dari Laravel
                const oldProvince = @json(old('provinsi_santri'));
                const oldRegency = @json(old('kabupaten_santri'));
                const oldDistrict = @json(old('kecamatan_santri'));


                // MEMBUAT OPTION DROPDOWN
                function setOptions(select, items, placeholder, selectedValue = '') {

                    select.innerHTML = '';

                    const defaultOption = document.createElement('option');

                    defaultOption.value = '';
                    defaultOption.textContent = placeholder;
                    defaultOption.disabled = true;
                    defaultOption.selected = !selectedValue;

                    select.appendChild(defaultOption);

                    items.forEach(function(item) {

                        const option = document.createElement('option');

                        // Nama wilayah menjadi value yang dikirim ke Laravel
                        option.value = item.name;

                        // ID tetap digunakan untuk request API
                        option.dataset.id = item.id;

                        option.textContent = item.name;

                        if (item.name === selectedValue) {
                            option.selected = true;
                        }

                        select.appendChild(option);

                    });

                    select.disabled = false;
                }


                // RESET DROPDOWN
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


                // FETCH API WILAYAH
                async function fetchRegions(url) {

                    const response = await fetch(url);

                    if (!response.ok) {
                        throw new Error('Gagal mengambil data wilayah.');
                    }

                    return await response.json();
                }


                // MEMUAT KABUPATEN / KOTA
                async function loadRegencies(provinceId, selectedValue = '') {

                    resetSelect(regencySelect, 'Memuat kabupaten/kota...');

                    resetSelect(districtSelect, 'Pilih kabupaten/kota dahulu');

                    try {

                        const data = await fetchRegions(
                            `${API_URL}/regencies/${provinceId}.json`
                        );

                        setOptions(
                            regencySelect,
                            data,
                            'Pilih kabupaten/kota',
                            selectedValue
                        );

                    } catch (error) {

                        resetSelect(
                            regencySelect,
                            'Gagal memuat kabupaten/kota'
                        );

                        console.error('Error kabupaten/kota:', error);
                    }
                }


                // MEMUAT KECAMATAN
                async function loadDistricts(regencyId, selectedValue = '') {

                    resetSelect(districtSelect, 'Memuat kecamatan...');

                    try {

                        const data = await fetchRegions(
                            `${API_URL}/districts/${regencyId}.json`
                        );

                        setOptions(
                            districtSelect,
                            data,
                            'Pilih kecamatan',
                            selectedValue
                        );

                    } catch (error) {

                        resetSelect(
                            districtSelect,
                            'Gagal memuat kecamatan'
                        );

                        console.error('Error kecamatan:', error);
                    }
                }


                // KETIKA PROVINSI BERUBAH
                provinceSelect.addEventListener('change', async function() {

                    const selectedOption = this.options[this.selectedIndex];

                    const provinceId = selectedOption.dataset.id;

                    resetSelect(
                        regencySelect,
                        'Memuat kabupaten/kota...'
                    );

                    resetSelect(
                        districtSelect,
                        'Pilih kabupaten/kota dahulu'
                    );

                    if (!provinceId) {
                        resetSelect(
                            regencySelect,
                            'Pilih provinsi dahulu'
                        );

                        return;
                    }

                    await loadRegencies(provinceId);
                });


                // KETIKA KABUPATEN / KOTA BERUBAH
                regencySelect.addEventListener('change', async function() {

                    const selectedOption = this.options[this.selectedIndex];

                    const regencyId = selectedOption.dataset.id;

                    resetSelect(
                        districtSelect,
                        'Memuat kecamatan...'
                    );

                    if (!regencyId) {
                        resetSelect(
                            districtSelect,
                            'Pilih kabupaten/kota dahulu'
                        );

                        return;
                    }

                    await loadDistricts(regencyId);
                });


                // MEMUAT PROVINSI
                async function loadProvinces() {

                    try {

                        provinceSelect.disabled = true;

                        const data = await fetchRegions(
                            `${API_URL}/provinces.json`
                        );

                        setOptions(
                            provinceSelect,
                            data,
                            'Pilih provinsi',
                            oldProvince
                        );


                        // MEMULIHKAN DATA LAMA JIKA VALIDASI GAGAL
                        if (oldProvince) {

                            const selectedProvince = provinceSelect.options[
                                provinceSelect.selectedIndex
                            ];

                            if (
                                selectedProvince &&
                                selectedProvince.dataset.id
                            ) {

                                await loadRegencies(
                                    selectedProvince.dataset.id,
                                    oldRegency
                                );

                                if (oldRegency && !regencySelect.disabled) {

                                    const selectedRegency = regencySelect.options[
                                        regencySelect.selectedIndex
                                    ];

                                    if (
                                        selectedRegency &&
                                        selectedRegency.dataset.id
                                    ) {

                                        await loadDistricts(
                                            selectedRegency.dataset.id,
                                            oldDistrict
                                        );
                                    }
                                }
                            }
                        }

                    } catch (error) {

                        resetSelect(
                            provinceSelect,
                            'Gagal memuat provinsi'
                        );

                        console.error('Error provinsi:', error);
                    }
                }


                // JALANKAN SAAT HALAMAN DIBUKA
                loadProvinces();

            });
        </script>
    @endpush

@endsection
