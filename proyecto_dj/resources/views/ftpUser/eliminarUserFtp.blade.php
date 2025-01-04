@extends('layouts.plantillaVistaFormEstadoFtp')

<!-- Todos los dolares vienen del controlador -->
@section('fomularioCambioEstado')
@component('_components.ftpUser.fomularioCambioEstado')
@slot('pregunta', '¿Que Usuario quieres eliminar?')
@slot('ruta', $ruta)
@slot('eliminar', $eliminar)
@slot('textoBoton','Eliminar Usuario FTP')
@endcomponent
@endsection