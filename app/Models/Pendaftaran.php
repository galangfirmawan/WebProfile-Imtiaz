<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendaftaran extends Model
{
    use SoftDeletes;

    protected $table = 'pendaftarans';

    protected $fillable = [
        'nomor_pendaftaran',
        'tahun_pendaftaran',
        'gelombang',

        // Identitas calon santri
        'nama_santri',
        'nama_panggilan',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'anak_ke',
        'jumlah_saudara',

        // Alamat calon santri
        'alamat_santri',
        'provinsi_santri',
        'kabupaten_santri',
        'kecamatan_santri',

        // Orang tua dan wali
        'nama_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'nama_wali',
        'hubungan_wali',
        'hubungan_kontak',
        'nomor_whatsapp',
        'email_orang_tua',
        'alamat_orang_tua',

        // Riwayat pendidikan
        'asal_sekolah',
        'jenjang_sekolah',
        'tahun_lulus',
        'pendidikan_sebelumnya',
        'alamat_sekolah',

        // Kemampuan Al-Qur'an
        'kemampuan_membaca',
        'jumlah_hafalan',
        'metode_mengaji',
        'detail_hafalan',

        // Informasi tambahan
        'alasan_mendaftar',
        'sumber_informasi',
        'informasi_lainnya',
        'catatan_orang_tua',

        // Persetujuan dan status
        'persetujuan_data',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_lahir' => 'date',
            'tahun_pendaftaran' => 'integer',
            'gelombang' => 'integer',
            'tahun_lulus' => 'integer',
            'anak_ke' => 'integer',
            'jumlah_saudara' => 'integer',
            'persetujuan_data' => 'boolean',
        ];
    }
}
