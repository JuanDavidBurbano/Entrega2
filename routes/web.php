<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

# Mostrar todos los registros
Route::get('producto', [ProductoController::class, 'index'])->name('producto.index');
# Rutas para crear
Route::get('producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('producto/store', [ProductoController::class, 'store'])->name('producto.store');
# Rutas para editar
Route::get('producto/edit/{id}', [ProductoController::class, 'edit'])->name('producto.edit');
Route::post('producto/update/{id}', [ProductoController::class, 'update'])->name('producto.update');
#Rutas para eliminar
Route::delete('producto/delete/{id}', [ProductoController::class, 'delete'])->name('producto.delete');

require __DIR__.'/auth.php';
