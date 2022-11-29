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

Route::get('/tentang-kami', function () {
    return view('utama.tentang');
});

Route::get('/kontak-kami', function () {
    return view('utama.kontak');
});

Route::get('/pelacakan', function () {
    return view('utama.pelacakan');
});

Route::get('/status-pengiriman-cod', function () {
    return view('utama.statuspengirimancod');
});

Route::get('/status-pengiriman', function () {
    return view('utama.statuspengiriman');
});

Route::get('/detail-produk', function () {
    return view('utama.detailproduk');
});

Route::get('/keranjang-belanja', function () {
    return view('utama.keranjangbelanja');
});

Route::get('/review-pesanan', function () {
    return view('utama.reviewpesanan');
});

Route::get('/konfirmasi-pesanan', function () {
    return view('utama.konfirmasipesanan');
});

Route::get('/konfirmasi-pesanan-done', function () {
    return view('utama.konfirmasipesanandone');
});

Route::get('/form-pengiriman', function () {
    return view('utama.formpengiriman');
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