<!DOCTYPE html>
<html lang="es-CO">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- META DESCRIPTION SEO -->
    <meta name="description"
        content="Grupo Humanístico S.A.S es una organización educativa en Colombia dedicada a la formación integral, valores humanísticos, excelencia académica y desarrollo personal. Conoce nuestra misión, visión y compromiso institucional.">

    <!-- SEO INDEXACIÓN -->
    <meta name="robots" content="index, follow">

    <!-- COLOR PARA DISPOSITIVOS -->
    <meta name="theme-color" content="#0d3f27">

    <title>Grupo Humanístico S.A.S | Gimnasio Humanístico del Alto Magdalena - Neiva</title>

    <!-- CANONICAL -->
    <link rel="canonical" href="https://gimnasiohumanisticoaltomagdalena.com/grupo-humanistico">


    <!-- OPTIMIZACIÓN DE FUENTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- SCRIPT HERO -->
    <script src="{{ asset('js/hero.js') }}" defer></script>

    <!-- PRELOAD FUENTES -->
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&display=swap"
        as="style">

    <!-- GOOGLE FONTS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- BOOTSTRAP / FONT AWESOME -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- FAVICONS -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.png') }}">

    <!-- CSS -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/grupohumanistico.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navegacion.css') }}" rel="stylesheet">

@verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "EducationalOrganization",
      "@id": "https://gimnasiohumanisticoaltomagdalena.com/#grupo-humanistico",
      "name": "Grupo Humanístico S.A.S",
      "url": "https://gimnasiohumanisticoaltomagdalena.com/grupo-humanistico",
      "logo": "https://gimnasiohumanisticoaltomagdalena.com/images/grupo_humanistico2.png",
      "description": "Grupo Humanístico S.A.S es una organización educativa en Colombia dedicada a la formación integral, valores humanísticos, excelencia académica y desarrollo personal.",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Neiva",
        "addressRegion": "Huila",
        "addressCountry": "CO"
      },
      "areaServed": {
        "@type": "AdministrativeArea",
        "name": "Colombia"
      },
      "sameAs": [
        "https://web.facebook.com/profile.php?id=100041995064524",
        "https://www.instagram.com/gimnasiohumanistico03?utm_source=qr&igsh=YTV3aGt3ajVyZjRw"
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://gimnasiohumanisticoaltomagdalena.com/grupo-humanistico#webpage",
      "url": "https://gimnasiohumanisticoaltomagdalena.com/grupo-humanistico",
      "name": "Grupo Humanístico S.A.S | Gimnasio Humanístico del Alto Magdalena",
      "description": "Conoce el Grupo Humanístico S.A.S, organización educativa comprometida con la formación integral, valores y excelencia académica en Neiva, Colombia.",
      "inLanguage": "es",
      "isPartOf": {
        "@type": "WebSite",
        "@id": "https://gimnasiohumanisticoaltomagdalena.com/#website"
      },
      "about": {
        "@id": "https://gimnasiohumanisticoaltomagdalena.com/#grupo-humanistico"
      }
    }
  ]
}
</script>
@endverbatim

</head>

<body>

    <!-- ENCABEZADO -->
    <header class="header-top" aria-label="Encabezado principal">
        @include('layouts.header')
    </header>

    <!-- NAVEGACIÓN PRINCIPAL -->
    <nav class="nav-sticky" aria-label="Navegación principal">
        @include('layouts.navigation')
    </nav>

    <main id="contenido-principal">

        <!-- HERO -->
        <section class="hero-section" aria-label="Sección inicial del Organigrama Institucional">
            <div class="hero-background">
                <img src="../images/politica_de_calidad4.webp
                "
                    alt="Instalaciones educativas del Grupo Humanístico S.A.S en Neiva"
                    width="1920" height="1080" loading="lazy">
            </div>

            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Compromiso Institucional">Grupo Humanístico S.A.S</h1>

                     <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Desplazarse a la siguiente sección"
                        onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN GRUPO HUMANÍSTICO S.A.S -->
        <section class="grupo-humanistico-section" id="siguiente_sesion">
            <div class="grupo-container">

                <!-- Logo del Grupo -->
                <div class="grupo-logo-container">
                    <img src="{{ asset('images/grupo_humanistico2.png') }}"
                        alt="Logo del Grupo Humanístico S.A.S"
                        class="grupo-logo">
                </div>

                <!-- Descripción del Grupo -->
                <div class="grupo-description">
                    <p>
                        El Grupo Humanístico S.A.S es una institución educativa en Colombia dedicada a la formación integral,
                        la excelencia académica y el desarrollo de competencias humanas. Nuestro enfoque humanístico impulsa
                        el pensamiento crítico, la creatividad, los valores y el liderazgo responsable en niños y jóvenes.
                    </p>
                    <div class="description-separator"></div>
                    <p>
                        Nuestro compromiso es formar ciudadanos íntegros capaces de generar impacto positivo en su comunidad
                        y en la región del Huila. A través de metodologías innovadoras, educación de calidad y un equipo docente
                        altamente capacitado, promovemos aprendizajes significativos que potencian el crecimiento académico,
                        personal y social de cada estudiante.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <!-- PIE DE PÁGINA -->
    <footer aria-label="Pie de página del sitio">
        @include('layouts.footer')
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>
