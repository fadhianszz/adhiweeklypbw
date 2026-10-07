<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;

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

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::all(),
    ]);
});

Route::get('/berita/{slug}', function ($slug) {
    $data_berita = [
        [
            "judul" => "MBG Mas Bowok Ganteng",
            "slug" => "mbg-mas-bowok-ganteng",
            "penulis" => "Wowok Gaming",
            "konten" => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            "judul" => "Indonesia Juara Dunia",
            "slug" => "indonesia-juara-dunia",
            "penulis" => "Erick Thohir",
            "konten" => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            "judul" => "KORUPSI DI INDONESIA",
            "slug" => "korupsi-di-indonesia",
            "penulis" => "John Doe",
            "konten" => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
    ];

    return view('detail-berita', [
        "title" => "Detail Berita",
        "berita" => $data_berita,
    ]);
});