<h1 class="text-center text-white">Usuario Ftp</h1>
<input type="hidden" name="anuncio_id" value="{{$id}}">
<div id="detalles" class="card h-100 container" style="max-width: 80rem;">

    <!-- Detalles del anuncio-->
    <div class="card-body p-4">
        <div class="text-center justify-content-center">

            <!-- Datos Adicionales -->
            <label id="">Alias: {{ $alias }}</label>
            <br>
            <label id="">Directorio: {{ $directorio }}</label>
            <br>
            <label id="">Tipo de Usuario: {{ $tipo_user }}</label>
            <br>
            <label id="">Estado: {{ $estado }}</label>
            <br>
            <label id="">Usuario Relacionado: {{ $user_id }}</label>
            <br>

        </div>
    </div>

</div>