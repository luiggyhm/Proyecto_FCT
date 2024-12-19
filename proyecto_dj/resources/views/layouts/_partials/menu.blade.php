<header class="cabecera d-flex justify-content-between align-items-center py-3">
    <img class="logo ms-5" src="{{ asset('img/logo.png') }}" alt="logo Dj Luiggyhm" style="height: 150px; margin-left: -50px;">

    <nav class="barra bg-white rounded-pill px-4 py-3 shadow-lg">
        <ul class="barra__opciones list-unstyled d-flex align-items-center justify-content-around m-0">

            <li class="mx-2">
                <h2><a href="{{ route('nav.inicio') }}" class="text-dark">Inicio</a></h2>
            </li>

            <li class="mx-2">
                <h2><a href="{{ route('nav.conoceme') }}" class="text-dark">Conóceme</a></h2>
            </li>

            <li class="mx-2">
                <h2><a href="{{ route('nav.compraContenido') }}" class="text-dark">Contenido Musical</a></h2>
            </li>

            <li class="mx-2">
                <h2><a href="{{ route('todosLosAnuncios') }}" class="text-dark">Anuncios</a></h2>
            </li>

            <li class="mx-2">
                <h2><a href="{{route('ftpUser.elecccion')}}" class="text-dark">Usuarios</a></h2>
            </li>


            <li class="mx-2"><button id="cambiarFondo" class="btn cambio">Cambiar Fondo</button></li>
            <li class="mx-2"><button id="cambiarTamanio" class="btn cambio">Cambiar Tamaño</button></li>

            <li class="mx-2">

                <h2>
                    @include('layouts._partials.verificacionRegistro')
                </h2>
            </li>
        </ul>
    </nav>
</header>