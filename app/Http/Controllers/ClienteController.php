<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Services\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
//use App\Cliente; // Asegúrate de importar el modelo Cliente
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
  public function showRegistrationForm()
  {
      // return UserInfo::get_data();
      // Obtener nacionalidades desde la base de datos
      // $nacionalidades = DB::table('nacionalidad')->pluck('nombre_nacionalidad','id_nacionalidad');
      $nacionalidades = DB::table('nacionalidad')->pluck('nombre','id'); //new
      return view('register', ['nacionalidades' => $nacionalidades]);
  }

  public function addRegistrarForm(Request $request)
  {
    $cliente = new Cliente();
    $cliente->nombres = $request->get('nombres');
    $cliente->apellidos = $request->get('apellidos');
    $cliente->email = $request->get('email');
    $cliente->password = bcrypt($request->get('password')); // Utiliza bcrypt para cifrar la contraseña
    $cliente->dni = $request->get('dni');
    $cliente->id_nacionalidad = $request->get('id_nacionalidad');
    $cliente->direccion = $request->get('direccion');
    $cliente->save();
    return redirect('/dashboard');
  }

  public function logout(){

  }

}
