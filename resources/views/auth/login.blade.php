<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #6422ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            display: flex;
            width: 60%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }
        .login-container .brand {
            background-color: #ffffff;
            color: #22a7ff;
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            font-weight: bold;
        }
        .login-container .form-section {
            background-color: #4a90e2;
            padding: 2rem;
            width: 50%;
        }
        .login-container .form-section h2 {
            color: #ffffff;
            font-weight: bold;
        }
        .login-container .form-section input {
            border-radius: 20px;
            background-color: #ffffff;
            color: #333333;
        }
        .login-container .form-section button {
            width: 100%;
            border-radius: 20px;
            background-color: #e91e63;
            color: #ffffff;
            font-weight: bold;
        }
        .login-container .form-section button:hover {
            background-color: #d81b60;
        }
        .social-buttons a {
            margin-top: 15px;
            width: 48%;
            font-weight: bold;
            font-size: 0.9rem;
        }
        .btn-facebook {
            background-color: #3b5998;
            color: #ffffff;
        }
        .btn-google {
            background-color: #db4437;
            color: #ffffff;
        }
        .btn-facebook:hover {
            background-color: #2d4373;
        }
        .btn-google:hover {
            background-color: #c23321;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="brand">
        PowerPlay Shop
    </div>

    <div class="form-section">
        <h2 class="text-center">Iniciar Sesión</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label text-white">Email*</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-white">Contraseña*</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn mt-3">Iniciar</button>
            <div class="text-center mt-2">
                <a href="#" class="text-white">¿Olvidaste tu contraseña?</a>
            </div>
        </form>

        <div class="social-buttons d-flex justify-content-between">
            <a href="#" class="btn btn-facebook">
                <i class="fab fa-facebook-f"></i> Continuar con Facebook
            </a>
            <a href="#" class="btn btn-google">
                <i class="fab fa-google"></i> Continuar con Google
            </a>
        </div>
    </div>
</div>

</body>
</html>



