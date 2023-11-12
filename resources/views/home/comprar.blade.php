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
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Ventus a Comprar</label>
                <input type="text" class="form-control" name="nombres" id="nombres" required/>
                <small class="text-success"> 1 ventu = $ 1,0 UST aprox.</small>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Seleccione su moneda de compra</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Seleccione su moneda de compra</option>
                  <option value="1">USD</option>
                  <option value="2">Guarani</option>
                  <option value="3">Real</option>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Valor en Moneda:</label>
                <input type="text" class="form-control" name="valor_moneda" id="valor_moneda" readonly/>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <a href="" class="btn btn-warning mt-3">Realizar Compra</a>
            </div>
          </div>
        </form>
        {{--  --}}
      </div>
    </div>
  </div>
</div>
@endsection
