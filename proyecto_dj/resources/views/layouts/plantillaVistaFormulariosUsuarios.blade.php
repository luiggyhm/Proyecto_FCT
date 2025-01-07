<!DOCTYPE html>
<html lang="es">

@include('layouts._partials.head')

<body id="body" class="bg-dark text-white">

    @include('layouts._partials.menu')

    <main id="main" class="parrafo-blanco">

        @if (Route::has('login'))
        @auth

        @yield('formUsuario')

        @else

        @yield('tituloCrear')

        <section class="contenedor_tres_columnas">

            @yield('explicacionRegistro')


            @yield('formUsuario')

        </section>
        @endauth
        @endif

        @include('layouts._partials.accesosRapidos')

    </main>
    <br>
    @include('layouts._partials.footer')


</body>

</html>