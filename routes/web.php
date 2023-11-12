<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\GoogleUserController;

// use App\Http\Controllers\AsignaturaController;
// use App\Http\Controllers\ComparteController;
// use App\Http\Controllers\DisponibilidadHorarioController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PdfSolicitudController;
// use App\Http\Controllers\PlanController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//Portada/Intro
Route::get('/', function () { return view('intro.index'); })->name('intro');
// AuthController
Route::get('/login', [AuthController::class, 'index'])->name('root');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::any('logout', [AuthController::class, 'logout'])->name('logout');
// vista crear usuarios
Route::get('/registro-usuario', [AuthController::class, 'vistaCrear'])->name('add');
Route::post('/registro-usuario', [AuthController::class, 'registrar'])->name('add');
//GoogleController
Route::get('auth/google', [GoogleUserController::class, 'redirectToGoogle' ]);
Route::get('auth/google/callback', [GoogleUserController::class, 'handleGoogleCallback' ]);
// HomeController
Route::middleware('auth.user')->group( function () {
  Route::get('home', [HomeController::class, 'index'])->name('home.index');
  Route::get('admin/perfil', [HomeController::class, 'perfil'])->name('admin.perfil');
  Route::put('admin/perfil', [HomeController::class, 'perfilUpdate'])->name('admin.perfil');
  // UsuarioController
  Route::resource('usuarios', UsuarioController::class);
  // Route::get('comparte_duoc', [ComparteController::class, 'index'])->name('comparte.index');

  // Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
  //OPCIONES
  Route::get('/wallet', function () { return view('home.wallet'); })->name('wallet');
  Route::get('/movimientos', function () { return view('home.movimientos'); })->name('movimientos');
  Route::get('/entradas', function () { return view('home.entradas'); })->name('entradas');
  // Comprar Ventu
  Route::get('/comprar',function(){ return view('home.comprar'); })->name('comprar');
  // Medio de Pagos (vista temporal)
  Route::get('/pago',function(){ return view('home.pago'); })->name('pago');
  // pdf de seguridad
  Route::get('/comprobante',function(){ return view('home.comprobante'); })->name('comprobante');
  //mensaje PostCompra
  Route::get('/mensaje',function(){ return view('home.mensaje'); })->name('mensaje');

  Route::get('/configuraciones', function () { return view('home.configuraciones'); })->name('configuraciones');
});



// Route::get('pdf', [PdfSolicitudController::class,'uno'])->name('pdf.uno');

// use Maatwebsite\Excel\Facades\Excel;

// Route::get('/export-main', function () {
//   return Excel::download(new MainExport, 'sales.xls');
// });
