<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- =======================================
              SEO OPTIMIZADO
    ======================================== -->

    <title>Misión y Visión del Gimnasio Humanístico | Colegio Privado en Neiva</title>

    <!-- Meta descripción SEO -->
    <meta name="description"
        content="Conoce la misión y visión del Gimnasio Humanístico del Alto Magdalena, colegio privado en Neiva, Huila, con un modelo educativo humanista, inclusivo, científico y tecnológico.">

    <!-- Palabras clave SEO -->
    <meta name="keywords"
        content="Misión Gimnasio Humanístico, Visión Gimnasio Humanístico, educación humanista, modelo educativo Neiva, colegio Neiva, formación integral, inclusión educativa, pensamiento científico">

    <!-- Autor -->
    <meta name="author" content="Gimnasio Humanístico del Alto Magdalena">


    <!-- Open Graph -->
    <meta property="og:title" content="Misión y Visión - Gimnasio Humanístico del Alto Magdalena">
    <meta property="og:description"
        content="Nuestro compromiso es transformar vidas mediante una educación de excelencia basada en un enfoque humanista, inclusivo, científico y ecológico.">
    <meta property="og:image" content="{{ asset('images/Politica_de_calidad2.webp') }}">
    <meta property="og:url" content="https://gimnasiohumanisticoaltomagdalena.com/mision-vision">
    <meta property="og:type" content="website">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Misión y Visión - Gimnasio Humanístico del Alto Magdalena">
    <meta name="twitter:description"
        content="Conoce nuestra misión y visión enfocadas en la formación integral, el pensamiento crítico y la innovación educativa.">
    <meta name="twitter:image" content="{{ asset('images/imagen1.jpg') }}">

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

    <!-- CSS personalizado -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mision_vision.css') }}" rel="stylesheet">
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
  "description": "Colegio privado en Neiva con modelo educativo humanista, inclusivo y científico.",
  "educationalLevel": ["Preescolar", "Educación Básica", "Media Académica"]
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

<!-- =======================================
          CONTENIDO PRINCIPAL
======================================= -->
<main id="main" role="main">

    <!-- HERO -->
    <section class="hero-section" aria-label="Misión y Visión del Gimnasio Humanístico del Alto Magdalena">
        <div class="hero-background">
            <img src="{{ asset('images/educacion_secundaria/imagen1.jpg') }}" alt="Instalaciones del Gimnasio Humanístico del Alto Magdalena en Neiva"
                width="1920" height="1080" loading="lazy">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-particles" aria-hidden="true"></div>

        <div class="container hero-container">
            <div class="hero-content">
                <h1 class="hero-title" data-title="Nuestra Identidad Institucional">Misión y Visión del Gimnasio Humanístico</h1>
                <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                    aria-label="Desplazarse a la siguiente sección"
                    onkeypress="if(event.key==='Enter')scrollToContent()">
                    <i class="fas fa-chevron-down" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- =======================================
                 SECCIÓN MISIÓN
    ======================================== -->
    <section class="section-mision" id="siguiente_sesion">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="content-wrapper">
                        <div class="section-header">
                            <h2 class="section-title">
                                <span class="title-decoration"></span>
                                Nuestra Misión
                            </h2>
                        </div>
                        <div class="section-content">
                            <p class="lead-paragraph">
                                En el <strong>Gimnasio Humanístico del Alto Magdalena</strong>, nuestra misión es
                                transformar vidas a través de una educación de excelencia.
                            </p>
                            <p class="parrafo_2">
                                Nos comprometemos a promover el desarrollo holístico de cada estudiante
                                (intelectual, espiritual, social, físico y mental), mediante el cultivo de un
                                pensamiento científico, crítico y ambiental; basados en un enfoque humanístico,
                                inclusivo y emprendedor, e impulsados por un equipo docente altamente cualificado y
                                apasionado, para preparar ciudadanos capaces de innovar, liderar y contribuir a una
                                sociedad más digna y sostenible.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mision-visual"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- =======================================
                 SECCIÓN VISIÓN
    ======================================== -->
    <section class="section-vision" id="vision">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2 d-flex align-items-center">
                    <div class="content-wrapper">
                        <div class="section-header">
                            <h2 class="section-title">
                                <span class="title-decoration"></span>
                                Nuestra Visión
                            </h2>
                        </div>
                        <div class="section-content">
                            <div class="vision-year">2035</div>
                            <p class="lead-paragraph">
                                Para el <strong>2035</strong>, el Gimnasio Humanístico del Alto Magdalena será
                                reconocido como un referente en innovación educativa.
                            </p>
                            <p>
                                Consolidado por un Proyecto Educativo Institucional que ofrece una formación de
                                excelencia. Nuestro modelo se distinguirá por su enfoque humanista, inclusivo,
                                científico, ecológico y tecnológico, que prepara a las nuevas generaciones con una
                                mentalidad global y las habilidades y competencias necesarias para impactar positivamente
                                en la sociedad.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 order-lg-1">
                    <div class="vision-visual">
                        <div class="timeline-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<nav aria-label="Navegación interna del sitio">
    @include('layouts.navegacion_interna')
</nav>

<footer aria-label="Pie de página del sitio">
    @include('layouts.footer')
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

<script>
        // Intersection Observer para animaciones
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observar elementos
        document.querySelectorAll('.valor-block, .content-wrapper, .visual-element').forEach(el => {
            observer.observe(el);
        });
    </script>

</body>
</html>
