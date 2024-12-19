@extends('layouts.plantillaVistaFormulariosUsuarios')


@section('explicacionRegistro')
    @component('_components.usuarios.explicacionRegistro')
    @slot('pregunta','Modificar Usuario')    
    @slot('ventajas','')
    @endcomponent
@endsection

@section('tituloCrear')
    @component('_components.usuarios.tituloCrear')
        @slot('titulo','¡Rellena el siguiente formulario para Modificar el Usuario!')
    @endcomponent
@endsection

@section('formUsuario')
    @component('_components.usuarios.formularioCrearUsuario')
        @slot('tipos_accesos', $tipos_accesos)
        @slot('usuario', $usuario)
        @slot('nombreBoton', 'Modificar Usuario')
    @endcomponent
@endsection