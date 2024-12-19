@extends('layouts.plantillaVistaFormEstadoFtp')

<!-- Todos los dolares vienen del controlador -->
@section('fomularioCambioEstado')
@component('_components.ftpUser.fomularioCambioEstado')
@slot('pregunta', '¿Que Usuario quieres desactivar?')
@slot('ruta', $ruta)
@slot('textoBoton','Desactivar Usuario FTP')
@endcomponent
@endsection