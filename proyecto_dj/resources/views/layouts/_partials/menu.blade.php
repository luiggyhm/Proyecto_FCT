<header class="cabecera">
    <img class="logo" src={{asset ('imagenes/logo')}} alt="logo Dj Luiggyhm">

    <nav class="barra">
        <ul class="barra__opciones">

            <li><h2><a href="{{route('inicio')}}">Inicio</a></h2></li>

            <li><h2><a href="{{route('conoceme')}}">Conoceme</a></h2></li>

            <li><h2><a href="{{route('compraContenido')}}">Contenido Musical</a></h2></li>

            
            

            <li><button id="cambiarFondo" class="cambio">Cambiar Fondo</button></li>
            <li><button id="cambiarTamanio" class="cambio">Cambiar Tamaño</button></li>

            <li>
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
                @endauth
                @endif</li>
        </ul>
    </nav>




    </header>
