<?php

namespace App\Services;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use InvalidArgumentException;

class PendaftaranService
{
    private const TAHUN_PENDAFTARAN = 2027;
    private const GELOMBANG_PENDAFTARAN = 1;

    /**
     * Aturan validasi data pendaftaran.
     */
    private function validationRules(bool $isAdmin = false): array
    {
        $rules = [
            // Identitas calon santri
            'nama_santri' => ['required', 'string', 'max:255'],
            'nama_panggilan' => ['nullable', 'string', 'max:255'],
            'jenis_kelamin' => ['required', Rule::in(['L'])],
            'tempat_lahir' => ['required', 'string', 'max:100'],
            'tanggal_lahir' => ['required', 'date', 'before:today'],
            'anak_ke' => ['nullable', 'integer', 'min:1', 'max:99'],
            'jumlah_saudara' => ['nullable', 'integer', 'min:0', 'max:99'],

            // Alamat calon santri
            'alamat_santri' => ['required', 'string'],
            'provinsi_santri' => ['required', 'string', 'max:100'],
            'kabupaten_santri' => ['required', 'string', 'max:100'],
            'kecamatan_santri' => ['required', 'string', 'max:100'],

            // Data orang tua dan wali
            'nama_ayah' => ['required', 'string', 'max:255'],
            'pekerjaan_ayah' => ['nullable', 'string', 'max:255'],
            'nama_ibu' => ['required', 'string', 'max:255'],
            'pekerjaan_ibu' => ['nullable', 'string', 'max:255'],
            'nama_wali' => ['nullable', 'string', 'max:255'],
            'hubungan_wali' => [
                'nullable',
                Rule::in(['Kakek/Nenek', 'Paman/Bibi', 'Saudara', 'Lainnya']),
            ],
            'hubungan_kontak' => ['required', Rule::in(['Ayah', 'Ibu', 'Wali'])],
            'nomor_whatsapp' => ['required', 'string', 'max:20'],
            'email_orang_tua' => ['nullable', 'email', 'max:255'],
            'alamat_orang_tua' => ['required', 'string'],

            // Riwayat pendidikan
            'asal_sekolah' => ['required', 'string', 'max:255'],
            'jenjang_sekolah' => ['required', Rule::in(['SD', 'SMP', 'Lainnya'])],
            'tahun_lulus' => ['nullable', 'integer', 'min:2000', 'max:2035'],
            'pendidikan_sebelumnya' => [
                'nullable',
                Rule::in([
                    'Sekolah Umum',
                    'Madrasah',
                    'Pesantren',
                    'Homeschooling',
                    'Lainnya',
                ]),
            ],
            'alamat_sekolah' => ['nullable', 'string'],

            // Kemampuan Al-Qur'an
            'kemampuan_membaca' => [
                'required',
                Rule::in([
                    'Sudah lancar',
                    'Belum lancar',
                    'Belum bisa membaca',
                ]),
            ],
            'jumlah_hafalan' => [
                'required',
                Rule::in([
                    'Belum ada',
                    'Kurang dari 1 juz',
                    '1-5 juz',
                    '6-10 juz',
                    '11-15 juz',
                    '16-20 juz',
                    '21-29 juz',
                    '30 juz',
                ]),
            ],
            'metode_mengaji' => ['nullable', 'string', 'max:255'],
            'detail_hafalan' => ['nullable', 'string'],

            // Informasi tambahan
            'alasan_mendaftar' => ['nullable', 'string'],
            'sumber_informasi' => [
                'nullable',
                Rule::in([
                    'Keluarga',
                    'Teman',
                    'Alumni',
                    'Media Sosial',
                    'Website',
                    'Wadi Mubarak',
                    'Lainnya',
                ]),
            ],
            'informasi_lainnya' => ['nullable', 'string', 'max:255'],
            'catatan_orang_tua' => ['nullable', 'string'],
        ];

        if ($isAdmin) {
            $rules['status'] = [
                'required',
                Rule::in([
                    'Menunggu Verifikasi',
                    'Terverifikasi',
                    'Perlu Dilengkapi',
                ]),
            ];
        } else {
            $rules['persetujuan_data'] = ['required', 'accepted'];
        }

        return $rules;
    }

    /**
     * Validasi request.
     */
    private function validateData(array $data, bool $isAdmin = false): array
    {
        return Validator::make(
            $data,
            $this->validationRules($isAdmin),
            [
                'required' => 'Bagian ini wajib diisi.',
                'email' => 'Format email tidak valid.',
                'before' => 'Tanggal lahir harus sebelum hari ini.',
                'accepted' => 'Persetujuan data wajib dicentang.',
            ]
        )->validate();
    }

    /**
     * Menampilkan formulir pendaftaran.
     */
    public function getRegistrationForm()
    {
        return view('homepage.pendaftaran');
    }

    /**
     * Membuat nomor pendaftaran secara berurutan.
     */
    private function generateRegistrationNumber(): array
    {
        $tahun = self::TAHUN_PENDAFTARAN;
        $gelombang = self::GELOMBANG_PENDAFTARAN;

        /*
         * Lock tabel periode agar pembuatan nomor
         * tidak bertabrakan saat pendaftaran bersamaan.
         *
         * MySQL InnoDB mendukung transaksi dan row lock.
         */
        DB::table('pendaftarans')->lockForUpdate()->first();

        $lastRegistration = Pendaftaran::withTrashed()
            ->where('tahun_pendaftaran', $tahun)
            ->where('gelombang', $gelombang)
            ->orderByDesc('id')
            ->first();

        $sequence = $lastRegistration
            ? ((int) substr($lastRegistration->nomor_pendaftaran, -3)) + 1
            : 1;

        if ($sequence > 999) {
            throw new InvalidArgumentException(
                'Nomor pendaftaran gelombang ini telah mencapai batas.'
            );
        }

        $number = $tahun
            . str_pad((string) $gelombang, 2, '0', STR_PAD_LEFT)
            . str_pad((string) $sequence, 3, '0', STR_PAD_LEFT);

        return [
            'nomor_pendaftaran' => $number,
            'tahun_pendaftaran' => $tahun,
            'gelombang' => $gelombang,
        ];
    }

    /**
     * Menyimpan pendaftaran baru.
     */
    public function createRegistration(array $data): Pendaftaran
    {
        $validated = $this->validateData($data);

        return DB::transaction(function () use ($validated) {

            $registrationNumber = $this->generateRegistrationNumber();

            return Pendaftaran::create(array_merge(
                $validated,
                $registrationNumber,
                [
                    'persetujuan_data' => true,
                    'status' => 'Menunggu Verifikasi',
                ]
            ));
        }, 3);
    }

    /**
     * Mengambil seluruh data pendaftar.
     */
    public function getRegistrations(Request $request)
    {
        $query = Pendaftaran::query()->latest();

        if ($request->filled('search')) {
            $search = $request->input('search');

            $query->where(function ($builder) use ($search) {
                $builder->where('nomor_pendaftaran', 'like', "%{$search}%")
                    ->orWhere('nama_santri', 'like', "%{$search}%")
                    ->orWhere('nomor_whatsapp', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        return $query->paginate(15)->withQueryString();
    }

    /**
     * Mengambil detail pendaftar.
     */
    public function getRegistrationDetail(Pendaftaran $pendaftaran): Pendaftaran
    {
        return $pendaftaran;
    }

    /**
     * Memperbarui data pendaftar.
     */
    public function updateRegistration(
        Pendaftaran $pendaftaran,
        array $data
    ): Pendaftaran {
        $validated = $this->validateData($data, true);

        $pendaftaran->update($validated);

        return $pendaftaran->refresh();
    }

    /**
     * Menghapus data pendaftar.
     */
    public function deleteRegistration(Pendaftaran $pendaftaran): bool
    {
        return (bool) $pendaftaran->delete();
    }

    /**
     * Mengambil data pendaftar berdasarkan nomor.
     */
    public function getRegistrationByNumber(string $number): ?Pendaftaran
    {
        return Pendaftaran::where('nomor_pendaftaran', $number)->first();
    }
}
