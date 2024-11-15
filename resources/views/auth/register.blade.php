<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Powerplay Shop</title>
    <!-- Incluye Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(#6b46c1, #6cbdec);
        }
    </style>
</head>
<body>
    <div class="min-vh-100 d-flex align-items-center justify-content-center">
        <!-- Formulario -->
        <form method="POST" action="{{ route('register') }}" class="p-4 rounded shadow bg-white w-100" style="max-width: 400px;">
            @csrf
            <div class="text-center mb-4">
                <h1 class="h3 text-dark fw-bold">Registro</h1>
                <p class="text-muted">Crea tu cuenta en Powerplay Shop</p>
            </div>

            <!-- Campo: Nombre -->
            <div class="mb-3">
                <label for="name" class="form-label">Nombre Completo</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <!-- Campo: Correo Electrónico -->
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <!-- Campo: Contraseña -->
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <!-- Campo: Confirmar Contraseña -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
            </div>

            <!-- Botón de Registro -->
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('login') }}" class="text-primary small">¿Ya tienes una cuenta? Inicia sesión</a>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>
</body>
</html>

