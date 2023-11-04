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
        
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-body text-center">
            </div>
          </div>
        </div>  
        
        <div class="container p-1 m-2">
          
          <div class="row justify-content-center">
            
            <div class="col-6">
              <div class="card">
                <div class="card-body p-3 m-3">
                  <!-- Contenido de la primera tarjeta -->
                  1
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="card">
                <div class="card-body p-3 m-3">
                  <!-- Contenido de la segunda tarjeta -->
                  2
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
