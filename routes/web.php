<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('homepage.homepage');
});

Route::get('/pendaftaran', function () {
    return view('homepage.pendaftaran');
})->name('pendaftaran');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/login', function () {
    return view('dashboard.login');
});
