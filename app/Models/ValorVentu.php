<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValorVentu extends Model
{
    use HasFactory;

    protected $table = 'valorventu'; // Nombre de la tabla en tu base de datos
    protected $fillable = [
      'fecha_inicio',
      'fecha_fin',
      'ventu',
      'guarani',
      'dolar',
      'real',
      'peso_chileno',
      // Otros campos que desees permitir que se asignen masivamente
  ];
}
