@extends('layouts.app')
@section('css')

@endsection
@section('content')
@component('components.button._back')
  {{-- @slot('body','<div class="col-12 text-center"><strong>PDF</strong></div>') --}}
@endcomponent
<div class="row">
  <div class="container">
    <div class="row justify-content-center">
      <div class="card shadow mb-3 p-3 m-3">
        <div class="col-12 text-center">
          <strong class="h1">PDF</strong>
        </div>
        <div class="alert alert-secondary text-center p-3 mt-3 mb-3">
          <h4>Proceso de Dep&oacute;sito y Recepci&oacute;n de Ventucoins</h4>
          <p>Para recibir sus Ventucoins, por favor siga estos pasos:</p>
          <p>1. Realice su dep&oacute;sito seg&uacute;n las instrucciones proporcionadas.</p>
          <p>2. Adjunte un archivo PDF como comprobante de su dep&oacute;sito.</p>
          <p>3. Recibir&aacute; sus Ventucoins en su billetera en un plazo m&aacute;ximo de 24 horas.</p>
        </div>
        <!-- Botón para subir archivo PDF -->
        <div class="text-center mb-3">
          <!-- Botón para subir archivo PDF centrado y menos ancho -->
          <label for="pdfUpload" class="btn btn-warning btn-sm">
            Subir Archivo PDF
            <input type="file" accept=".pdf" id="pdfUpload" name="pdfUpload" style="display: none;">
          </label>
        </div>
          <!-- Botón Continuar -->
        <div class="text-center mb-3">
          <a href="{{ route('mensaje') }}" class="btn btn-success btn-sm ml-2">Continuar</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


