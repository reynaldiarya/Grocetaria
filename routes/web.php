<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('utama.beranda');
});

Route::get('/toko', function () {
    return view('utama.toko');
});

Route::get('/produk', function () {
    return view('utama.produk');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/data-produk', function () {
    return view('admin.dataproduk');
});

Route::get('/data-pegawai', function () {
    return view('admin.datapegawai');
});

Route::get('/profile', function () {
    return view('admin.profile');
});

Route::get('/laporan', function () {
    return view('admin.laporan');
});

Route::get('/tentang-kami', function () {
    return view('utama.tentang');
});