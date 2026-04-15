<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/produtos', [ProdutoController::class, 'index']);

Route::get('/', [SiteController::class, 'index'])->name('index');

Route::resource('produtos', ProdutoController::class);

Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('details');

Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('categoria');

Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('carrinho');
Route::post('/carrinho', [CarrinhoController::class, 'adicionaCarrinho'])->name('addcarrinho');
Route::post('/remover', [CarrinhoController::class, 'removeCarrinho'])->name('removecarrinho');
Route::post('/atualizar', [CarrinhoController::class, 'atualizaCarrinho'])->name('atualizacarrinho');
Route::get('/limpar', [CarrinhoController::class, 'limparCarrinho'])->name('limparcarrinho');

Route::view('/login', 'login.form')->name('login');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');
});
