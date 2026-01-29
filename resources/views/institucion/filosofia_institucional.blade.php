<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Title optimizado -->
    <title>Componente Filosófico del Colegio Gimnasio Humanístico en Neiva</title>

    <!-- Meta Description SEO -->
    <meta name="description" content="Conoce el componente filosófico del Gimnasio Humanístico de Neiva: principios humanísticos, cultura democrática, liderazgo, emprendimiento, valores, sostenibilidad ambiental e identidad educativa.">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://gimnasiohumanisticoaltomagdalena.com/filosofia-institucional">

    <!-- Open Graph SEO -->
    <meta property="og:title" content="Componente Filosófico – Gimnasio Humanístico de Neiva">
    <meta property="og:description" content="Principios humanistas, cultura democrática, liderazgo, emprendimiento y valores institucionales del Gimnasio Humanístico de Neiva.">
    <meta property="og:image" content="{{ asset('images/Politica_de_calidad2.jpg') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gimnasiohumanistico.edu.co/componente-filosofico">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap & Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/hero.js') }}" defer></script>

    <!-- CSS (sin cambios) -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/filosofia_institucional.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navegacion.css') }}" rel="stylesheet">


    @verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Gimnasio Humanístico del Alto Magdalena",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Neiva",
    "addressRegion": "Huila",
    "addressCountry": "CO"
  },
  "areaServed": "Neiva, Huila",
  "educationalLevel": [
    "Preescolar",
    "Básica Primaria",
    "Básica Secundaria",
    "Media Académica"
  ]
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
    <section class="hero-section" aria-label="Componente filosófico institucional">
        <div class="hero-background">
            <img src="{{ asset('images/politica_de_calidad3.jpg') }}"
                alt="Instalaciones del Gimnasio Humanístico de Neiva en el Alto Magdalena"
                width="1920"
                height="1080"
                loading="lazy">
        </div>

        <div class="hero-overlay"></div>
        <div class="hero-particles" aria-hidden="true"></div>

        <div class="container hero-container">
            <div class="hero-content">
                <h1 class="hero-title" data-title="Componente Filosófico">
                   Componente Filosófico Gimnasio Humanístico 
                </h1>

                <div class="hero-scroll-indicator"
                    onclick="scrollToContent()"
                    role="button"
                    tabindex="0"
                    aria-label="Desplazarse al contenido"
                    onkeypress="if(event.key==='Enter')scrollToContent()">
                    <i class="fas fa-chevron-down" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>


    <!-- SECCIÓN PRINCIPAL -->
    <section id="siguiente_sesion" class="componente-filosofico-section" aria-label="Filosofía institucional del colegio">
        <div class="container">

            <!-- Introducción -->
            <header class="institutional-header" data-aos="fade-up">
                <div class="header-badge">
                    <i class="fas fa-university"></i>
                    <span>Filosofía Institucional</span>
                </div>

                <h2 class="main-title">
                    Nuestra <span class="highlight-text">Identidad Educativa</span>
                </h2>

                <p class="header-subtitle">
                    Nos educamos en el trabajo humanizante para construir un nuevo país desde el humanismo, la ética, la autonomía y el servicio.
                </p>

                <div class="header-divider"></div>
            </header>

            <!-- Contenido -->
            <div class="row">
                <div class="col-lg-12">
                    <article class="filosofia-content" data-aos="fade-up" data-aos-delay="200">
                        <div class="content-card">
                            <div class="card-decoration"></div>

                            <div class="content-text">
                                <section class="philosophy-blocks">

                                    <!-- PRINCIPIOS HUMANÍSTICOS -->
                                    <div class="philosophy-block" data-aos="fade-up">
                                        <div class="block-icon">
                                            <i class="fas fa-brain"></i>
                                        </div>

                                        <div class="block-content">
                                            <h3>Principios Humanísticos</h3>
                                            <p>
                                                Nuestra institución fundamenta su quehacer en los valores del humanismo,
                                                promoviendo la autodisciplina intelectual, la autonomía moral y el pensamiento crítico
                                                como bases para la toma de decisiones éticas y responsables.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- CULTURA DEMOCRÁTICA -->
                                    <div class="philosophy-block" data-aos="fade-up">
                                        <div class="block-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="block-content">
                                            <h3>Cultura Democrática</h3>
                                            <p>
                                                Fomentamos una cultura de democracia activa, participación, diálogo y construcción colectiva,
                                                donde cada miembro de la comunidad educativa se reconoce como protagonista de su proceso formativo.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- EMPRENDIMIENTO -->
                                    <div class="philosophy-block" data-aos="fade-up">
                                        <div class="block-icon">
                                            <i class="fas fa-rocket"></i>
                                        </div>
                                        <div class="block-content">
                                            <h3>Emprendimiento y Liderazgo</h3>
                                            <p>
                                                Impulsamos el emprendimiento, la autodeterminación y el liderazgo
                                                para que nuestros estudiantes proyecten su vida con autonomía,
                                                responsabilidad y visión transformadora.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- CULTURA AMBIENTAL -->
                                    <div class="philosophy-block" data-aos="fade-up">
                                        <div class="block-icon">
                                            <i class="fas fa-leaf"></i>
                                        </div>
                                        <div class="block-content">
                                            <h3>Cultura Ambiental</h3>
                                            <p>
                                                Promovemos el respeto, cuidado y protección de la naturaleza,
                                                fortaleciendo el compromiso ambiental que caracteriza a nuestra región del Alto Magdalena.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- VALORES -->
                                    <div class="philosophy-block" data-aos="fade-up">
                                        <div class="block-icon">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                        <div class="block-content">
                                            <h3>Valores y Calidad de Vida</h3>
                                            <p>
                                                Desde una visión humanista y espiritual, promovemos valores que contribuyen
                                                al bienestar integral, la convivencia pacífica y la formación de ciudadanos éticos.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- EXCELENCIA -->
                                    <div class="philosophy-block" data-aos="fade-up">
                                        <div class="block-icon">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="block-content">
                                            <h3>Excelencia e Inclusión</h3>
                                            <p>
                                                Nuestra institución trabaja bajo un modelo de calidad total,
                                                inclusión educativa y excelencia académica, formando personas capaces
                                                de transformar su entorno con justicia, solidaridad e innovación.
                                            </p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </article>
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

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
