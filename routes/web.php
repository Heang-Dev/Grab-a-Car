<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $aboutURL = url('/about');
    $aboutPageURL = route('about'); // Route name automatically updated when route is changed
    dd('About Page URL: ' . $aboutPageURL);
    return view('welcome');
});

Route::view('/about-us', 'about')->name('about');
