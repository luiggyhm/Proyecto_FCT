<!DOCTYPE html>
<html lang="es">

@include('layouts._partials.head')

<body id="body" class="fondo_negro">
    <!-- Nav Barra principal-->
    @include('layouts._partials.menu')

    @yield('botonesGenero')


    <header class="bg-dark py-5">

        @yield('nombreGenero')

    </header>


    @yield('mostrarAnuncios')
    
</body>

</html>