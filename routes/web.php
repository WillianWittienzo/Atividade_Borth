<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\JogoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produto/{id}', [ProdutoController::class, 'show'])
    ->whereNumber('id')
    ->name('produto.detalhes');

Route::get('/filmes', [FilmeController::class, 'index'])->name('filmes.index');
Route::get('/filme/{id}', [FilmeController::class, 'show'])
    ->whereNumber('id')
    ->name('filme.detalhes');
