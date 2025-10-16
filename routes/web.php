<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/suma/{num1}/{num2}', [CalculadoraController::class, 'suma']);
Route::get('/multiplicacion/{num1}/{num2}', [CalculadoraController::class, 'multiplicacion']);
Route::get('/resta/{num1}/{num2}', [CalculadoraController::class, 'resta']);
Route::get('/division/{num1}/{num2}', [CalculadoraController::class, 'division']);