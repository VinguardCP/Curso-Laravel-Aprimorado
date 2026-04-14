<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', [ProdutoController::class, 'index']);

Route::get('/', [SiteController::class, 'index'])->name('index');

Route::resource('produtos', ProdutoController::class);

Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('details');

Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('categoria');