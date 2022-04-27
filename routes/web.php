<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputadoraController;
use App\Http\Controllers\ClienteController;

Route::resources([
    'computadora'   => ComputadoraController::class,
    'cliente'       => ClienteController::class,
]);



Route::get('/', function () {
    return view('welcome');
});
