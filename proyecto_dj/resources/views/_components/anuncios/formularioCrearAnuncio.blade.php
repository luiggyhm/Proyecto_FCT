@php
$modoCreacion =true;
if(isset($anuncio->titulo)) {
$modoCreacion =false;
}

$rutaAction = route('anuncios.store');
if(!$modoCreacion){
$rutaAction = route('anuncios.actualizar', $anuncio);
}
@endphp

<form action="{{$rutaAction}}" method="post" style="width: 3000px;" enctype="multipart/form-data">

    <!--Se añade @csrf para darleseguridad al formulario y protegerlo -->
    @csrf

    @if(!$modoCreacion)
        @method('put')
    @endif

    <section class="contenedor_una_columna">

        <!-- Contenido del formulario -->
        <article id="primero" class="hidden">
            <h2>Rellena los siguientes datos:</h2>

            <label for="titulo">Titulo del Anuncio:<span>*</span>
                <br>
                <input type="text" class="inputs" id="titulo" name="titulo" placeholder="Titulo del anuncio" value="{{$anuncio->titulo}}" required>
            </label>

            <label for="precio">Precio cobro:<span>*</span>
                <br>
                <input type="number" class="inputs" id="precio" name="precio" placeholder="Precio ideal" value="{{$anuncio->precio}}" required>
            </label>

            <label for="telefono">Telefono de contacto:<span>*</span>
                <br>
                <input type="nunber" class="inputs" id="telefono" name="telefono" min="0" placeholder="Teléfono" value="{{$anuncio->telefono}}" required>
            </label>
        </article>
        <br>

        <article class="hidden">

            <label for="genero_principal">Género principal:<span>*</span>
                <br>
                <select class="inputs" name="genero" required>
                    @foreach ($generos as $g)
                    <option id="{{$g->id}}" @checked($anuncio->genero_principal == $g->id) value="{{$g->id}}">{{$g->nombre}}</option>
                    @endforeach
                </select>
            </label>


            <label for="imagen">Imagen para mostrar:<span>*</span>
                <br>
                <input type="file" class="inputs" name="imagen" id="imagen" value="{{$anuncio->imagen}}" required>
            </label>
        </article>
    </section>


    <section class="contenedor_una_columna">
        <!--si es Dj o negocio cambiar hidden a mostrar-->
        <article class="hidden">
            <label for="localidad">Localidad:<span>*</span>
                <br>
                <input type="text" class="inputs" id="localidad" name="localidad" min="0" placeholder="Localidad" value="{{$anuncio->localidad}}" required>
            </label>

            <!--si es Dj cambiar hidden a mostrar-->

            <label for="ciudad">Ciudad:<span>*</span>
                <br>
                <input type="text" class="inputs" id="ciudad" name="ciudad" min="0" placeholder="Ciudad" value="{{$anuncio->ciudad}}" required>
            </label>
        </article>

        <br>

        <!-- Solo si es negocio cambiar hidden a mostrar-->
        <article class="hidden">
            <label for="tipo_local">Tipo local:<span>*</span>
                <br>
                <select name="tipo_local" class="inputs" required>
                    @foreach ($locales as $l)
                    <option id="{{$l->id}}" @checked($anuncio->tipo_local == $l->id) value="{{$l->id}}">{{$l->tipo_local}}</option>
                    @endforeach
                </select>
            </label>

            <label for="direccion">Dirección del Local:<span>*</span>
                <br>
                <input type="text" class="inputs" id="direccion" name="direccion" min="0" value="{{$anuncio->direccion}}" placeholder="Calle Estrella">
            </label>

            <label for="aforo">Aforo:
                <br>
                <input type="text" class="inputs" id="aforo" name="aforo" min="0" placeholder="100 pers" value="{{$anuncio->aforo}}">
            </label>
        </article>

    </section>
    <br>


    <section class="contenedor_una_columna">
        <article>
            <div class="hidden">
                <label for="otros_generos">Más géneros:
                    <br>
                    @foreach ($generos as $g)
                    <input type="checkbox" name="otros_generos[]" @checked($anuncio->otros_generos == $g->id) id="{{$g->nombre}}" value="{{$g->id}}">{{$g->nombre}}</input>
                    @endforeach
                    </select>
                </label>
            </div>
        </article>
        <br>

        <article>
            <div class="hidden">
                <label for="descripcion">Descripción de Servicios:
                    <br>
                    <input type="text" class="inputs_peticiones" id="descripcion" name="descripcion" min="0" value="{{$anuncio->descripcion}}" placeholder="Breve descripción de servicios" required>
                </label>
            </div>
        </article>
    </section>

    <br>
    <article class="contenedor_una_columna">
        <asside class="hidden">
            <input type="submit" class="inputs" value="{{$textoBoton}}"></input>
        </asside>

    </article>

</form>