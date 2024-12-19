@php
$modoCreacion =true;
if(isset($usuario->nombre)) {
$modoCreacion =false;
}

$rutaAction = route('usuario.store');
if(!$modoCreacion){
$rutaAction = route('usuario.actualizar', $usuario);
}
@endphp

<form action="{{ $rutaAction }}" method="post" style="width: 3000px;">

    <!--Se añade @csrf para darleseguridad al formulario y protegerlo -->
    @csrf

    @if(!$modoCreacion)
        @method('put')
    @endif

    <article>
        <!--Formulario-->
        <form class="datos">

            <label>Nombre:<span>*</span>
                <br>
                <input class="inputs" type="text" name="nombre" value=" {{$usuario->nombre}} " maxlength="20" placeholder="Nombre"
                    required>
            </label>


            <label>Apellidos:<span>*</span>
                <br>
                <input class="inputs" type="text" name="apellidos" value=" {{$usuario->apellidos}}" placeholder="Apellidos" required
                    maxlength="50">
            </label>
            <br>


            <label>E-mail::&nbsp;&nbsp;&nbsp;<span>*</span>
                <br>
                <input class="inputs" type="email" name="email"value=" {{$usuario->email}}" placeholder="tucorreo@tucorreo.es">
            </label>


            <label>Contraseña:<span>*</span>
                <br>
                <input class="inputs" type="password" name="password" {{$usuario->password}} placeholder="máx 10 caracteres" required
                    maxlength="10">
            </label>
            <br>


            <article>
                <label for="tipo_acceso">Tipo de Usuario:</label>
                <br>
                <select class="inputs" name="tipo_acceso" id="tipo_acceso" placeholder="tipo_acceso" required>
                @foreach ($tipos_accesos as $tipo_acceso )
                    <option id ="{{$tipo_acceso}}" value="{{$tipo_acceso}}">{{$tipo_acceso}}</option>
                @endforeach    
                
                    </label>
            </article>
            <br>

            <article>
                <input class="inputs" type="submit" value="{{$nombreBoton}}"></input>
            </article>

        </form>
    </article>