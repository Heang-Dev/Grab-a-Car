<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    $productURL = route('product.view', ['lang' => 'en', 'id' => 1]);
    dd($productURL);
    
    return view('welcome');
});

Route::get('/{lang}/product/{id}', function (string $lang, int $id) {
    // if route url changes (ex: '/add/{lang}/test/product/{id}'),
    // the route is stealed working
})->name('product.view');