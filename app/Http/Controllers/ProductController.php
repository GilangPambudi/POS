<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodAndBeverage()
    {
        return "Menampilkan produk dalam kategori makanan dan minuman";
    }

    public function beautyAndHealth()
    {
        return "Menampilkan produk dalam kategori kecantikan dan kesehatan";
    }

    public function homeCare()
    {
        return "Menampilkan produk dalam kategori perawatan rumah";
    }

    public function babyAndKid()
    {
        return "Menampilkan produk dalam kategori bayi dan anak-anak";
    }
}
