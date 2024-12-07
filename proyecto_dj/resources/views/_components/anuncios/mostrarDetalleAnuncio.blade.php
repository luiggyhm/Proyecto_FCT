<h1 class="text-center text-white">{{ $tipo_anuncio }}</h1>
<input type="hidden" name="anuncio_id" value="{{$id}}">
<div id="detalles" class="card h-100 container" style="max-width: 80rem;">
    <!-- imagen anuncio-->
    <img height="100px" width="100px" class="card-img-top" src="{{ asset("/img/Festival.jpg") }}" alt="Imagen Anuncio" />

    <!-- Detalles del anuncio-->
    <div¡ class="card-body p-4">
        <div class="text-center justify-content-center">
            
            <!-- Datos Adicionales -->
            <label id="">Descripción: {{ $descripcion }}</label>
            <br>
            <label id="">Precio: {{ $precio }} €</label>
            <br>
            <label id="">Género Principal: {{ $genero }}</label>
            <br>
            <label id="">Descripción: {{ $descripcion }}</label>
            <br>
            <label id="">Ciudad: {{ $ciudad }}</label>
            <br>
            <label id="">Localidad: {{ $localidad }}</label>
            <br>

            <label id="">Generos Adicionales: {{ $otros_generos }}</label>
            <br>

            <button class="btn btn-success" id = 'mostrarTelefono'> Mostrar teléfono</button>
            <label id= "telefono" class="hidden">Telefono: {{ $telefono }}</label>
            <br>

            @if ($tipo_anuncio == 'Negocio')
            <label id="">Tipo Local: {{ $tipo_local }}</label>
            <br>
            <label id="">Dirección: {{ $direccion }}</label>
            <br>
            <label id="">Aforo: {{ $aforo }}</label>
            @endif

            <br>
            <a class="btn btn-success" href="">Modificar</a>
            <a class="btn btn-danger" href="">Eliminar</a>

        </div>
    </div>
    
</div>