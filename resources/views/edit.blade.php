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
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('dashboard') }}">Ventu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mi Wallet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Registro de Movimientos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuario
            </a>
            <ul class="dropdown-menu bg-warning" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('dashboard')}}">Inicio</a></li>
              <li><a class="dropdown-item" href="#">Mi Wallet</a></li>
              <li><a class="dropdown-item" href="#">Mis Movimientos</a></li>
              <li><a class="dropdown-item" href="#">MIs Entradas</a></li>
              <li><a class="dropdown-item" href="{{ route('edit')}}">Editar Mi Perfil</a></li>
              <li><a class="dropdown-item" href="#">Configuraciones</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Salir</button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header text-center bg-warning">Editar Perfil</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('addRegistrarForm') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Apellidos</label>
                            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>
                        </div>

                        <div class="mb-3">
                          <label for="password" class="form-label">Contrase&ntilde;a</label>
                          <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmar Contrase&ntilde;a</label>
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="mb-3">
                            <label for="dni" class="form-label">DNI</label>
                            <input id="dni" type="text" class="form-control" name="dni" value="{{ old('dni') }}" required>
                        </div>

                        {{-- <div class="mb-3">
                            <label for="nationality" class="form-label">Nacionalidad</label>
                            <select id="nationality" class="form-select" name="nationality" required>
                                <option value="" selected disabled>Seleccione su nacionalidad</option>
                                @foreach ($nacionalidades as $nacionalidad)
                                    <option value="{{ $nacionalidad }}">{{ $nacionalidad }}</option>
                                @endforeach
                            </select>
                        </div> --}}

                        <div class="mb-3">
                            <label for="address" class="form-label">Direcci&oacute;n</label>
                            <textarea id="address" class="form-control" name="address" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-person-plus"></i> Guardar Cambios
                        </button>

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
