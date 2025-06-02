<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return 'About';
})->name('about');

Route::fallback(function () {
    return '404';
});