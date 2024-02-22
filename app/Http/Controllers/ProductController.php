<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        $category = 'Food & Beverage';
        return view('category.category')->with('category', $category);
    }

    public function beautyHealth()
    {
        $category = 'Beauty & Health';
        return view('category.category')->with('category', $category);
    }

    public function homeCare()
    {
        $category = 'Home Care';
        return view('category.category')->with('category', $category);
    }

    public function babyKid()
    {
        $category = 'Baby and Kid';
        return view('category.category')->with('category', $category);
    }
}
