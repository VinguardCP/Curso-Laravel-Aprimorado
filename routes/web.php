<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/produtos', [ProdutoController::class, 'index']);

Route::get('/', [SiteController::class, 'index'])->name('index');

Route::resource('produtos', ProdutoController::class);
Route::resource('users', UserController::class);

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
Route::get('/register', [LoginController::class, 'create'])->name('login.create');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');
});

Route::get('/admin/produtos', [ProdutoController::class, 'index'])->name('admin.produtos');
Route::delete('/admin/produto/delete{id}', [ProdutoController::class, 'destroy'])->name('admin.produto.delete');
Route::post('/admin/produto/store', [ProdutoController::class, 'store'])->name('admin.produto.store');
Route::post('/finalizar', [CarrinhoController::class, 'finalizar'])->name('finalizarpedido');
