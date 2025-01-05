<!DOCTYPE html>
<html lang="es">

@include('layouts._partials.head')

<body id="body" class="bg-dark text-white">

    @include('layouts._partials.menu')

    <main id="main" class="parrafo-blanco">

        <!--Explicación venta de contenido-->
        <section class="text-center py-5">
            <h1><strong>¡Eleva tu Experiencia Musical con Nuestros Mashups y Remixes Exclusivos!</strong></h1>
            <p>Bienvenido a tu destino definitivo para descubrir y disfrutar de sesiones, mashups y remixes únicos.</p>
        </section>

        <section class="container py-5">
            <div class="row">
                <!--Primera columna-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <article>
                        <h2><strong>¿Por qué elegir esta página?</strong></h2>
                        <ul>
                            <li class="li_separados"><strong>Reactividad sin Límites:</strong> Nuestros talentosos DJs y productores están comprometidos a llevar la música a otro nivel. Cada mashup y remix es único, fusionando géneros y canciones.</li>
                            <li class="li_separados"><strong>Exclusividad:</strong> Nuestro catálogo se compone de contenido exclusivo que no encontrarás en ningún otro lugar.</li>
                            <li class="li_separados"><strong>Variedad de Géneros:</strong> Desde las últimas tendencias en música electrónica hasta clásicos atemporales, tenemos algo para todos los gustos.</li>
                            <li class="li_separados"><strong>Calidad Impecable:</strong> La calidad del sonido es nuestra prioridad.</li>
                        </ul>
                    </article>
                </div>

                <!--Segunda columna-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <article>
                        <h2><strong>Explora Nuestro Catálogo:</strong></h2>
                        <ul>
                            <li class="li_separados"><strong>[Sesiones]:</strong> [Las sesiones que suba a youtube están disponibles para ti].</li>
                            <li class="li_separados"><strong>[Remixes]:</strong> [Packs por meses de música variada, ordenada por mes y genero].</li>
                            <li class="li_separados"><strong>[Mashups]:</strong> [Canciones Mezcladas que harán bailar a cualquiera].</li>
                            <li class="li_separados"><strong>[Acapellas]:</strong> [Solo la voz del artista para que puedas hacer tus mezclas].</li>
                            <li class="li_separados"><strong>[Instrumentales]:</strong> [Solo la melodía de tus canciones preferidas para hacer tus mezclas].</li>
                        </ul>
                    </article>
                </div>

                <!--Botones-->
                <div class="col-lg-4 mb-4">
                    @include('pagos.formularioPago')
                </div>
            </div>

            <article>
                <!-- poner foto de estructuras de carpetas con la música que hay para descargar -->
            </article>
        </section>

        @include('layouts._partials.accesosRapidos')
        <br>

    </main>

    @include('layouts._partials.footer')

</body>
</html>
