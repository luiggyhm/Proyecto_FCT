<h1 class="text-center text-white">{{ $tipo_anuncio }}</h1>
<input type="hidden" name="anuncio_id" value="{{$id}}">
<div id="detalles" class="card h-100 container" style="max-width: 80rem;">
    <!-- imagen anuncio-->
    <img height="100px" width="100px" class="card-img-top" src="{{ asset("/img/Festival.jpg") }}" alt="Imagen Anuncio" />

    <!-- Detalles del anuncio-->
    <div¡ class="card-body p-4">
        <div class="text-center">
            
            <!-- Datos Adicionales -->
            <label class="form-label d-flex justify-content-center">Descripción: {{ $descripcion }}</label>
            <label class="form-label d-flex justify-content-center">Precio: {{ $precio }} €</label>
            <label class="form-label d-flex justify-content-center">Género Principal: {{ $genero }}</label>
            <label class="form-label d-flex justify-content-center">Telefono: {{ $telefono }}</label>
            <label class="form-label d-flex justify-content-center">Descripción: {{ $descripcion }}</label>
            <label class="form-label d-flex justify-content-center">Ciudad: {{ $ciudad }}</label>
            <label class="form-label d-flex justify-content-center">Localidad: {{ $localidad }}</label>

            @if ($tipo_anuncio == 'Negocio')
            <label class="form-label d-flex justify-content-center">Tipo Local: {{ $tipo_local }}</label>
            <label class="form-label d-flex justify-content-center">Dirección: {{ $direccion }}</label>
            <label class="form-label d-flex justify-content-center">Aforo: {{ $aforo }}</label>
            @endif

            <a class="btn btn-success" href="">Modificar</a>
            <a class="btn btn-danger" href="">Eliminar</a>

        </div>
    </div>
    
</div>