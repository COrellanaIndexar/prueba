@extends('layouts.app')
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
                  <input type="text" class="form-control" name="nombres" id="nombres" oninput="actualizarValorMoneda()" required/>
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
          <div class="row">
            <div class="col-md-12">
              <a href="{{ route('comprobante') }}" class="btn btn-warning mt-3">Realizar Compra</a>
            </div>
          </div>
        </form>
        {{--  --}}
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
              valorEnMoneda = ventus * 2; // 1 ventu = 2 Guarani
              break;
          case '3': // Real
              valorEnMoneda = ventus * 1.5; // 1 ventu = 1.5 Real
              break;
          default:
              valorEnMoneda = 0;
              break;
      }

      document.getElementById('valor_moneda').value = valorEnMoneda.toFixed(2);
  }
</script>
@endsection
