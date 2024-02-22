<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        return "Menampilkan produk dalam kategori makanan dan minuman";
    }

    public function beautyHealth()
    {
        return "Menampilkan produk dalam kategori kecantikan dan kesehatan";
    }

    public function homeCare()
    {
        return "Menampilkan produk dalam kategori perawatan rumah";
    }

    public function babyKid()
    {
        return "Menampilkan produk dalam kategori bayi dan anak-anak";
    }
}
