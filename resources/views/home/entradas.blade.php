@extends('layouts.app')
@section('css')

@endsection
@section('content')
@component('components.button._back')
  {{-- @slot('body','<div class="col-12 text-center"><strong>Mis Entradas</strong></div>') --}}
@endcomponent
<div class="row">
  <div class="container">
    <div class="row justify-content-center">
      <div class="card shadow mb-3  p-3 m-3">

        <div class="col-12 text-center">
          <strong class="h1">Mis Entradas</strong>
        </div>
        <!-- Dadvar  -->
        <nav class="navbar navbar-expand m- p-3">
          <!-- <a class="navbar-brand" href="#">Always expand</a> -->
          <div class="collapse navbar-collapse m-2" id="navbarsExample02">
            <form class="form-inline my-2 my-md-0 ml-auto">
              <input class="form-control" type="text" placeholder="Buscar" >
            </form>
          </div>
          <button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-file-pdf"></i> Descargar en PDF</button>
          <button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-file-excel"></i> Descargar en Excel</button>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
        <!-- tabla -->
        <div class="d-flex justify-content-center m-1 p-2">
          <table class="table table-bordered">
            <thead>
                <tr class="table-active text-center">
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Detalle</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <th scope="row">1</th>
                    <td>30-10-2023</td>
                    <td>14:54</td>
                    <td><button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-calendar-day"></i> Ver Detalles</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>14-10-2023</td>
                    <td>15:50</td>
                    <td><button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-calendar-day"></i> Ver Detalles</button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>25-10-2023</td>
                    <td>12:30</td>
                    <td><button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-calendar-day"></i> Ver Detalles</button></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>07-11-2023</td>
                    <td>09:15</td>
                    <td><button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-calendar-day"></i> Ver Detalles</button></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>18-11-2023</td>
                    <td>19:22</td>
                    <td><button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-calendar-day"></i> Ver Detalles</button></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>02-12-2023</td>
                    <td>08:45</td>
                    <td><button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-calendar-day"></i> Ver Detalles</button></td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>10-12-2023</td>
                    <td>17:37</td>
                    <td><button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-calendar-day"></i> Ver Detalles</button></td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>05-12-2023</td>
                    <td>22:10</td>
                    <td><button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-calendar-day"></i> Ver Detalles</button></td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>19-10-2023</td>
                    <td>11:20</td>
                    <td><button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-calendar-day"></i> Ver Detalles</button></td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>22-11-2023</td>
                    <td>18:15</td>
                    <td><button type="button" class="btn btn-warning m-2"><i class="fa-solid fa-calendar-day"></i> Ver Detalles</button></td>
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
