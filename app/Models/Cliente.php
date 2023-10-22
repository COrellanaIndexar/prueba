<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Cliente extends Model implements  Authenticatable
{
    use AuthenticatableTrait;
    protected $table = "cliente";
    use HasFactory;

    protected $primaryKey = 'id_cliente';
    protected $fillable = ['nombres', 'apellidos', 'email', 'DNI', 'id_nacionalidad', 'direccion', 'password'];
}
//funcion belongsto para nacionalidad
