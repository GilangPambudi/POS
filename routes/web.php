<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('category')->group(function () {
    Route::get('food-beverage', 'ProductController@foodAndBeverage');
    Route::get('beauty-health', 'ProductController@beautyAndHealth');
    Route::get('home-care', 'ProductController@homeCare');
    Route::get('baby-kid', 'ProductController@babyAndKid');
});