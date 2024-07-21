<?php

use App\Http\Controllers\modeloController;
use App\Http\Controllers\PrimerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return 'hola instructor carlos andres';
});

Route::get('/mensaje',  [PrimerController::class,'mensaje']);

Route::resource('/modelo', modeloController::class);
