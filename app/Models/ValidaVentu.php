<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValidaVentu extends Model
{
    // use HasFactory;
    protected $table = 'validaventu';
    protected $primaryKey = 'id_valida';
    protected $fillable = ['fecha_creacion', 'campo_validado', 'fecha_hora_validacion', 'comentario_rechazo'];
}
