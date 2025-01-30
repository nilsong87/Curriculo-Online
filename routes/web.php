<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculoController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [CurriculoController::class, 'index']);