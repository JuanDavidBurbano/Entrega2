<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;

//Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');


Route::get('/tienda', [ProductoController::class, 'index'])->name('tienda');


require __DIR__.'/auth.php';
