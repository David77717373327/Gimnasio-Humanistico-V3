<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description"
        content="Conoce los principios y valores del Gimnasio Humanístico del Alto Magdalena, colegio en Neiva, basados en la formación humanista, excelencia académica, ciudadanía activa y sostenibilidad.">
    <meta name="keywords"
        content="Principios institucionales, Valores educativos, Gimnasio Humanístico, Educación humanista, Excelencia académica, Valores católicos, Democracia escolar, Formación integral">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principios y Valores del Gimnasio Humanístico | Colegio en Neiva</title>


    <!-- URL canónica -->
    <link rel="canonical" href="https://gimnasiohumanisticoaltomagdalena.com/principios-valores">

    <meta property="og:url" content="https://gimnasiohumanisticoaltomagdalena.com/principios-valores">


    <!-- Open Graph -->
    <meta property="og:title" content="Principios y Valores - Gimnasio Humanístico del Alto Magdalena">
    <meta property="og:description"
        content="Conoce los principios y valores que forman la identidad del Gimnasio Humanístico del Alto Magdalena.">
    <meta property="og:image" content="https://gimnasiohumanisticoaltomagdalena.com/images/consejo_directivo.jpg">
    <meta property="og:type" content="website">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Principios y Valores - Gimnasio Humanístico del Alto Magdalena">
    <meta name="twitter:description"
        content="Principios institucionales que guían la formación humanista, académica y espiritual.">
    <meta name="twitter:image" content="https://gimnasiohumanisticoaltomagdalena.com/images/consejo_directivo.jpg">

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

    <!-- Script del hero -->
    <script src="{{ asset('js/hero.js') }}"></script>

    <!-- CSS personalizado -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/principios_y_valores.css') }}" rel="stylesheet">
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
  "description": "Colegio en Neiva con formación humanista basada en principios éticos, excelencia académica y valores institucionales.",
  "educationalLevel": ["Preescolar", "Educación Básica", "Media Académica"]
}
</script>
    @endverbatim

</head>

<body>

    <!-- ENCABEZADO GLOBAL -->
    <header class="header-top" aria-label="Encabezado principal del sitio">
        @include('layouts.header')
    </header>

    <!-- MENÚ PRINCIPAL -->
    <nav class="nav-sticky" aria-label="Navegación principal">
        @include('layouts.navigation')
    </nav>

    <!-- CONTENIDO PRINCIPAL DEL SITIO -->
    <main>

        <!-- HERO SECTION -->
        <section class="hero-section" aria-label="Sección principal de presentación">

            <!-- h2 oculto SOLO para SEO -->
            <h2 class="visually-hidden">Principios y valores institucionales del Gimnasio Humanístico</h2>

            <div class="hero-background">
                <img src="{{ asset('images/educacion_secundaria/imagen2.jpg') }}"
                    alt="Instalaciones del Gimnasio Humanístico del Alto Magdalena, institución educativa ubicada en Neiva, Colombia"
                    width="1920" height="1080" fetchpriority="high" loading="eager">
            </div>

            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Nuestra Identidad">
                        Principios y Valores del Gimnasio Humanístico del Alto Magdalena
                    </h1>
                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Desplazarse a la siguiente sección"
                        onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECCIÓN PRINCIPIOS -->
        <section class="principios-section" id="siguiente_sesion">
            <div class="container-fluid principios-container-custom">

                <!-- Encabezado general de la sección -->
                <header class="principios-header">
                    <h2 class="principios-main-title">Principios del Colegio</h2>
                    <p class="principios-intro">
                        Los principios institucionales del Gimnasio Humanístico representan los pilares fundamentales
                        que orientan nuestra labor educativa y definen nuestra identidad como institución comprometida
                        con la formación integral.
                        <br><br>
                        A través de estos cinco principios construimos un proyecto educativo que prepara a nuestros
                        estudiantes para los desafíos del mundo contemporáneo, formando ciudadanos íntegros, libres,
                        críticos y comprometidos con la transformación positiva de la sociedad.
                    </p>
                </header>

                <!-- NAVEGACIÓN INTERNA DE PRINCIPIOS -->
                <nav class="principios-navigation" aria-label="Navegación de principios institucionales">
                    <button class="principio-tab active" data-principio="vision">
                        Visión Compartida y Propósito Transformador
                    </button>
                    <button class="principio-tab" data-principio="ciudadania">
                        Ciudadanía Activa y Sostenibilidad
                    </button>
                    <button class="principio-tab" data-principio="crecimiento">
                        Crecimiento Personal y Relacional
                    </button>
                    <button class="principio-tab" data-principio="excelencia">
                        Excelencia Académica e Innovación
                    </button>
                    <button class="principio-tab" data-principio="libertad">
                        Libertad y Sentido de Trascendencia
                    </button>
                </nav>

                <!-- CONTENIDO DE CADA PRINCIPIO -->
                <div class="principios-content">

                    <!-- 1. Visión compartida -->
                    <article class="principio-item active" id="principio-vision">
                        <div class="principio-grid">
                            <div class="principio-card">
                                <h3 class="principio-subtitle">Identidad y Propósito Claro</h3>
                                <p class="principio-text">
                                    Nos movemos por la convicción de ofrecer una educación de la más alta calidad,
                                    inclusiva, emprendedora y humanista, alineada con los desafíos globales. Nuestro
                                    lema:
                                    <strong>“Nos educamos en el trabajo humanizante para un nuevo país”</strong>,
                                    expresa nuestro compromiso con la formación de seres humanos libres y responsables.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- 2. Ciudadanía activa -->
                    <article class="principio-item" id="principio-ciudadania">
                        <div class="principio-grid">

                            <div class="principio-card">
                                <h3 class="principio-subtitle">Participación Democrática</h3>
                                <p class="principio-text">
                                    Fomentamos la democracia escolar mediante la participación activa en órganos de
                                    decisión,
                                    promoviendo la construcción de un entorno justo y equitativo.
                                </p>
                            </div>

                            <div class="principio-card">
                                <h3 class="principio-subtitle">Conciencia Ambiental y Sostenibilidad</h3>
                                <p class="principio-text">
                                    Promovemos respeto por la naturaleza y prácticas sostenibles que inviten a la
                                    protección
                                    del planeta y la responsabilidad ecológica.
                                </p>
                            </div>

                            <div class="principio-card">
                                <h3 class="principio-subtitle">Transformación Social y Convivencia</h3>
                                <p class="principio-text">
                                    Impulsamos el pensamiento crítico y acciones transformadoras para fortalecer la
                                    convivencia
                                    y construir comunidades solidarias.
                                </p>
                            </div>

                        </div>
                    </article>

                    <!-- 3. Crecimiento personal -->
                    <article class="principio-item" id="principio-crecimiento">
                        <div class="principio-grid">
                            <div class="principio-card">
                                <h3 class="principio-subtitle">Bienestar y Relaciones Humanas</h3>
                                <p class="principio-text">
                                    Fomentamos un ambiente cálido basado en el respeto y la empatía, priorizando el
                                    bienestar
                                    emocional y físico.
                                </p>
                            </div>

                            <div class="principio-card">
                                <h3 class="principio-subtitle">Autonomía y Autorregulación</h3>
                                <p class="principio-text">
                                    Impulsamos la autodisciplina y la autodirección como pilares del aprendizaje
                                    autónomo y
                                    del desarrollo personal.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- 4. Excelencia académica -->
                    <article class="principio-item" id="principio-excelencia">
                        <div class="principio-grid">

                            <div class="principio-card">
                                <h3 class="principio-subtitle">Curiosidad, Investigación y Creatividad</h3>
                                <p class="principio-text">
                                    Priorizamos el pensamiento crítico, la investigación y la creatividad para promover
                                    soluciones innovadoras.
                                </p>
                            </div>

                            <div class="principio-card">
                                <h3 class="principio-subtitle">Desarrollo Pleno de Potencialidades</h3>
                                <p class="principio-text">
                                    Valoramos la diversidad de inteligencias y talentos, estimulando su desarrollo
                                    integral.
                                </p>
                            </div>

                            <div class="principio-card">
                                <h3 class="principio-subtitle">Cultura de Mejora Continua</h3>
                                <p class="principio-text">
                                    Entendemos la evaluación como herramienta para fortalecer procesos educativos y
                                    mejorar
                                    continuamente.
                                </p>
                            </div>

                            <div class="principio-card">
                                <h3 class="principio-subtitle">Búsqueda de la Excelencia</h3>
                                <p class="principio-text">
                                    Promovemos el desarrollo de las máximas capacidades humanas para aportar
                                    significativamente
                                    al progreso científico y social.
                                </p>
                            </div>

                        </div>
                    </article>

                    <!-- 5. Libertad -->
                    <article class="principio-item" id="principio-libertad">
                        <div class="principio-grid">

                            <div class="principio-card">
                                <h3 class="principio-subtitle">Libertad y Autenticidad</h3>
                                <p class="principio-text">
                                    Buscamos formar seres humanos libres, íntegros y plenos, capaces de desarrollar todo
                                    su
                                    potencial personal y profesional.
                                </p>
                            </div>

                            <div class="principio-card">
                                <h3 class="principio-subtitle">Espiritualidad y Sentido de Vida</h3>
                                <p class="principio-text">
                                    Promovemos la reflexión espiritual desde los valores católicos, fortaleciendo la
                                    búsqueda
                                    de sentido y trascendencia.
                                </p>
                            </div>

                        </div>
                    </article>
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

    <script>
        // Funcionalidad de navegación de principios
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.principio-tab');
            const items = document.querySelectorAll('.principio-item');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const principioId = this.getAttribute('data-principio');

                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');

                    items.forEach(item => item.classList.remove('active'));

                    setTimeout(() => {
                        const targetItem = document.getElementById('principio-' +
                            principioId);
                        if (targetItem) {
                            targetItem.classList.add('active');

                            if (window.innerWidth <= 768) {
                                targetItem.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'nearest'
                                });
                            }
                        }
                    }, 150);
                });
            });
        });
    </script>
</body>

</html>
