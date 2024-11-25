<form action="{{ route('anuncios.store') }}" method="post" style="width: 3000px;">

    <!--Se añade @csrf para darleseguridad al formulario y protegerlo -->
    @csrf
    <article class="container px-4 px-lg-5 bg-dark rounded p-4 mt-5" style="width: 30%;">

        <!-- Contenido del formulario Usuario-->
        <div class="mb-3">
            <label for="titulo" class="form-label text-white">Nombre :</label>
            <input type="text" class="form-control w-100" id="nombre" name="nombre" placeholder="Nombre">
        </div>

        <div class="mb-3">
            <label for="titulo" class="form-label text-white">Apellidos :</label>
            <input type="text" class="form-control w-100" id="apellidos" name="apellidos" placeholder="Apellidos">
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label text-white">E-mail:</label>
            <input type="number" class="form-control w-100" id="email" name="email" placeholder="E-mail">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label text-white">Telefono:</label>
            <input type="text" class="form-control w-100" step="any" id="telefono" name="telefono" min="0" placeholder="Telefono">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label text-white">Contraseña:</label>
            <input type="text" class="form-control w-100" step="any" id="password" name="password" min="0" placeholder="Contraseña">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label text-white">Tipo de Usuario:</label>
            <select class="form-select w-100" name="tipo_acceso">
                <option value = "Dj">Dj</option>
                <option value = "Negocio">Negocio de Ocio</option>
        </div>

        <!-- Contenido del formulario solo DJ (solo se activa si indica antes que es DJ)-->
        



        <div class="mb-3">
            <label for="genero_principal" class="form-label text-white">Género de música principal:</label>
            <select class="form-select w-100" name="genero_principal">
                @foreach ($generos as $g)
                <option value ="{{$g->nombre}}">{{$g->nombre}}</option>
                @endforeach
            </select>
        </div>


            <button type="submit" class="btn btn-light">Crear Usuario</button>

    </article>
</form>