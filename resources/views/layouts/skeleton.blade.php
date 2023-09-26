<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ventu Coin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
  <link rel="icon" href="{{ asset('assets/img/ventucoin.png') }}" type="image/x-icon">
  <style>
    body {
      font-family: IBM Plex Sans Devanagari,sans-serif!important;
    }
    .custom-card {
      height: 300px; /* Define la altura deseada */
      width: 100%;   /* Define el ancho deseado */
    }
  </style>
  @stack('css')
</head>
<body>
  <div id="app">
    @yield('app')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  @stack('js')

  {{-- footer --}}
  <div class="bg-warning">
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
        </div>
        <p class="text-black">
          Descargo de responsabilidad: Las criptomonedas son volátiles y su valor puede tanto bajar como subir.
          Los beneficios pueden estar sujetos a plusvalías u otros impuestos aplicables en tu jurisdicción.
          Investiga siempre por tu cuenta e invierte sólo lo que puedas permitirte perder.
        </p>
      </footer>
    </div>
  </div>

  {{-- footer fin --}}
</body>
</html>
