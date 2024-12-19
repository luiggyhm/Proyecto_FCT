@php
use App\Models\Anuncio;
@endphp

@extends('layouts.plantillaVistaFormularioAnuncio')

<!-- Todos los dolares vienen del controlador -->

@section('seleccionAcceso')
@component('_components.anuncios.mostrarBotonesTipoAcceso')
@slot('titulo','¿Que tipo de Anuncio deseas poner?')
@endcomponent
@endsection

@section('formularioCrearAnuncio')
@component('_components.anuncios.formularioCrearAnuncio')
@slot('generos',$generos)
@slot('locales',$locales)
@slot('anuncio', Anuncio::createEmpty())
@slot('textoBoton','Crear anuncio')
@endcomponent
@endsection