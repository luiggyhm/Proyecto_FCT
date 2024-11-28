<div class="col mb-5">
    <!-- id oculto-->
    <input type="hidden" name="anuncio_id" value="{{$id}}">
    <div class="card h-100">
        <!-- imagen anuncio-->
        <img height="100px" width="100px" class="card-img-top" src="{{asset("/img/Festival.jpg") }}" alt="Imagen Anuncio" />
        
        
        <!-- Detalles del anuncio-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- titulo del anuncio-->
                <h4 class="fw-bolder">{{$titulo}}</h4>
                
                <!--Datos Adicionales-->
                <label class="form-label d-flex justify-content-center">Descripción: {{$descripcion}}</label>
                <label class="form-label d-flex justify-content-center">Precio: {{$precio}} €</label>
                <label class="form-label d-flex justify-content-center">Genero Principal: {{$genero_nombre}}</label>
                <label class="form-label d-flex justify-content-center">Otros Generos: {{$otros_generos}}</label>
            </div>
            <br>

<!-- Poner de mostrar el telefono del anunciante -->
 <!-- Poner de mostrar el correo del anunciante -->