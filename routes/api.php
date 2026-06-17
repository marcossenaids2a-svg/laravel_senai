<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/cadastro_produto', [ProdutoController::class, 'store']);
Route::post('/salvar_produto', [ProdutoController::class, 'store'])->name('api.salvar-produto');


Route::put('/alterar_produto', [ProdutoController::class, 'alterar_produto'])->name('api.alterar-produto');

Route::delete('/excluir_produto', [ProdutoController::class, 'excluir_produto'])->name('api.excluir-produto');