<header class="cabecera">
    <img class="logo" src={{asset ('imagenes/logo')}} alt="logo Dj Luiggyhm">

    <nav class="barra">
        <ul class="barra__opciones">

            <li>
                <h2><a href="{{route('nav.inicio')}}">Inicio</a></h2>
            </li>

            <li>
                <h2><a href="{{route('nav.conoceme')}}">Conoceme</a></h2>
            </li>

            <li>
                <h2><a href="{{route('nav.compraContenido')}}">Contenido Musical</a></h2>
            </li>

            <li>
                <h2><a href="{{route('nav.todosLosAnuncios')}}">Anuncios</a></h2>
            </li>

            <li>
                <h2><a href="{{route('nav.compraContenido')}}">Anuncios Negocios</a></h2>
            </li>

            <li>
                <h2><a href="{{route('nav.compraContenido')}}">Anuncios Dj`s</a></h2>
            </li>

            <li>
                <h2><a href="{{route('nav.compraContenido')}}">Crear Anuncio</a></h2>
            </li>




            <li><button id="cambiarFondo" class="cambio">Cambiar Fondo</button></li>
            <li><button id="cambiarTamanio" class="cambio">Cambiar Tamaño</button></li>

            <li>
                <h2>
                    <!--muestra el botón de Login si no está logueado o viceversa-->
                    @if (Route::has('login'))
                    @auth
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        @method('post')
                        <button class="boton-neon" type="submit">
                            <i class="bi bi-person"></i>
                            logout
                        </button>
                    </form>
                    @else
                    <a class="btn btn-outline-dark ms-3" href="{{route('login')}}">
                        <i class="bi bi-person"></i>
                        Login
                    </a>
                    <a href ="{{route('nav.registrarse')}}"><i class="bi bi-person"></i>Registrate</a>
                    
                    @endauth
                    @endif
                </h2>
            </li>
        </ul>
    </nav>




</header>