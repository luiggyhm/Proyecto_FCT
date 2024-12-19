@php
use App\Models\User;
@endphp

@extends('layouts.plantillaVistaFormularioAnuncio')

@section('explicacionRegistro')
    @component('_components.usuarios.explicacionRegistro')
    @slot('pregunta','¿Por qué registrarte con nosotros?')    
    @slot('ventajas','Ventajas de registrarte')
    @endcomponent
@endsection

@section('tituloCrear')
    @component('_components.usuarios.tituloCrear')
        @slot('titulo','¡Rellena el siguiente formulario y Sé Parte de Algo Increíble!')
    @endcomponent
@endsection

@section('formUsuario')
    @component('_components.usuarios.formularioCrearUsuario')
        @slot('tipos_accesos', $tipos_accesos)
        @slot('usuario', User::createEmpty())
        @slot('nombreBoton', 'Crear Usuario')
    @endcomponent
@endsection