<!DOCTYPE html>
<html lang="es-CO">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <html lang="es-CO">
    <title>Enfoque Pedagógico Humanista | Gimnasio Humanístico del Alto Magdalena - Neiva</title>

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


    <!--Meta description SEO-->
    <meta name="description"
      content="Conoce el enfoque pedagógico del Gimnasio Humanístico del Alto Magdalena en Neiva: formación humanista, acompañamiento docente, recursos digitales, plataforma Santillana y educación integral.">


    <!-- Scripts -->
    <script src="{{ asset('js/hero.js') }}" defer></script>

    <!-- CSS personalizado -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css')}}" rel="stylesheet">
    <link href="{{ asset('css/enfoque_pedagogico.css')}}" rel="stylesheet">


     @verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://gimnasiohumanisticoaltomagdalena.com/enfoque-pedagogico",
  "name": "Enfoque Pedagógico",
  "description": "Enfoque pedagógico del Gimnasio Humanístico del Alto Magdalena, basado en formación integral, valores humanistas, recursos digitales, plataforma Santillana y material pedagógico especializado.",
  "url": "https://gimnasiohumanisticoaltomagdalena.com/enfoque-pedagogico",
  "inLanguage": "es-CO",
  "isPartOf": {
    "@type": "EducationalOrganization",
    "@id": "https://gimnasiohumanisticoaltomagdalena.com/#school",
    "name": "Gimnasio Humanístico del Alto Magdalena"
  },
  "about": [
    {
      "@type": "Thing",
      "name": "Enfoque pedagógico institucional",
      "description": "Modelo educativo basado en formación humanista, acompañamiento docente y uso de recursos pedagógicos innovadores."
    },
    {
      "@type": "Thing",
      "name": "Educación integral",
      "description": "Desarrollo académico, humano y en valores para niños y jóvenes."
    }
  ],
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://gimnasiohumanisticoaltomagdalena.com/images/educacion_secundaria/imagen1.jpg",
    "caption": "Enfoque pedagógico del Gimnasio Humanístico del Alto Magdalena"
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
    
    <main id="main">

        <!-- HERO -->
        <section class="hero-section" aria-label="Educación Inicial y Preescolar en Neiva">
            <div class="hero-background">
                <img src="{{ asset('images/educacion_secundaria/imagen1.jpg') }}"
                    alt="Instalaciones del colegio en Neiva enfocadas en educación inicial y preescolar" width="1920"
                    height="1080" loading="lazy">
            </div>

            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Nuestra Identidad Institucional">
                       Enfoque Pedagógico Humanista del Gimnasio Humanístico

                    </h1>

                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Ir a contenido principal" onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>

                <!-- INTRODUCCIÓN ENFOQUE PEDAGÓGICO -->
        <section id="siguiente_sesion" class="pedagogia-intro">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        
                        <h2 class="intro-title">
                            ENFOQUE INSTITUCINAL
                        </h2>
                        <p class="intro-description">
                            Integramos recursos digitales y material
                            especializado con acompañamiento docente para un aprendizaje integral y con valores.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN 1: PLATAFORMA DIGITAL -->
        <section class="pedagogia-bloque">
            <div class="container">
                <div class="row align-items-center gy-4">
                    
                    <!-- Contenido -->
                    <div class="col-lg-6">
                        <span class="bloque-etiqueta">PLATAFORMA EDUCATIVA</span>
                        <h3 class="bloque-titulo">Santillana Compartir</h3>
                        <p class="bloque-descripcion">
                            Ecosistema digital que fortalece la enseñanza mediante recursos interactivos,
                            evaluación continua y seguimiento académico en tiempo real, facilitando
                            una experiencia educativa dinámica y estructurada.
                        </p>

                        <ul class="bloque-lista">
                            <li>
                                <i class="fas fa-book-open"></i>
                                Libros digitales interactivos y multimedia
                            </li>
                            <li>
                                <i class="fas fa-laptop"></i>
                                Actividades digitales y tareas guiadas
                            </li>
                            <li>
                                <i class="fas fa-chart-line"></i>
                                Seguimiento del progreso académico
                            </li>
                            <li>
                                <i class="fas fa-users"></i>
                                Espacios de trabajo colaborativo
                            </li>
                        </ul>
                    </div>

                    <!-- Imagen -->
                    <div class="col-lg-6">
                        <div class="bloque-imagen imagen-compacta">

                            <img src="{{ asset('/images/santillana2.webp') }}" alt="Plataforma Digital Santillana Compartir">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECCIÓN 2: KIT ESCOLAR -->

        
        <section class="pedagogia-bloque pedagogia-alterno">
            <div class="container">
                <div class="row align-items-stretch gy-4 flex-lg-row-reverse">

                    <!-- Contenido -->
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <span class="bloque-etiqueta">RECURSOS PEDAGÓGICOS</span>
                        <h3 class="bloque-titulo">Kit Escolar Especializado</h3>
                        <p class="bloque-descripcion">
                            Complementamos el aprendizaje digital con material físico diseñado bajo
                            estándares editoriales internacionales, fortaleciendo las competencias
                            académicas a través de la práctica estructurada.
                        </p>

                        <div class="kit-componentes">
                            <div class="kit-item">
                                <span class="kit-numero">01</span>
                                <div>
                                    <h4>Libros Santillana</h4>
                                    <p>Contenido actualizado y alineado al currículo nacional</p>
                                </div>
                            </div>

                            <div class="kit-item">
                                <span class="kit-numero">02</span>
                                <div>
                                    <h4>Cartilla Integrada</h4>
                                    <p>Consolidación de cinco áreas fundamentales</p>
                                </div>
                            </div>

                            <div class="kit-item">
                                <span class="kit-numero">03</span>
                                <div>
                                    <h4>Cuadernos Especializados</h4>
                                    <p>Refuerzo práctico para el desarrollo de habilidades</p>
                                </div>
                            </div>
                        </div>

                        <div class="materias">
                            <span>Matemáticas</span>
                            <span>Lengua Castellana</span>
                            <span>Ciencias Naturales</span>
                            <span>Sociales</span>
                            <span>Inglés</span>
                        </div>
                    </div>

                    <!-- Imagen más alta para balancear -->
                    <div class="col-lg-6">
                        <div class="bloque-imagen imagen-extendida">
                            <img src="{{ asset('/images/libros.jpg') }}" alt="Kit Escolar Especializado">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('layouts.footer')

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>