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
              <div class="card shadow-sm"> <!-- Agregado 'shadow-sm' para el sombreado -->
                  <div class="card-header text-center bg-warning">Bienvenido a Ventu</div>

                  <div class="card-body">
                      <form method="POST" action="{{route('login')}}">
                          @csrf
                          <div class="mb-3">
                              <label for="email" class="form-label">Correo</label>
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                          </div>

                          <div class="mb-3">
                              <label for="password" class="form-label">Contrase&ntilde;a</label>
                              <input id="password" type="password" class="form-control" name="password" required>
                          </div>

                          <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="remember">
                              <label class="form-check-label" for="remember">Recordarme</label>
                          </div>

                          <button type="submit" class="btn btn-warning">Iniciar Sesi&oacute;n</button>

                          <div class="mt-3">
                            &iquest;No est&aacute;s registrado? <a href="{{ route('register') }}">Reg&iacute;strate aqu&iacute;</a>
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
