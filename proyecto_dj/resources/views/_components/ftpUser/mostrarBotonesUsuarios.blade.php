
@if(session('status'))
     <section class = "contenedor_video_youtube">
        <h3 class="text-decoration-none text-white">{{session('status')}}</h3>
    </section>
@endif

<!-- Contenedor general -->
<div class="container vh-50 d-flex justify-content-center align-items-center">
    <!-- Fondo blanco más pequeño -->
    <div class="row bg-white w-50 p-4 rounded shadow">
        <!-- Contenido de la lista -->
        <div class="col-12 mb-4">
            <nav>
                <ul class="list-unstyled text-center m-0 p-0">
                    <!--<li class="bg-dark text-white mb-2 p-3 rounded">
                        <a class="text-decoration-none text-white" href="{{route('ftpUser.formAnuncio')}}">Crear Usuario</a>
                    </li> -->

                    <li class="bg-dark text-white mb-2 p-3 rounded">
                        <a class="text-decoration-none text-white" href="{{route('ftpUser.formActivar')}}">Activar Usuario</a>
                    </li>

                    <li class="bg-dark text-white mb-2 p-3 rounded">
                        <a class="text-decoration-none text-white" href="{{route('ftpUser.formDesactivar')}}">Desactivar Usuario</a>
                    </li>

                    <li class="bg-dark text-white p-3 rounded">
                        <a class="text-decoration-none text-white" href="{{route('ftpUser.datosFormEliminar')}}">Eliminar Usuario</a>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>
</div>