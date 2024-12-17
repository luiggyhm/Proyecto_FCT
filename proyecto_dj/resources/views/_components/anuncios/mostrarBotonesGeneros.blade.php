<div class="container my-4">
    <div class="row align-items-center">
        <!-- Navbar con géneros -->
        <div class="col-md-4 d-flex justify-content-center">
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="collapse navbar-collapse justify-content-center">
                    <ul class="navbar-nav">
                        @foreach ($generos as $g)
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('anuncio.genero', $g->id) }}">{{$g->nombre}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Botón "Crear Anuncio" -->
        <div class="col-md-4 d-flex justify-content-center">
            <nav class="navbar bg-white">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('anuncio.formAnuncio') }}" class="nav-link text-dark">Crear Anuncio</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Botones de búsqueda -->
        <div class="col-md-4 d-flex justify-content-center">
            <nav id="botones-busqueda" class="navbar bg-white">
                <ul class="navbar-nav d-flex flex-row">
                    @include('_components.anuncios.botonesBusqueda')
                </ul>
            </nav>
        </div>
    </div>
</div>
