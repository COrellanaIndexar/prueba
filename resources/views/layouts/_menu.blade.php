<div class="sidebar sidebar-dark sidebar-fixed text-sm" id="sidebar">
  <div class="sidebar-brand d-none d-md-flex p-3">
    <img src="{{ asset('app/img/ventucoin.png') }}" width="100" alt="">
  </div>
  <ul class="sidebar-nav {{ activeTab(['asignaturas*']) }}" data-coreui="navigation" data-simplebar="">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home.index') }}">
        <i class="nav-icon fa-solid fa-house-chimney"></i>
        Inicio
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ activeTab(['planes*']) }}" href="{{ route('wallet') }}">
        <i class="nav-icon fa-solid fa-wallet"></i>
        <small>Wallet</small>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ activeTab(['planes*']) }}" href="{{ route('movimientos') }}">
        <i class="nav-icon fa-solid fa-money-check-dollar"></i>
        <small>Movimientos</small>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ activeTab(['planes*']) }}" href="{{ route('entradas') }}">
        <i class="nav-icon fa-solid fa-address-book"></i>
        <small>Entradas</small>
      </a>
    </li>
    {{-- COMPRAR VENTU  --}}
    <li class="nav-item">
      <a class="nav-link {{ activeTab(['planes*']) }}" href="{{ route('comprar') }}">
        <i class="nav-icon fa-solid fa-money-bill-1-wave"></i>
        <small>Comprar Ventu</small>
      </a>
    </li>
    {{--  --}}
    <li class="nav-item">
      <a class="nav-link {{ activeTab(['planes*']) }}" href="{{ route('admin.perfil') }}">
        <i class="nav-icon fa-solid fa-gears"></i>
        <small>Configuraciones</small>
      </a>
    </li>
    <!-- @if (current_user()->tipo_usuario == 1) -->
    <!-- <li class="nav-item">
      <a class="nav-link {{ activeTab(['planes*']) }}" href="">
        <i class="nav-icon fa-regular fa-clock"></i>
        <small>Alguna accion</small>
      </a>
    </li> -->
    <!-- AREA DE CRUD DE USUARIOS -->
    <li class="nav-title">Configuración</li>
    <li class="nav-group {{ activeOpen(['usuario*','asignaturas*']) }}"><a class="nav-link nav-group-toggle" href="#">
      <i class="nav-icon fa-solid fa-gear"></i> Admin</a>
      <ul class="nav-group-items">
        <li class="nav-item">
          <a class="nav-link {{ activeTab(['usuario*']) }}" href="{{ route('usuarios.index') }}">
            <span class="nav-icon"></span>
            Usuarios
          </a>
        </li>
        <!-- {{-- <li class="nav-item">
          <a class="nav-link {{ activeTab(['asignaturas*']) }}" href="">
            <span class="nav-icon"></span>
            Reports
          </a>
        </li> --}} -->
      </ul>
    </li>
    @endif


    <!-- {{-- <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/"
        target="_blank">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-description') }}"></use>
        </svg> Docs</a></li>
    <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-layers') }}"></use>
        </svg> Try CoreUI
        <div class="fw-semibold">PRO</div>
      </a></li> --}} -->
  </ul>
  <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
