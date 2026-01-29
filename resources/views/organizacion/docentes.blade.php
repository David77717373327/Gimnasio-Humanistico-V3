<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docentes | Gimnasio Humanístico del Alto Magdalena - Neiva</title>
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
    <!-- CSS personalizado -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/docentes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navegacion.css') }}" rel="stylesheet">

    <!-- Script Hero -->
    <script src="{{ asset('js/hero.js') }}" defer></script>

    <meta property="og:title" content="Personal Docente | Gimnasio Humanístico del Alto Magdalena">
    <meta property="og:description"
        content="Nuestro equipo docente promueve una educación humanista, inclusiva y de alta calidad académica en Neiva.">
    <meta property="og:image" content="{{ asset('images/simbolos.jpg') }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_CO">
    <meta property="og:url" content="https://gimnasiohumanisticoaltomagdalena.com/docentes">
    <meta property="og:site_name" content="Gimnasio Humanístico del Alto Magdalena">

@verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Gimnasio Humanístico del Alto Magdalena",
  "url": "https://gimnasiohumanisticoaltomagdalena.com",
  "employee": {
    "@type": "Person",
    "jobTitle": "Docente",
    "description": "Profesionales en educación con formación humanista, compromiso con la inclusión y liderazgo pedagógico"
  }
}
</script>
@endverbatim

</head>

<body>


    <header class="header-top" aria-label="Encabezado principal del sitio">
        @include('layouts.header')
    </header>

    <nav class="nav-sticky" aria-label="Navegación principal del sitio">
        @include('layouts.navigation')
    </nav>

    <main>

        <!-- HERO -->
        <section class="hero-section" aria-label="Equipo Directivo del Gimnasio Humanístico">
            <div class="hero-background">
                <img src="{{ asset('images/simbolos.jpg') }}"
                    alt="Simbolos del Gimnasio Humanístico del Alto Magdalena" width="1920" height="1080"
                    loading="lazy">
            </div>

            <div class="hero-overlay"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Liderazgo Institucional">Personal Docente del Gimnasio Humanístico</h1>
                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Desplazarse a la siguiente sección"
                        onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECCIÓN DE PROFESORES -->
        <section class="profesores-section" id="siguiente_sesion">
            <div class="container">

                <h2 class="title-intro">Formación y liderazgo pedagógico</h2>

                <div class="section-intro">
                    <p> Acorde con el horizonte institucional, los maestros encarnan
                        un liderazgo pedagógico inspirador. Es un profesional con una
                        sólida formación humanista que promueve la justicia, la inclusión
                        y el respeto por la diversidad de ritmos y estilos de aprendizaje
                        de sus estudiantes. Posee un profundo dominio
                        de su disciplina y un compromiso activo con la actualización y resignificación
                        continua de sus saberes</p>
                </div>


            </div>
        </section>


        <footer aria-label="Pie de página institucional">
            @include('layouts.footer')
        </footer>
        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
