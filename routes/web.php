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

Route::get('/mata-kuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/mata-kuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/mata-kuliah/store', [MataKuliahController::class, 'store'])->name('matakuliah.store');

Route::get('/mata-kuliah/{uuid}/edit', [MataKuliahController::class, 'edit'])->name('matakuliah.edit');
Route::put('/mata-kuliah/{uuid}', [MataKuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('/mata-kuliah/{uuid}', [MataKuliahController::class, 'destroy'])->name('matakuliah.destroy');
