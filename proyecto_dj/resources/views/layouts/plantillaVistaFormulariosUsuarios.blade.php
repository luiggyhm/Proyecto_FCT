<!DOCTYPE html>
<html lang="es">

@include('layouts._partials.head')

<body id="body" class="fondo_negro">

    @include('layouts._partials.menu')

    <main id = "main" class = "parrafo-blanco">

    @yield('tituloCrear')

    <section class="contenedor_tres_columnas">

        @yield('explicacionRegistro')

        @yield('formUsuario')

    </section>

    @include('layouts._partials.accesosRapidos')

    </main>
    <br>
    @include('layouts._partials.footer')
    

</body>

</html>