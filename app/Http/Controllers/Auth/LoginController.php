<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    protected AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * Menampilkan halaman login.
     */
    public function showLoginForm()
    {
        if ($this->authService->check()) {
            return redirect()->route('dashboard');
        }

        return view('dashboard.login');
    }

    /**
     * Memproses login pengguna.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password wajib diisi.',
        ]);

        try {
            $remember = $request->boolean('remember');

            $success = $this->authService->login(
                $credentials,
                $remember
            );

            if (!$success) {
                throw ValidationException::withMessages([
                    'email' => 'Email atau password yang kamu masukkan salah.',
                ]);
            }

            // Regenerasi session untuk keamanan.
            $request->session()->regenerate();

            return redirect()
                ->intended(route('dashboard'))
                ->with('success', 'Selamat datang! Login berhasil.');
        } catch (ValidationException $exception) {
            throw $exception;
        }
    }

    /**
     * Memproses logout pengguna.
     */
    public function logout(Request $request)
    {
        $this->authService->logout();

        // Hapus session lama dan buat CSRF token baru.
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('success', 'Kamu berhasil logout.');
    }
}
