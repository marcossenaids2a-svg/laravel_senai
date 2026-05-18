<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/cadastro-produto', [ProdutoController::class, 'index'])->name('cadastro-produto');
Route::post('/cadastro-produto', [ProdutoController::class, 'store'])->name('cadastro-produto.store');
Route::get('/', [TestController::class, 'login']);
Route::get('/login', [TestController::class, 'login'])->name('login');
Route::post('/login', [TestController::class, 'loginSubmit'])->name('login.submit');
Route::get('/esqueci-senha', [TestController::class, 'esqueciSenha'])->name('esqueci-senha');
Route::post('/esqueci-senha', [TestController::class, 'esqueciSenhaSubmit'])->name('esqueci-senha.submit');
Route::get('/cadastro', [TestController::class, 'cadastroForm'])->name('cadastro');
Route::post('/cadastro', [TestController::class, 'cadastro'])->name('cadastro.submit');
Route::get('/motos', [TestController::class, 'motos'])->name('motos');
Route::get('/inicio', [TestController::class, 'motos'])->name('inicio');
Route::get('/home', [TestController::class, 'motos'])->name('home');
Route::get('/ofertas', [TestController::class, 'ofertas'])->name('ofertas');
Route::get('/servicos', [TestController::class, 'servicos'])->name('servicos');
Route::get('/contato', [TestController::class, 'contato'])->name('contato');
Route::post('/contato', [TestController::class, 'contatoSubmit'])->name('contato.submit');
Route::get('/sobre', [TestController::class, 'sobre'])->name('sobre');
