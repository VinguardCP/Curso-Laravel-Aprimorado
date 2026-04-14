<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', [ProdutoController::class, 'index']);

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::resource('produtos', ProdutoController::class);

Route::get('/prduto/{slug}', [SiteController::class, 'details'])->name('site.details');