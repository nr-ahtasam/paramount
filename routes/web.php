<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage.index');
});

Route::get('/products', function () {
    return view('products.index');
});

Route::get('/sustainability', function () {
    return view('sustainability.index');
});
