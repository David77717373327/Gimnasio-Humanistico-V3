<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description"
        content="Política de Calidad del Gimnasio Humanístico del Alto Magdalena: excelencia educativa, mejora continua, formación humanista, cumplimiento normativo y bienestar institucional.">
    <meta name="keywords"
        content="Política de calidad, Educación de calidad, Sistema de Gestión, Mejora continua, Gimnasio Humanístico, Educación humanista, Cumplimiento normativo, PEI, Formación integral">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Calidad | Gimnasio Humanístico del Alto Magdalena - Neiva</title>

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
    <link href="{{ asset('css/politica_de_calidad.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navegacion.css') }}" rel="stylesheet">


    @verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://gimnasiohumanisticoaltomagdalena.com/politica-calidad",
  "name": "Política de Calidad",
  "description": "Política de Calidad del Gimnasio Humanístico del Alto Magdalena, enfocada en la excelencia educativa, mejora continua, formación humanista y cumplimiento normativo.",
  "url": "https://gimnasiohumanisticoaltomagdalena.com/politica-calidad",
  "inLanguage": "es-CO",
  "isPartOf": {
    "@type": "EducationalOrganization",
    "@id": "https://gimnasiohumanisticoaltomagdalena.com/#school",
    "name": "Gimnasio Humanístico del Alto Magdalena"
  },
  "about": {
    "@type": "Thing",
    "name": "Política de Calidad Educativa",
    "description": "Sistema de gestión, mejora continua y compromiso institucional con la calidad educativa."
  },
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://gimnasiohumanisticoaltomagdalena.com/images/politica_de_calidad7.webp",
    "caption": "Política de Calidad del Gimnasio Humanístico del Alto Magdalena"
  }
}
</script>
@endverbatim

</head>

<body>

    <!-- ENCABEZADO GLOBAL -->
    <header class="header-top" aria-label="Encabezado principal del sitio">
        @include('layouts.header')
    </header>

    <!-- NAVEGACIÓN PRINCIPAL -->
    <nav class="nav-sticky" aria-label="Navegación principal del sitio">
        @include('layouts.navigation')
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <main>

        <!-- HERO -->
        <section class="hero-section" aria-label="Introducción a la Política de Calidad">
            <div class="hero-background">
                <img src="{{ asset('images/politica_de_calidad7.webp') }}"
                    alt="Instalaciones del Gimnasio Humanístico del Alto Magdalena en Neiva, Colombia"
                    width="1920" height="1080" loading="lazy">
            </div>

            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Compromiso Institucional">Política de Calidad</h1>

                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Desplazarse a la siguiente sección"
                        onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN PRINCIPAL DE POLÍTICA -->
        <section class="main-content" id="siguiente_sesion" aria-labelledby="titulo-politica">
            <div class="container">

                <div class="policy-container">
                    <!-- TEXTO -->
                    <article class="policy-text-content">
                        <h2 id="titulo-politica" class="policy-title">Nuestro Compromiso Institucional</h2>

                        <p class="policy-intro">
                            El Gimnasio Humanístico del Alto Magdalena se compromete a ofrecer un servicio educativo de excelencia,
                            centrado en el desarrollo integral y el bienestar de toda la comunidad educativa, mediante:
                        </p>

                        <ul class="policy-list">
                            <li class="policy-item">
                                La implementación y mejora continua del Sistema de Gestión de Calidad, garantizando la eficiencia
                                y optimización de todos los procesos institucionales.
                            </li>
                            <li class="policy-item">
                                El cumplimiento estricto de la normativa legal vigente y la coherencia con los principios del
                                Proyecto Educativo Institucional (PEI).
                            </li>
                            <li class="policy-item">
                                La promoción de una formación humanista, inclusiva, católica y académica de alta calidad,
                                que favorece el desarrollo pleno, la autonomía y el bienestar físico y mental de los estudiantes.
                            </li>
                        </ul>
                    </article>

                    <!-- IMAGEN -->
                    <figure class="policy-image-container">
                        <img src="{{ asset('images/educacion_secundaria/imagen2.jpg') }}" alt="Representación visual de la Política de Calidad institucional"
                            class="policy-image" loading="lazy">
                    </figure>
                </div>

                <!-- PÁRRAFO DE CIERRE -->
                <section class="policy-summary" aria-label="Resumen de Política de Calidad">
                    <p class="summary-text">
                        Nuestra Política de Calidad refleja el compromiso institucional con la excelencia educativa y el
                        desarrollo integral de nuestros estudiantes. Mediante la implementación de estándares rigurosos,
                        la evaluación continua y la responsabilidad compartida, aseguramos un servicio educativo que responde
                        a las necesidades de la comunidad y a los retos del mundo contemporáneo.
                    </p> 
                </section>
            </div>
        </section>
    </main>

    <!-- NAVEGACIÓN INTERNA -->
    <nav aria-label="Navegación interna del sitio">
        @include('layouts.navegacion_interna')
    </nav>

    <!-- PIE DE PÁGINA -->
    <footer aria-label="Pie de página del sitio">
        @include('layouts.footer')
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
