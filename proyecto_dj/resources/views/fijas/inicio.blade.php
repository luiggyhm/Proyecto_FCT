<!DOCTYPE html>
<html lang="es">
    
@include('layouts._partials.head')

<body id ="body" class="fondo_negro">
    <!-- Nav Barra principal-->
    @include('layouts._partials.menu')

     <main id ="main" class ="parrafo-blanco">

<!-- Si se crea el usuario aparece este texto -->
     @if(session('status'))
     <section class = "contenedor_video_youtube">
        <h3>{{session('status')}}</h3>
    </section>
     
     @endif

        <!--Primer contenedor descripción y foto-->
        <section class="contenedor_dos_columnas">
            <article>
            <h2>¡Bienvenido a nuestro pequeño espacio!</h2>
            
            <p>La plataforma que conecta a artistas, DJs, locales y amantes de la música. Aquí, 
                    los DJs pueden compartir su talento, promocionar sus mezclas y conectar con nuevos seguidores. 
                    Los locales, restaurantes y pubs tienen la oportunidad de anunciar sus eventos o espacios de forma gratuita, 
                    atrayendo a una comunidad vibrante de personas que buscan lo mejor en entretenimiento musical.</p>

            <p>Tanto si eres un DJ buscando visibilidad, como si tienes un local o evento que necesita llegar a más personas, 
                nuestra página es tu punto de encuentro ideal. Conéctate, comparte y haz crecer tu audiencia sin complicaciones 
                ni costos innecesarios.</p>

            <p>Todo en un solo lugar. Todo gratis. Todo con ritmo.</p>
            </article>

            <article>
                <figure>
                    <img id="img_ventura" src={{asset("img/Ventura.JPG")}} alt="Dj trabajando">
                    <figcaption>Dj trabajando en discoteca</figcaption>
                </figure>
            </article>
        </section>

        <!--Segunda Seccición iframe Youtube-->
        @include('layouts._partials.iframeYoutube')

        <!-- Tercera Sección porque elegirnos -->
        <section class="contenedor_calendario">
            <article class="calendario">
                <figure>
                    <div id="calendar-container"></div> <!-- Contenedor del calendario dinámico -->
                </figure>
            </article>

            <article>
                <h2>¿Por qué elegirnos?</h2>
                    <ul>
                        <li>Para DJs y artistas: Sube tu música, promociona tus eventos y llega a más personas que disfrutan de tu estilo.</li>
                        <li>Para locales y restaurantes: Anúnciate sin costos y atrae a nuevos clientes con el poder de la música.</li>
                        <li>Para todos: Descubre música fresca, eventos en vivo y espacios únicos para disfrutar de la mejor oferta musical.</li>
                    </ul>
                <p>Únete hoy y haz que tu música, tu negocio o tu evento se escuchen al máximo.</p>
            </article>


        </section>

        @include('layouts._partials.accesosRapidos')
        <br>


</main> 

    @include('layouts._partials.footer')
 

</body>