<div class="container my-4">
    <div class="row align-items-center">
        <!-- Primer bloque: Navbar lateral izquierdo -->
        <div class="col-md-4 d-flex justify-content-center">
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="collapse navbar-collapse justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item mb-2">
                            <a class="nav-link text-dark" href="{{route('ftpUser.index') }}">Ver usuarios FTP</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Espacio central vacío -->
        <div class="col-md-4 d-flex justify-content-center"></div>

        <!-- Segundo bloque: Navbar lateral derecho -->
        <div class="col-md-4 d-flex justify-content-center">
            <nav class="navbar navbar-expand-lg bg-white">
                <!-- Incluye tus botones aquí -->
                @include('_components.ftpUser.botonesEstados')
            </nav>
        </div>
    </div>
</div>