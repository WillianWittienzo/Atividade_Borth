<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\JogoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
