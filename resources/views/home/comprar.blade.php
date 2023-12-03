{{-- @extends('layouts.app') --}} {{--Vue  --}}
@extends('layouts.appp') {{--JS--}}
@section('css')

@endsection
@section('content')
@component('components.button._back')
  {{-- @slot('body','<div class="col-12 text-center"><strong>Comprar Ventus</strong></div>') --}}
@endcomponent
<div class="row">
  <div class="container">
    <div class="row justify-content-center">
      <div class="card shadow mb-3 p-3 m-3">

        <div class="col-12 text-center">
          <strong class="h1">Comprar Ventus</strong>
        </div>
        {{--  --}}
        <form class="m-3 p-3">
          <div class="row">
            <!-- Ventus a Comprar -->
            <div class="col-md-4">
              <div class="form-group">
                  <label for="nombres">Ventus a Comprar</label>
                  <input type="number" class="form-control" name="nombres" id="nombres" oninput="actualizarValorMoneda()" required/>
                  <small class="text-success"> 1 ventu = $ 1,0 UST aprox.</small>
              </div>
            </div>
            <!-- Selección de Moneda -->
            <div class="col-md-4">
              <div class="form-group">
                  <label for="moneda">Seleccione su moneda de compra</label>
                  <select class="form-select" aria-label="Default select example" id="moneda" onchange="actualizarValorMoneda()">
                      <option selected>Seleccione su moneda de compra</option>
                      <option value="1">USD</option>
                      <option value="2">Guarani</option>
                      <option value="3">Real</option>
                      <option value="4">Peso Chileno</option>
                  </select>
              </div>
            </div>
            <!-- Valor en Moneda -->
            <div class="col-md-4">
              <div class="form-group">
                  <label for="valor_moneda">Valor en Moneda:</label>
                  <input type="text" class="form-control" name="valor_moneda" id="valor_moneda" readonly/>
              </div>
            </div>
          </div>
          {{-- nuevo --}}
          <div class="container">
            <div class="row justify-content-center mt-3" id="mensajeCompra" style="display: none;">
                <div class="col-md-12">
                    <div class="card text-right">
                        <div class="card-header">
                            <h4 class="mb-0">Detalles de la transacci&oacute;n</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                La cantidad de dinero a depositar es de $<span id="montoDeposito"></span>.
                            </p>
                            <p class="card-text">
                                Los datos para realizar la transacci&oacute;n que le permitan cargar Ventus a su cuenta son:
                            </p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Monto: $<span id="valorMoneda"></span>.</li>
                                <li class="list-group-item">Banco: Banco Nacional.</li>
                                <li class="list-group-item">N&uacute;mero de cuenta: 0x0067821.</li>
                                <li class="list-group-item">Para: VentuCoin Bank Central.</li>
                                <li class="list-group-item">Mensaje: Carga Ventu.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          {{--  --}}

          <div class="row">
            <div class="col-md-12">
              <a href="{{ route('comprobante') }}" class="btn btn-warning mt-3">Realizar Compra</a>
            </div>
          </div>
        </form>
        {{-- ORIGINAL --}}
      </div>
    </div>
  </div>
</div>
<script>
  function actualizarValorMoneda() {
      var ventus = parseFloat(document.getElementById('nombres').value) || 0;
      var monedaSeleccionada = document.getElementById('moneda').value;

      var valorEnMoneda;
      switch (monedaSeleccionada) {
          case '1': // USD
              valorEnMoneda = ventus * 1; // 1 ventu = 1 USD
              break;
          case '2': // Guarani
              valorEnMoneda = ventus * 5000; // 1 ventu = 2 Guarani
              break;
          case '3': // Real
              valorEnMoneda = ventus * 1.5; // 1 ventu = 1.5 Real
              break;
          case '4': //Peso Chileno
              valorEnMoneda = ventus * 836 // 1 ventu = 1500 CLP
              break;
          default:
              valorEnMoneda = 0;
              break;
      }

      document.getElementById('valor_moneda').value = valorEnMoneda.toFixed(2);
      // Mostrar el mensaje de compra
      // Mostrar el mensaje de compra
      document.getElementById('mensajeCompra').style.display = 'block';
      document.getElementById('montoDeposito').innerText = valorEnMoneda.toFixed(2);
      document.getElementById('valorMoneda').innerText = valorEnMoneda.toFixed(2);
  }
</script>
@endsection
