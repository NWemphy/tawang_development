<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard / Beranda
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $potensi = [
        ['judul' => 'Pertanian', 'deskripsi' => 'Lahan subur dan hasil tani warga.'],
        ['judul' => 'UMKM', 'deskripsi' => 'Usaha makanan dan kerajinan lokal.'],
        ['judul' => 'Budaya', 'deskripsi' => 'Gotong royong dan kegiatan sosial.'],
    ];

    return view('home', compact('potensi'));
})->name('dashboard');


/*
|--------------------------------------------------------------------------
| Profil
|--------------------------------------------------------------------------
*/
Route::view('/profil', 'profil')->name('profil');


/*
|--------------------------------------------------------------------------
| Pengaturan
|--------------------------------------------------------------------------
*/
Route::view('/pengaturan', 'pengaturan')->name('pengaturan');


/*
|--------------------------------------------------------------------------
| Galeri
|--------------------------------------------------------------------------
*/
Route::view('/galeri', 'galeri')->name('galeri');
