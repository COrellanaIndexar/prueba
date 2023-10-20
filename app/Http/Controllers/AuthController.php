<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
      $credentials = $request->only('email', 'password');

      if (Auth::attempt($credentials)) {
        // Authentication passed
        return redirect()->route('dashboard');
      }
      // Authentication failed
      return redirect()->route('login')->with('error', 'Credenciales Invalidas, intentalo denuevo');
    }

    public function logout()
    {
      Auth::logout();
      return redirect('/');
    }
}
