<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      /* Imagen de fondo */
      background-image: url('{{ asset('assets/images/fondologin.jpg') }}');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
    }

    /* Fondo semitransparente para la card */
    .login-card {
      background-color: rgba(255, 255, 255, 0.9);
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center">
  <div class="card login-card shadow-sm p-5" style="width: 31rem;">
    <h2 class="card-title text-center mb-4">Iniciar sesión</h2>

    @if ($errors->any())
      <div class="alert alert-danger">
        {{ $errors->first() }}
      </div>
    @endif

    <form action="{{ route('login.post') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label for="email" class="form-label">Correo</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary w-100">Entrar</button>
    </form>

    <div class="text-center mt-3">
      <small>¿No tienes cuenta? <a href="#">Regístrate</a></small>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
