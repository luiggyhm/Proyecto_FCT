@php
$modoCreacion = true;
if(isset($usuario->nombre)) {
    $modoCreacion = false;
}

$rutaAction = route('usuario.store');
if(!$modoCreacion){
    $rutaAction = route('usuario.actualizar', $usuario);
}
@endphp

<form action="{{ $rutaAction }}" method="post" class="container py-5">

    @csrf

    @if(!$modoCreacion)
        @method('put')
    @endif

    <div class="row">
        <!-- Nombre -->
        <div class="col-12 col-md-6 mb-3">
            <label for="nombre">Nombre:<span>*</span></label>
            <input class="form-control" type="text" name="nombre" value="{{ $usuario->nombre }}" maxlength="20" placeholder="Nombre" required>
        </div>

        <!-- Apellidos -->
        <div class="col-12 col-md-6 mb-3">
            <label for="apellidos">Apellidos:<span>*</span></label>
            <input class="form-control" type="text" name="apellidos" value="{{ $usuario->apellidos }}" placeholder="Apellidos" required maxlength="50">
        </div>

        <!-- E-mail -->
        <div class="col-12 mb-3">
            <label for="email">E-mail:<span>*</span></label>
            <input class="form-control" type="email" name="email" value="{{ $usuario->email }}" placeholder="tucorreo@tucorreo.es" required>
        </div>

        <!-- Contraseña -->
        <div class="col-12 mb-3">
            <label for="password">Contraseña:<span>*</span></label>
            <input class="form-control" type="password" name="password" value="{{ $usuario->password }}" placeholder="máx 10 caracteres" required maxlength="10">
        </div>

        <!-- Tipo de Usuario -->
        <div class="col-12 mb-3">
            <label for="tipo_acceso">Tipo de Usuario:</label>
            <select class="form-control" name="tipo_acceso" id="tipo_acceso" required>
                @foreach ($tipos_accesos as $tipo_acceso)
                    <option value="{{ $tipo_acceso }}" @selected($usuario->tipo_acceso == $tipo_acceso)>{{ $tipo_acceso }}</option>
                @endforeach    
            </select>
        </div>

        <!-- Botón de Envío -->
        <div class="col-12">
            <input class="btn btn-primary w-100" type="submit" value="{{ $nombreBoton }}">
        </div>
    </div>

</form>
