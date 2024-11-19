<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'pago_id',
        'cliente_id',
        'token',
        'estado_pago',
        'cantidad_cobro',
        'tipo_moneda',
        'descripcion_transacccion',
    ];

    //relación 1:n una suscripción puede ser comprada por varios usuarios
    public function users()
    {
        return $this->hasMany(User::class, 'suscripcion_id');
    }




}
