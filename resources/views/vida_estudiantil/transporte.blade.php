<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transporte Escolar | Gimnasio Humanístico del Alto Magdalena - Neiva</title>

    <!-- Google Fonts - Tipografía moderna -->
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
    <link href="{{ asset('css/transporte.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">


@verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://gimnasiohumanisticoaltomagdalena.com/transporte-escolar",
  "url": "https://gimnasiohumanisticoaltomagdalena.com/transporte-escolar",
  "name": "Transporte Escolar",
  "description": "Información sobre el transporte escolar del Gimnasio Humanístico del Alto Magdalena en Neiva. Servicio autónomo gestionado directamente por padres de familia con proveedores particulares.",
  "inLanguage": "es-CO",
  "isPartOf": {
    "@type": "EducationalOrganization",
    "@id": "https://gimnasiohumanisticoaltomagdalena.com/#school",
    "name": "Gimnasio Humanístico del Alto Magdalena"
  },
  "about": {
    "@type": "Thing",
    "name": "Transporte escolar",
    "description": "Orientación institucional sobre el servicio de transporte contratado de forma independiente por los acudientes."
  },
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://gimnasiohumanisticoaltomagdalena.com/images/transporte.jpg",
    "caption": "Transporte escolar del Gimnasio Humanístico del Alto Magdalena"
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

    <main id="main" role="main">

        <!-- HERO -->
        <section class="hero-section" aria-label="Servicio de transporte escolar del Gimnasio Humanístico">
            <div class="hero-background">
                <img src="{{ asset('/images/educacion_secundaria/imagen1.jpg') }}"
                    alt="Instalaciones del colegio en Neiva enfocadas en educación inicial y preescolar" width="1920"
                    height="1080" loading="lazy">
            </div>

            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Nuestra Identidad Institucional">
                       Transporte escolar
                    </h1>

                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Ir a contenido principal" onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>


    <!-- HERO SECTION - IMAGEN CON DEGRADADO BLANCO SUPERIOR -->
    <section class="transport-hero" id="siguiente_sesion">
        <h2 class="description-title">Servivio de transporte</h2>
        <img src="{{ asset('images/transporte.jpg') }}" alt="Transporte Escolar Gimnasio Humanístico"
            class="transport-hero-image">
        <div class="transport-hero-overlay"></div>
    </section>

    <!-- SECCIÓN DE DESCRIPCIÓN -->
    <section class="transport-description">
        <div class="description-wrapper">
            <div class="description-content">
                <p>
                    El servicio de transporte escolar es un servicio autónomo, gestionado y contratado
                    directamente por los padres de familia, quienes asumen la total responsabilidad de
                    su elección. La institución, con el objetivo de facilitar la logística familiar, ofrece
                    únicamente la información de contacto de proveedores particulares que han demostrado
                    cumplir con la normatividad vigente en materia de transporte especial y seguridad vial.
                    El Gimnasio Humanístico no tiene vínculo contractual ni responsabilidad legal en
                    la prestación directa de este servicio, siendo un acuerdo exclusivo entre el acudiente y el
                    transportador.
                </p>
            </div>
        </div>
    </section>

    <!-- Incluir el footer -->
    @include('layouts.footer')

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
