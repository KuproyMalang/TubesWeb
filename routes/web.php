<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('layout.master');
});

Route::get('/guest', function () {
    return view('layout.guest');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/buatpetisi', function () {
    return view('buatpetisi');
});

Route::get('/buatpetisi2', function () {
    return view('buatpetisi2');
});

Route::get('/buatakun', function () {
    return view('buatakun');
});

Route::get('/telusuri', function () {
    return view('telusuri');
});

Route::get('/petisisaya', function () {
    return view('petisisaya');
});
