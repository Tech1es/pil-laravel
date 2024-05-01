<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('tambah', function () {
    return view('tambah');
});

Route::get('produk', function () {
    $kode = ["BRG001","BRG002","BRG003","BRG004","BRG005","BRG006","BRG007","BRG008","BRG009","BRG010"];
    $nama = ['Indomie Goreng Original','Indomie Goreng Rendang','Indomie Goreng Aceh','Indomie Goreng Jumbo','Indomie Goreng Pedas','Indomie Goreng Dendeng Balado','Indomie Goreng Cabe Ijo','Indomie Goreng Iga Penyet','Indomie Goreng Cakalang','Indomie Goreng Sate'];
    $harga = [3100,3400,3500,4100,3600,3750,3000,3800,3400,3200];
    $jumlah = count($kode);
    return view('produk', compact('kode', 'jumlah', 'nama', 'harga'));
});