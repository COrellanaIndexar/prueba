<!DOCTYPE html>
<html lang="en">
<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="author" content="Bemtorres">
  <title>VentuCoin</title>
  <link rel="shortcut icon" href="{{ asset('app/img/ventucoin.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('vendors/simplebar/css/simplebar.css') }}">
  <link rel="stylesheet" href="{{ asset('app/css/vendors/simplebar.css') }}">
  <link href="{{ asset('app/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('app/css/zeustech.css') }}" rel="stylesheet">
</head>
<style>
  .avatar-img {
      max-width: 50px; /* Ajusta el tamaño máximo según tus necesidades */
      max-height: 50px; /* Ajusta el tamaño máximo según tus necesidades */
  }
</style>
<div class="bg-dark min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow mb-3">
                    <div class="card-body position-relative">
                        {{-- iconos esquinas de la cabecera --}}
                        <div class="position-absolute top-0 start-0">
                            <img class="avatar-img" src="{{ asset('app/img/ventucoin.png') }}" alt="">
                        </div>
                        <div class="position-absolute top-0 end-0">
                            <img class="avatar-img" src="{{ asset('app/img/ventucoin.png') }}" alt="">
                        </div>

                        <div class="row align-items-center text-center mb-3">
                            <h3 class="card-title">
                                Registrate!
                            </h3>
                        </div>
                        <form class="form-sample form-submit" action="{{ route('add')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-12" for="usuario">Nombres <small class="text-danger">*</small></label>
                                    <input type="text" class="form-control" name="nombres" id="nombres" required/>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="col-sm-12" for="usuario">Apellidos <small class="text-danger">*</small></label>
                                    <input type="text" class="form-control" name="apellidos" id="apellidos" required/>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group row">
                            <label class="col-sm-12" for="correo">Correo <small class="text-danger">*</small></label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control {{ $errors->has('correo') ? 'is-invalid' : '' }}" name="email" id="email" value="{{ old('correo') }}" required/>
                                {!! $errors->first('correo', ' <small id="inputPassword" class="form-text text-danger">:message</small>') !!}
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group row">
                            <label class="col-sm-12" for="run">DNI<small class="text-danger">*</small></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="dni" id="dni" value="{{ old('run') }}" required/>
                            </div>
                            </div>
                        </div>
                        <div class="col-mb-6 mb-3">
                            <select class="form-select" aria-label="Default select example" name="id_nacionalidad">
                                <option selected>Seleccione su Nacionalidad</option>
                                @foreach($paises as $pais)
                                    <option value="{{ $pais->id }}">{{ $pais->nombre}}</option>
                                @endforeach
                             </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group row">
                            <label class="col-sm-12" for="run">Direcci&oacute;n<small class="text-danger">*</small></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('run') }}" required/>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group row">
                            <label class="col-sm-12" for="pass">ContraseÃ±a <small class="text-danger">*</small></label>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" name="password" id="password" value="" required/>
                            </div>
                            </div>
                        </div>
                        {{-- REEDIRECCIONAR --}}
                        <div class="form-group d-flex">
                            <button type="submit" class="btn btn-warning">Guardar</button>
                        </div>
                        <div class="mb-3">
                            <!-- Agregar el hipervínculo para registrarse -->
                            <p class="mt-3">&iquest;ya estas registrado? <a href="{{ route('root') }}">entonces ingresa aqu&iacute;</a></p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <script src="{{ asset('vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
  <script src="{{ asset('vendors/simplebar/js/simplebar.min.js') }}"></script>
</body>
</html>
