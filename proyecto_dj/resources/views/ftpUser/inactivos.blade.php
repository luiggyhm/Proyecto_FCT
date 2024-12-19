@extends('layouts.plantillaVistaUsersFtp')

<!-- Todos los dolares vienen del controlador -->

@section('titulo')
    @component('_components.ftpUser.tituloUsuario')
        @slot('titulo',$titulo_view)
    @endcomponent
@endsection

<!--Se encarga de inyectar los datos dentro del código dentro del balde
que se indica en  el componente, el section sirve para ponerle un nombre
para luego llamarlo con un yield donde queremos que se inserte-->
@section('mostrarUsuariosFtp')
    <div class="row">
            @component('_components.ftpUser.mostrarUsuarios')
                @slot('usuarios', $usuariosFtpInactivos)
            @endcomponent
    </div>
@endsection

