
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Auth\LoginController;

// ==========================================
// HALAMAN PUBLIK / HOMEPAGE
// ==========================================

Route::get('/', function () {
    return view('homepage.homepage');
})->name('home');

// Formulir pendaftaran
Route::get('/pendaftaran', [
    PendaftaranController::class,
    'create'
])->name('pendaftaran');

// Proses penyimpanan pendaftaran
Route::post('/pendaftaran', [
    PendaftaranController::class,
    'store'
])->name('pendaftaran.store');

// Halaman berhasil mendaftar
Route::get('/pendaftaran/berhasil/{nomor}', [
    PendaftaranController::class,
    'success'
])->name('pendaftaran.success');


// ==========================================
// AUTHENTICATION
// ==========================================

Route::middleware('guest')->group(function () {

    Route::get('/login', [
        LoginController::class,
        'showLoginForm'
    ])->name('login');

    Route::post('/login', [
        LoginController::class,
        'login'
    ])->name('login.process');
});

// Logout
Route::post('/logout', [
    LoginController::class,
    'logout'
])->middleware('auth')->name('logout');


// ==========================================
// DASHBOARD
// ==========================================

Route::middleware(['auth', 'active'])
    ->prefix('dashboard')
    ->group(function () {

        // Dashboard utama
        Route::get('/', function () {
            return view('dashboard.dashboard');
        })->name('dashboard');


        // ==========================================
        // MANAJEMEN PENDAFTARAN
        // Akses: Administrator dan Admin
        // ==========================================

        Route::middleware('role:administrator,admin')->group(function () {

            // Daftar pendaftar
            Route::get('/pendaftaran', [
                PendaftaranController::class,
                'dashboardIndex'
            ])->name('pendaftaran.index');

            // Detail pendaftar
            Route::get('/pendaftaran/{pendaftaran}', [
                PendaftaranController::class,
                'show'
            ])->name('pendaftaran.show');

            // Form edit pendaftar
            Route::get('/pendaftaran/{pendaftaran}/edit', [
                PendaftaranController::class,
                'edit'
            ])->name('pendaftaran.edit');

            // Update data pendaftar
            Route::put('/pendaftaran/{pendaftaran}', [
                PendaftaranController::class,
                'update'
            ])->name('pendaftaran.update');

            // Hapus data pendaftar
            Route::delete('/pendaftaran/{pendaftaran}', [
                PendaftaranController::class,
                'destroy'
            ])->name('pendaftaran.destroy');
        });
    });
