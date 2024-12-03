<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                @foreach ($generos as $g)
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{route('anuncio.genero',$g->id)}}">{{$g->nombre}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
