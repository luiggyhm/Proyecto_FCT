<form action="{{ route('usuario.store') }}" method="post" style="width: 3000px;">

    <!--Se añade @csrf para darleseguridad al formulario y protegerlo -->
    @csrf
    <article class="container px-4 px-lg-5 bg-dark rounded p-4 mt-5" style="width: 30%;">

        <!-- Contenido obligatorio para usuarios-->
        <div >
            <label for="nombre" >Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre"required>
        </div>

        <div>
            <label for="apellidos"> Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" required>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="E-mail" required>
        </div>

        <div>
            <label for="telefono">Telefono:</label>
            <input type="number" id="telefono" name="telefono" min="0" placeholder="Telefono" required>
        </div>

        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" min="0" placeholder="Contraseña" required>
        </div>

        <div>
            <label for="tipo_acceso">Tipo de Usuario:</label>
            <select name="tipo_acceso" id="tipo_acceso" placeholder="tipo_acceso" required>
                <option value = "Dj">Dj</option>
                <option value = "Negocio">Negocio de Ocio</option>
        </div>

        

        <!-- Contenido del formulario solo DJ (solo se activa si indica antes que es DJ)-->
        <div class ="hidden">
            <label for="ciudad">Ciudad:</label>
            <input type="text" step="any" id="ciudad" name="ciudad" min="0" placeholder="Ciudad">
        </div>



        <!-- Contenido del formulario negocios(solo se activa si indica antes que es Negocio)-->
        <div class ="hidden">
            <label for="direccion">Dirección:</label>
            <input type="text" step="any" id="direccion" name="direccion" min="0" placeholder="Dirección">
        </div>

        <div class ="hidden">
            <label for="aforo">Aforo:</label>
            <input type="numb" step="any" id="aforo" name="aforo" min="0" placeholder="Aforo">
        </div>

        <div class ="hidden">
            <label for="id_tipo_local">Tipo de Local:</label>
            <select name="id_tipo_local">
                @foreach ($locales as $l)
                <option value ="{{$l->id}}">{{$l->nombre}}</option>
                @endforeach
            </select>
        </div>


            <button type="submit" class="btn btn-light">Crear Usuario</button>

    </article>
</form>