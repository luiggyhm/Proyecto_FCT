<!DOCTYPE html>
<html lang="es">

@include('layouts._partials.head')

<body id="body" class="bg-dark text-white"></body>
    <!-- Nav Barra principal-->
    @include('layouts._partials.menu')

    <main></main>
    @yield('botonesGenero')


    <header class="bg-dark py-5">

        @yield('nombreGenero')

    </header>
    <main>
        @yield('inconsistentes')

        @include('layouts._partials.accesosRapidos')

    </main>
    <br>
    @include('layouts._partials.footer')

</body>

</body>

</html>