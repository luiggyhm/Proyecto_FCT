@extends('layouts.plantillaVistaAnuncios')

<!-- Todos los dolares vienen del controlador -->

@section('nombreGenero')
    @component('_components.anuncios.nombreGenero')
        @slot('nombre',$titulo_view)
    @endcomponent
@endsection


<!--Se encarga de inyectar los datos dentro del código dentro del balde
que se indica en  el componente, el section sirve para ponerle un nombre
para luego llamarlo con un yield donde queremos que se inserte-->
@section('anuncios')

    @foreach ($anuncios as $anuncio)

        @component('_components.anuncio.mostrarAnuncio')
            @slot('titulo', $anuncio->titulo)
            @slot('precio', $anuncio->precio)
            @slot('descripcion', $anuncio->descripcion)
            @slot('genero_id', $anuncio->genero_id)
            @slot('otros_generos',$anuncio->otros_generos)
            @slot('imagen',$anuncio->imagen)
        @endcomponent

    @endforeach

@endsection
