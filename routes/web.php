<?php

use App\Http\Controllers\SiswaController1;
use Illuminate\Support\Facades\Route;

// Halaman Home
Route::get('/', function () {
    return view('home');
});

// Halaman Data Siswa
Route::get('/siswa', [SiswaController1::class, 'index']);

// Halaman About
Route::get('/about', function () {
    return view('about');
});

// Halaman Kontak
Route::get('/kontak', function () {
    return view('kontak');
});
