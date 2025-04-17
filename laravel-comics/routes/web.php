<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/artists', function () {
    return view('artists');
})->name("artists");

Route::get('/writers', function () {
    return view('writers');
})->name("writers");

Route::get('/under-construction', function () {
    return view('under-construction');
})->name("under-construction");