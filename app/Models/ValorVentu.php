<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValorVentu extends Model
{
    // use HasFactory;
    protected $table = 'valorventu';
    protected $primaryKey = 'id_valor';
    protected $fillable = ['fecha_inicio', 'fecha_fin', 'ventu', 'dolar', 'guarani'];
}
