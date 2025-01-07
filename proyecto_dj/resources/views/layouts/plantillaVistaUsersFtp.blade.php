<!DOCTYPE html>
<html lang="es">

@include('layouts._partials.head')

<body id="body" class="bg-dark text-white">

    @include('layouts._partials.menu')

    <main id = "main" class = "parrafo-blanco">
        @include('_components.ftpUser.mostrarBotonesDeOpciones')
        @yield('mostrarUsuariosFtp')

    </main>
</body>
</html>