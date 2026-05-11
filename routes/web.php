<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TestController::class, 'login']);
Route::get('/login', [TestController::class, 'login'])->name('login');
Route::get('/esqueci-senha', [TestController::class, 'esqueciSenha'])->name('esqueci-senha');
Route::get('/cadastro', [TestController::class, 'cadastro'])->name('cadastro');
Route::get('/motos', [TestController::class, 'motos'])->name('motos');
Route::get('/inicio', [TestController::class, 'motos'])->name('inicio');
Route::get('/home', [TestController::class, 'motos'])->name('home');
Route::get('/ofertas', [TestController::class, 'ofertas'])->name('ofertas');
Route::get('/servicos', [TestController::class, 'servicos'])->name('servicos');
Route::get('/contato', [TestController::class, 'contato'])->name('contato');
Route::get('/sobre', [TestController::class, 'sobre'])->name('sobre');
