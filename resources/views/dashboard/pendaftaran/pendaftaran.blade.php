@extends('dashboard.template')

@section('title', 'Data Pendaftaran Santri | Ma’had Imtiaz')

@section('page_title', 'Pendaftaran Santri')

@section('meta_description', 'Manajemen data pendaftaran santri baru Ma’had Imtiaz.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dahsboard-pendaftaran.css') }}">
@endpush

@section('content')

    <div class="registration-page">

        <!-- PAGE HEADER -->
        <div class="registration-header">

            <div class="registration-header-info">
                <span class="registration-eyebrow">MANAJEMEN PENDAFTARAN</span>

                <h2>Data Pendaftaran Santri</h2>

                <p>
                    Kelola dan pantau seluruh data calon santri baru
                    Ma’had Imtiaz Abu Bakar Ash-Shiddiq.
                </p>
            </div>

            <div class="registration-header-action">
                <a href="{{ route('home') }}" target="_blank" class="registration-website-button">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    Lihat Formulir
                </a>
            </div>

        </div>


        <!-- NOTIFICATION -->
        @if (session('success'))
            <div class="registration-alert registration-alert-success">
                <i class="fa-solid fa-circle-check"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if (session('error'))
            <div class="registration-alert registration-alert-danger">
                <i class="fa-solid fa-circle-exclamation"></i>
                <span>{{ session('error') }}</span>
            </div>
        @endif


        <!-- STATISTIC -->
        <div class="registration-stat-card">

            <div class="registration-stat-icon">
                <i class="fa-solid fa-users"></i>
            </div>

            <div class="registration-stat-info">
                <span>Total Pendaftar</span>
                <h3>{{ $pendaftarans->total() }}</h3>
                <small>Seluruh data pendaftaran</small>
            </div>

        </div>


        <!-- REGISTRATION TABLE CARD -->
        <div class="registration-card">

            <!-- CARD HEADER -->
            <div class="registration-card-header">

                <div>
                    <h3>Daftar Calon Santri</h3>
                    <p>Informasi pendaftaran santri baru yang masuk ke sistem.</p>
                </div>

                <div class="registration-total-label">
                    <i class="fa-solid fa-database"></i>
                    {{ $pendaftarans->total() }} Data
                </div>

            </div>


            <!-- FILTER -->
            <div class="registration-filter">

                <form action="{{ route('pendaftaran.index') }}" method="GET" class="registration-filter-form">

                    <!-- SEARCH -->
                    <div class="registration-search">

                        <i class="fa-solid fa-magnifying-glass"></i>

                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Cari nomor, nama santri, atau WhatsApp...">

                    </div>


                    <!-- STATUS FILTER -->
                    <div class="registration-status-filter">

                        <select name="status">

                            <option value="">Semua Status</option>

                            <option value="Menunggu Verifikasi"
                                {{ request('status') == 'Menunggu Verifikasi' ? 'selected' : '' }}>
                                Menunggu Verifikasi
                            </option>

                            <option value="Terverifikasi" {{ request('status') == 'Terverifikasi' ? 'selected' : '' }}>
                                Terverifikasi
                            </option>

                            <option value="Perlu Dilengkapi"
                                {{ request('status') == 'Perlu Dilengkapi' ? 'selected' : '' }}>
                                Perlu Dilengkapi
                            </option>

                        </select>

                    </div>


                    <!-- FILTER BUTTON -->
                    <button type="submit" class="registration-filter-button">
                        <i class="fa-solid fa-filter"></i>
                        Filter
                    </button>


                    <!-- RESET BUTTON -->
                    <a href="{{ route('pendaftaran.index') }}" class="registration-reset-button">
                        <i class="fa-solid fa-rotate-left"></i>
                        Reset
                    </a>

                </form>

            </div>


            <!-- TABLE -->
            <div class="registration-table-wrapper">

                <table class="registration-table">

                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Pendaftaran</th>
                            <th>Nama Calon Santri</th>
                            <th>Nomor WhatsApp</th>
                            <th>Gelombang</th>
                            <th>Tanggal Daftar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($pendaftarans as $index => $pendaftaran)
                            <tr>

                                <!-- NUMBER -->
                                <td>
                                    {{ $pendaftarans->firstItem() + $index }}
                                </td>


                                <!-- REGISTRATION NUMBER -->
                                <td>
                                    <span class="registration-number">
                                        {{ $pendaftaran->nomor_pendaftaran }}
                                    </span>
                                </td>


                                <!-- STUDENT NAME -->
                                <td>
                                    <div class="registration-student">

                                        <div class="registration-student-avatar">
                                            <i class="fa-solid fa-user"></i>
                                        </div>

                                        <div class="registration-student-info">
                                            <strong>{{ $pendaftaran->nama_santri }}</strong>
                                            <small>
                                                Tahun {{ $pendaftaran->tahun_pendaftaran }}
                                            </small>
                                        </div>

                                    </div>
                                </td>


                                <!-- WHATSAPP -->
                                <td>
                                    <span class="registration-phone">
                                        {{ $pendaftaran->nomor_whatsapp }}
                                    </span>
                                </td>


                                <!-- WAVE -->
                                <td>
                                    <span class="registration-wave">
                                        Gelombang {{ $pendaftaran->gelombang }}
                                    </span>
                                </td>


                                <!-- REGISTRATION DATE -->
                                <td>
                                    <span class="registration-date">
                                        {{ $pendaftaran->created_at?->format('d/m/Y') ?? '-' }}
                                    </span>
                                </td>


                                <!-- STATUS -->
                                <td>

                                    @if ($pendaftaran->status === 'Terverifikasi')
                                        <span class="registration-status status-verified">
                                            <span></span>
                                            Terverifikasi
                                        </span>
                                    @elseif ($pendaftaran->status === 'Perlu Dilengkapi')
                                        <span class="registration-status status-incomplete">
                                            <span></span>
                                            Perlu Dilengkapi
                                        </span>
                                    @else
                                        <span class="registration-status status-pending">
                                            <span></span>
                                            Menunggu Verifikasi
                                        </span>
                                    @endif

                                </td>


                                <!-- ACTION -->
                                <td>

                                    <div class="registration-action">

                                        <!-- DETAIL -->
                                        <a href="{{ route('pendaftaran.show', $pendaftaran->id) }}"
                                            class="registration-action-button action-detail" title="Lihat Detail">

                                            <i class="fa-solid fa-eye"></i>

                                        </a>


                                        <!-- EDIT -->
                                        <a href="{{ route('pendaftaran.edit', $pendaftaran->id) }}"
                                            class="registration-action-button action-edit" title="Edit Data">

                                            <i class="fa-solid fa-pen-to-square"></i>

                                        </a>


                                        <!-- DELETE -->
                                        <form action="{{ route('pendaftaran.destroy', $pendaftaran->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah kamu yakin ingin menghapus data pendaftaran ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="registration-action-button action-delete"
                                                title="Hapus Data">

                                                <i class="fa-solid fa-trash"></i>

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="8">

                                    <div class="registration-empty">

                                        <div class="registration-empty-icon">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </div>

                                        <h4>Belum Ada Data Pendaftaran</h4>

                                        <p>
                                            @if (request()->hasAny(['search', 'status']))
                                                Tidak ditemukan data yang sesuai dengan pencarian atau filter.
                                            @else
                                                Data pendaftaran calon santri akan muncul di halaman ini.
                                            @endif
                                        </p>

                                    </div>

                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>


            <!-- PAGINATION -->
            @if ($pendaftarans->hasPages())
                <div class="registration-pagination">

                    <div class="registration-pagination-info">
                        Menampilkan
                        <strong>{{ $pendaftarans->firstItem() ?? 0 }}</strong>
                        sampai
                        <strong>{{ $pendaftarans->lastItem() ?? 0 }}</strong>
                        dari
                        <strong>{{ $pendaftarans->total() }}</strong>
                        data
                    </div>

                    <div class="registration-pagination-links">
                        {{ $pendaftarans->links() }}
                    </div>

                </div>
            @endif

        </div>

    </div>

@endsection
