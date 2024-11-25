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
        'genero_id',
        'tipo_negocio',
        'otros_generos',
        'imagen',
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
