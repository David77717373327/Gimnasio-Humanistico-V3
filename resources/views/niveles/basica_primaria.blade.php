<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educación Básica Primaria en Neiva | Gimnasio Humanístico</title>
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


    <!-- Meta descripción SEO-->
    <meta name="description"
        content="Educación básica primaria en Neiva con enfoque humanista. Formación académica integral basada en valores, convivencia y desarrollo del pensamiento. Gimnasio Humanístico del Alto Magdalena.">

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
  "@type": "EducationalOccupationalProgram",
  "name": "Educación Básica Primaria",
  "description": "Programa de educación básica primaria del Gimnasio Humanístico del Alto Magdalena en Neiva, orientado al desarrollo académico, humanístico y social.",
  "educationalLevel": "Educación Básica Primaria",
  "provider": {
    "@type": "EducationalOrganization",
    "name": "Gimnasio Humanístico del Alto Magdalena",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Neiva",
      "addressRegion": "Huila",
      "addressCountry": "CO"
    }
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
        <section class="hero-section" aria-label="Educación Básica Primaria en Neiva">
            <div class="hero-background">
                <img src="{{ asset('images/educacion_primaria/imagen2.jpg') }}"
                    alt="Instalaciones del colegio en Neiva enfocadas en educación básica primaria" width="1920"
                    height="1080" loading="lazy">
            </div>

            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Nuestra Identidad Institucional">
                        Educación Básica Primaria en Neiva
                    </h1>

                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Ir a contenido principal" onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>











        <!-- Título SEO -->
        <header class="admision-nav-header" id="siguiente_sesion">
            <h2 class="admision-nav-title">Educación Básica Primaria en Neiva</h2>
        </header>


        <div class="objetivos-split-container">
            <!-- Panel de Navegación -->
            <div class="objetivos-nav-panel">

                <!-- Valores y Ciudadanía -->
                <div class="objetivos-nav-item active" data-category="valores">
                    <div class="objetivos-nav-number">01</div>
                    <div class="objetivos-nav-content">
                        <div class="objetivos-nav-title">Valores y Ciudadanía</div>
                        <div class="objetivos-nav-subtitle">4 objetivos</div>
                    </div>
                </div>

                <!-- Desarrollo Académico -->
                <div class="objetivos-nav-item" data-category="academico">
                    <div class="objetivos-nav-number">02</div>
                    <div class="objetivos-nav-content">
                        <div class="objetivos-nav-title">Desarrollo Académico</div>
                        <div class="objetivos-nav-subtitle">7 objetivos</div>
                    </div>
                </div>

                <!-- Desarrollo Físico -->
                <div class="objetivos-nav-item" data-category="fisico">
                    <div class="objetivos-nav-number">03</div>
                    <div class="objetivos-nav-content">
                        <div class="objetivos-nav-title">Desarrollo Físico</div>
                        <div class="objetivos-nav-subtitle">3 objetivos</div>
                    </div>
                </div>

                <!-- Habilidades Sociales -->
                <div class="objetivos-nav-item" data-category="sociales">
                    <div class="objetivos-nav-number">04</div>
                    <div class="objetivos-nav-content">
                        <div class="objetivos-nav-title">Habilidades Sociales</div>
                        <div class="objetivos-nav-subtitle">1 objetivo</div>
                    </div>
                </div>
            </div>

            <!-- Panel de Contenido -->
            <div class="objetivos-content-panel">

                <!-- VALORES Y CIUDADANÍA -->
                <!-- Objetivo 1 -->
                <div class="objetivos-content-item active" data-category="valores" data-index="0">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">01</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Valores para la Convivencia</h4>
                            <p class="objetivos-content-category">Valores y Ciudadanía • 1 de 4</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        La formación de los valores fundamentales para la convivencia de una sociedad democrática,
                        participativa y pluralista.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Este objetivo busca desarrollar en los estudiantes las bases éticas y morales necesarias para
                            vivir en armonía con otros, respetando la diversidad y promoviendo el diálogo como
                            herramienta de resolución de conflictos.</p>
                    </div>
                </div>

                <!-- Objetivo 2 -->
                <div class="objetivos-content-item" data-category="valores" data-index="1">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">02</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Valores Cívicos y Morales</h4>
                            <p class="objetivos-content-category">Valores y Ciudadanía • 2 de 4</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        El desarrollo de valores civiles y morales de organización social y de convivencia humana.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Fomenta la comprensión de las normas sociales y el desarrollo de una consciencia ciudadana
                            responsable desde temprana edad.</p>
                    </div>
                </div>

                <!-- Objetivo 3 -->
                <div class="objetivos-content-item" data-category="valores" data-index="2">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">03</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Educación Constitucional</h4>
                            <p class="objetivos-content-category">Valores y Ciudadanía • 3 de 4</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        La iniciación en el conocimiento de la constitución política.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Introduce a los estudiantes en los principios fundamentales que rigen nuestra sociedad y sus
                            derechos como ciudadanos.</p>
                    </div>
                </div>

                <!-- Objetivo 4 -->
                <div class="objetivos-content-item" data-category="valores" data-index="3">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">04</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Participación Infantil</h4>
                            <p class="objetivos-content-category">Valores y Ciudadanía • 4 de 4</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        La formación para la participación y organización infantil y la utilización adecuada del tiempo
                        libre.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Desarrolla habilidades de liderazgo, trabajo en equipo y gestión del tiempo desde la
                            infancia.</p>
                    </div>
                </div>

                <!-- DESARROLLO ACADÉMICO -->
                <!-- Objetivo 5 -->
                <div class="objetivos-content-item" data-category="academico" data-index="0">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">01</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Deseo de Saber</h4>
                            <p class="objetivos-content-category">Desarrollo Académico • 1 de 7</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        El fomento del deseo del saber, de la iniciativa personal frente al conocimiento y frente a la
                        realidad social, así como el espíritu crítico.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Cultiva la curiosidad intelectual y el pensamiento crítico, herramientas esenciales para el
                            aprendizaje continuo.</p>
                    </div>
                </div>

                <!-- Objetivo 6 -->
                <div class="objetivos-content-item" data-category="academico" data-index="1">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">02</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Habilidades Comunicativas</h4>
                            <p class="objetivos-content-category">Desarrollo Académico • 2 de 7</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        El desarrollo de las habilidades comunicativas básicas para leer, comprender, escribir,
                        escuchar, hablar y expresarse correctamente en lengua castellana, así como el fomento de la
                        afición por la lectura.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>La comunicación efectiva es la base de todas las interacciones humanas y el aprendizaje
                            académico.</p>
                    </div>
                </div>

                <!-- Objetivo 7 -->
                <div class="objetivos-content-item" data-category="academico" data-index="2">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">03</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Expresión Estética</h4>
                            <p class="objetivos-content-category">Desarrollo Académico • 3 de 7</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        El desarrollo de la capacidad para apreciar y utilizar la lengua como medio de expresión
                        estética.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Fomenta la creatividad y la sensibilidad artística a través del lenguaje.</p>
                    </div>
                </div>

                <!-- Objetivo 8 -->
                <div class="objetivos-content-item" data-category="academico" data-index="3">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">04</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Pensamiento Matemático</h4>
                            <p class="objetivos-content-category">Desarrollo Académico • 4 de 7</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        El desarrollo de los conocimientos matemáticos necesarios para manejar y utilizar operaciones
                        simples de cálculo y procedimientos lógicos elementales en diferentes situaciones, así como la
                        capacidad para solucionar problemas que impliquen conocimientos.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Las matemáticas desarrollan el razonamiento lógico y la capacidad de resolver problemas de
                            manera sistemática.</p>
                    </div>
                </div>

                <!-- Objetivo 9 -->
                <div class="objetivos-content-item" data-category="academico" data-index="4">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">05</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Comprensión del Medio</h4>
                            <p class="objetivos-content-category">Desarrollo Académico • 5 de 7</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        La comprensión básica del medio físico, social y cultural en el nivel local, nacional y
                        universal, de acuerdo con el desarrollo intelectual correspondiente a su edad.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Permite a los estudiantes entender su entorno y su lugar en el mundo.</p>
                    </div>
                </div>

                <!-- Objetivo 10 -->
                <div class="objetivos-content-item" data-category="academico" data-index="5">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">06</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Asimilación de Conceptos</h4>
                            <p class="objetivos-content-category">Desarrollo Académico • 6 de 7</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        La asimilación de conceptos en áreas del conocimiento que sean objeto de estudio, de acuerdo con
                        el desarrollo intelectual y la edad.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Garantiza una comprensión profunda de los contenidos adaptados a cada etapa del desarrollo.
                        </p>
                    </div>
                </div>

                <!-- Objetivo 11 -->
                <div class="objetivos-content-item" data-category="academico" data-index="6">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">07</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Lengua Extranjera</h4>
                            <p class="objetivos-content-category">Desarrollo Académico • 7 de 7</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        La adquisición de elementos de conversación y de lectura al menos en una lengua extranjera.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Abre puertas al mundo globalizado y desarrolla habilidades cognitivas adicionales.</p>
                    </div>
                </div>

                <!-- DESARROLLO FÍSICO -->
                <!-- Objetivo 12 -->
                <div class="objetivos-content-item" data-category="fisico" data-index="0">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">01</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Salud y Cuidado Personal</h4>
                            <p class="objetivos-content-category">Desarrollo Físico • 1 de 3</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        La valoración de la higiene y la salud del propio cuerpo y la formación para la protección de la
                        naturaleza y el ambiente.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Establece hábitos saludables y consciencia ambiental desde temprana edad.</p>
                    </div>
                </div>

                <!-- Objetivo 13 -->
                <div class="objetivos-content-item" data-category="fisico" data-index="1">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">02</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Educación Física y Deportes</h4>
                            <p class="objetivos-content-category">Desarrollo Físico • 2 de 3</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        El conocimiento y ejercitación del propio cuerpo mediante la práctica de la educación física, la
                        recreación y los deportes adecuados a su edad y conducentes a un desarrollo físico armónico.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Promueve el desarrollo físico integral y la disciplina deportiva.</p>
                    </div>
                </div>

                <!-- Objetivo 14 -->
                <div class="objetivos-content-item" data-category="fisico" data-index="2">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">03</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Formación Artística</h4>
                            <p class="objetivos-content-category">Desarrollo Físico • 3 de 3</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        La formación artística mediante la expresión corporal, la representación, la música, la plástica
                        y la literatura.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Desarrolla la creatividad y la sensibilidad artística a través de múltiples lenguajes
                            expresivos.</p>
                    </div>
                </div>

                <!-- HABILIDADES SOCIALES -->
                <!-- Objetivo 15 -->
                <div class="objetivos-content-item" data-category="sociales" data-index="0">
                    <div class="objetivos-content-header">
                        <div class="objetivos-content-number">01</div>
                        <div class="objetivos-content-title-group">
                            <h4 class="objetivos-item-title">Autonomía Personal</h4>
                            <p class="objetivos-content-category">Habilidades Sociales • 1 de 1</p>
                        </div>
                    </div>
                    <p class="objetivos-content-text">
                        La adquisición de habilidades para desempeñarse con autonomía en la sociedad.
                    </p>
                    <div class="objetivos-content-highlight">
                        <h5>¿Por qué es importante?</h5>
                        <p>Prepara a los estudiantes para ser independientes y tomar decisiones responsables.</p>
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




        <!-- GALERÍA -->
        <section aria-label="Galería de momentos especiales en la educación básica primaria en Neiva">
            <header class="gallery-header">
                <h2 class="gallery-title">Momentos Especiales</h2>
                <p class="gallery-subtitle">
                    Actividades y experiencias de aprendizaje en la educación básica primaria.
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
                        <img src="{{ asset('images/educacion_primaria/imagen7.jpg') }}"
                            alt="Niños jugando en el aula del primaria de Neiva" loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(1)">
                        <img src="{{ asset('images/educacion_primaria/imagen2.jpg') }}"
                            alt="Actividades creativas para primera infancia" loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(2)">
                        <img src="{{ asset('images/educacion_primaria/imagen1.jpg') }}"
                            alt="Aprendizaje colaborativo en primaria" loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(3)">
                        <img src="{{ asset('images/educacion_primaria/imagen8.jpg') }}"
                            alt="Exploración educativa al aire libre" loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(4)">
                        <img src="{{ asset('images/educacion_primaria/imagen4.jpg') }}"
                            alt="Juego libre y diversión en el colegio" loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(5)">
                        <img src="{{ asset('images/educacion_primaria/imagen9.jpg') }}"
                            alt="Desarrollo integral y acompañamiento docente" loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(6)">
                        <img src="{{ asset('images/educacion_primaria/imagen3.jpg') }}"
                            alt="Momentos de aprendizaje diario" loading="lazy">
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
                    src: 'images/educacion_primaria/imagen7.jpg',
                    alt: 'Niños jugando en el aula del primaria de Neiva'
                },
                {
                    src: 'images/educacion_primaria/imagen2.jpg',
                    alt: 'Actividades creativas para primera infancia'
                },
                {
                    src: 'images/educacion_primaria/imagen1.jpg',
                    alt: 'Aprendizaje colaborativo en primaria'
                },
                {
                    src: 'images/educacion_primaria/imagen8.jpg',
                    alt: 'Exploración educativa al aire libre'
                },
                {
                    src: 'images/educacion_primaria/imagen4.jpg',
                    alt: 'Juego libre y diversión en el colegio'
                },
                {
                    src: 'images/educacion_primaria/imagen9.jpg',
                    alt: 'Desarrollo integral y acompañamiento docente'
                },
                {
                    src: 'images/educacion_primaria/imagen3.jpg',
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

                let currentCategory = 'valores';
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

                // Inicializar
                showContent('valores', 0);
            });

            function scrollToContent() {
                document.getElementById('siguiente_sesion').scrollIntoView({
                    behavior: 'smooth'
                });
            }
        </script>










        <!-- Incluir el footer -->
        @include('layouts.footer')

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
