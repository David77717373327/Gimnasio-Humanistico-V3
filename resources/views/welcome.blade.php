<!DOCTYPE html>
<html lang="es-CO">

<head>
    <!-- ===============================
         META BÁSICOS
    ================================ -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- ===============================
         SEO PRINCIPAL
    ================================ -->
    <title>Colegio privado en Neiva | Gimnasio Humanístico del Alto Magdalena</title>


    <meta name="description"
        content="El Gimnasio Humanístico del Alto Magdalena es un colegio privado en Neiva, Huila, con más de 40 años de experiencia. Educación preescolar, primaria y bachillerato con formación en valores.">


    <meta name="keywords"
        content="Colegio Neiva, Gimnasio Humanístico, colegio privado Neiva, educación bilingüe Neiva, colegio cristiano, admisiones escolares Huila">

    <meta name="author" content="Gimnasio Humanístico del Alto Magdalena">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- ===============================
         CANONICAL (MUY IMPORTANTE)
    ================================ -->
    <link rel="canonical" href="https://www.gimnasiohumanisticoaltomagdalena.com/">

    <!-- ===============================
         OPEN GRAPH (Google / Facebook)
    ================================ -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Colegio Gimnasio Humanístico del Alto Magdalena">
    <meta property="og:description"
        content="Educación integral con más de 40 años formando líderes en Neiva. Conoce nuestro modelo educativo.">
    <meta property="og:url" content="https://www.gimnasiohumanisticoaltomagdalena.com/">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:locale" content="es_CO">

    <!-- ===============================
         PRELOAD / PRECONNECT
    ================================ -->
    <link rel="preload" href="{{ asset('videos/hero-background4.mp4') }}" as="video" type="video/mp4">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- ===============================
         FUENTES
    ================================ -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- ===============================
         CSS EXTERNOS (OPTIMIZADOS)
    ================================ -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    </noscript>

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </noscript>

    <!-- ===============================
         CSS PROPIO
    ================================ -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <!-- ===============================
         JS
    ================================ -->
    <script src="{{ asset('js/welcome.js') }}" defer></script>

    <!-- ===============================
         FAVICON
    ================================ -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.png') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>


    @verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "@id": "https://gimnasiohumanisticoaltomagdalena.com/#school",
  "name": "Gimnasio Humanístico del Alto Magdalena",
  "url": "https://gimnasiohumanisticoaltomagdalena.com/",
  "logo": "https://gimnasiohumanisticoaltomagdalena.com/images/logo.png",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Neiva",
    "addressRegion": "Huila",
    "addressCountry": "CO"
  },
  "areaServed": {
    "@type": "City",
    "name": "Neiva"
  },
  "sameAs": [
    "https://web.facebook.com/profile.php?id=100041995064524",
        "https://www.instagram.com/gimnasiohumanistico03?utm_source=qr&igsh=YTV3aGt3ajVyZjRw"
  ]
}
</script>
    @endverbatim



</head>

<body>
    <!-- Skip to main content para accesibilidad -->
    <a href="#main-content" class="skip-to-main visually-hidden-focusable">Saltar al contenido principal</a>

    <!-- Header Principal -->
    <header class="header-top" role="banner" aria-label="Encabezado principal del sitio">
        @include('layouts.header')
    </header>

    <!-- Navegación Principal -->
    <nav class="nav-sticky" role="navigation" aria-label="Navegación principal del sitio">
        @include('layouts.navigation')
    </nav>

    <!-- Contenido Principal -->
    <main id="main-content" role="main">

        <!-- Hero Section -->
        <section class="hero-banner" id="inicio" aria-labelledby="hero-title">
            <!-- Fondo con video y overlays profesionales -->
            <div class="hero-background" aria-hidden="true">
                <!-- Video de fondo -->
                <video class="hero-bg-video" id="heroVideo" autoplay muted loop playsinline preload="auto"
                    poster="{{ asset('images/video-poster.jpg') }}" aria-label="Video de presentación del colegio">

                    <source src="{{ asset('videos/hero-background8.mp4') }}" type="video/mp4">
                    <source src="{{ asset('videos/hero-background.webm') }}" type="video/webm">


                </video>

                <!-- Imagen de fallback -->
                <img src="{{ asset('images/simbolos.jpg') }}"
                    alt="Vista panorámica de las instalaciones del Gimnasio Humanístico del Alto Magdalena en Neiva"
                    class="hero-fallback-image" width="1920" height="1080" loading="eager">

                <!-- Overlays para mejor legibilidad -->
                <div class="hero-video-overlay" aria-hidden="true"></div>
                <div class="hero-gradient-overlay" aria-hidden="true"></div>
            </div>

            <!-- Contenido del Hero -->
            <div class="hero-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-9">
                            <!-- Título principal -->
                            <div class="hero-title-section">
                                <h1 id="hero-title" class="hero-title">
                                    Colegio privado en Neiva con formación humanística y excelencia académica
                                </h1>
                            </div>

                            <!-- Subtítulo y botones -->
                            <div class="hero-bottom-section">
                                <!-- Subtítulo -->
                                <div class="hero-subtitle-wrapper">
                                    <p class="hero-subtitle">
                                        En nuestras aulas se fortalece el vuelo de la creatividad, la imaginación,
                                        el humanismo y el conocimiento.<br>
                                        ¡Ven y alza el vuelo con nosotros; el futuro nos inspira!
                                    </p>
                                </div>

                                <!-- Botones de acción -->
                                <div class="hero-buttons-wrapper">
                                    <a href="{{ route('admision') }}" class="btn-primary-modern"
                                        aria-label="Solicitar admisión al Gimnasio Humanístico">
                                        <i class="fas fa-rocket" aria-hidden="true"></i>
                                        Solicitar Admisión
                                    </a>
                                    <a href="{{ route('video.bienvenida') }}" class="btn-secondary-modern"
                                        aria-label="Ver tour virtual del colegio">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                        Tour Virtual
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Control de reproducción -->
            <button class="video-control-btn" id="videoControl" aria-label="Pausar video de fondo"
                aria-pressed="false">
                <i class="fas fa-pause" aria-hidden="true"></i>
            </button>

            <!-- Scroll indicator -->
            <div class="scroll-indicator" aria-hidden="true">
                <span class="scroll-text">Descubre más</span>
                <div class="scroll-arrow">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </section>







        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const video = document.getElementById("heroVideo");
                const videoLoader = document.getElementById("videoLoader");

                if (!video) return;

                video.addEventListener("canplaythrough", () => {
                    if (videoLoader) videoLoader.classList.add("hidden");
                    video.classList.add("loaded");
                }, {
                    once: true
                });

                setTimeout(() => {
                    if (!video.classList.contains("loaded")) {
                        if (videoLoader) videoLoader.classList.add("hidden");
                        video.classList.add("loaded");
                    }
                }, 3000);
            });
        </script>


















        <!-- Sección de Bienvenida -->
        <section class="welcome-section" id="bienvenida" aria-labelledby="welcome-title">
            <div class="container">
                <!-- Mensaje de Bienvenida Principal -->
                <div class="welcome-header text-center mb-5">
                    <h2 id="welcome-title" class="welcome-main-title" data-aos="fade-up" data-aos-delay="200">
                        <span class="highlight-text">Bienvenidos al Gimnasio Humanístico Del Alto Magdalena</span>
                    </h2>


                

                    <div class="welcome-badge" data-aos="fade-up"
                        aria-label="Distintivo de excelencia educativa desde 1999">
                        <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                        <span>Excelencia Educativa Desde 1983</span>
                    </div>
                    <p class="welcome-main-subtitle" data-aos="fade-up" data-aos-delay="400">
                        Formamos líderes íntegros con valores cristianos, excelencia académica y visión global.
                        Nuestro compromiso es brindar una educación de calidad que transforme vidas y construya futuro.
                    </p>
                </div>

                <!-- Contenido Principal con Grid Moderno -->
                <div class="row align-items-center mb-5">
                    <!-- Columna de Texto e Información -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <article class="welcome-content" data-aos="fade-right">
                            <div class="welcome-intro">
                                <h3 class="intro-subtitle">Educación con Excelencia en Neiva, Huila</h3>
                                <p class="intro-description">
                                    En el Colegio Gimnasio Humanístico del Alto Magdalena, nos comprometemos con el
                                    desarrollo pleno de nuestros estudiantes a través de una educación de calidad que
                                    combina tradición académica, valores cristianos e innovación pedagógica.
                                </p>
                            </div>

                            <ul class="welcome-features" role="list">
                                <li class="feature-point" data-aos="fade-up" data-aos-delay="100">
                                    <div class="feature-point-icon" aria-hidden="true">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <span>Metodología Innovadora: Pensamiento de Diseño (Design Thinking)</span>
                                </li>
                                <li class="feature-point" data-aos="fade-up" data-aos-delay="200">
                                    <div class="feature-point-icon" aria-hidden="true">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <span>Enfoque creativo, interactivo y empático</span>
                                </li>
                                <li class="feature-point" data-aos="fade-up" data-aos-delay="300">
                                    <div class="feature-point-icon" aria-hidden="true">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <span>Tecnología educativa de vanguardia</span>
                                </li>
                            </ul>
                        </article>
                    </div>

                    <!-- Columna de Imagen Principal -->
                    <div class="col-lg-6">
                        <figure class="welcome-image-container" data-aos="fade-left">
                            <div class="main-image-wrapper">
                                <img src="{{ asset('images/instalaciones/imagen1.jpg') }}"
                                    alt="Estudiantes del Gimnasio Humanístico en instalaciones modernas del colegio en Neiva"
                                    class="welcome-main-image" width="800" height="600" loading="lazy">
                                <div class="image-overlay-content" aria-hidden="true">
                                    <div class="overlay-badge">
                                        <i class="fas fa-building"></i>
                                        <span>Instalaciones Modernas</span>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                <!-- ============================
     Sección de Instalaciones con Animaciones AOS
============================== -->

                <div class="facilities-gallery">
                    <header class="gallery-header">
                        <h3 class="gallery-title" data-aos="fade-up" data-aos-duration="800">
                            <span class="title-decorator" aria-hidden="true"></span>
                            Nuestras Instalaciones
                            <span class="title-decorator" aria-hidden="true"></span>
                        </h3>
                        <p class="gallery-subtitle" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                            Espacios diseñados para potenciar el aprendizaje y el desarrollo.
                        </p>
                    </header>

                    <div class="gallery-grid">
                        <!-- Card 1: Laboratorios de Ciencias -->
                        <article class="gallery-item" data-index="0" data-aos="fade-up" data-aos-delay="150"
                            data-aos-duration="800">
                            <figure class="gallery-image-wrapper">
                                <img src="{{ asset('images/laboratorio.jpg') }}"
                                    alt="Laboratorios de ciencias equipados con tecnología moderna"
                                    class="gallery-image" loading="lazy">
                            </figure>
                            <figcaption class="gallery-title-overlay">
                                <h4 class="facility-title">Laboratorios de Ciencias</h4>
                            </figcaption>
                        </article>

                        <!-- Card 2: Aula de Sistemas -->
                        <article class="gallery-item" data-index="1" data-aos="fade-up" data-aos-delay="250"
                            data-aos-duration="800">
                            <figure class="gallery-image-wrapper">
                                <img src="{{ asset('images/instalaciones/imagen2.jpg') }}"
                                    alt="Aulas inteligentes con tecnología educativa avanzada" class="gallery-image"
                                    loading="lazy">
                            </figure>
                            <figcaption class="gallery-title-overlay">
                                <h4 class="facility-title">Aula De Sistemas</h4>
                            </figcaption>
                        </article>

                        <!-- Card 3: Espacios Culturales -->
                        <article class="gallery-item" data-index="2" data-aos="fade-up" data-aos-delay="350"
                            data-aos-duration="800">
                            <figure class="gallery-image-wrapper">
                                <img src="{{ asset('images/instalaciones/imagen3.jpg') }}"
                                    alt="Biblioteca digital con recursos multimedia" class="gallery-image"
                                    loading="lazy">
                            </figure>
                            <figcaption class="gallery-title-overlay">
                                <h4 class="facility-title">Espacios Culturales</h4>
                            </figcaption>
                        </article>

                        <!-- Card 4: Espacios Recreativos -->
                        <article class="gallery-item" data-index="3" data-aos="fade-up" data-aos-delay="450"
                            data-aos-duration="800">
                            <figure class="gallery-image-wrapper">
                                <img src="{{ asset('images/instalaciones/imagen4.jpg') }}"
                                    alt="Espacios deportivos y recreativos" class="gallery-image" loading="lazy">
                            </figure>
                            <figcaption class="gallery-title-overlay">
                                <h4 class="facility-title">Espacios Recreativos</h4>
                            </figcaption>
                        </article>
                    </div>
                </div>

                <!-- Modal (sin cambios, ya que no necesita animaciones) -->
                <div class="modal-overlay" id="modalOverlay">
                    <div class="modal-content">
                        <button class="modal-close" id="modalClose" aria-label="Cerrar modal">
                            <i class="fas fa-times"></i>
                        </button>

                        <button class="modal-nav modal-prev" id="modalPrev" aria-label="Imagen anterior">
                            <i class="fas fa-chevron-left"></i>
                        </button>

                        <button class="modal-nav modal-next" id="modalNext" aria-label="Imagen siguiente">
                            <i class="fas fa-chevron-right"></i>
                        </button>

                        <div class="modal-image-container">
                            <img src="" alt="" class="modal-image" id="modalImage">
                        </div>

                        <div class="modal-info">
                            <h3 class="modal-title" id="modalTitle"></h3>
                            <p class="modal-description" id="modalDescription"></p>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <!-- Sección Quiénes Somos -->
        <section class="about-us-section" id="quienes-somos" aria-labelledby="about-title">
            <div class="container">
                <!-- Header de la Sección -->
                <header class="about-header text-center mb-5">
                    <h2 id="about-title" class="about-main-title" data-aos="fade-up" data-aos-delay="200">
                        ¿Quiénes Somos?
                    </h2>

                </header>

                <!-- Grid de Cards Profesional -->
                <div class="cards-grid">
                    <!-- Misión -->
                    <article class="about-card mission-card" data-aos="fade-up" data-aos-delay="100">
                        <header class="card-header">
                            <h3>MISIÓN</h3>
                        </header>
                        <div class="educational-icons" aria-hidden="true"></div>
                        <div class="card-body">
                            <p class="card-description">
                                En el Gimnasio Humanístico del Alto Magdalena, nuestra misión es transformar vidas a
                                través
                                de una educación de excelencia. Nos comprometemos a promover el desarrollo holístico de
                                cada
                                estudiante (intelectual, espiritual, social, físico y mental), mediante el cultivo de un
                                pensamiento
                                científico, crítico y ambiental; basados en un enfoque humanístico, inclusivo y
                                emprendedor,
                                e impulsados por un equipo docente altamente cualificado y apasionado,
                                para preparar ciudadanos capaces de innovar y contribuir a una sociedad más
                                digna y
                                sostenible.
                            </p>
                        </div>
                    </article>

                    <!-- Visión -->
                    <article class="about-card vision-card" data-aos="fade-up" data-aos-delay="200">
                        <header class="card-header">
                            <h3>VISIÓN</h3>
                        </header>
                        <div class="card-body">
                            <p class="card-description">
                                Para el 2035, el Gimnasio Humanístico del Alto Magdalena será reconocido
                                como un referente en innovación educativa, consolidado por un Proyecto Educativo
                                Institucional que ofrece una formación de excelencia. Nuestro modelo se distinguirá
                                por su enfoque humanista, inclusivo, científico, ecológico y tecnológico, que prepara
                                a las nuevas generaciones con una mentalidad
                                global y las habilidades y competencias necesarias para impactar positivamente en la
                                sociedad.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
























        <!-- Sección Oferta Académica - Niveles Educativos -->
        <section class="academic-levels-section" id="niveles-educativos" aria-labelledby="academic-title">
            <div class="academic-container">
                <!-- Header de la Sección -->
                <header class="academic-levels-header text-center mb-5">
                    <h2 id="academic-title" class="academic-levels-main-title" data-aos="fade-up">
                        Oferta Académica
                    </h2>
                    <p class="academic-levels-main-subtitle" data-aos="fade-up" data-aos-delay="200">
                        Formación académica y humanística desde los primeros años hasta la preparación universitaria,
                        para el siglo XXI.
                    </p>
                </header>

                <!-- Grid de Niveles Educativos -->
                <div class="academic-row g-4">
                    <!-- Preescolar -->
                    <div class="academic-col">
                        <article class="academic-level-card preescolar-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="academic-carousel-container" data-carousel="preescolar">
                                <div class="academic-carousel-slides">
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/educacion_inicial/imagen5.jpg') }}"
                                            alt="Niños de preescolar en actividades de aprendizaje lúdico"
                                            class="academic-level-image" loading="lazy">
                                    </div>
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/educacion_inicial/imagen4.jpg') }}"
                                            alt="Desarrollo de habilidades fundamentales en preescolar"
                                            class="academic-level-image" loading="lazy">
                                    </div>
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/educacion_inicial/sanpedrito.jpg') }}"
                                            alt="Exploración y creatividad en educación inicial"
                                            class="academic-level-image" loading="lazy">
                                    </div>
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/educacion_inicial/imagen1.jpg') }}"
                                            alt="Pensamiento crítico en preescolar" class="academic-level-image"
                                            loading="lazy">
                                    </div>
                                </div>
                                <button class="academic-carousel-nav academic-carousel-prev"
                                    aria-label="Imagen anterior">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="academic-carousel-nav academic-carousel-next"
                                    aria-label="Siguiente imagen">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                                <div class="academic-carousel-counter">
                                    <span class="academic-counter-current">1</span> / <span
                                        class="academic-counter-total">4</span>
                                </div>
                                <div class="academic-carousel-controls"></div>
                            </div>
                            <div class="academic-card-content">
                                <h3 class="academic-level-title">Educación Inicial - Preescolar</h3>
                                <p class="academic-level-description">
                                    Desarrollamos las habilidades fundamentales a través del juego,
                                    la exploración y actividades que estimulan la creatividad y el pensamiento crítico.
                                </p>
                                <a href="{{ route('preescolar') }}" class="academic-level-link"
                                    aria-label="Ver información completa sobre educación preescolar">
                                    <span>Preescolar en Neiva</span>
                                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </article>
                    </div>

                    <!-- Primaria -->
                    <div class="academic-col">
                        <article class="academic-level-card primaria-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="academic-carousel-container" data-carousel="primaria">
                                <div class="academic-carousel-slides">
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/educacion_primaria/imagen3.jpg') }}"
                                            alt="Estudiantes de primaria en aulas bilingües"
                                            class="academic-level-image" loading="lazy">
                                    </div>
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/educacion_primaria/imagen1.jpg') }}"
                                            alt="Desarrollo de competencias STEM en primaria"
                                            class="academic-level-image" loading="lazy">
                                    </div>
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/educacion_primaria/imagen9.jpg') }}"
                                            alt="Habilidades comunicativas en educación primaria"
                                            class="academic-level-image" loading="lazy">
                                    </div>
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/educacion_primaria/imagen4.jpg') }}"
                                            alt="Aprendizaje colaborativo en primaria" class="academic-level-image"
                                            loading="lazy">
                                    </div>
                                </div>
                                <button class="academic-carousel-nav academic-carousel-prev"
                                    aria-label="Imagen anterior">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="academic-carousel-nav academic-carousel-next"
                                    aria-label="Siguiente imagen">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                                <div class="academic-carousel-counter">
                                    <span class="academic-counter-current">1</span> / <span
                                        class="academic-counter-total">4</span>
                                </div>
                                <div class="academic-carousel-controls"></div>
                            </div>
                            <div class="academic-card-content">
                                <h3 class="academic-level-title">Educación Básica Primaria</h3>
                                <p class="academic-level-description">
                                    Fortalecemos las competencias comunicativas, matemáticas y científicas
                                    con metodologías activas y enfoque en el aprendizaje colaborativo.
                                </p>
                                <a href="{{ route('basica.primaria') }}" class="academic-level-link"
                                    aria-label="Ver información completa sobre educación básica primaria">
                                    <span>Educación primaria en Neiva</span>
                                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </article>
                    </div>

                    <!-- Secundaria -->
                    <div class="academic-col">
                        <article class="academic-level-card secundaria-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="academic-carousel-container" data-carousel="secundaria">
                                <div class="academic-carousel-slides">
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/educacion_secundaria/imagen1.jpg') }}"
                                            alt="Estudiantes de secundaria en proyectos de investigación"
                                            class="academic-level-image" loading="lazy">
                                    </div>
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/educacion_secundaria/imagen2.jpg') }}"
                                            alt="Desarrollo de pensamiento crítico en secundaria"
                                            class="academic-level-image" loading="lazy">
                                    </div>
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/educacion_secundaria/imagen3.jpg') }}"
                                            alt="Liderazgo estudiantil en educación secundaria"
                                            class="academic-level-image" loading="lazy">
                                    </div>
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/educacion_secundaria/imagen6.jpg') }}"
                                            alt="Proyectos interdisciplinarios en secundaria"
                                            class="academic-level-image" loading="lazy">
                                    </div>
                                </div>
                                <button class="academic-carousel-nav academic-carousel-prev"
                                    aria-label="Imagen anterior">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="academic-carousel-nav academic-carousel-next"
                                    aria-label="Siguiente imagen">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                                <div class="academic-carousel-counter">
                                    <span class="academic-counter-current">1</span> / <span
                                        class="academic-counter-total">4</span>
                                </div>
                                <div class="academic-carousel-controls"></div>
                            </div>
                            <div class="academic-card-content">
                                <h3 class="academic-level-title">Educación Básica Secundaria</h3>
                                <p class="academic-level-description">
                                    Desarrollo del pensamiento crítico y analítico a través de proyectos
                                    interdisciplinarios que preparan para los desafíos de la educación media.
                                </p>
                                <a href="{{ route('basica.secundaria') }}" class="academic-level-link"
                                    aria-label="Ver información completa sobre educación básica secundaria">
                                    <span>Segundaria en Neiva</span>
                                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </article>
                    </div>

                    <!-- Media -->
                    <div class="academic-col">
                        <article class="academic-level-card media-card" data-aos="fade-up" data-aos-delay="400">
                            <div class="academic-carousel-container" data-carousel="media">
                                <div class="academic-carousel-slides">
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/media_academica/imagen9.jpg') }}"
                                            alt="Estudiantes de media académica en preparación universitaria"
                                            class="academic-level-image" loading="lazy">
                                    </div>
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/media_academica/imagen7.jpg') }}"
                                            alt="Orientación vocacional para el proyecto de vida"
                                            class="academic-level-image" loading="lazy">
                                    </div>
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/media_academica/imagen8.jpg') }}"
                                            alt="Preparación ICFES en educación media" class="academic-level-image"
                                            loading="lazy">
                                    </div>
                                    <div class="academic-carousel-slide">
                                        <img src="{{ asset('images/iniciooo2.jpeg') }}"
                                            alt="Competencias para el siglo XXI" class="academic-level-image"
                                            loading="lazy">
                                    </div>
                                </div>
                                <button class="academic-carousel-nav academic-carousel-prev"
                                    aria-label="Imagen anterior">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="academic-carousel-nav academic-carousel-next"
                                    aria-label="Siguiente imagen">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                                <div class="academic-carousel-counter">
                                    <span class="academic-counter-current">1</span> / <span
                                        class="academic-counter-total">4</span>
                                </div>
                                <div class="academic-carousel-controls"></div>
                            </div>
                            <div class="academic-card-content">
                                <h3 class="academic-level-title">Educación Media Académica</h3>
                                <p class="academic-level-description">
                                    Preparación integral para la educación superior con énfasis en el desarrollo
                                    del proyecto de vida y competencias para el siglo XXI.
                                </p>
                                <a href="{{ route('media.academica') }}" class="academic-level-link"
                                    aria-label="Ver información completa sobre educación media académica">
                                    <span>Bachillerato en Neiva</span>
                                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>





























        <script>
            /**
             * Carrusel para Sección de Oferta Académica
             * Todas las funciones y variables tienen prefijo "Academic" para evitar conflictos
             */

            class AcademicCarousel {
                constructor(container) {
                    this.container = container;
                    this.slides = container.querySelector('.academic-carousel-slides');
                    this.slideElements = container.querySelectorAll('.academic-carousel-slide');
                    this.totalSlides = this.slideElements.length;
                    this.currentIndex = 0;
                    this.isTransitioning = false;

                    // Elementos de control
                    this.prevBtn = container.querySelector('.academic-carousel-prev');
                    this.nextBtn = container.querySelector('.academic-carousel-next');
                    this.controlsContainer = container.querySelector('.academic-carousel-controls');
                    this.counterCurrent = container.querySelector('.academic-counter-current');
                    this.counterTotal = container.querySelector('.academic-counter-total');

                    // Configuración de autoplay
                    this.autoplayInterval = null;
                    this.autoplayDelay = 4000; // 4 segundos

                    // Variables para touch
                    this.touchStartX = 0;
                    this.touchEndX = 0;
                    this.touchThreshold = 50;

                    this.init();
                }

                /**
                 * Inicializar el carrusel
                 */
                init() {
                    this.createDots();
                    this.updateCounter();
                    this.attachEvents();
                    this.startAutoplay();
                }

                /**
                 * Crear los dots de navegación
                 */
                createDots() {
                    for (let i = 0; i < this.totalSlides; i++) {
                        const dot = document.createElement('button');
                        dot.classList.add('academic-carousel-dot');
                        dot.setAttribute('aria-label', `Ir a imagen ${i + 1}`);
                        dot.setAttribute('type', 'button');

                        if (i === 0) {
                            dot.classList.add('active');
                        }

                        dot.addEventListener('click', () => {
                            this.goToSlide(i);
                            this.resetAutoplay();
                        });

                        this.controlsContainer.appendChild(dot);
                    }
                }

                /**
                 * Adjuntar eventos
                 */
                attachEvents() {
                    // Eventos de botones
                    this.prevBtn.addEventListener('click', () => {
                        this.prev();
                        this.resetAutoplay();
                    });

                    this.nextBtn.addEventListener('click', () => {
                        this.next();
                        this.resetAutoplay();
                    });

                    // Eventos de hover para autoplay
                    this.container.addEventListener('mouseenter', () => {
                        this.stopAutoplay();
                    });

                    this.container.addEventListener('mouseleave', () => {
                        this.startAutoplay();
                    });

                    // Eventos táctiles para móvil
                    this.container.addEventListener('touchstart', (e) => {
                        this.touchStartX = e.changedTouches[0].screenX;
                        this.stopAutoplay();
                    }, {
                        passive: true
                    });

                    this.container.addEventListener('touchend', (e) => {
                        this.touchEndX = e.changedTouches[0].screenX;
                        this.handleSwipe();
                        this.startAutoplay();
                    }, {
                        passive: true
                    });

                    // Eventos de teclado para accesibilidad
                    this.container.addEventListener('keydown', (e) => {
                        if (e.key === 'ArrowLeft') {
                            this.prev();
                            this.resetAutoplay();
                        } else if (e.key === 'ArrowRight') {
                            this.next();
                            this.resetAutoplay();
                        }
                    });
                }

                /**
                 * Manejar gestos de swipe
                 */
                handleSwipe() {
                    const diff = this.touchStartX - this.touchEndX;

                    if (Math.abs(diff) > this.touchThreshold) {
                        if (diff > 0) {
                            // Swipe left - siguiente
                            this.next();
                        } else {
                            // Swipe right - anterior
                            this.prev();
                        }
                    }
                }

                /**
                 * Ir a una slide específica
                 */
                goToSlide(index) {
                    if (this.isTransitioning) return;

                    this.isTransitioning = true;
                    this.currentIndex = index;

                    const offset = -index * 100;
                    this.slides.style.transform = `translateX(${offset}%)`;

                    this.updateDots();
                    this.updateCounter();

                    setTimeout(() => {
                        this.isTransitioning = false;
                    }, 600);
                }

                /**
                 * Ir a la siguiente slide
                 */
                next() {
                    const nextIndex = (this.currentIndex + 1) % this.totalSlides;
                    this.goToSlide(nextIndex);
                }

                /**
                 * Ir a la slide anterior
                 */
                prev() {
                    const prevIndex = (this.currentIndex - 1 + this.totalSlides) % this.totalSlides;
                    this.goToSlide(prevIndex);
                }

                /**
                 * Actualizar los dots activos
                 */
                updateDots() {
                    const dots = this.controlsContainer.querySelectorAll('.academic-carousel-dot');
                    dots.forEach((dot, index) => {
                        if (index === this.currentIndex) {
                            dot.classList.add('active');
                            dot.setAttribute('aria-current', 'true');
                        } else {
                            dot.classList.remove('active');
                            dot.removeAttribute('aria-current');
                        }
                    });
                }

                /**
                 * Actualizar el contador
                 */
                updateCounter() {
                    this.counterCurrent.textContent = this.currentIndex + 1;
                    this.counterTotal.textContent = this.totalSlides;
                }

                /**
                 * Iniciar autoplay
                 */
                startAutoplay() {
                    this.stopAutoplay();
                    this.autoplayInterval = setInterval(() => {
                        this.next();
                    }, this.autoplayDelay);
                }

                /**
                 * Detener autoplay
                 */
                stopAutoplay() {
                    if (this.autoplayInterval) {
                        clearInterval(this.autoplayInterval);
                        this.autoplayInterval = null;
                    }
                }

                /**
                 * Reiniciar autoplay
                 */
                resetAutoplay() {
                    this.stopAutoplay();
                    this.startAutoplay();
                }

                /**
                 * Destruir el carrusel (limpieza)
                 */
                destroy() {
                    this.stopAutoplay();
                    // Remover eventos si es necesario
                }
            }








            /**
             * Inicializar todos los carruseles cuando el DOM esté listo
             */
            (function() {
                // Variable global para almacenar las instancias
                window.academicCarousels = [];

                function initAcademicCarousels() {
                    const carouselContainers = document.querySelectorAll('.academic-carousel-container');

                    carouselContainers.forEach((container, index) => {
                        try {
                            const carousel = new AcademicCarousel(container);
                            window.academicCarousels.push(carousel);
                            console.log(`Carrusel académico ${index + 1} inicializado correctamente`);
                        } catch (error) {
                            console.error(`Error al inicializar carrusel académico ${index + 1}:`, error);
                        }
                    });
                }

                // Esperar a que el DOM esté completamente cargado
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', initAcademicCarousels);
                } else {
                    // DOM ya está listo
                    initAcademicCarousels();
                }

                // Limpiar cuando se cierre la página
                window.addEventListener('beforeunload', function() {
                    if (window.academicCarousels) {
                        window.academicCarousels.forEach(carousel => {
                            if (carousel && typeof carousel.destroy === 'function') {
                                carousel.destroy();
                            }
                        });
                    }
                });
            })();
        </script>














    </main>

    <!-- Footer -->
    <footer role="contentinfo" aria-label="Pie de página del sitio">
        @include('layouts.footer')
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Datos de las instalaciones
            const facilities = [{
                    title: "Laboratorios de Ciencias",
                    description: "Laboratorios de ciencias equipados con tecnología moderna para experimentos. Espacios diseñados para fomentar la investigación y el descubrimiento científico.",
                    image: "images/laboratorio.jpg",
                    alt: "Laboratorios de ciencias equipados con tecnología moderna"
                },
                {
                    title: "Aula De Sistemas",
                    description: "Aulas inteligentes con tecnología educativa avanzada y espacios de aprendizaje colaborativo equipadas con computadoras de última generación.",
                    image: "images/instalaciones/imagen2.jpg",
                    alt: "Aulas inteligentes con tecnología educativa avanzada"
                },
                {
                    title: "Espacios Culturales",
                    description: "Biblioteca digital con recursos multimedia y espacios de lectura modernos. Un ambiente tranquilo y estimulante para el desarrollo intelectual.",
                    image: "images/instalaciones/imagen3.jpg",
                    alt: "Biblioteca digital con recursos multimedia"
                },
                {
                    title: "Espacios Recreativos",
                    description: "Espacios deportivos y recreativos para desarrollo físico y formación integral. Instalaciones modernas que promueven la vida saludable.",
                    image: "images/instalaciones/imagen4.jpg",
                    alt: "Espacios deportivos y recreativos"
                }
            ];

            let currentIndex = 0;
            const modalOverlay = document.getElementById('modalOverlay');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalDescription = document.getElementById('modalDescription');
            const modalClose = document.getElementById('modalClose');
            const modalPrev = document.getElementById('modalPrev');
            const modalNext = document.getElementById('modalNext');
            const galleryItems = document.querySelectorAll('.gallery-item');

            // Abrir modal al hacer clic en las imágenes
            galleryItems.forEach((item, index) => {
                item.addEventListener('click', () => {
                    currentIndex = index;
                    openModal();
                });
            });

            function openModal() {
                const facility = facilities[currentIndex];
                modalImage.src = facility.image;
                modalImage.alt = facility.alt;
                modalTitle.textContent = facility.title;
                modalDescription.textContent = facility.description;
                modalOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                modalOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }

            // Eventos de cierre
            modalClose.addEventListener('click', closeModal);
            modalOverlay.addEventListener('click', (e) => {
                if (e.target === modalOverlay) {
                    closeModal();
                }
            });

            // Navegación entre imágenes
            modalPrev.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + facilities.length) % facilities.length;
                openModal();
            });

            modalNext.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % facilities.length;
                openModal();
            });

            // Control con teclado
            document.addEventListener('keydown', (e) => {
                if (!modalOverlay.classList.contains('active')) return;

                if (e.key === 'Escape') closeModal();
                if (e.key === 'ArrowLeft') {
                    currentIndex = (currentIndex - 1 + facilities.length) % facilities.length;
                    openModal();
                }
                if (e.key === 'ArrowRight') {
                    currentIndex = (currentIndex + 1) % facilities.length;
                    openModal();
                }
            });
        });
    </script>
</body>

</html>
