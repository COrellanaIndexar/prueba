@extends('layouts.app')
@section('css')

@endsection
@section('content')
@component('components.button._back')
  {{-- @slot('body','<div class="col-12 text-center"><strong>Inicio</strong></div>') --}}
@endcomponent
<div class="row">
  <div class="container">
    <div class="row justify-content-center">
      <div class="card shadow mb-3 p-3 m-3">

        <div class="col-12 text-center">
          <strong class="h1">Inicio</strong>
        </div>

        <div class="container p-1 m-2">

          <div class="row justify-content-center">

            <div class="col-6">
              <div class="card">
                <div class="card-body p-3 m-3 text-center">
                  <!-- Contenido de la primera tarjeta -->
                  <p class="h3">Ultimos Movimientos</p>
                  <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 text-center">
                                <p class="card-text">
                                  01/11/2023
                                </p>
                            </div>
                            <div class="col-5 text-center">
                                <p class="card-text">
                                  Deposito de Juegos
                                </p>
                            </div>
                            <div class="col-4 text-center">
                                <p class="card-text">
                                  Monto:
                                  <i class="fa-solid fa-arrow-trend-up text-success"></i>
                                  <span class="text-success"> $50,23</span>
                                </p>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-3 text-center">
                                  <p class="card-text">
                                    15/10/2023
                                  </p>
                              </div>
                              <div class="col-5 text-center">
                                  <p class="card-text">
                                    Almuerzo en restaurante
                                  </p>
                              </div>
                              <div class="col-4 text-center">
                                  <p class="card-text">
                                    Monto:
                                      <i class="fa-solid fa-arrow-trend-down text-danger"></i>
                                      <span class="text-danger"> $30.75</span>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-3 text-center">
                                  <p class="card-text">
                                    10/10/2023
                                  </p>
                              </div>
                              <div class="col-5 text-center">
                                  <p class="card-text">
                                    Compra de libros
                                  </p>
                              </div>
                              <div class="col-4 text-center">
                                  <p class="card-text">
                                    Monto:
                                    <i class="fa-solid fa-arrow-trend-down text-danger"></i>
                                    <span class="text-danger"> $42.99</span>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 text-center">
                                <p class="card-text">
                                  05/10/2023
                                </p>
                            </div>
                            <div class="col-5 text-center">
                                <p class="card-text">
                                  Pago de factura de electricidad
                                </p>
                            </div>
                            <div class="col-4 text-center">
                              <p class="card-text">
                                  Monto:
                                  <i class="fa-solid fa-arrow-trend-down text-danger"></i>
                                  <span class="text-danger"> $85.75</span>
                              </p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="card">
                <div class="card-body p-3 m-3 text-center">
                  <!-- Contenido de la segunda tarjeta -->
                  <p class="h3">Transferencias Frecuentes</p>
                  <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-2 text-center">
                              <img class="avatar-img" src="{{ asset('app/img/ventucoin.png') }}" alt="">
                            </div>
                            <div class="col-6 text-center">
                                <p class="card-text">
                                  Dylan Fox
                                </p>
                            </div>
                            <div class="col-4 text-center">
                              <button type="button" class="btn btn-outline-warning"><i class="fa-solid fa-money-bill-transfer"></i> Transferir</button>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-2 text-center">
                              <img class="avatar-img" src="{{ asset('app/img/ventucoin.png') }}" alt="">
                            </div>
                            <div class="col-6 text-center">
                                <p class="card-text">
                                  John Smith
                                </p>
                            </div>
                            <div class="col-4 text-center">
                              <button type="button" class="btn btn-outline-warning"><i class="fa-solid fa-money-bill-transfer"></i> Transferir</button>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-2 text-center">
                              <img class="avatar-img" src="{{ asset('app/img/ventucoin.png') }}" alt="">
                            </div>
                            <div class="col-6 text-center">
                                <p class="card-text">
                                  Josef Mills
                                </p>
                            </div>
                            <div class="col-4 text-center">
                              <button type="button" class="btn btn-outline-warning"><i class="fa-solid fa-money-bill-transfer"></i> Transferir</button>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-2 text-center">
                              <img class="avatar-img" src="{{ asset('app/img/ventucoin.png') }}" alt="">
                            </div>
                            <div class="col-6 text-center">
                                <p class="card-text">
                                  David Snow
                                </p>
                            </div>
                            <div class="col-4 text-center">
                              <button type="button" class="btn btn-outline-warning"><i class="fa-solid fa-money-bill-transfer"></i> Transferir</button>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </div>
</div>
@endsection
