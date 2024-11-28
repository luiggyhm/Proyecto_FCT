<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'precio',
        'descripcion',
        'telefono',
        'otros_generos',
        'imagen',
        'genero_id',

        //si es dj
        'ciudad',
        
        //si es negocio
        'tipo_local',
        'direccion',
        'aforo',
    ];

    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }

    //Un anuncio solo puede pertenecer a un tipo de negocio
    public function tipoNegocio()
    {
        return $this->belongsTo(Negocio::class, 'tipo_negocio_id');
    }


}
