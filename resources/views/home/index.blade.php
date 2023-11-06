@extends('layouts.app')
@section('css')

@endsection
@section('content')
@component('components.button._back')
  @slot('body','<div class="col-12 text-center"><strong>Inicio</strong></div>')
@endcomponent
<div class="row">
  <div class="container">
    <div class="row justify-content-center">
      <div class="card shadow mb-3 p-3 m-3">

        {{-- <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="row">
                <div class="col-6 text-center">
                  <p class="card-text"><strong>Mi Cuenta:</strong> 0x1A3f5B9c8D4e6A7Bd2F1C3e5D6F7a9b8C7d2E3F4a</p>
                </div>
              </div>
              <div class="row">
                <div class="card-body p-3 m-3 text-center">

                  <div class="card mb-4 box-shadow  bg-warning">
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"> Bienvenido!</small></h1>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div> --}}

        <div class="container p-1 m-2">

          <div class="row justify-content-center">

            <div class="col-6">
              <div class="card">
                <div class="card-body p-3 m-3 text-center">
                  <!-- Contenido de la primera tarjeta -->
                  <p class="h2">Ultimos Movimientos</p>
                  <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 text-center">
                                <p class="card-text">
                                  <strong>01/11/2023</strong>
                                </p>
                            </div>
                            <div class="col-5 text-center">
                                <p class="card-text">
                                  <strong>Deposito de Juegos</strong>
                                </p>
                            </div>
                            <div class="col-4 text-center">
                                <p class="card-text">
                                  Monto:
                                  <strong class="text-success"><i class="fa-solid fa-arrow-trend-up"></i> $50,23</strong>
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
                                    <strong>15/10/2023</strong>
                                  </p>
                              </div>
                              <div class="col-5 text-center">
                                  <p class="card-text">
                                    <strong>Almuerzo en restaurante</strong>
                                  </p>
                              </div>
                              <div class="col-4 text-center">
                                  <p class="card-text">
                                    Monto:
                                    <strong class="text-danger"><i class="fa-solid fa-arrow-trend-down"></i> $30.75</strong>
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
                                    <strong>10/10/2023</strong>
                                  </p>
                              </div>
                              <div class="col-5 text-center">
                                  <p class="card-text">
                                    <strong>Compra de libros</strong>
                                  </p>
                              </div>
                              <div class="col-4 text-center">
                                  <p class="card-text">
                                    Monto:
                                    <strong class="text-danger"><i class="fa-solid fa-arrow-trend-down"></i> $42.99</strong>
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
                                  <strong>05/10/2023</strong>
                                </p>
                            </div>
                            <div class="col-5 text-center">
                                <p class="card-text">
                                  <strong>Pago de factura de electricidad</strong>
                                </p>
                            </div>
                            <div class="col-4 text-center">
                                <p class="card-text">
                                  Monto:
                                  <strong class="text-danger"><i class="fa-solid fa-arrow-trend-down"></i> $85.75</strong>
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
                  <p class="h2">Transferencias Frecuentes</p>
                  <div class="card">
                    <div class="card-body">
                        <div class="row">
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
                        <div class="row">
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
                        <div class="row">
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
                        <div class="row">
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
