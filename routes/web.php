<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/resta/{num1}/{num2}', [CalculadoraController::class, 'resta']);
