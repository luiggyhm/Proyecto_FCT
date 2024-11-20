<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'tipo_local', //restaurante, local,bar...
        'direccion',
        'descripcion',
        'telefono',
        'aforo',
        'imagen',
    ];

//relación un tipo de negocio puede pertenecer a muchos anuncios
    public function anuncios()
    {
        return $this->hasMany(Anuncio::class, 'tipo_negocio_id');
    }


}