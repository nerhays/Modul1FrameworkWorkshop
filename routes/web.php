<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;

Route::get('/', [LibraryController::class, 'index'])->name('library.index');

Route::get('kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::post('kategori', [KategoriController::class, 'store'])->name('kategori.store');

Route::get('buku', [BukuController::class, 'index'])->name('buku.index');
Route::post('buku', [BukuController::class, 'store'])->name('buku.store');