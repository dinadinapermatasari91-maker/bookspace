
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuController;

// Halaman Beranda
Route::get('/', [HomeController::class, 'index']);

// Halaman Tentang Toko
Route::get('/tentang', [HomeController::class, 'tentang']);

// Halaman Daftar Buku
Route::get('/buku', [BukuController::class, 'index']);

// Halaman Kategori Buku
Route::get('/kategori', [BukuController::class, 'kategori']);

// Halaman Detail Buku berdasarkan ID
Route::get('/buku/{id}', [BukuController::class, 'show']);
