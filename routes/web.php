<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('layout.master');
});

Route::get('/', function () {
    return view('layout.guest');
});
