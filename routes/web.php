<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/adoption', function () {
    return view('adoption');
});

Route::get('/donation', function () {
    return view('donation');
});

Route::get('/hosting', function () {
    return view('hosting');
});

Route::get('/rescue', function () {
    return view('rescue');
});


