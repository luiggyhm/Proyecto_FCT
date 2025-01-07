@php
$modoCreacion =true;
if(isset($ftpUser->alias)) {
$modoCreacion =false;
}

$rutaAction = route('ftpUser.store');
if(!$modoCreacion){
$rutaAction = route('ftpUser.actualizar', $ftpUser);
}
@endphp

<form action="{{ $rutaAction }}" method="post" style="width: 3000px;" enctype="multipart/form-data">

    <!--Se añade @csrf para darleseguridad al formulario y protegerlo -->
    @csrf

    @if(!$modoCreacion)
        @method('put')
    @endif
    
    <section class="contenedor_una_columna">

        <!-- Contenido del formulario -->
        <article id="primero">
            <h2>Rellena los siguientes datos:</h2>

            <label for="Alias">Usuario o Alias:<span>*</span>
                <br>
                <input type="email" class="inputs" id="alias" name="alias" value="{{$ftpUser->alias}}" placeholder="Alias" required>
            </label>

            <label for="password">Contraseña:<span>*</span>
                <br>
                <input type="password" class="inputs" id="password" name="password" value="{{$ftpUser->password}}" required>
            </label>

            <label for="directorio_raiz">Directorio:<span>*</span>
                <br>
                <select class="inputs" name="directorio_raiz" required>
                    @foreach ($directorios as $directorio )
                    <option value="{{ $directorio }}" {{ $ftpUser->directorio_raiz == $directorio ? 'selected' : '' }}>{{ $directorio }}</option>
                    @endforeach
                </select>
            </label>
        </article>
        <br>

        <article>

            <label for="tipo_user">Tipo Usuario:<span>*</span>
                <br>
                <select class="inputs" name="tipo_user" required>
                    @foreach ($tipo_users as $user )
                    <option value="{{ $user }}" {{ $ftpUser->tipo_user == $user ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
            </label>

            <label for="estado">Estado:<span>*</span>
                <br>
                <select class="inputs" name="estado" required>
                    @foreach ($estados as $estado )
                    <option value="{{ $estado }}" {{ $ftpUser->estado == $estado ? 'selected' : '' }}>{{ $estado }}</option>
                    @endforeach
                </select>
            </label>
            <asside>
                <input type="submit" class="inputs" value="{{$textoBoton}}"></input>
            </asside>
        </article>

    </section>
</form>