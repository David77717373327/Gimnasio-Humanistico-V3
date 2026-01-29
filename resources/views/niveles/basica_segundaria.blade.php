<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educación Básica Secundaria | Gimnasio Humanístico del Alto Magdalena - Neiva</title>
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




    <!--Meta descripción para SEO-->
    <meta name="description"
      content="Educación Básica Secundaria en Neiva en el Gimnasio Humanístico del Alto Magdalena. Formación académica integral, científica y humanística para estudiantes de secundaria.">


    <!-- Scripts -->
    <script src="{{ asset('js/hero.js') }}" defer></script>

    <!-- CSS personalizado -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/basica_primaria.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/galeria.css') }}" rel="stylesheet">


    @verbatim
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "EducationalOrganization",
    "name": "Gimnasio Humanístico del Alto Magdalena",
    "url": "https://gimnasiohumanisticoaltomagdalena.com",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Neiva",
      "addressRegion": "Huila",
      "addressCountry": "CO"
    },
    "educationalLevel": "Educación Básica Secundaria"
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
        <section class="hero-section" aria-label="Educación Básica Secundaria en Neiva">
            <div class="hero-background">
                <img src="{{ asset('images/educacion_secundaria/imagen11.jpg') }}"
                    alt="Educación básica secundaria en Neiva en el Gimnasio Humanístico del Alto Magdalena" width="1920"
                    height="1080" loading="lazy">
            </div>

            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Nuestra Identidad Institucional">
                        Educación Básica Secundaria en Neiva
                    </h1>

                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Ir a contenido principal" onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>













<section>
        <!-- Título SEO -->
<header class="admision-nav-header" id="siguiente_sesion">
    <h2 class="admision-nav-title">Objetivos Básica Secundaria</h2>
</header>


<div class="objetivos-split-container">
    <!-- Panel de Navegación -->
    <div class="objetivos-nav-panel">

        <!-- Comunicación y Expresión -->
        <div class="objetivos-nav-item active" data-category="comunicacion">
            <div class="objetivos-nav-number">01</div>
            <div class="objetivos-nav-content">
                <div class="objetivos-nav-title">Comunicación y Expresión</div>
                <div class="objetivos-nav-subtitle">3 objetivos</div>
            </div>
        </div>

        <!-- Desarrollo Científico y Tecnológico -->
        <div class="objetivos-nav-item" data-category="cientifico">
            <div class="objetivos-nav-number">02</div>
            <div class="objetivos-nav-content">
                <div class="objetivos-nav-title">Desarrollo Científico y Tecnológico</div>
                <div class="objetivos-nav-subtitle">5 objetivos</div>
            </div>
        </div>

        <!-- Formación Social y Ciudadana -->
        <div class="objetivos-nav-item" data-category="social">
            <div class="objetivos-nav-number">03</div>
            <div class="objetivos-nav-content">
                <div class="objetivos-nav-title">Formación Social y Ciudadana</div>
                <div class="objetivos-nav-subtitle">4 objetivos</div>
            </div>
        </div>

        <!-- Desarrollo Integral y Bienestar -->
        <div class="objetivos-nav-item" data-category="integral">
            <div class="objetivos-nav-number">04</div>
            <div class="objetivos-nav-content">
                <div class="objetivos-nav-title">Desarrollo Integral y Bienestar</div>
                <div class="objetivos-nav-subtitle">3 objetivos</div>
            </div>
        </div>
    </div>

    <!-- Panel de Contenido -->
    <div class="objetivos-content-panel">

        <!-- COMUNICACIÓN Y EXPRESIÓN -->
        <!-- Objetivo 1 -->
        <div class="objetivos-content-item active" data-category="comunicacion" data-index="0">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">01</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Competencia Comunicativa</h4>
                    <p class="objetivos-content-category">Comunicación y Expresión • 1 de 3</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                El desarrollo de la capacidad para comprender textos y expresar correctamente mensajes
                complejos, orales y escritos en lengua castellana, así como para entender mediante un estudio
                sistemático los diferentes elementos constitutivos de la lengua.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>La competencia comunicativa es fundamental para el pensamiento crítico y la expresión
                    efectiva de ideas complejas, habilidades esenciales en la vida académica y profesional.</p>
            </div>
        </div>

        <!-- Objetivo 2 -->
        <div class="objetivos-content-item" data-category="comunicacion" data-index="1">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">02</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Expresión Literaria</h4>
                    <p class="objetivos-content-category">Comunicación y Expresión • 2 de 3</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                La valoración de la lengua castellana como medio de expresión literaria y el estudio de la
                creación literaria en el país y en el mundo.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>La apreciación literaria desarrolla la sensibilidad cultural, el pensamiento analítico y la
                    capacidad de expresión creativa, conectando a los estudiantes con su patrimonio cultural y
                    el legado literario universal.</p>
            </div>
        </div>

        <!-- Objetivo 3 -->
        <div class="objetivos-content-item" data-category="comunicacion" data-index="2">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">03</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Lengua Extranjera</h4>
                    <p class="objetivos-content-category">Comunicación y Expresión • 3 de 3</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                La comprensión y la capacidad de expresarse en lengua extranjera.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>El dominio de una lengua extranjera abre oportunidades educativas y profesionales globales,
                    además de desarrollar habilidades cognitivas avanzadas y comprensión intercultural.</p>
            </div>
        </div>

        <!-- DESARROLLO CIENTÍFICO Y TECNOLÓGICO -->
        <!-- Objetivo 4 -->
        <div class="objetivos-content-item" data-category="cientifico" data-index="0">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">01</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Razonamiento Lógico-Matemático</h4>
                    <p class="objetivos-content-category">Desarrollo Científico y Tecnológico • 1 de 5</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                El desarrollo de las capacidades para el razonamiento lógico, mediante el dominio de los
                sistemas numéricos, geométricos, métricos, lógicos, analíticos, de conjuntos, de operaciones y
                relaciones, así como para su utilización en la solución de los problemas de la ciencia, de la
                tecnología y de la vida cotidiana.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>El razonamiento lógico-matemático es la base del pensamiento científico y tecnológico,
                    permitiendo resolver problemas complejos de manera sistemática y eficiente.</p>
            </div>
        </div>

        <!-- Objetivo 5 -->
        <div class="objetivos-content-item" data-category="cientifico" data-index="1">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">02</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Conocimiento Científico</h4>
                    <p class="objetivos-content-category">Desarrollo Científico y Tecnológico • 2 de 5</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                El avance en el conocimiento científico de los fenómenos físicos, químicos y biológicos,
                mediante la comprensión de las leyes, el planteamiento de los problemas y la observación
                experimental.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>La comprensión científica desarrolla el pensamiento crítico y la capacidad de analizar el
                    mundo natural mediante el método científico, fundamental para la innovación y el progreso.
                </p>
            </div>
        </div>

        <!-- Objetivo 6 -->
        <div class="objetivos-content-item" data-category="cientifico" data-index="2">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">03</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Tecnología y Práctica</h4>
                    <p class="objetivos-content-category">Desarrollo Científico y Tecnológico • 3 de 5</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                La iniciativa en los campos más avanzados de la tecnología moderna y el entrenamiento en
                disciplinas, procesos y técnicas que les permitan el ejercicio de una función socialmente útil.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>La formación tecnológica prepara a los estudiantes para un mundo en constante cambio,
                    desarrollando habilidades prácticas que les permiten contribuir significativamente a la
                    sociedad.</p>
            </div>
        </div>

        <!-- Objetivo 7 -->
        <div class="objetivos-content-item" data-category="cientifico" data-index="3">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">04</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Teoría y Práctica</h4>
                    <p class="objetivos-content-category">Desarrollo Científico y Tecnológico • 4 de 5</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                La comprensión de la dimensión práctica de los conocimientos teóricos, así como la dimensión
                teórica del conocimiento práctico y la capacidad para utilizarla en la solución de problemas.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>La integración entre teoría y práctica asegura que el aprendizaje sea significativo y
                    aplicable, desarrollando competencias para resolver problemas reales.</p>
            </div>
        </div>

        <!-- Objetivo 8 -->
        <div class="objetivos-content-item" data-category="cientifico" data-index="4">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">05</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Búsqueda de Conocimiento</h4>
                    <p class="objetivos-content-category">Desarrollo Científico y Tecnológico • 5 de 5</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                La utilización con sentido crítico de los distintos contenidos y formas de información y la
                búsqueda de nuevos conocimientos con su propio esfuerzo.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>Fomenta el aprendizaje autónomo y permanente, desarrollando la capacidad de investigar,
                    evaluar fuentes y construir conocimiento de manera independiente.</p>
            </div>
        </div>

        <!-- FORMACIÓN SOCIAL Y CIUDADANA -->
        <!-- Objetivo 9 -->
        <div class="objetivos-content-item" data-category="social" data-index="0">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">01</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Historia y Sociedad</h4>
                    <p class="objetivos-content-category">Formación Social y Ciudadana • 1 de 4</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                El estudio científico de la historia nacional y mundial dirigida a comprender el desarrollo de
                la sociedad y el estudio de las ciencias sociales, con miras al análisis de las condiciones
                actuales de la realidad social.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>Comprender la historia permite entender el presente y tomar decisiones informadas sobre el
                    futuro, desarrollando consciencia social y pensamiento crítico sobre la realidad
                    contemporánea.</p>
            </div>
        </div>

        <!-- Objetivo 10 -->
        <div class="objetivos-content-item" data-category="social" data-index="1">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">02</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Geografía y Cultura Mundial</h4>
                    <p class="objetivos-content-category">Formación Social y Ciudadana • 2 de 4</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                El estudio científico del universo, de la tierra, de su estructura física, de su división y
                organización política, del desarrollo económico de los países y de las diferentes
                manifestaciones culturales de los pueblos.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>El conocimiento geográfico y cultural desarrolla una visión global del mundo, promoviendo el
                    respeto intercultural y la comprensión de la interdependencia entre naciones.</p>
            </div>
        </div>

        <!-- Objetivo 11 -->
        <div class="objetivos-content-item" data-category="social" data-index="2">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">03</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Formación Constitucional</h4>
                    <p class="objetivos-content-category">Formación Social y Ciudadana • 3 de 4</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                La formación en el ejercicio de sus deberes y derechos, el conocimiento de la constitución
                política y de las relaciones internacionales.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>Formar ciudadanos conscientes de sus derechos y deberes es fundamental para fortalecer la
                    democracia y promover una participación activa y responsable en la sociedad.</p>
            </div>
        </div>

        <!-- Objetivo 12 -->
        <div class="objetivos-content-item" data-category="social" data-index="3">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">04</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Conservación Ambiental</h4>
                    <p class="objetivos-content-category">Formación Social y Ciudadana • 4 de 4</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                El desarrollo de actitudes favorables al conocimiento, valoración y conservación de la
                naturaleza y el ambiente.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>La consciencia ambiental es crucial para la sostenibilidad del planeta, formando ciudadanos
                    responsables con el medio ambiente y comprometidos con su preservación.</p>
            </div>
        </div>

        <!-- DESARROLLO INTEGRAL Y BIENESTAR -->
        <!-- Objetivo 13 -->
        <div class="objetivos-content-item" data-category="integral" data-index="0">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">01</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Formación Artística</h4>
                    <p class="objetivos-content-category">Desarrollo Integral y Bienestar • 1 de 3</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                La apreciación artística, la comprensión estética, la creatividad, la familiarización con los
                diferentes medios de expresión artística y el conocimiento, valoración y respeto por los bienes
                artísticos y culturales.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>La formación artística desarrolla la sensibilidad, la creatividad y la expresión personal,
                    enriqueciendo la vida emocional y cultural de los estudiantes.</p>
            </div>
        </div>

        <!-- Objetivo 14 -->
        <div class="objetivos-content-item" data-category="integral" data-index="1">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">02</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Salud y Bienestar</h4>
                    <p class="objetivos-content-category">Desarrollo Integral y Bienestar • 2 de 3</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                La valoración de la salud y de los hábitos relacionados con ella.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>La valoración de la salud establece las bases para un estilo de vida saludable y el bienestar
                    integral a lo largo de toda la vida.</p>
            </div>
        </div>

        <!-- Objetivo 15 -->
        <div class="objetivos-content-item" data-category="integral" data-index="2">
            <div class="objetivos-content-header">
                <div class="objetivos-content-number">03</div>
                <div class="objetivos-content-title-group">
                    <h4 class="objetivos-item-title">Desarrollo Físico y Recreación</h4>
                    <p class="objetivos-content-category">Desarrollo Integral y Bienestar • 3 de 3</p>
                </div>
            </div>
            <p class="objetivos-content-text">
                La educación física y la práctica de la recreación y los deportes, la participación y
                organización juvenil y la utilización adecuada del tiempo libre.
            </p>
            <div class="objetivos-content-highlight">
                <h5>¿Por qué es importante?</h5>
                <p>El desarrollo físico y la recreación promueven hábitos saludables, trabajo en equipo,
                    disciplina y el aprovechamiento constructivo del tiempo libre, contribuyendo al desarrollo
                    integral de la personalidad.</p>
            </div>
        </div>

        <!-- Navegación entre objetivos -->
        <div class="objetivos-content-navigation">
            <button class="objetivos-nav-btn objetivos-prev" id="objetivosPrevBtn">
                ← Anterior
            </button>
            <button class="objetivos-nav-btn objetivos-next" id="objetivosNextBtn">
                Siguiente →
            </button>
        </div>
    </div>
</div>
</section>






















        <!-- GALERÍA -->
        <section aria-label="Galería de actividades de educación básica secundaria en Neiva">
            <header class="gallery-header">
                <h2 class="gallery-title">Momentos Especiales</h2>
                <p class="gallery-subtitle">
                    Actividades y experiencias que viven nuestros estudiantes de educación básica secundaria.
                </p>
            </header>

            <!-- Modal Lightbox -->
            <div class="lightbox" id="lightbox">
                <button class="lightbox-close" onclick="closeLightbox()" aria-label="Cerrar galería">&times;</button>
                <button class="lightbox-nav lightbox-prev" onclick="changeImage(-1)"
                    aria-label="Imagen anterior">&#10094;</button>

                <div class="lightbox-content">
                    <img id="lightbox-img" src="" alt="Imagen ampliada">
                </div>

                <button class="lightbox-nav lightbox-next" onclick="changeImage(1)"
                    aria-label="Siguiente imagen">&#10095;</button>
            </div>

            <!-- GRID -->
            <div class="gallery-container">
                <div class="gallery-grid">

                    <article class="gallery-item" onclick="openLightbox(0)">
                        <img src="{{ asset('images/educacion_secundaria/imagen5.jpg') }}"
                            alt="Estudiantes de educación básica secundaria en actividades académicas" loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(1)">
                        <img src="{{ asset('images/educacion_secundaria/imagen3.jpg') }}"
                            alt="Estudiantes de educación básica secundaria en actividades académicas" loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(2)">
                        <img src="{{ asset('images/educacion_secundaria/imagen2.jpg') }}"
                            alt="Aprendizaje colaborativo en educación básica secundaria Neiva" loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(3)">
                        <img src="{{ asset('images/educacion_secundaria/imagen11.jpg') }}" alt="Exploración educativa en el aula"
                            loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(4)">
                        <img src="{{ asset('images/educacion_secundaria/imagen1.jpg') }}" alt="Juego libre y diversión en el colegio"
                            loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(5)">
                        <img src="{{ asset('images/educacion_secundaria/imagen6.jpg') }}"
                            alt="Desarrollo integral y acompañamiento docente" loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(6)">
                        <img src="{{ asset('images/educacion_secundaria/imagen10.jpg') }}" alt="Momentos de aprendizaje diario"
                            loading="lazy">
                    </article>
                </div>
            </div>
        </section>










        <script>
             // ============================================
            // NAVEGACIÓN CON CONTROLES - 1 CARD A LA VEZ
            // ============================================

            document.addEventListener('DOMContentLoaded', function() {
                // Solo ejecutar en móviles y tablets
                if (window.innerWidth <= 1023) {
                    initializeNavControls();
                }

                // Re-inicializar en resize
                window.addEventListener('resize', function() {
                    if (window.innerWidth <= 1023) {
                        initializeNavControls();
                    } else {
                        removeNavControls();
                    }
                });
            });

            function initializeNavControls() {
                const navPanel = document.querySelector('.objetivos-nav-panel');

                if (!navPanel) return;

                // Verificar si ya existen los controles
                if (document.querySelector('.objetivos-nav-arrow-left')) return;

                // Crear wrapper si no existe
                let wrapper = navPanel.parentElement;
                if (!wrapper.classList.contains('objetivos-nav-wrapper')) {
                    wrapper = document.createElement('div');
                    wrapper.className = 'objetivos-nav-wrapper';
                    navPanel.parentNode.insertBefore(wrapper, navPanel);
                    wrapper.appendChild(navPanel);
                }

                // Crear flecha izquierda
                const arrowLeft = document.createElement('div');
                arrowLeft.className = 'objetivos-nav-arrow-left';
                arrowLeft.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
        </svg>
    `;

                // Crear flecha derecha
                const arrowRight = document.createElement('div');
                arrowRight.className = 'objetivos-nav-arrow-right';
                arrowRight.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
        </svg>
    `;

                // Insertar flechas
                wrapper.appendChild(arrowLeft);
                wrapper.appendChild(arrowRight);

                // Obtener ancho de una card completa (incluyendo gap)
                function getCardWidth() {
                    const card = navPanel.querySelector('.objetivos-nav-item');
                    if (!card) return 0;

                    const cardStyle = window.getComputedStyle(card);
                    const cardWidth = card.offsetWidth;
                    const gap = parseFloat(window.getComputedStyle(navPanel).gap) || 0;

                    return cardWidth + gap;
                }

                // Funcionalidad de scroll - SCROLL DE 1 CARD COMPLETA
                arrowLeft.addEventListener('click', function() {
                    const scrollAmount = getCardWidth();
                    navPanel.scrollBy({
                        left: -scrollAmount,
                        behavior: 'smooth'
                    });
                });

                arrowRight.addEventListener('click', function() {
                    const scrollAmount = getCardWidth();
                    navPanel.scrollBy({
                        left: scrollAmount,
                        behavior: 'smooth'
                    });
                });

                // Actualizar visibilidad de flechas
                function updateArrows() {
                    const scrollLeft = navPanel.scrollLeft;
                    const maxScroll = navPanel.scrollWidth - navPanel.clientWidth;

                    // Flecha izquierda
                    if (scrollLeft <= 10) {
                        arrowLeft.classList.remove('visible');
                    } else {
                        arrowLeft.classList.add('visible');
                    }

                    // Flecha derecha
                    if (scrollLeft >= maxScroll - 10) {
                        arrowRight.classList.add('hidden');
                    } else {
                        arrowRight.classList.remove('hidden');
                    }
                }

                // Escuchar scroll
                navPanel.addEventListener('scroll', updateArrows);

                // Actualizar al inicio
                updateArrows();

                // Actualizar después de un momento (por si hay animaciones)
                setTimeout(updateArrows, 100);
            }

            function removeNavControls() {
                const arrows = document.querySelectorAll('.objetivos-nav-arrow-left, .objetivos-nav-arrow-right');
                arrows.forEach(arrow => arrow.remove());
            }



            // Array con todas las imágenes de la galería (7 imágenes)
            const galleryImages = [{
                    src: 'images/educacion_secundaria/imagen5.jpg',
                    alt: 'Estudiantes de educación básica secundaria en actividades académicas'
                },
                {
                    src: 'images/educacion_secundaria/imagen3.jpg',
                    alt: 'Estudiantes de educación básica secundaria en actividades académicas'
                },
                {
                    src: 'images/educacion_secundaria/imagen2.jpg',
                    alt: 'Aprendizaje colaborativo en educación básica secundaria Neiva'
                },
                {
                    src: 'images/educacion_secundaria/imagen11.jpg',
                    alt: 'Estudiantes de educación básica secundaria en actividades académicas'
                },
                {
                    src: 'images/educacion_secundaria/imagen1.jpg',
                    alt: 'Juego libre y diversión en el colegio'
                },
                {
                    src: 'images/educacion_secundaria/imagen6.jpg',
                    alt: 'Desarrollo integral y acompañamiento docente'
                },
                {
                    src: 'images/educacion_secundaria/imagen10.jpg',
                    alt: 'Momentos de aprendizaje diario'
                }
            ];

            let currentImageIndex = 0;

            // Mostrar u ocultar flechas según posición
            function updateArrows() {
                const prevBtn = document.querySelector('.lightbox-prev');
                const nextBtn = document.querySelector('.lightbox-next');

                // Primera imagen → esconder flecha izquierda
                prevBtn.style.display = currentImageIndex === 0 ? "none" : "block";

                // Última imagen → esconder flecha derecha
                nextBtn.style.display = currentImageIndex === galleryImages.length - 1 ? "none" : "block";
            }

            // Abrir lightbox
            function openLightbox(index) {
                currentImageIndex = index;

                const lightbox = document.getElementById('lightbox');
                const lightboxImg = document.getElementById('lightbox-img');

                lightboxImg.src = galleryImages[index].src;
                lightboxImg.alt = galleryImages[index].alt;
                lightbox.classList.add('active');

                updateArrows(); // Actualizar flechas al abrir

                document.body.style.overflow = 'hidden';
            }

            // Cerrar lightbox
            function closeLightbox() {
                document.getElementById('lightbox').classList.remove('active');
                document.body.style.overflow = 'auto';
            }

            // Cambiar imagen sin bucle infinito
            function changeImage(direction) {
                currentImageIndex += direction;

                // Limitar índices
                if (currentImageIndex < 0) currentImageIndex = 0;
                if (currentImageIndex >= galleryImages.length)
                    currentImageIndex = galleryImages.length - 1;

                const lightboxImg = document.getElementById('lightbox-img');

                lightboxImg.style.opacity = '0';

                setTimeout(() => {
                    lightboxImg.src = galleryImages[currentImageIndex].src;
                    lightboxImg.alt = galleryImages[currentImageIndex].alt;
                    lightboxImg.style.opacity = '1';
                }, 200);

                updateArrows(); // Actualizar flechas cada vez que cambias imagen
            }

            // Cerrar con tecla ESC y navegar con flechas
            document.addEventListener('keydown', function(e) {
                const lightbox = document.getElementById('lightbox');

                if (e.key === 'Escape') closeLightbox();

                if (lightbox.classList.contains('active')) {
                    if (e.key === 'ArrowLeft') changeImage(-1);
                    if (e.key === 'ArrowRight') changeImage(1);
                }
            });

            // Cerrar al hacer clic fuera de la imagen
            document.getElementById('lightbox').addEventListener('click', function(e) {
                if (e.target === this) closeLightbox();
            });

            // Prevenir cierres al hacer clic en botones
            document.querySelector('.lightbox-close').addEventListener('click', e => e.stopPropagation());
            document.querySelector('.lightbox-prev').addEventListener('click', e => e.stopPropagation());
            document.querySelector('.lightbox-next').addEventListener('click', e => e.stopPropagation());

            // Transición suave
            document.getElementById('lightbox-img').style.transition = 'opacity 0.3s ease';










            document.addEventListener('DOMContentLoaded', function() {
                const navItems = document.querySelectorAll('.objetivos-nav-item');
                const contentItems = document.querySelectorAll('.objetivos-content-item');
                const prevBtn = document.getElementById('objetivosPrevBtn');
                const nextBtn = document.getElementById('objetivosNextBtn');

                let currentCategory = 'comunicacion'; // ✅ CORREGIDO: era 'valores'
                let currentIndex = 0;
                let isTransitioning = false;

                function getObjectivesByCategory(category) {
                    return Array.from(contentItems).filter(item =>
                        item.getAttribute('data-category') === category
                    );
                }

                function showContent(category, index) {
                    if (isTransitioning) return;
                    isTransitioning = true;

                    const categoryObjectives = getObjectivesByCategory(category);

                    // Paso 1: Agregar clase fade-out al contenido actual
                    contentItems.forEach(item => {
                        if (item.classList.contains('active')) {
                            item.classList.add('fade-out');
                        }
                    });

                    // Paso 2: Esperar que termine la animación de salida (300ms)
                    setTimeout(() => {
                        // Remover todas las clases active y fade-out
                        contentItems.forEach(item => {
                            item.classList.remove('active');
                            item.classList.remove('fade-out');
                        });

                        // Paso 3: Mostrar el nuevo contenido
                        if (categoryObjectives[index]) {
                            categoryObjectives[index].classList.add('active');
                        }

                        // Actualizar botones
                        prevBtn.disabled = index === 0;
                        nextBtn.disabled = index === categoryObjectives.length - 1;

                        // Scroll suave al inicio
                        document.querySelector('.objetivos-content-panel').scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });

                        // Actualizar variables
                        currentCategory = category;
                        currentIndex = index;

                        // Permitir nuevas transiciones después de que termine la animación de entrada
                        setTimeout(() => {
                            isTransitioning = false;
                        }, 400);

                    }, 300);
                }

                navItems.forEach((item) => {
                    item.addEventListener('click', function() {
                        if (isTransitioning) return;

                        const category = this.getAttribute('data-category');

                        navItems.forEach(nav => nav.classList.remove('active'));
                        this.classList.add('active');

                        showContent(category, 0);
                    });
                });

                prevBtn.addEventListener('click', function() {
                    if (currentIndex > 0 && !isTransitioning) {
                        showContent(currentCategory, currentIndex - 1);
                    }
                });

                nextBtn.addEventListener('click', function() {
                    const categoryObjectives = getObjectivesByCategory(currentCategory);
                    if (currentIndex < categoryObjectives.length - 1 && !isTransitioning) {
                        showContent(currentCategory, currentIndex + 1);
                    }
                });

                // ✅ CORREGIDO: Inicializar con 'comunicacion' en lugar de 'valores'
                showContent('comunicacion', 0);
            });

            function scrollToContent() {
                document.getElementById('siguiente_sesion').scrollIntoView({
                    behavior: 'smooth'
                });
            }
        </script>
    </main>

    <!-- Incluir el footer -->
    @include('layouts.footer')

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
