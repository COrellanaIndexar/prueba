@extends('layouts.app')
@section('css')

@endsection
@section('content')
@component('components.button._back')
  {{-- @slot('body','<div class="col-12 text-center"><strong>Mis Movimientos</strong></div>') --}}
@endcomponent
<div class="row">
  <div class="container">
    <div class="row justify-content-center">
      <div class="card shadow mb-3  p-3 m-3">

        <div class="col-12 text-center">
          <strong class="h1">Mis Movimientos</strong>
        </div>
        <!-- Dadvar  -->
        <nav class="navbar navbar-expand m- p-3">
          <!-- <a class="navbar-brand" href="#">Always expand</a> -->
          <div class="collapse navbar-collapse m-2" id="navbarsExample02">
            <form class="form-inline my-2 my-md-0 ml-auto">
              <input class="form-control" type="text" placeholder="Buscar" >
            </form>
          </div>
          <button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-calendar-day"></i> Buscar por Fechas</button>
          <button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-money-bill-1"></i> Buscar por Montos</button>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
        <!-- tabla -->
        <div class="d-flex justify-content-center">
          <table class="table table-bordered">
          <thead>
              <tr class="table-active text-center">
                  <th scope="col">#</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Descripci&oacute;n</th>
                  <th scope="col">Monto</th>
              </tr>
          </thead>
            <tbody class="text-center">
              <tr>
                  <th scope="row">1</th>
                  <td>2023-10-24</td>
                  <td>Cena en restaurante</td>
                  <td>$35.75</td>
              </tr>
              <tr>
                  <th scope="row">2</th>
                  <td>2023-10-23</td>
                  <td>Pago m&uacute;sica en l&iacute;nea</td>
                  <td>$9.99</td>
              </tr>
              <tr>
                  <th scope="row">3</th>
                  <td>2023-10-22</td>
                  <td>Pago cine</td>
                  <td>$15.0</td>
              </tr>
              <tr>
                  <th scope="row">4</th>
                  <td>2023-10-21</td>
                  <td>Compra supermercado</td>
                  <td>$75.25</td>
              </tr>
              <tr>
                  <th scope="row">5</th>
                  <td>2023-10-20</td>
                  <td>Pago gasolina</td>
                  <td>$40.0</td>
              </tr>
              <tr>
                  <th scope="row">6</th>
                  <td>2023-10-19</td>
                  <td>Almuerzo en restaurante</td>
                  <td>$27.99</td>
              </tr>
              <tr>
                  <th scope="row">7</th>
                  <td>2023-10-18</td>
                  <td>Compra en l&iacute;nea</td>
                  <td>$45.75</td>
              </tr>
              <tr>
                  <th scope="row">8</th>
                  <td>2023-10-17</td>
                  <td>Pago salida con amigos</td>
                  <td>$50.0</td>
              </tr>
              <tr>
                  <th scope="row">9</th>
                  <td>2023-10-16</td>
                  <td>Pago juegos Steam</td>
                  <td>$30.21</td>
              </tr>
              <tr>
                  <th scope="row">10</th>
                  <td>2023-10-15</td>
                  <td>Pago pizza</td>
                  <td>$14.5</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- paginacion -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-end">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1"><i class="fa-solid fa-arrow-left"></i> Anterior</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Siguiente <i class="fa-solid fa-arrow-right"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection
