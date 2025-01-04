@extends('layouts.plantillaVistaFormEstadoFtp')

<!-- Todos los dolares vienen del controlador -->
@section('fomularioCambioEstado')
@component('_components.ftpUser.fomularioCambioEstado')
@slot('pregunta', '¿Que Usuario quieres activar?')
@slot('ruta', $ruta)
@slot('eliminar', $eliminar)
@slot('textoBoton','Activar Usuario FTP')
@endcomponent
@endsection