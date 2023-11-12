@extends('layouts.app')
@section('css')

@endsection
@section('content')
@component('components.button._back')
  {{-- @slot('body','<div class="col-12 text-center"><strong>Mensaje</strong></div>') --}}
@endcomponent
<div class="row">
  <div class="container">
    <div class="row justify-content-center">
      <div class="card shadow mb-3 p-3 m-3">
        <div class="col-12 text-center">
          <strong class="h1">Gracias por su compra</strong>
        </div>
        <div class="alert alert-secondary text-center p-3 mt-3 mb-3">
          {{-- <h4>Gracias por tu compra de VentuCoins</h4> --}}
          <p>Agradecemos tu decisi&oacute;n de adquirir VentuCoins. Para completar el proceso y recibir tus VentuCoins,
            te pedimos que sigas estos sencillos pasos:</p>
          <p>1. Realiza el dep&oacute;sito correspondiente seg&uacute;n las instrucciones proporcionadas durante la compra.</p>
          <p>2. Adjunta un archivo PDF que sirva como comprobante de tu dep&oacute;sito. Este paso es esencial para agilizar
            el proceso de validaci&oacute;n.</p>
          <p>3. Una vez verificado tu dep&oacute;sito, tus VentuCoins se acreditar&aacute;n en tu billetera en
            un plazo m&aacute;ximo de 48 horas.</p>
          <p>Te agradecemos tu paciencia y confianza en VentuCoins. Si tienes alguna pregunta o inconveniente,
            no dudes en contactarnos.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


