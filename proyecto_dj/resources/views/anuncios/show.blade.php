@extends('layouts.plantillaDetalleAnuncio')

@section('tituloAnuncio')
@component('_components.anuncios.nombreGenero')
@slot('nombre', $anuncio->titulo)

@endcomponent

@endsection

@section('mostrarDetalle')
@component('_components.anuncios.mostrarDetalleAnuncio')
@slot('id', $anuncio->id)
@slot('creadorAnuncio', $creadorAnuncio)
@slot('precio', $anuncio->precio)
@slot('descripcion', $anuncio->descripcion)
@slot('telefono', $anuncio->telefono)
@slot('genero', $anuncio->genero->nombre)
@slot('otros_generos', $anuncio->otros_generos)
@slot('imagen', $anuncio->imagen)
@slot('ciudad', $anuncio->ciudad)
@slot('localidad', $anuncio->localidad)
@slot('tipo_local', $anuncio->tipo_local)
@slot('direccion', $anuncio->direccion)
@slot('aforo', $anuncio->aforo)
@slot('tipo_anuncio', $anuncio->tipo_anuncio)
@endcomponent

@endsection