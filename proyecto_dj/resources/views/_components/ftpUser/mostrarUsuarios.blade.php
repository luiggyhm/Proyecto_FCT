<div class="container">
    <div class="row">
        <!-- Aquí estamos asegurándonos de que se muestren 4 anuncios por fila -->
        @foreach ($usuarios as $usuario)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
            <!-- id oculto-->
            <input type="hidden" name="anuncio_id" value="{{$usuario->id}}">
            <div class="card h-100">

                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Alias Usuario-->
                        <h4 class="fw-bolder">{{ $usuario->alias }}</h4>

                        <!-- Datos Adicionales -->
                        <label class="form-label d-flex justify-content-center">Estado: {{ $usuario->estado }}</label>
                        <label class="form-label d-flex justify-content-center">Directorio_raiz: {{ $usuario->directorio_raiz }}</label>
                    </div>
                    <a href="{{ route('ftpUser.show', $usuario->id) }}">Ver detalle del anuncio</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>