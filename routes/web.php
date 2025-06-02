<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $person = [
        "name" => "Jack",
        "email" => "jack@gmail.com",
    ];
    dd($person);
    return view('welcome');
});

Route::view('/about', 'about');

Route::get('/products/{id?}', function (string $id) {
    return 'Work! : ' . $id;
})->whereNumber('id');
