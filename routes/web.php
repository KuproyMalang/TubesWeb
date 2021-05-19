<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/home', function () {
    return view('layout.master');
});

Route::get('/login', function () {
    return view('login');
});