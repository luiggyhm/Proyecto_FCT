<form action="{{ route('usuario.store') }}" method="post" style="width: 3000px;">

    <!--Se añade @csrf para darleseguridad al formulario y protegerlo -->
    @csrf

    <article>
        <!--Formulario-->
        <form class="datos">

            <label>Nombre:<span>*</span>
                <br>
                <input class="inputs" type="text" name="nombre" maxlength="20" placeholder="Nombre"
                    required>
            </label>



            <label>Apellidos:<span>*</span>
                <br>
                <input class="inputs" type="text" name="apellidos" placeholder="Apellidos" required
                    maxlength="50">
            </label>
            <br>


            <label>E-mail::&nbsp;&nbsp;&nbsp;<span>*</span>
                <br>
                <input class="inputs" type="email" name="email" placeholder="tucorreo@tucorreo.es">
            </label>



            <label>Contraseña:<span>*</span>
                <br>
                <input class="inputs" type="password" name="password" placeholder="máx 10 caracteres" required
                    maxlength="10">
            </label>
            <br>

            <article>
                <label for="tipo_acceso">Tipo de Usuario:</label>
                <br>
                <select class="inputs" name="tipo_acceso" id="tipo_acceso" placeholder="tipo_acceso" required>
                    <option value="Dj">Dj</option>
                    <option value="Negocio">Negocio de Ocio</option>
                    </label>
            </article>
            <br>

            <article>
                <input class="inputs" type="submit" value="Crear Usuario"></input>
            </article>

        </form>
    </article>