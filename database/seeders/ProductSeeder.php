<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductSeeder extends Seeder
{
    public function run()
    {
    Producto::create([
        'name' => 'Nintendo Switch',
        'description' => 'Consola de videojuegos portátil',
        'price' => 299.99,
        'image_url' => 'url_imagen_switch',
        'rating' => 4.8,
    ]);

    Producto::create([
        'name' => 'Control Xbox',
        'description' => 'Control inalámbrico para Xbox',
        'price' => 59.99,
        'image_url' => 'url_imagen_control_xbox',
        'rating' => 4.5,
    ]);

    // Agrega más productos aquí
    }
}
