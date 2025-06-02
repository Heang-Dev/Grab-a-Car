<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/users', function(){
        return '/admin/users'; // route is /admin/users not /users
    });
});

Route::name('admin.')->group(function () {
    Route::get('/users', function(){
        return '/users'; // But route name is admin.users not /users
    })->name('users');
});