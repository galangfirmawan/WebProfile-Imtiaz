<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthService
{
    /**
     * Proses autentikasi pengguna.
     */
    public function login(array $credentials, bool $remember = false): bool
    {
        $loginCredentials = [
            'email' => $credentials['email'],
            'password' => $credentials['password'],
        ];

        // Periksa email dan password.
        if (!Auth::attempt($loginCredentials, $remember)) {
            return false;
        }

        // Ambil pengguna yang berhasil login.
        $user = Auth::user();

        // Periksa status akun.
        if (!$user->isActive()) {
            Auth::logout();

            throw ValidationException::withMessages([
                'email' => 'Akun Anda sedang dinonaktifkan. Silakan hubungi Administrator.',
            ]);
        }

        return true;
    }

    /**
     * Proses logout pengguna.
     */
    public function logout(): void
    {
        Auth::logout();
    }

    /**
     * Mengambil pengguna yang sedang login.
     */
    public function getAuthenticatedUser(): ?User
    {
        return Auth::user();
    }

    /**
     * Memeriksa status autentikasi.
     */
    public function check(): bool
    {
        return Auth::check();
    }

    /**
     * Memeriksa apakah akun pengguna aktif.
     */
    public function checkActiveAccount(): bool
    {
        $user = Auth::user();

        return $user !== null && $user->isActive();
    }
}
