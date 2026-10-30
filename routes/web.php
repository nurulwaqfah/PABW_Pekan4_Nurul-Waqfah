<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return redirect()->route('laporan.form');
});

Route::get('/lapor-banjir', [LaporBanjirController::class, 'form'])
    ->name('laporan.form');

Route::post('/lapor-banjir', [LaporBanjirController::class, 'kirim'])
    ->name('laporan.kirim');

Route::get('/register', [RegisterController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [RegisterController::class, 'register'])
    ->name('register.store');

Route::get('/login', [LoginController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.process');

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Halaman khusus petugas yang sudah login
Route::middleware('auth')->group(function () {
    Route::get('/daftar-laporan', [LaporBanjirController::class, 'laporan'])
        ->name('laporan.index');

    Route::get('/profil-petugas', function () {
        return view('profil');
    })->name('profil');
});