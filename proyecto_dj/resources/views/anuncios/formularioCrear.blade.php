<form action="{{ route('anuncios.store') }}" method="post" style="width: 3000px;">

    <!--Se añade @csrf para darleseguridad al formulario y protegerlo -->
    @csrf
    <article class="container px-4 px-lg-5 bg-dark rounded p-4 mt-5" style="width: 30%;">

        <!-- Contenido del formulario -->
        <div>
            <label for="titulo">Titulo del Anuncio :</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo del anuncio">
        </div>

        <div>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio por el servicio">
        </div>

        <div>
            <label for="descripcion">Descripción de Servicios:</label>
            <input type="text" step="any" id="descripcion" name="descripcion" min="0" placeholder="descripcion">
        </div>

        <div>
            <label for="genero_principal">Género de música principal:</label>
            <select  name="genero_principal">
                @foreach ($generos as $g)
                <option>{{$g->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="otros_generos">Más generos:</label>
                @foreach ($generos as $g)
                <input type="checkbox" id ="{{$g->nombre}}"value="{{$g->id}}">{{$g->nombre}}</input>
                @endforeach
            </select>
        </div>



        <div>
            <label for="otros_generos">Tipo local:</label>
                @foreach ($locales as $l)
                <input type="checkbox" id ="{{$l->nombre}}"value="{{$l->id}}">{{$l->nombre}}</input>
                @endforeach
            </select>
        </div>




            <div>
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" id="imagen" required>
            </div>

            <button type="submit">Crear Anuncio</button>

    </article>
</form>