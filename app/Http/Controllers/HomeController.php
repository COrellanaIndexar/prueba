<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\Models\Nacionalidad;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
  public function index() {
    return view('home.index');
  }

  public function perfil() {
    $u = current_user();
    $paises = Nacionalidad::get();

    return view('admin.perfil',compact('u','paises'));
  }

  public function perfilUpdate(Request $request) {
    $u = current_user();
    // return $request;

    if ($request->pass) {
      $u->password = hash('sha256', $request->input('pass'));
      $u->update();
    }

    if ($request->nombres) {
      $u->nombres = $request->input('nombres');
      $u->apellidos = $request->input('apellidos');
      $u->dni = $request->input('dni');
      $u->id_nacionalidad = $request->input('id_nacionalidad');
      $u->direccion = $request->input('direccion');
      $u->update();
      // return $u;
    }

    return back()->with('success','Se ha actualizado');
  }
}
