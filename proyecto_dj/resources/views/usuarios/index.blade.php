@extends('layouts.plantillaVistaAnuncios')

<!-- Todos los dolares vienen del controlador -->

@section('eleccionUsuario')
    @component('_components.usuarios.eleccionUsuario')
        @slot('titulo','Elije el tipo de Usuario con el que te quieres registrar')
    @endcomponent
@endsection


<!--Se encarga de inyectar los datos dentro del código dentro del balde
que se indica en  el componente, el section sirve para ponerle un nombre
para luego llamarlo con un yield donde queremos que se inserte-->

@section('tipoUsuario')
    @component('_components.usuarios.formularioCrearUsuario')
        @slot('locales', $locales)
    @endcomponent
@endsection