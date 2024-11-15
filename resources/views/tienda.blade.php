<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda PowerPlay Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card {
            transition: transform 0.2s ease;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .rating {
            color: #FFD700; /* Color dorado para las estrellas */
        }
        .product-image {
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">Promoción</h2>
        <div class="row g-4">
            @foreach ($productos as $producto)
                <div class="col-md-3">
                    <div class="card product-card shadow-sm h-100">
                        <!-- Imagen del producto -->
                        <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" class="card-img-top product-image">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p>Calificación: <span class="rating">★★★★★</span> 5.0</p>
                            <p class="text-primary fw-bold">Precio: ${{ $producto->precio }}</p>
                            <button class="btn btn-primary d-flex align-items-center justify-content-center">
                                <img src="ruta/a/tu/icono-carrito.png" alt="Carrito" style="width: 20px; height: 20px;" class="me-2">
                                Agregar al carrito
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-white text-center py-3 mt-5" style="background-color: #007bff;">
        <p class="mb-1">&copy; 2024 Tienda PowerPlay Shop. Todos los derechos reservados.</p>
        <p class="small">Diseñado por Juan David Burbano Manquillo</p>
    </footer>
</body>
</html>


