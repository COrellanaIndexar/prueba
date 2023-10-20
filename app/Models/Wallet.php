<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    // use HasFactory;
    protected $table = 'wallet';
    protected $primaryKey = 'id_wallet';
    protected $fillable = ['fecha_creacion', 'ip_creador', 'id_cliente', 'monto_guarani', 'num_wallet'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}
