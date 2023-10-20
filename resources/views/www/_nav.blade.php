<header class="p-3 text-bg-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="{{ asset('assets/img/ventucoin.png') }}" class="me-4" width="60" alt="">
      </a>
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 text-white">Staking</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Inicio</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">&iquest;QU&Egrave; ES BITCOIN?</a></li>
            <li><a class="dropdown-item" href="#">C&oacute;mo Comprar</a></li>
            <li><a class="dropdown-item" href="#">Hoja de Ruta</a></li>
            <li><a class="dropdown-item" href="#">Comparaciones</a></li>
            <li><a class="dropdown-item" href="#">Preg&uacute;ntas Frecuentes</a></li>
          </ul>
        </li>
      </ul>
      <div class="text-end">
        {{-- <button type="button" class="btn btn-warning mx-2"><strong>AUDITADO</strong></button> --}}
        <a href="{{ asset('assets/files/whitepaper.pdf') }}" class="btn btn-warning mx-2" target="_blank"><strong>WHITEPAPER</strong></a>
        <button type="button" class="btn btn-warning mx-2"><strong>COMPRAR</strong></button>
        <a href="{{ route('login') }}" class="btn btn-warning mx-2" target="_blank"><strong>Login</strong></a> <!-- Nuevo bot�n para iniciar sesi�n -->
      </div>
    </div>
  </div>
</header>
