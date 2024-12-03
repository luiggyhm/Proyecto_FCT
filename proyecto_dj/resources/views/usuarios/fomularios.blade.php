@extends('layouts.plantillaVistaFormularioAnuncio')

<!-- Todos los dolares vienen del controlador -->

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


<!--Se encarga de inyectar los datos dentro del código dentro del balde
que se indica en  el componente, el section sirve para ponerle un nombre
para luego llamarlo con un yield donde queremos que se inserte-->

@section('formUsuario')
    @component('_components.usuarios.formularioCrearUsuario')
        @slot('locales', $locales)
    @endcomponent
@endsection