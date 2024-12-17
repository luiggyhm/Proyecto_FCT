<!DOCTYPE html>
<html lang="es">

@include('layouts._partials.head')

<body id="body" class="fondo_negro">

    @include('layouts._partials.menu')

    <main id="main" class="parrafo-blanco">

        @if (Route::has('login'))
        @auth
        @yield('seleccionAcceso')

        @yield('formularioCrearAnuncio')
        @else
        <section class="section_titulo">
            <h1><strong>Inicia sesion o registrate para crear Anuncios</h1></strong>
            <p><a href="{{ route('login') }}" class="boton-neon">
                    <i class="bi bi-person"></i>Login
                </a>
            <a href="{{ route('registrarse') }}" class="boton-neon">
                    <i class="bi bi-person"></i>Registrate
                </a></p>
        </section>
        @endauth
        @endif
        
        @include('layouts._partials.accesosRapidos')

    </main>
    <br>
    @include('layouts._partials.footer')


</body>

</html>
</body>

</html>