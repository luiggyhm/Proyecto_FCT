<div class="container">
    <div class="row">
        <!-- Aquí estamos asegurándonos de que se muestren 4 anuncios por fila -->
        @foreach ($anuncios as $anuncio)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                <!-- id oculto-->
                <input type="hidden" name="anuncio_id" value="{{$anuncio->id}}">
                <div class="card h-100">
                    <!-- imagen anuncio-->
                    <img height="100px" width="100px" class="card-img-top" src="{{ asset("/img/Festival.jpg") }}" alt="Imagen Anuncio" />

                    <!-- Detalles del anuncio-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- titulo del anuncio-->
                            <h4 class="fw-bolder">{{ $anuncio->titulo }}</h4>

                            <!-- Datos Adicionales -->
                            <label class="form-label d-flex justify-content-center">Descripción: {{ $anuncio->descripcion }}</label>
                            <label class="form-label d-flex justify-content-center">Precio: {{ $anuncio->precio }} €</label>
                            <label class="form-label d-flex justify-content-center">Género Principal: {{ $anuncio->genero->nombre }}</label>
                            <label class="form-label d-flex justify-content-center">Otros Géneros: {{ $anuncio->otros_generos }}</label>
                        </div>
                        <a href="{{ route('anuncios.show', $anuncio->id) }}">Ver detalle del anuncio</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
