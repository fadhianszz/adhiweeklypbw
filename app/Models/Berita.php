<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "MBG Mas Bowok Ganteng",
            "slug" => "mbg-mas-bowok-ganteng",
            "penulis" => "Wowok Gaming",
            "konten" => "lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            "judul" => "Indonesia Juara Dunia",
            "slug" => "indonesia-juara-dunia",
            "penulis" => "Erick Thohir",
            "konten" => "lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            "judul" => "KORUPSI DI INDONESIA",
            "slug" => "korupsi-di-indonesia",
            "penulis" => "John Doe",
            "konten" => "lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
    ];
}
