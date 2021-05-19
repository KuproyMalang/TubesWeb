<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('layout.master');
});

Route::get('/', function () {
    return view('layout.guest');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/buatpetisi', function () {
    return view('buatpetisi');
});
