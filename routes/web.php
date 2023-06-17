<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\biodataController;
use App\Http\Controllers\mahasiswaController;
use App\View\Components\HomeComponent;

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSimpan')->name('register.simpan');

    Route::get('/', 'login')->name('login');
    Route::post('login', 'loginAksi')->name('login.aksi');
});

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
    Route::post('edit/{id}', 'update')->name('barang.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('barang.hapus');
});
Route::controller(biodataController::class)->prefix('biodata')->group(function () {
    Route::get('', 'index')->name('biodata');
    Route::get('tambah', 'tambah')->name('biodata.tambah');
    Route::post('tambah', 'simpan')->name('biodata.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('biodata.edit');
    Route::post('edit/{id}', 'update')->name('biodata.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('biodata.hapus');
});
Route::get('/home', HomeComponent::class)->name('home');
