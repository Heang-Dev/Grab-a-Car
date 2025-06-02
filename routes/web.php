<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return 'About';
})->name('about');

Route::controller(CarController::class)->group(function(){
    Route::get('/car', 'index')->name('car.index');
    Route::get('/car/create', 'create')->name('car.create');
    Route::post('/car', 'store')->name('car.store');
});