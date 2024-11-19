<form action="{{ route('anuncios.store') }}" method="post" style="width: 3000px;">

    <!--Se añade @csrf para darleseguridad al formulario y protegerlo -->
    @csrf
    <article class="container px-4 px-lg-5 bg-dark rounded p-4 mt-5" style="width: 30%;">

        <!-- Contenido del formulario -->
        <div class="mb-3">
            <label for="titulo" class="form-label text-white">Titulo del Anuncio :</label>
            <input type="text" class="form-control w-100" id="titulo" name="titulo" placeholder="Titulo del anuncio">
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label text-white">Precio:</label>
            <input type="number" class="form-control w-100" id="precio" name="precio" placeholder="Precio por el servicio">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label text-white">Descripción de Servicios:</label>
            <input type="text" class="form-control w-100" step="any" id="descripcion" name="descripcion" min="0" placeholder="descripcion">
        </div>

        <div class="mb-3">
            <label for="genero_principal" class="form-label text-white">Género de música principal:</label>
            <select class="form-select w-100" name="genero_principal">
                @foreach ($generos as $g)
                <option>{{$g->nombre}}</option>
                @endforeach
            </select>
        </div>

        <@foreach ($generos as $g)
            <div class="form-check">
            <label class="form-check-label text-white" for="otros_generos{{ $g->id }}">Otros Géneros Músicales:</label>
            <input class="form-check-input" type="checkbox" name="otros_generos" value="{{ $g->nombre }}" id="genero-{{ $g->id }}">
            </div>
            @endforeach


            <div>
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" id="imagen" required>
            </div>

            <button type="submit" class="btn btn-light">Crear Anuncio</button>

    </article>
</form>