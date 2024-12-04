<!DOCTYPE html>
<html lang="es">

@include('layouts._partials.head')

<body id="body" class="fondo_negro">

    <!-- Nav Barra principal-->
    @include('layouts._partials.menu')

    <main>
        @yield(section: 'tituloAnuncio')

        @yield('mostrarDetalle')

        @include('layouts._partials.accesosRapidos')

    </main>
    <br>
    @include('layouts._partials.footer')

</body>

</html>