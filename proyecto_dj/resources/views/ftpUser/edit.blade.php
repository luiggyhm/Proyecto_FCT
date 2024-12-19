@extends('layouts.plantillaVistaFormUserFtp')

<!-- Todos los dolares vienen del controlador -->

@section('seleccionAcceso')
@component('_components.anuncios.mostrarBotonesTipoAcceso')
@slot('titulo','Registra a un Usuario FTP de pago')
@endcomponent
@endsection

@section('formularioCrearUserFtp')
@component('_components.ftpUser.formularioCrearUserFtp')
@slot('estados', $estados)
@slot('directorios',$directorios)
@slot('tipo_users',$tipo_users)
@slot('ftpUser', $ftpUser)
@slot('textoBoton','Modificar usuario FTP')
@endcomponent
@endsection