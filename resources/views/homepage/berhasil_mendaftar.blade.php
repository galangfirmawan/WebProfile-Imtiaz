@extends('homepage.header_footer')

@section('title', 'Pendaftaran Berhasil — Ma’had Imtiaz')

@section('meta_description', 'Pendaftaran calon santri baru Ma’had Tahfizh Imtiaz Abu Bakar Ash-Shiddiq berhasil
    dikirim.')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/berhasil-mendaftar.css') }}">
    @endpush

@section('content')

    <section class="registration-success-section">
        <div class="container">

            <div class="registration-success-card">

                <!-- ICON BERHASIL -->
                <div class="registration-success-icon">
                    <i class="fa-solid fa-check" aria-hidden="true"></i>
                </div>

                <!-- HEADING -->
                <span class="section-label">PENDAFTARAN BERHASIL</span>

                <h1>
                    Terima Kasih Telah
                    <span>Mendaftar di Ma’had Imtiaz</span>
                </h1>

                <p class="registration-success-description">
                    Alhamdulillah, formulir pendaftaran calon santri baru
                    telah berhasil kami terima. Terima kasih atas kepercayaan
                    Ayah/Bunda kepada Ma’had Tahfizh Imtiaz Abu Bakar Ash-Shiddiq.
                </p>

                <!-- NOMOR PENDAFTARAN -->
                <div class="registration-number-card">

                    <span>Nomor Pendaftaran Anda</span>

                    <strong>{{ $nomor }}</strong>

                    <small>
                        Simpan nomor ini untuk keperluan konfirmasi dan informasi
                        pendaftaran selanjutnya.
                    </small>

                </div>

                <!-- INFORMASI SELANJUTNYA -->
                <div class="registration-next-info">

                    <h3>Langkah Selanjutnya</h3>

                    <p>
                        Untuk memastikan pendaftaran telah terkonfirmasi,
                        silakan hubungi panitia penerimaan santri baru melalui
                        WhatsApp resmi Ma’had dengan menyertakan nomor pendaftaran Anda.
                    </p>

                    <p>
                        Setelah konfirmasi diterima, panitia akan melakukan
                        pemeriksaan data pendaftaran. Informasi mengenai tahapan
                        dan proses penerimaan selanjutnya akan disampaikan melalui
                        WhatsApp kepada Ayah/Bunda.
                    </p>

                </div>

                <!-- WHATSAPP CONFIRMATION -->
                @php
                    $pesanWhatsApp =
                        "Assalamu'alaikum warahmatullahi wabarakatuh.\n\n" .
                        "Saya ingin mengonfirmasi pendaftaran calon santri baru Ma'had Imtiaz.\n\n" .
                        "Nomor Pendaftaran: {$nomor}\n" .
                        "Nama Calon Santri: \n" .
                        "Nama Orang Tua/Wali: \n\n" .
                        "Mohon informasi mengenai konfirmasi dan tahapan pendaftaran selanjutnya.\n\n" .
                        'Jazakumullahu khairan.';

                    $linkWhatsApp = 'https://wa.me/6287753670367?text=' . rawurlencode($pesanWhatsApp);
                @endphp

                <div class="registration-whatsapp-card">

                    <div class="registration-whatsapp-icon">
                        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                    </div>

                    <div>
                        <h3>Jangan Lupa Konfirmasi Pendaftaran</h3>

                        <p>
                            Silakan tekan tombol di bawah untuk mengirimkan
                            konfirmasi pendaftaran kepada panitia melalui WhatsApp.
                        </p>
                    </div>

                    <a href="{{ $linkWhatsApp }}" target="_blank" rel="noopener noreferrer"
                        class="btn btn-success registration-whatsapp-button">

                        <i class="fa-brands fa-whatsapp me-2" aria-hidden="true"></i>
                        Konfirmasi via WhatsApp

                    </a>

                </div>

                <!-- CATATAN -->
                <div class="registration-success-note">
                    <i class="fa-solid fa-circle-info" aria-hidden="true"></i>

                    <p>
                        Harap simpan nomor pendaftaran Anda. Mohon menunggu
                        informasi selanjutnya dari panitia setelah data
                        pendaftaran diperiksa.
                    </p>
                </div>

                <!-- KEMBALI -->
                <a href="{{ url('/') }}" class="registration-back-link">
                    <i class="fa-solid fa-arrow-left me-2" aria-hidden="true"></i>
                    Kembali ke Halaman Utama
                </a>

            </div>

        </div>
    </section>

@endsection
