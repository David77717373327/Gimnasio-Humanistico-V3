<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Símbolos Institucionales | Gimnasio Humanístico del Alto Magdalena en Neiva</title>


    <!--Meta Social-->
    <meta property="og:site_name" content="Gimnasio Humanístico del Alto Magdalena">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Símbolos Institucionales - Gimnasio Humanístico de Neiva">
    <meta name="twitter:description" content="Escudo, bandera e himno del Gimnasio Humanístico del Alto Magdalena.">



    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap y Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/hero.js') }}" defer></script>

    <!-- CSS existente (NO modificado) -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simbolos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navegacion.css') }}" rel="stylesheet">

    <!-- SEO adicional -->
    <meta name="description"
        content="Símbolos institucionales, himno oficial y valores del Gimnasio Humanístico de Neiva. Conoce nuestra identidad educativa basada en el humanismo, cultura ambiental y formación integral.">
    <link rel="canonical" href="https://gimnasiohumanisticoaltomagdalena.com/simbolos-institucionales">

    <meta property="og:url" content="https://gimnasiohumanisticoaltomagdalena.com/simbolos-institucionales">


    <!-- Open Graph -->
    <meta property="og:title" content="Símbolos y Himno - Gimnasio Humanístico de Neiva">
    <meta property="og:description"
        content="Conoce el himno institucional, escudo y bandera del Gimnasio Humanístico de Neiva. Identidad, humanismo y cultura ambiental.">
    <meta property="og:image" content="{{ asset('images/politica_de_calidad2.jpg') }}">
    <meta property="og:type" content="website">

@verbatim
    <!-- JSON-LD para SEO -->
    <script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Símbolos Institucionales",
  "about": {
    "@type": "EducationalOrganization",
    "name": "Gimnasio Humanístico del Alto Magdalena"
  }
}
</script>
@endverbatim


</head>

<body>



    <header class="header-top" aria-label="Encabezado principal del sitio">
        @include('layouts.header')
    </header>

    <nav class="nav-sticky" aria-label="Navegación principal">
        @include('layouts.navigation')
    </nav>

    <!-- Contenido principal -->
    <main id="main">

        <!-- HERO -->
        <section class="hero-section" aria-label="Sección principal de símbolos institucionales">
            <div class="hero-background">
                <img src="{{ asset('images/simbolos.jpg') }}" alt="Instalaciones del Gimnasio Humanístico de Neiva" width="1920"
                    height="1080" loading="lazy">
            </div>
            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>



            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Nuestra Identidad Institucional">Símbolos Institucionales</h1>
                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Desplazarse a la siguiente sección"
                        onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>


        </section>


        <!-- SECCIÓN HIMNO -->
        <section class="himno-section" id="siguiente_sesion" aria-label="Himno institucional del colegio">
            <div class="himno-container">
                <div class="himno-header">
                    <h2 class="himno-title">Himno del Colegio</h2>
                    <p class="himno-subtitle">Gimnasio Humanístico de Neiva</p>
                </div>

                <div class="himno-main-content">
                    <div class="himno-intro">
                        <div class="himno-video-wrapper">
                            <iframe class="himno-video" src="https://www.youtube.com/embed/4ULoeT13IIg"
                                title="Video del himno institucional del Gimnasio Humanístico del Alto Magdalena" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>

                        <h3 class="himno-intro-title">Composición del Himno</h3>
                        <p class="himno-intro-text">
                            Compuesto por el Magíster <strong>Jesús María Vidal Arias</strong>, este himno representa
                            los valores del <strong>humanismo, el trabajo, la cultura ambiental, la inclusión y el
                                sentido de pertenencia</strong>.
                            Cada estrofa refleja el compromiso con la formación integral y el amor por el territorio
                            del Alto Magdalena.
                        </p>
                    </div>





                    <div class="himno-content">
                        <div class="himno-stanza">
                            <h3 class="himno-stanza-title">Coro</h3>
                            <p class="himno-verse">Un futuro mejor yo persigo</p>
                            <p class="himno-verse">Y por eso al estudio me doy</p>
                            <p class="himno-verse">Con orgullo lo pienso y lo digo</p>
                            <p class="himno-verse">Del Gimnasio Humanístico soy. (Bis)</p>
                        </div>

                        <div class="himno-stanza">
                            <h3 class="himno-stanza-title">I</h3>
                            <p class="himno-verse">Somos hijos del Alto Magdalena</p>
                            <p class="himno-verse">De la estirpe aborigen y español</p>
                            <p class="himno-verse">Nos distingue una lumbre de nobleza</p>
                            <p class="himno-verse">Y un encuadre mestizo hecho de amor.</p>
                        </div>

                        <div class="himno-stanza">
                            <h3 class="himno-stanza-title">II</h3>
                            <p class="himno-verse">Nos forjamos al ritmo del trabajo</p>
                            <p class="himno-verse">Con la mira humanista de ideal</p>
                            <p class="himno-verse">Construyendo la patria que soñamos</p>
                            <p class="himno-verse">De justicia, de paz y libertad.</p>
                        </div>

                        <div class="himno-stanza">
                            <h3 class="himno-stanza-title">III</h3>
                            <p class="himno-verse">Hermanamos esfuerzos y esperanzas</p>
                            <p class="himno-verse">Con el árbol, el agua y con el sol</p>
                            <p class="himno-verse">Nos sentimos amigos del planeta</p>
                            <p class="himno-verse">Ciudadanos del mundo, hijos de Dios.</p>
                        </div>

                        <div class="himno-stanza">
                            <h3 class="himno-stanza-title">Coro Final</h3>
                            <p class="himno-verse">Un futuro mejor yo persigo</p>
                            <p class="himno-verse">Y por eso al estudio me doy</p>
                            <p class="himno-verse">Con orgullo lo pienso y lo digo</p>
                            <p class="himno-verse">Del Gimnasio Humanístico soy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECCIÓN SÍMBOLOS -->
        <section class="simbolos-section" id="simbolos-section" aria-label="Símbolos institucionales del colegio">
            <div class="simbolos-container">
                <div class="simbolos-header">
                    <h2 class="simbolos-title">Símbolos Institucionales</h2>
                </div>

                <!-- Escudo -->
                <div class="simbolo-item">
                    <div class="simbolo-row">
                        <div class="simbolo-image-container">
                            <img src="{{ asset('images/logo.png') }}" alt="Escudo del Gimnasio Humanístico de Neiva"
                                class="simbolo-image" loading="lazy">
                        </div>
                        <div class="simbolo-content">
                            <h3 class="simbolo-name">Escudo Institucional</h3>
                            <p class="simbolo-description">
                                El escudo simboliza la unión del ser humano con la naturaleza del territorio del Alto
                                Magdalena.
                                La silueta del estudiante ubicada en el centro representa la esencia
                                <strong>humanista</strong> de la institución.
                                El árbol que forma una casa evoca la <strong>cultura ambiental</strong> y la importancia
                                de la familia en la
                                formación integral de nuestros estudiantes.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bandera -->
                <div class="simbolo-item">
                    <div class="simbolo-row reverse">
                        <div class="simbolo-image-container">
                            <img src="{{ asset('images/bandera.png') }}"
                                alt="Bandera institucional del Gimnasio Humanístico de Neiva"
                                class="simbolo-image bandera-image" loading="lazy">
                        </div>
                        <div class="simbolo-content">
                            <h3 class="simbolo-name">Bandera Institucional</h3>
                            <p class="simbolo-description">
                                La bandera está compuesta por dos colores. El <strong>amarillo</strong> simboliza la
                                riqueza moral e intelectual
                                que la institución cultiva en cada estudiante para su crecimiento humano.
                            </p>
                            <p class="simbolo-description">
                                El color <strong>verde</strong> representa la esperanza y la conexión del ser humano con
                                la naturaleza, promoviendo
                                una formación que integra valores, conciencia ambiental y desarrollo espiritual.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- Navegación interna -->
    <nav aria-label="Navegación interna del sitio">
        @include('layouts.navegacion_interna')
    </nav>

    <!-- Footer -->
    <footer aria-label="Pie de página del sitio">
        @include('layouts.footer')
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
