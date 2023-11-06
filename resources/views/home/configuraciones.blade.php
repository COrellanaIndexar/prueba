@extends('layouts.app')
@section('css')

@endsection
@section('content')
@component('components.button._back')
  @slot('body','<div class="col-12 text-center"><strong>Configuraciones</strong></div>')
@endcomponent
<div class="row">
  <div class="container">
    <div class="row justify-content-center">
      <div class="card shadow mb-3">
        {{--  --}}
        1
        {{--  --}}
      </div>
    </div>
  </div>
</div>
@endsection
