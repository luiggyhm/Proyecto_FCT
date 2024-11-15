<head>
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
    <link rel="stylesheet" href="{{ asset('css/estilo-personalizado.css') }}">

</head>

<body>
    <!-- Nav Barra principal-->
    @include('layouts._partials.menu')

    @yield('DjoSala')
     
    
    <!-- Header-->
     <header class="bg-dark py-5">

        <section>
                <article>
                    <h1>
                        <strong>Bienvenidos mi gran Oyente</strong>
                    </h1>
                    <p>
                        ¡Bienvenidos a mi rincón! Soy Luiggyhm, un apasionado DJ.
                    </p>

                    <p>
                        En esta página, descubrirás mis últimos tracks y mezclas. La finalidad de esta página es llevarte a
                        un lugar donde la música se convierte en una experiencia, donde los beats te hacen vibrar
                        y te transportan a otro nivel.
                    </p>

                    <p>
                        ¿Estás listo para esta aventura? ¡Adelante, explora y disfruta!
                    </p>
                </article>

                <!--Slider??-->
                <article>
                    <figure>
                        <img id="img_ventura" src={{asset ('imagenes/mesa')}} alt="mesa">
                        <figcaption>Controladora Dj</figcaption>
                    </figure>
                </article>
            </section>

    </header>