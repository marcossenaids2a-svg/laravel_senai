<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/cadastro_produto', [ProdutoController::class, 'store']);
Route::post('/salvar_produto', [ProdutoController::class, 'store'])->name('api.salvar-produto');
