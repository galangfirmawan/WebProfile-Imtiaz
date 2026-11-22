
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();

            // Nomor dan periode pendaftaran
            $table->string('nomor_pendaftaran', 9)->unique();
            $table->unsignedSmallInteger('tahun_pendaftaran');
            $table->unsignedTinyInteger('gelombang');

            // 01. Identitas calon santri
            $table->string('nama_santri');
            $table->string('nama_panggilan')->nullable();
            $table->string('jenis_kelamin', 1)->default('L');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->unsignedTinyInteger('anak_ke')->nullable();
            $table->unsignedTinyInteger('jumlah_saudara')->nullable();

            // 02. Alamat calon santri
            $table->text('alamat_santri');
            $table->string('provinsi_santri');
            $table->string('kabupaten_santri');
            $table->string('kecamatan_santri');

            // 03. Data orang tua dan wali
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('hubungan_wali')->nullable();
            $table->string('hubungan_kontak');
            $table->string('nomor_whatsapp', 20);
            $table->string('email_orang_tua')->nullable();
            $table->text('alamat_orang_tua');

            // 04. Riwayat pendidikan
            $table->string('asal_sekolah');
            $table->string('jenjang_sekolah');
            $table->unsignedSmallInteger('tahun_lulus')->nullable();
            $table->string('pendidikan_sebelumnya')->nullable();
            $table->text('alamat_sekolah')->nullable();

            // 05. Kemampuan Al-Qur'an
            $table->string('kemampuan_membaca');
            $table->string('jumlah_hafalan');
            $table->string('metode_mengaji')->nullable();
            $table->text('detail_hafalan')->nullable();

            // 06. Informasi tambahan
            $table->text('alasan_mendaftar')->nullable();
            $table->string('sumber_informasi')->nullable();
            $table->string('informasi_lainnya')->nullable();
            $table->text('catatan_orang_tua')->nullable();

            // Persetujuan dan status
            $table->boolean('persetujuan_data')->default(false);
            $table->string('status')->default('Menunggu Verifikasi');

            $table->timestamps();
            $table->softDeletes();

            $table->index(['tahun_pendaftaran', 'gelombang']);
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
