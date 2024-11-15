<!DOCTYPE html>
<html lang="es">

<<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Busca animar tu vida</title>

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />

    <!--Tipo de fuente usada de google-->
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">


    <!--Usar mi Css por el momento-->
    <link rel="stylesheet" href="{{ asset('css/Estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalizar.css') }}">

    <script src ="{{ asset('js/funcionalidad.js') }}"></script>


</head>



<body id ="body" class="fondo_negro">
    <!-- Nav Barra principal-->
    @include('layouts._partials.menu')

     <main id ="main" class ="parrafo-blanco">

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
        <h2>¿Por qué elegirnos?</h2>
        <ul>
            <li>Para DJs y artistas: Sube tu música, promociona tus eventos y llega a más personas que disfrutan de tu estilo.</li>
            <li>Para locales y restaurantes: Anúnciate sin costos y atrae a nuevos clientes con el poder de la música.</li>
            <li>Para todos: Descubre música fresca, eventos en vivo y espacios únicos para disfrutar de la mejor oferta musical.</li>
        </ul>
        <p>Únete hoy y haz que tu música, tu negocio o tu evento se escuchen al máximo.</p>





        @include('layouts._partials.accesosRapidos')


</main> 

    @include('layouts._partials.footer')
 

</body>