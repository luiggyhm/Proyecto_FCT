<!DOCTYPE html>
<html lang="es">

@include('layouts._partials.head')

<body id="body" class="fondo_negro">

    @include('layouts._partials.menu')

    <main id="main" class="parrafo-blanco">
        @include('_components.ftpUser.mostrarBotonesDeOpciones')

        @if(session('status'))
            <section class="contenedor_video_youtube">
                <h3 class="text-decoration-none text-white">{{session('status')}}</h3>
            </section>
        @endif
        
        @yield('mostrarDetalleFtpUser')

    </main>
</body>

</html>