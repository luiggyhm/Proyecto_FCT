@extends('layouts.plantillaOpcionesFtpUser')

@section('mostrarBotonesUsuarios')
    @component('_components.ftpUser.mostrarBotonesUsuarios')
        @slot('crearUsuario', 'Registrar nuevo Usuario')
        @slot('modificarUsuario', 'Modificar Usuario')
        @slot('activarUsuario', 'Activar Usuario')
        @slot('desactivarUsuario', 'Desactivar Usuario')
        @slot('eliminarUsuario', 'Eliminar Usuario')
    @endcomponent
@endsection
