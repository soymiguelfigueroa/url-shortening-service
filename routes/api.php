<?php

use App\Http\Controllers\UrlController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/url', [UrlController::class, 'store'])->name('url.create');
Route::get('/url/{shorten}', [UrlController::class, 'show'])->name('url.create');
Route::put('/url/{shorten}', [UrlController::class, 'update'])->name('url.update');
