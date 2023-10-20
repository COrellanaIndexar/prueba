<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LOGSitio extends Model
{
    // use HasFactory;
    protected $table = 'logsitio';
    protected $primaryKey = 'id_log';
    protected $fillable = ['fecha_hora', 'ip', 'id_cliente'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}
