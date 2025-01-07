<div class="container my-4">
    <div class="row align-items-center">
        <!-- Primer bloque: Navbar lateral izquierdo -->
        <div class="col-md-4 d-flex justify-content-center">
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="collapse navbar-collapse justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('ftpUser.inconsistentes') }}">
                                Usuarios para crear en FTP
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Botón "Volver" -->
        <div class="col-md-4 d-flex justify-content-center">
            <nav class="navbar bg-white">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('ftpUser.elecccion') }}" class="nav-link text-dark">
                            Volver a opciones
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Botones de estado -->
        <div class="col-md-4 d-flex justify-content-center">
            <nav class="navbar navbar-expand-lg bg-white">
                <ul class="navbar-nav d-flex flex-row">
                    @include('_components.ftpUser.botonesEstados')
                </ul>
            </nav>
        </div>
    </div>
</div>
