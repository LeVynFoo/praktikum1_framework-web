<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return 'Toko mas Rahul';
});

Route::get('/products', function () {
    return 'Daftar Produk';
});

Route::post('/pos', function () {
    return 'Transaksi berhasil disimpan';
});