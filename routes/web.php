<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSimpan')->name('register.simpan');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAksi')->name('login.aksi');



});

Route::get('/', function () {
    return view('welcome');
    Route::middleware('auth')->group(function () {
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    Route::controller(BarangController::class)->prefix('barang')->group(function () {
        Route::get('', 'index')->name('barang');
        Route::get('tambah', 'tambah')->name('barang.tambah');
        Route::post('tambah', 'simpan')->name('barang.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('barang.edit');
        Route::post('edit/{id}', 'update')->name('narang.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('barang.hapus');
    });
    Route::controller(mahasiswaController::class)->prefix('mahasiswa')->group(function () {
        Route::get('', 'index')->name('mahasiswa');
        Route::get('tambah', 'tambah')->name('mahasiswa.tambah');
        Route::get('tambah', 'simpan')->name('mahasiswa.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('mahasiswa.edit');
        Route::get('edit/{id}', 'update')->name('mahasiswa.tambah.update');
        Route::get('hapus{id}', 'hapus')->name('mahasiswa.hapus');
    });
});
