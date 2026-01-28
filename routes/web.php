<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Beranda
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home');
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| Beranda Detail Pages
|--------------------------------------------------------------------------
*/
Route::get('/berita', function () {
    return view('beranda.berita');
})->name('berita');

Route::get('/kegiatan', function () {
    return view('beranda.kegiatan');
})->name('kegiatan');

Route::get('/visi-misi', function () {
    return view('beranda.visi-misi');
})->name('visi-misi');

Route::get('/kontak', function () {
    return view('beranda.kontak');
})->name('kontak');


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
