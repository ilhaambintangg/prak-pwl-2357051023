<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Semua route aplikasi didefinisikan di sini.
|
*/

// Arahkan root "/" langsung ke daftar user
Route::get('/', [UserController::class, 'index'])->name('user.index');

// Route untuk UserController
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah/store', [MataKuliahController::class, 'store'])->name('matakuliah.store');
