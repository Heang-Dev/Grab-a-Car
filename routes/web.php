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

Route::get('/user/{username}', function (string $username) {
    return 'username : ' . $username;
})->where('username', '[a-z]+');

Route::get('{lang}/product/{id}', function (string $lang, string $id) {
    return 'lang : ' . $lang . 'id : ' . $id;
})->where(['lang' => '[a-z]{2}', 'id' => '\d{4,}']);

Route::get('/search/{search}', function (string $search) {
    return 'search : ' . $search;
})->where('search', '.+');
