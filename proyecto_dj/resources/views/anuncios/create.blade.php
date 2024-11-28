@extends('layouts.plantillaVistaAnuncios')

<!-- Todos los dolares vienen del controlador -->

@section('botonesGenero')
    @component('_components.anuncios.mostrarBotonesGeneros')
        @slot('generos',$generos)
    @endcomponent
@endsection



@section('nombreGenero')
    @component('_components.anuncios.nombreGenero')
        @slot('nombre',$nombre_genero)
    @endcomponent
@endsection


<!--Se encarga de inyectar los datos dentro del código dentro del balde
que se indica en  el componente, el section sirve para ponerle un nombre
para luego llamarlo con un yield donde queremos que se inserte-->
@section('mostrarAnuncios')

    @foreach ($anuncios as $anuncio)

        @component('_components.anuncios.mostrarAnuncio')
            @slot('id', $anuncio->id)
            @slot('titulo', $anuncio->titulo)
            @slot('precio', $anuncio->precio)
            @slot('descripcion', $anuncio->descripcion)
            @slot('genero_nombre', $anuncio->genero->nombre)
            @slot('otros_generos',$anuncio->otros_generos)
            @slot('imagen',$anuncio->imagen)
        @endcomponent

    @endforeach

@endsection
