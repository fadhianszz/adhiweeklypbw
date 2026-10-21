<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Fadhil Anshor",
        "nim" => "13242520005",
        "prodi" => "Teknologi Informasi",
        "image" => "images/fadhil.jpg",
    ]);
});

Route::get('/berita', [BeritaController::class, 'tampilberita']);
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});