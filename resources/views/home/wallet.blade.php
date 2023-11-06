@extends('layouts.app')
@section('css')

@endsection
@section('content')
@component('components.button._back')
  @slot('body','<div class="col-12 text-center"><strong>Wallet</strong></div>')
@endcomponent
<div class="row">
  <div class="container">
    <div class="row justify-content-center">
      <div class="card shadow mb-3">
        <h4 class="d-inline">Saldo Actual Disponible.</h4>
        <p class="d-inline ml-2 text-secondary">0x1A3f5B9c8D4e6A7Bd2F1C3e5D6F7a9b8C7d2E3F4a</p>

        <div class="btn-group">
          <button type="button" class="btn btn-warning btn-md rounded m-1 p-2">Transferir <i class="fa-solid fa-money-bill-transfer"></i></button>
          <button type="button" class="btn btn-outline-warning btn-md rounded m-1 p-2">resibir transferencia <i class="fa-solid fa-piggy-bank"></i></button>
        </div>

        <div class="container p-3 m-3">
          <div class="row">
            <div class="col-md-3 mb-3">
              <div class="card">
                <div class="card-body text-center">
                  <h5 class="card-title">Saldo Contable <i class="fa-solid fa-money-check-dollar"></i></h5>
                  <p class="card-text"><strong>$354.32</strong>.</p>
                </div>
              </div>
            </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-body text-center">
                <h5 class="card-title">Total Remuneraciones <i class="fa-solid fa-comments-dollar"></i></h5>
                <p class="card-text"><strong>$4.32</strong>.</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-body text-center">
                <h5 class="card-title">Total Cargos <i class="fa-solid fa-file-invoice-dollar"></i></h5>
                <p class="card-text"><strong>$10.15</strong>.</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-body text-center">
                <h5 class="card-title">Total Ahorrado <i class="fa-solid fa-money-bill-trend-up"></i></h5>
                <p class="card-text"><strong>$120.45</strong>.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
