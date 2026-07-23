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

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/innovation', function () {
    return view('innovation.index');
});

Route::get('/global-presence', function () {
    return view('global-presence.index');
});

Route::get('/news-media', function () {
    return view('news-media.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});
