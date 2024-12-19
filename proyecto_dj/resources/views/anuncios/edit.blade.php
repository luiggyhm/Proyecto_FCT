@extends('layouts.plantillaVistaFormularioAnuncio')

@section('seleccionAcceso')
    @component('_components.anuncios.mostrarBotonesTipoAcceso')
        @slot('titulo','Selecciona si eres Dj o Negocio de ocio')
    @endcomponent
@endsection

@section('formularioCrearAnuncio')
<h1>Modificar Anuncio</h1>
<br />
    @component('_components.anuncios.formularioCrearAnuncio')
        @slot('anuncio', $anuncio)
        @slot('generos',$generos)
        @slot('locales',$locales)
        @slot('textoBoton','Modificar anuncio')
    @endcomponent
@endsection