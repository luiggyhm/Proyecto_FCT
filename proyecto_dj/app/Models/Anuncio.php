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
        'genero_id',
        'imagen',
        'otros_generos',

        //si es dj o negocio
        'ciudad',
        'localidad',
        
        //si es negocio
        'tipo_local',
        'direccion',
        'aforo',

        //se rellena desde el formulario al pulsar el botón automaticamente
        'tipo_anuncio',
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
