<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); // Obtener todos los productos
        return view('tienda', compact('productos')); // Retornar la vista de la tienda con los productos
    }
}
