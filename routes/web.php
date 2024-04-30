<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('profile', function () {
    $nama = 'Muhammad Iqbal Faiz';
    // return view('profile', compact('nama'));
    // Command diatas digunakan pada saat memanggil data yang sifatnya banyak
    return view('profile')->with('nama', $nama);
    // Sedangkan command "with" digunakan pada saat menmanggil data yang sifatnya tunggal
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});