<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use RuntimeException;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil konfigurasi akun administrator dari .env
        $name = env('ADMIN_NAME');
        $email = env('ADMIN_EMAIL');
        $password = env('ADMIN_PASSWORD');

        // Pastikan konfigurasi akun tersedia
        if (!$name || !$email || !$password) {
            throw new RuntimeException(
                'Konfigurasi ADMIN_NAME, ADMIN_EMAIL, dan ADMIN_PASSWORD wajib diisi pada file .env.'
            );
        }

        // Buat akun administrator jika belum tersedia
        User::firstOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => $password,
                'role' => 'administrator',
                'is_active' => true,
            ]
        );
    }
}
