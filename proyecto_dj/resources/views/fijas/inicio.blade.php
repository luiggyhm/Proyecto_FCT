<!DOCTYPE html>
<html lang="es">

@include('layouts._partials.head')

<body id="body" class="bg-dark text-white">
    <!-- Nav Barra principal-->
    @include('layouts._partials.menu')

    <main id="main" class="parrafo-blanco">

        <!-- Si se crea el usuario aparece este texto -->
        @if(session('status'))
        <section class="contenedor_video_youtube">
            <h3>{{session('status')}}</h3>
        </section>
        @endif

        <!--Primer contenedor descripción y foto-->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>¡Bienvenido a nuestro pequeño espacio!</h2>

                    <p>La plataforma que conecta a artistas, DJs, locales y amantes de la música. Aquí,
                        los DJs pueden compartir su talento, promocionar sus mezclas y conectar con nuevos seguidores.
                        Los locales, restaurantes y pubs tienen la oportunidad de anunciar sus eventos o espacios de forma gratuita,
                        atrayendo a una comunidad vibrante de personas que buscan lo mejor en entretenimiento musical.</p>

                    <p>Tanto si eres un DJ buscando visibilidad, como si tienes un local o evento que necesita llegar a más personas,
                        nuestra página es tu punto de encuentro ideal. Conéctate, comparte y haz crecer tu audiencia sin complicaciones
                        ni costos innecesarios.</p>

                    <p>Todo en un solo lugar. Todo gratis. Todo con ritmo.</p>
                </div>

                <div class="col-md-6">
                    <figure>
                        <img id="img_ventura" src={{asset("img/Ventura.JPG")}} alt="Dj trabajando">
                        <figcaption>Dj trabajando en discoteca</figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <!--Segunda Seccición iframe Youtube-->
        @include('layouts._partials.iframeYoutube')

        <!-- Tercera Sección porque elegirnos -->
<section class="container py-5">
    <div class="row">
        <!-- Contenedor del calendario dinámico -->
        <div class="col-md-4 d-flex justify-content-center">
            <div id="calendar-container" class="p-3">
                <!-- Aquí va el calendario dinámico -->
            </div>
        </div>

        <!-- Texto: ¿Por qué elegirnos? -->
        <div class="col-md-4">
            <h2 class="text-center mb-4">¿Por qué elegirnos?</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Para DJs y artistas: Sube tu música, promociona tus eventos y llega a más personas que disfrutan de tu estilo.</li>
                <li class="list-group-item">Para locales y restaurantes: Anúnciate sin costos y atrae a nuevos clientes con el poder de la música.</li>
                <li class="list-group-item">Para todos: Descubre música fresca, eventos en vivo y espacios únicos para disfrutar de la mejor oferta musical.</li>
            </ul>
            <p class="mt-3">Únete hoy y haz que tu música, tu negocio o tu evento se escuchen al máximo.</p>
        </div>

        <!-- Imagen con pie de foto -->
        @include('layouts._partials.bateriaImg')
</section>


        @include('layouts._partials.accesosRapidos')
        <br>


    </main>

    @include('layouts._partials.footer')


</body>