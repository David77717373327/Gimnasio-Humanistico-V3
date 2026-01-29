<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- canonical -->
    <link rel="canonical" href="https://gimnasiohumanisticoaltomagdalena.com/gobierno-escolar">

    <!-- 🔥 SEO Mejorado -->
    <title>Gobierno Escolar | Gimnasio Humanístico del Alto Magdalena - Neiva</title>

    <meta name="description"
        content="Conoce la estructura del Gobierno Escolar del Gimnasio Humanístico: Rectoría, Consejo Directivo y Consejo Académico. Funciones, miembros y participación democrática en la institución.">

    <meta name="keywords"
        content="Gobierno Escolar, Consejo Directivo, Consejo Académico, Rectoría, Institución Educativa, Participación Democrática, Gimnasio Humanístico, Estructura Organizacional, Educación Neiva">

    <meta name="author" content="Gimnasio Humanístico del Alto Magdalena">


    <!-- Open Graph -->
    <meta property="og:title" content="Gobierno Escolar | Gimnasio Humanístico del Alto Magdalena">
    <meta property="og:description"
        content="Conoce la estructura del Gobierno Escolar: Rectoría, Consejo Directivo y Consejo Académico. Participación democrática y calidad educativa.">
    <meta property="og:image" content="{{ asset('images/consejo_directivo.jpg') }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_CO">
    <meta property="og:site_name" content="Gimnasio Humanístico del Alto Magdalena">
    <meta property="og:url" content="https://gimnasiohumanisticoaltomagdalena.com/gobierno-escolar">


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

    <!-- CSS -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gobierno_escolar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navegacion.css') }}" rel="stylesheet">

@verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Gimnasio Humanístico del Alto Magdalena",
  "url": "https://gimnasiohumanisticoaltomagdalena.com",
  "department": [
    {
      "@type": "EducationalOrganization",
      "name": "Rectoría"
    },
    {
      "@type": "EducationalOrganization",
      "name": "Consejo Directivo"
    },
    {
      "@type": "EducationalOrganization",
      "name": "Consejo Académico"
    }
  ]
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
        <section class="hero-section" aria-label="Gobierno Escolar Institucional">
            <div class="hero-background">
                <img src="{{ asset('images/consejo_directivo.jpg') }}"
                    alt="Consejo Directivo del Gimnasio Humanístico del Alto Magdalena Neiva Huila" width="1920" height="1080"
                    loading="lazy">
            </div>

            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Participación Democrática">Gobierno Escolar del Gimnasio Humanístico</h1>
                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Desplazarse a la siguiente sección"
                        onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN DE INTRODUCCIÓN -->
        <section class="intro-section" id="siguiente_sesion">

            <h2 class="title-intro">¿Qué es el Gobierno Escolar?</h2>

            <p class="intro-text">
                El Gobierno Escolar del Gimnasio Humanístico está conformado por el Consejo Directivo como máxima
                autoridad decisoria,
                y el Consejo Académico como órgano asesor. Ambos trabajan articuladamente para fortalecer la
                participación democrática
                de la comunidad educativa y garantizar la calidad académica, formativa y administrativa del
                establecimiento.
                La Rectoría coordina y ejecuta las acciones institucionales.
            </p>

            <div class="gobierno-grid">

                <!-- 🟩 RECTORÍA -->
                <article class="gobierno-column">
                    <h3 class="column-title">Rectoría</h3>
                    <p class="column-description">
                        Máxima autoridad ejecutiva del establecimiento, responsable de la representación legal y
                        ejecución
                        de decisiones del Gobierno Escolar.
                    </p>

                    <div class="flip-card">
                        <div class="flip-card-inner">

                            <div class="flip-card-front">
                                <div class="card-icon">
                                    <img src="{{ asset('images/logo.png') }}" alt="Rectoría">
                                </div>
                                <h4 class="front-title">Rectoría</h4>
                                <p class="front-subtitle">Representación Legal</p>
                                <div class="hover-hint">Pasa el cursor →</div>
                            </div>

                            <div class="flip-card-back">
                                <h5 class="back-title">Rectoría</h5>
                                <div class="members-list">
                                    <div class="member-item">
                                        <span class="bullet">•</span>
                                        <p class="member-text">
                                            <strong>Representante legal</strong> del establecimiento ante las
                                            autoridades educativas.
                                        </p>
                                    </div>
                                    <div class="member-item">
                                        <span class="bullet">•</span>
                                        <p class="member-text">
                                            <strong>Preside y convoca</strong> tanto al Consejo Directivo como al
                                            Consejo Académico.
                                        </p>
                                    </div>
                                    <div class="member-item">
                                        <span class="bullet">•</span>
                                        <p class="member-text">
                                            <strong>Responsable</strong> de la dirección general y coordinación
                                            institucional.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </article>

                <!-- 🟦 CONSEJO DIRECTIVO -->
                <article class="gobierno-column">
                    <h3 class="column-title">Consejo Directivo</h3>
                    <p class="column-description">
                        Instancia directiva de toma de decisiones de la comunidad educativa y de orientación académica y
                        administrativa.
                    </p>

                    <div class="flip-card">
                        <div class="flip-card-inner">

                            <div class="flip-card-front">
                                <div class="card-icon">
                                    <img src="{{ asset('images/grupo_humanistico2.png') }}" alt="Consejo Directivo">
                                </div>
                                <h4 class="front-title">Consejo Directivo</h4>
                                <p class="front-subtitle">Órgano de Decisión</p>
                                <div class="hover-hint">Pasa el cursor →</div>
                            </div>

                            <div class="flip-card-back">
                                <h5 class="back-title">Miembros del Consejo</h5>
                                <div class="members-list">

                                    <div class="member-item"><span class="bullet">•</span>
                                        <p class="member-text"><strong>La Rectoría</strong>, quien lo preside.</p>
                                    </div>
                                    <div class="member-item"><span class="bullet">•</span>
                                        <p class="member-text"><strong>Dos representantes del personal
                                                docente</strong>.</p>
                                    </div>
                                    <div class="member-item"><span class="bullet">•</span>
                                        <p class="member-text"><strong>Un representante de los padres de
                                                familia</strong>.</p>
                                    </div>
                                    <div class="member-item"><span class="bullet">•</span>
                                        <p class="member-text"><strong>Un representante de los estudiantes</strong>.
                                        </p>
                                    </div>
                                    <div class="member-item"><span class="bullet">•</span>
                                        <p class="member-text"><strong>Un representante de los exalumnos</strong>.</p>
                                    </div>
                                    <div class="member-item"><span class="bullet">•</span>
                                        <p class="member-text"><strong>Un representante del sector productivo</strong>.
                                        </p>
                                    </div>
                                    <div class="member-item"><span class="bullet">•</span>
                                        <p class="member-text"><strong>Un representante de los Directivos
                                                Propietarios</strong>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- 🟧 CONSEJO ACADÉMICO -->
                <article class="gobierno-column">
                    <h3 class="column-title">Consejo Académico</h3>
                    <p class="column-description">
                        Instancia superior para proponer orientaciones en aspectos académicos, curriculares y
                        pedagógicos.
                    </p>

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card-icon">
                                    <img src="{{ asset('images/consejo_directivo.jpg') }}" alt="Consejo Académico">
                                </div>
                                <h4 class="front-title">Consejo Académico</h4>
                                <p class="front-subtitle">Órgano Asesor</p>
                                <div class="hover-hint">Pasa el cursor →</div>
                            </div>
                            <div class="flip-card-back">
                                <h5 class="back-title">Miembros del Consejo</h5>
                                <div class="members-list">
                                    <div class="member-item"><span class="bullet">•</span>
                                        <p class="member-text"><strong>La Rectoría</strong>, representante legal.</p>
                                    </div>
                                    <div class="member-item"><span class="bullet">•</span>
                                        <p class="member-text"><strong>La Coordinadora</strong>, quien dirige los
                                            niveles educativos asignados.</p>
                                    </div>
                                    <div class="member-item"><span class="bullet">•</span>
                                        <p class="member-text"><strong>Los Directivos Propietarios</strong>: un
                                            representante.</p>
                                    </div>
                                    <div class="member-item"><span class="bullet">•</span>
                                        <p class="member-text"><strong>El jefe de cada área académica</strong>, elegido
                                            anualmente.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer aria-label="Pie de página institucional">
        @include('layouts.footer')
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>
