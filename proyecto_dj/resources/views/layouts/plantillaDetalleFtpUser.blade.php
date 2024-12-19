<!DOCTYPE html>
<html lang="es">

@include('layouts._partials.head')

<body id="body" class="fondo_negro">

    @include('layouts._partials.menu')

    <main id = "main" class = "parrafo-blanco">
        @include('_components.ftpUser.mostrarBotonesDeOpciones')
        @yield('mostrarDetalleFtpUser')

    </main>
</body>
</html>