<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ventu Coin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
  <link rel="icon" href="{{ asset('assets/img/ventucoin.png') }}" type="image/x-icon">
</head>
<body class="bg-dark">
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header text-center bg-warning">Registro de Usuario</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('addRegistrarForm') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input id="nombres" type="text" class="form-control" name="nombres" value="{{ old('nombres') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Apellidos</label>
                            <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electr&oacute;nico</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>

                        <div class="mb-3">
                          <label for="password" class="form-label">Contrase&ntilde;a</label>
                          <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="dni" class="form-label">DNI</label>
                            <input id="dni" type="text" class="form-control" name="dni" value="{{ old('dni') }}" required>
                        </div>

                        <div class="mb-3">
                          <label for="nationality" class="form-label">Nacionalidad</label>
                          <select id="id_nacionalidad" class="form-select" name="id_nacionalidad" required>
                              <option value="" selected disabled>Seleccione su nacionalidad</option>
                              @foreach ($nacionalidades as $id => $nacionalidad)
                                  <option value="{{ $id }}">{{ $nacionalidad }}</option>
                              @endforeach
                          </select>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Direcci&oacute;n</label>
                            <textarea id="direccion" class="form-control" name="direccion" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-person-plus"></i> Registrarse
                        </button>

                        <div class="mt-3">
                          &iquest;Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesi&oacute;n aqu&iacute;</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
