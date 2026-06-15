<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\keranjangController;
use App\Http\Controllers\snackController;
use App\Http\Controllers\nilaiController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);

Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('pert1', function () {
    return view('pertemuan1');
});

Route::get('pert2part1', function () {
    return view('pertemuan2part1');
});

Route::get('pert2part2', function () {
    return view('pertemuan2part2');
});

Route::get('pert3part1', function () {
    return view('pertemuan3part1');
});

Route::get('pert3part2', function () {
    return view('pertemuan3part2');
});

Route::get('tugaspert3', function () {
    return view('tugasPertemuan3');
});

Route::get('pert4', function () {
    return view('pertemuan4');
});

Route::get('pert5part2', function () {
    return view('pertemuan5part2');
});

Route::get('tugaspert5', function () {
    return view('tugasPertemuan5');
});

//crud tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

//crud tabel keranjangbelanja
Route::get('/keranjangbelanja', [keranjangController::class, 'index_keranjang']);
Route::get('/keranjangbeli/{id}', [keranjangController::class, 'beli']);
Route::post('/keranjangstore', [keranjangController::class, 'storeKeranjang']);
Route::get('/keranjangbatal/{id}', [keranjangController::class, 'batal']);

//crud tabel snack
Route::get('/snack', [snackController::class, 'indexsnack']);
Route::get('/snack_tambah', [snackController::class, 'tambahsnack']);
Route::post('/snack_store', [snackController::class, 'storesnack']);
Route::get('/snack_edit/{id}', [snackController::class, 'editsnack']);
Route::post('/snack_update', [snackController::class, 'updatesnack']);
Route::get('/snack_hapus/{id}', [snackController::class, 'hapussnack']);
Route::get('/snack_cari', [snackController::class, 'carisnack']);

//crud tabel nilaikuliah
Route::get('/nilaikuliah', [nilaiController::class, 'indexNilai']);
Route::get('/nilai_tambah', [nilaiController::class, 'tambahNilai']);
Route::post('/nilai_store', [nilaiController::class, 'storeNilai']);

//crud tabel siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
