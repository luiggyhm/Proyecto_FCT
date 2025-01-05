<header class="d-flex justify-content-center align-items-center py-3">
    <img class="me-4" src="{{ asset('img/logo.png') }}" alt="logo Dj Luiggyhm" style="height: 150px;">

    <nav class="bg-white rounded-pill px-4 py-3 shadow-lg">
        <ul class="list-unstyled d-flex align-items-center justify-content-center m-0">
            <li class="mx-3">
                <h2><a href="{{ route('nav.inicio') }}" class="text-dark">Inicio</a></h2>
            </li>
            <li class="mx-3">
                <h2><a href="{{ route('nav.conoceme') }}" class="text-dark">Conóceme</a></h2>
            </li>
            <li class="mx-3">
                <h2><a href="{{ route('nav.compraContenido') }}" class="text-dark">Contenido Musical</a></h2>
            </li>
            <li class="mx-3">
                <h2><a href="{{ route('todosLosAnuncios') }}" class="text-dark">Anuncios</a></h2>
            </li>
            <li class="mx-3">
                @role('administrador')
                    <h2><a href="{{ route('ftpUser.elecccion') }}" class="text-dark">Usuarios</a></h2>
                @endrole
            </li>
            <li class="mx-3">
                <button id="cambiarFondo" class="btn cambio">Cambiar Fondo</button>
            </li>
            <li class="mx-3">
                <button id="cambiarTamanio" class="btn cambio">Cambiar Tamaño</button>
            </li>
            <li class="mx-3">
                <h2>
                    @include('layouts._partials.verificacionRegistro')
                </h2>
            </li>
        </ul>
    </nav>
</header>
