<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __invoke(Request $request)
    {
        return '__invokable function from ShowCarController';
    }

    public function index()
    {
        return 'index function from CarController';
    }
}
