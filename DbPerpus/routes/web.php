<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DetailPeminjamanController;

Route::get('/', [AnggotaController::class, 'index']);
Route::resource('anggota', AnggotaController::class);
Route::resource('buku', BukuController::class);
Route::resource('peminjaman', DetailPeminjamanController::class);
