<?php

use App\Http\Controllers\Api\ProductoApicontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('productos', [ProductoApicontroller::class,'index']);
Route::post('productos', [ProductoApicontroller::class, 'store']);
Route::put('productos/{id}', [ProductoApicontroller::class, 'update']);
Route::delete('productos/{id}',[ProductoApiController::class, 'destroy']);
