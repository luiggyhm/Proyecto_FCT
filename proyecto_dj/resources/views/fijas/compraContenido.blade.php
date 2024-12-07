<!DOCTYPE html>
<html lang="es">

@include('layouts._partials.head')

<body id="body" class="fondo_negro">

    @include('layouts._partials.menu')

    <main id="main" class="parrafo-blanco">

        <!--Explicación venta de contenido-->
        <section class="section_titulo">
            <h1><strong>¡Eleva tu Experiencia Musical con Nuestros Mashups y Remixes Exclusivos!</strong></h1>
            <p>Bienvenido a tu destino definitivo para descubrir y disfrutar de sesiones, mashups y remixes únicos.</p>
        </section>


        <section class="contenedor_tres_columnas">

            <!--Primera columna-->
            <article>
                <h2><strong>¿Por que elegir esta página?</strong></h2>
                <ul>
                    <li class="li_separados"><strong> Reactividad sin Límites:</strong> Nuestros talentosos DJs y
                        productores están
                        comprometidos a llevar la música a otro nivel. Cada mashup y remix es único, fusionando géneros
                        y canciones.</li>

                    <li class="li_separados"><strong>Exclusividad:</strong> Nuestro catálogo se compone de contenido
                        exclusivo que no
                        encontrarás en ningún otro lugar.</li>

                    <li class="li_separados"><strong>Variedad de Géneros:</strong> Desde las últimas tendencias en
                        música electrónica hasta
                        clásicos atemporales, tenemos algo para todos los gustos. Explora una amplia gama de géneros
                        musicales y descubre tu próximo himno personal.</li>

                    <li class="li_separados"><strong>Calidad Impecable:</strong> La calidad del sonido es nuestra
                        prioridad. Cada mashup y
                        remix se crea con la más alta fidelidad para brindarte una experiencia auditiva excepcional.
                    </li>
                </ul>
            </article>

            <!--Segunda columna-->
            <article>
                <h2><strong>Explora Nuestro Catálogo:</strong></h2>
                <ul>
                    <li class="li_separados"><strong>[Sesiones]:</strong> [Las sesiones que suba a youtube están
                        disponibles para ti].</li>

                    <li class="li_separados"><strong>[Remixes]:</strong> [Packs por meses de música variada, ordenada
                        por mes y genero].</li>

                    <li class="li_separados"><strong>[Mushups]:</strong> [Canciones Mezcladas que harán bailar a
                        cualquiera].</li>

                    <li class="li_separados"><strong>[Acapellas]:</strong> [Solo la voz del artista para que puedas
                        hacer tus mezclas].</li>

                    <li class="li_separados"><strong>[Instrumentales]:</strong> [Solo la melodia de tus canciones
                        preferidas para hacer tus
                        mezclas].
                    </li>
                </ul>
            </article>

            <!--Botones-->
            @include('pagos.formularioPago')


            <article>
                <!-- poner foto de estructuras de carpetas con la musica que hay para descargar -->

            </article>
        </section>

        @include('layouts._partials.accesosRapidos')
        <br>

    </main>

    @include('layouts._partials.footer')

    </main>
</body>