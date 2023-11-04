
@extends('layouts.app')
@push('css')
  <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
@endpush
@section('content')
<div class="container-fluid">
  <div class="row">
    @component('components.button._back')
      @slot('body', 'Mi perfil')
    @endcomponent
    <div class="col-md-7">
      <div class="card shadow mb-3">
        <div class="card-body">
          <form class="form-sample form-submit" action="{{ route('admin.perfil') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
              <div class="col-md-12 mb-3">
                <div class="d-flex align-items-center justify-content-center ">
                  <div class="avatar avatar-md">
                    <!-- <img class="avatar-img" src="{{ current_user()->getImg() }}" alt=""> -->
                    <img class="avatar-img" src="{{ asset('app/img/ventucoin.png') }}" alt="">
                  </div>
                  <div class="ms-2">
                    <span class="h6 mt-2 mt-sm-0">{{ current_user()->nombres}} {{ current_user()->apellidos}}</span>                  
                    <p class="small m-0">{{ current_user()->email}}</p>
                  </div>
                </div>
              </div>
              {{-- <div class="form-group row">
                <label class="col-sm-12" for="correo">Correo <small class="text-danger">*</small></label>
                <div class="col-sm-12">
                  <input type="email" class="form-control {{ $errors->has('correo') ? 'is-invalid' : '' }}" readonly  value="{{ $u->correo }}"/>
                </div>
              </div> --}}

              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group row">
                    <label class="col-sm-12" for="nombre">Nombres <small class="text-danger">*</small></label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="nombres" id="nombres" value="{{ $u->nombres }}" required/>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 mb-3">
                  <div class="form-group row">
                    <label class="col-sm-12" for="nombre">Apellidos <small class="text-danger">*</small></label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ $u->apellidos }}" required/>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <div class="form-group row">
                  <label class="col-sm-12" for="run">DNI<small class="text-danger">*</small></label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="dni" id="dni" value="{{ $u->dni}}" required/>
                    </div>
                </div>
              </div>

              {{-- <div class="col-mb-6 mb-3">
                <select class="form-select" aria-label="Default select example" name="id_nacionalidad">
                  <option selected>Seleccione su Nacionalidad</option>
                    @foreach($paises as $pais)
                      <option value="{{ $pais->id }}">{{ $pais->nombre}}</option>
                    @endforeach
                </select> 
              </div> --}}

              <div class="col-md-6 mb-3">
                <div class="form-group row">
                  <label class="col-sm-12" for="run">Direcci&oacute;n<small class="text-danger">*</small></label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $u->direccion }}" required/>
                  </div>
                </div>
              </div>

              {{-- <div class="col-md-4 mb-3">
                <label for="admin">Administrador<small class="text-danger">*</small></label>
                <select class="form-control" readonly>
                  <option value="1" {{ $u->tipo_usuario == 1 ? 'selected' : '' }}>Si</option>
                  <option value="2" {{ $u->tipo_usuario == 2 ? 'selected' : '' }}>No</option>
                </select>
              </div> --}}
            </div>
            <div class="form-group d-flex justify-content-end">
              <button type="submit" class="btn btn-success">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="card shadow mb-3">
        <div class="card-body">
          <form class="form-sample form-submit" action="{{ route('usuarios.update',$u->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-md-12 mb-3">
                <div class="form-group row">
                  <label class="col-sm-12" for="pass">Cambiar contraseña <small class="text-danger">*</small></label>
                  <div class="col-sm-12">
                    <input type="password" class="form-control" name="pass" id="pass" value="" required/>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group d-flex justify-content-end">
              <button type="submit" class="btn btn-success">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@push('js')
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/select2.js') }}"></script>
@endpush
