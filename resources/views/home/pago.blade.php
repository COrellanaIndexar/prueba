@extends('layouts.app')
@section('css')

@endsection
@section('content')
@component('components.button._back')
  {{-- @slot('body','<div class="col-12 text-center"><strong>Pagos</strong></div>') --}}
@endcomponent
<div class="row">
  <div class="container">
    <div class="row justify-content-center">
      <div class="card shadow mb-3 p-3 m-3">
        <div class="col-12 text-center">
          <strong class="h1">Pagos</strong>
        </div>
        <div class="alert alert-danger text-center p-3 mt-3 mb-3" role="alert">
          <h4 class="alert-heading">&iexcl;Advertencia!</h4>
          <p>Tenga en cuenta los peligros al comprar criptomonedas. Proteja su cuenta y su direcci&oacute;n de billetera/wallet para evitar el robo de sus criptomonedas.</p>
          <p>No comparta su informaci&oacute;n de cuenta ni su clave privada con nadie. Verifique siempre la autenticidad de las plataformas y servicios que utiliza para comprar criptomonedas.</p>
          <p>Antes de continuar, es importante que tengas en cuenta lo siguiente: nosotros no nos hacemos responsables si decides compartir tu informaci&oacute;n con terceros fuera de esta plataforma.</p>
          <p>Tu privacidad es fundamental, y debes ser consciente de los riesgos asociados al compartir datos fuera de nuestro entorno seguro. Si est&aacute;s de acuerdo con estos t&eacute;rminos, por favor, presiona el siguiente bot&oacute;n para indicar que comprendes y deseas continuar con la transacci&oacute;n.</p>
        </div>
        {{-- <div class="mt-3">
          <button type="button" class="btn btn-warning btn-md rounded m-1 p-2">Entiendo, deseo continuar</button>
        </div> --}}
        <div class="mt-1 mb-3 d-flex justify-content-center align-items-center">
          <button type="button" class="btn btn-warning btn-md rounded m-1 p-2">Entiendo, deseo continuar</button>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection
