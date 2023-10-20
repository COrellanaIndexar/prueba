<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('root');

Route::get('/login', function () {
  return view('login');
})->name('login');

Route::post('/login', [AuthController::class,'login'])->name('login');

//logout agregar
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [ClienteController::class, 'showRegistrationForm'])->name('register');

Route::post('/registrar', [ClienteController::class, 'addRegistrarForm'])->name('addRegistrarForm');

Route::get('/dashboard', function () {
  return view('dashboard');
})->name('dashboard');

Route::get('/edit', function () {
  return view('edit');
})->name('edit');
