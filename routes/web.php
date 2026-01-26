<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $potensi = [
        ['judul' => 'Pertanian', 'deskripsi' => 'Lahan subur dan hasil tani warga.'],
        ['judul' => 'UMKM', 'deskripsi' => 'Usaha makanan dan kerajinan lokal.'],
        ['judul' => 'Budaya', 'deskripsi' => 'Gotong royong dan kegiatan sosial.'],
    ];

    return view('home', compact('potensi'));
});

