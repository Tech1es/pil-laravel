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
    $npm = [123,124,125,126];
    $nama = ['Muhammad Iqbal Faiz','Agita Muhammad Ramadhan S','Rizky Wira Nanda P','Anugrah TG Putra A H'];
    $jumlah = count($npm);
    return view('mahasiswa', compact('npm', 'jumlah', 'nama'));
});

// // While Loop
// Route::get('array', function(){
//     $nilai_awal = 1;
//     while ($nilai_awal <= 5) {
//         echo 'Hello Laravel ' . $nilai_awal . 'x<br>';
//         $nilai_awal++;
//     }
// });

// // For Loop
// Route::get('array', function(){
//     for ($i=1; $i <= 5; $i++) { 
//         echo 'Hello World ' . $i . 'x<br>';
//     }
// });