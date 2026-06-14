<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('/pegawai','PegawaiDBController@index');

Route::get('/news', function () {
    return view('news');
});

Route::get('/navspert3', function () {
    return view('homepage');
});

Route::get('/pertemuan4', function () {
    return view('pertemuan4');
});

Route::get('/pertemuan5', function () {
    return view('pertemuan5');
});

Route::get('/linktree', function () {
    return view('linktreefinal');
});


Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
