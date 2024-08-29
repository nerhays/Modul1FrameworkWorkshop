<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\LoginMiddelware;
use Illuminate\Support\Facades\Auth;

Route::get('/dashboard', [LibraryController::class, 'index'])
    ->name('library.index')
    ->middleware(LoginMiddelware::class);

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function(){
    return view('register');
})->name('register.form');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::post('kategori', [KategoriController::class, 'store'])->name('kategori.store');

Route::get('buku', [BukuController::class, 'index'])->name('buku.index');
Route::post('buku', [BukuController::class, 'store'])->name('buku.store');
