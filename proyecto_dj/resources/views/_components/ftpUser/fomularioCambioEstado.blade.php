<form action="{{$ruta}}" method="post" style="width: 3000px;" enctype="multipart/form-data">

    <!--Se añade @csrf para darleseguridad al formulario y protegerlo -->
    @csrf

    @if($eliminar)
        @method('delete')
    @endif

    <section class="contenedor_una_columna">

        <!-- Contenido del formulario -->
        <section id="primero">
            <h2>Rellena los siguientes datos:</h2>

            <label for="Alias">{{$pregunta}}<span>*</span>
                <br>
                <input type="email" class="inputs" id="alias" name="alias" placeholder="Alias" required>
            </label>
        </section>

        <section>
            <input type="submit" class="inputs" value="{{$textoBoton}}"></input>
        </section>

    </section>
</form>