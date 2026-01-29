<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Descubre la historia del Gimnasio Humanístico del Alto Magdalena desde 1983 en Neiva. Más de 40 años formando líderes con excelencia académica y valores humanísticos.">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0d3f27">
    <title>Historia | Gimnasio Humanístico del Alto Magdalena - Neiva</title>
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://gimnasiohumanisticoaltomagdalena.com/historia">

    <!-- Preconnect para optimización de fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--Scrip para el hero --> 
    <script src="{{ asset('js/hero.js') }}"></script>
    
    
    <!-- Google Fonts con preload opcional -->
    <link rel="preload"
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&display=swap"
        as="style">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap y Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">


    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.png') }}">


    <!-- CSS personalizado -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quienes_somos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navegacion.css') }}" rel="stylesheet">


    @verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Gimnasio Humanístico del Alto Magdalena",
  "foundingDate": "1983",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Neiva",
    "addressRegion": "Huila",
    "addressCountry": "CO"
  },
  "areaServed": "Neiva, Huila",
  "description": "Colegio privado en Neiva con más de 40 años de trayectoria en educación humanista."
}
</script>
@endverbatim
</head>

<body>

    <header class="header-top" aria-label="Encabezado principal del sitio">
        @include('layouts.header') <!-- AQUÍ SOLO LOGO, TITULO -->
    </header>

    <nav class="nav-sticky" aria-label="Navegación principal">
        @include('layouts.navigation') <!-- AQUÍ SOLO EL MENU -->
    </nav>

    <!-- Contenido principal -->
    <main id="main">

        <!-- HERO SECTION -->
        <section class="hero-section" aria-label="Sección destacada de historia">
            <div class="hero-background">
                <img src="{{ asset('images/politica_de_calidad4.webp') }}"
                    alt="Vista del Gimnasio Humanístico del Alto Magdalena, institución educativa en Neiva"
                    width="1920" height="1080">
            </div>
            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Nuestra Historia">Historia del Gimnasio Humanístico Neiva</h1>
                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Desplazarse a la siguete sesion"
                        onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- TIMELINE HISTÓRICA -->
        <section class="timeline-section" id="siguiente_sesion" role="region" aria-labelledby="timeline-heading">
            <!-- Heading invisible para accesibilidad -->
            <h2 id="timeline-heading" class="visually-hidden">Línea de tiempo histórica del Gimnasio Humanístico</h2>

            <div class="timeline-container">
                <div class="timeline">

                    <!-- Bola verde inicial -->
                    <div class="timeline-start" aria-hidden="true">
                        <div class="timeline-start-circle"></div>
                    </div>

                    <!-- Item 1: 1983 -->
                    <article class="timeline-item">
                        <div class="timeline-year-marker" aria-hidden="true">
                            <div class="year-circle">
                                <span class="year-text">1983</span>
                            </div>
                            <div class="timeline-marker"></div>
                        </div>

                        <div class="timeline-content-wrapper">
                            <div class="timeline-arrow" aria-hidden="true"></div>
                            <div class="timeline-content">
                                <div class="timeline-header-bar">
                                    <span class="timeline-year-display">1983</span>
                                </div>
                                <div class="timeline-images">
                                    <div class="timeline-image-item">
                                        <img src="{{ asset('images/historia/imagen1.jpg') }}"
                                            alt="Fundación del Gimnasio Humanístico en 1983 por la familia Cristancho Higuera en Neiva"
                                            width="400" height="250" loading="lazy">
                                    </div>
                                </div>
                                <div class="timeline-text-content">
                                    <p class="timeline-text">
                                        El 15 de mayo de 1983, la institución fue fundada con el nombre de "Colegio
                                        Bilingüe
                                        de la Sagrada Eucaristía" por la familia Cristancho Higuera. Sus primeros
                                        propietarios, Don Eduardo Cristancho y Doña Graciela Higuera, establecieron la
                                        sede
                                        inicial en la carrera 16 No 3-14 del barrio El Altico, bajo la rectoría de la
                                        profesional en educación Alma Helena Cristancho. Esta fundación marcó el inicio
                                        de
                                        lo que sería una trayectoria educativa excepcional en la ciudad de Neiva, con el
                                        compromiso de brindar educación bilingüe de calidad desde sus primeros años.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item 2: 1989-1991 -->
                    <article class="timeline-item">
                        <div class="timeline-year-marker" aria-hidden="true">
                            <div class="year-circle">
                                <span class="year-text">1989</span>
                            </div>
                            <div class="timeline-marker"></div>
                        </div>

                        <div class="timeline-content-wrapper">
                            <div class="timeline-arrow" aria-hidden="true"></div>
                            <div class="timeline-content">
                                <div class="timeline-header-bar">
                                    <span class="timeline-year-display">1989-1991</span>
                                </div>
                                <div class="timeline-images">
                                    <div class="timeline-image-item">
                                        <img src="{{ asset('images/historia/imagen10.jpg') }}"
                                            alt="Período de transición institucional entre 1989 y 1991" width="400"
                                            height="250" loading="lazy">
                                    </div>
                                </div>
                                <div class="timeline-text-content">
                                    <p class="timeline-text">
                                        Tras el sensible fallecimiento del jefe de familia Don Eduardo Cristancho en
                                        1989,
                                        la institución enfrentó un período de incertidumbre. La familia tomó la difícil
                                        decisión de poner el colegio en venta en mayo de 1991. Este momento crucial en
                                        la
                                        historia institucional representó tanto el final de una era como el inicio de
                                        nuevas
                                        oportunidades que llegarían con la visión renovadora de nuevos líderes
                                        educativos
                                        comprometidos con la excelencia académica y la formación integral.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item 3: 1991 -->
                    <article class="timeline-item">
                        <div class="timeline-year-marker" aria-hidden="true">
                            <div class="year-circle">
                                <span class="year-text">1991</span>
                            </div>
                            <div class="timeline-marker"></div>
                        </div>

                        <div class="timeline-content-wrapper">
                            <div class="timeline-arrow" aria-hidden="true"></div>
                            <div class="timeline-content">
                                <div class="timeline-header-bar">
                                    <span class="timeline-year-display">1991</span>
                                </div>
                                <div class="timeline-images">
                                    <div class="timeline-image-item">
                                        <img src="{{ asset('images/historia/imagen9.jpg') }}"
                                            alt="Renacimiento del colegio en 1991 con nueva dirección y nombre Gimnasio Humanístico"
                                            width="400" height="250" loading="lazy">
                                    </div>
                                </div>
                                <div class="timeline-text-content">
                                    <p class="timeline-text">
                                        En un momento crucial, la Dra. Diana Patricia Cristancho de Iriarte, profesora
                                        de la
                                        Universidad Surcolombiana, decidió adquirir el colegio con el objetivo de
                                        materializar su visión pedagógica. Esta nueva etapa trajo consigo una
                                        transformación
                                        profunda con el cambio de nombre a "Gimnasio Humanístico del Alto Magdalena",
                                        propuesto por el Magister Antonio Iriarte Cadena. Este nombre reflejaba un nuevo
                                        enfoque centrado en los valores humanos, la naturaleza y la identidad regional,
                                        marcando el inicio de la era humanística que caracterizaría la institución.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item 4: 1991-1996 -->
                    <article class="timeline-item">
                        <div class="timeline-year-marker" aria-hidden="true">
                            <div class="year-circle">
                                <span class="year-text">1991</span>
                            </div>
                            <div class="timeline-marker"></div>
                        </div>

                        <div class="timeline-content-wrapper">
                            <div class="timeline-arrow" aria-hidden="true"></div>
                            <div class="timeline-content">
                                <div class="timeline-header-bar">
                                    <span class="timeline-year-display">1991-1996</span>
                                </div>
                                <div class="timeline-images">
                                    <div class="timeline-image-item">
                                        <img src="{{ asset('images/historia/imagen5.jpg') }}"
                                            alt="Modernización pedagógica y tecnológica del Gimnasio Humanístico entre 1991 y 1996"
                                            width="400" height="250" loading="lazy">
                                    </div>
                                </div>
                                <div class="timeline-text-content">
                                    <p class="timeline-text">
                                        Durante este período se implementó una modernización pedagógica y tecnológica
                                        sin
                                        precedentes. Se adoptó una visión educativa inspirada en pensadores como
                                        Gramsci,
                                        Piaget, Freinet y Dewey, modernizando laboratorios y adquiriendo equipos de
                                        informática. La institución se trasladó a una sede más amplia en la calle 6B No
                                        14-55, con zonas de recreación y espacios adecuados. En 1992, la Secretaría de
                                        Educación otorgó una calificación excepcional de 9.38 sobre 10, reconociendo la
                                        alta
                                        calidad de los procesos educativos. Se crearon proyectos de servicio comunitario
                                        como la Escuela de Padres, el Club de Abuelitos y el Programa de apoyo a madres
                                        cabeza de familia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item 5: 1994-1996 -->
                    <article class="timeline-item">
                        <div class="timeline-year-marker" aria-hidden="true">
                            <div class="year-circle">
                                <span class="year-text">1994</span>
                            </div>
                            <div class="timeline-marker"></div>
                        </div>

                        <div class="timeline-content-wrapper">
                            <div class="timeline-arrow" aria-hidden="true"></div>
                            <div class="timeline-content">
                                <div class="timeline-header-bar">
                                    <span class="timeline-year-display">1994-1996</span>
                                </div>
                                <div class="timeline-images">
                                    <div class="timeline-image-item">
                                        <img src="{{ asset('images/historia/imagen4.jpg') }}"
                                            alt="Implementación de la Ley General de Educación y proyectos innovadores 1994-1996"
                                            width="400" height="250" loading="lazy">
                                    </div>
                                </div>
                                <div class="timeline-text-content">
                                    <p class="timeline-text">
                                        En respuesta a la Ley General de Educación (1994), la institución implementó
                                        cambios
                                        curriculares significativos, incluyendo proyectos innovadores de medio ambiente,
                                        educación
                                        sexual y democracia.
                                        Durante este período también se creó el proyecto "Desarrollo y Estimulación de
                                        la
                                        Inteligencia D.E.I."
                                        específicamente diseñado para estudiantes con talentos especiales, demostrando
                                        el compromiso
                                        institucional con la atención a la
                                        diversidad y el desarrollo del potencial individual de cada estudiante. Estos
                                        avances
                                        posicionaron al colegio como
                                        pionero en la implementación de metodologías pedagógicas innovadoras en la
                                        región.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item 6: 1997-2011 -->
                    <article class="timeline-item">
                        <div class="timeline-year-marker" aria-hidden="true">
                            <div class="year-circle">
                                <span class="year-text">1997</span>
                            </div>
                            <div class="timeline-marker"></div>
                        </div>

                        <div class="timeline-content-wrapper">
                            <div class="timeline-arrow" aria-hidden="true"></div>
                            <div class="timeline-content">
                                <div class="timeline-header-bar">
                                    <span class="timeline-year-display">1997-2011</span>
                                </div>
                                <div class="timeline-images">
                                    <div class="timeline-image-item">
                                        <img src="{{ asset('images/historia/imagen3.jpg') }}"
                                            alt="Consolidación de infraestructura educativa entre 1997 y 2011"
                                            width="400" height="250" loading="lazy">
                                    </div>
                                </div>
                                <div class="timeline-text-content">
                                    <p class="timeline-text">
                                        Durante estos años, la institución se enfocó continuamente en mejorar su planta
                                        física,
                                        reubicando estratégicamente las sedes de preescolar y primaria para optimizar
                                        los procesos
                                        educativos. Este período estuvo marcado por la búsqueda constante de espacios
                                        más adecuados
                                        que permitieran
                                        brindar una educación de calidad en condiciones óptimas. Finalmente, se logró
                                        adquirir una
                                        sede ideal para
                                        secundaria en la calle 11 número 6-37, consolidando la infraestructura necesaria
                                        para el
                                        crecimiento y
                                        desarrollo institucional que se avecinaba en la siguiente década.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item 7: 2007-2009 -->
                    <article class="timeline-item">
                        <div class="timeline-year-marker" aria-hidden="true">
                            <div class="year-circle">
                                <span class="year-text">2007</span>
                            </div>
                            <div class="timeline-marker"></div>
                        </div>

                        <div class="timeline-content-wrapper">
                            <div class="timeline-arrow" aria-hidden="true"></div>
                            <div class="timeline-content">
                                <div class="timeline-header-bar">
                                    <span class="timeline-year-display">2007-2009</span>
                                </div>
                                <div class="timeline-images">
                                    <div class="timeline-image-item">
                                        <img src="{{ asset('images/historia/imagen2.jpg') }}"
                                            alt="Adopción del modelo de calidad EFQM en el Gimnasio Humanístico 2007-2009"
                                            width="400" height="250" loading="lazy">
                                    </div>
                                </div>
                                <div class="timeline-text-content">
                                    <p class="timeline-text">
                                        En 2007, la psicóloga Silvia Cristina Ruiz Campos asumió la rectoría, marcando
                                        el inicio
                                        de una nueva era enfocada en la calidad total. A partir de 2009, la institución
                                        adoptó el
                                        modelo de
                                        calidad EFQM (European Foundation for Quality Management), iniciando un
                                        compromiso formal y
                                        sistemático con la
                                        excelencia educativa y la mejora continua. Esta decisión estratégica posicionó
                                        al Gimnasio
                                        Humanístico como
                                        pionero en la región en la implementación de sistemas de gestión de calidad
                                        internacional,
                                        estableciendo
                                        estándares elevados que beneficiarían a toda la comunidad educativa.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item 8: 2012 -->
                    <article class="timeline-item">
                        <div class="timeline-year-marker" aria-hidden="true">
                            <div class="year-circle">
                                <span class="year-text">2012</span>
                            </div>
                            <div class="timeline-marker"></div>
                        </div>

                        <div class="timeline-content-wrapper">
                            <div class="timeline-arrow" aria-hidden="true"></div>
                            <div class="timeline-content">
                                <div class="timeline-header-bar">
                                    <span class="timeline-year-display">2012</span>
                                </div>
                                <div class="timeline-images">
                                    <div class="timeline-image-item">
                                        <img src="{{ asset('images/historia/imagen7.jpg') }}"
                                            alt="Inauguración de nueva sede propia del Gimnasio Humanístico en 2012"
                                            width="400" height="250" loading="lazy">
                                    </div>
                                </div>
                                <div class="timeline-text-content">
                                    <p class="timeline-text">
                                        Un hito fundamental se alcanzó en julio de 2012, cuando la comunidad educativa
                                        estrenó
                                        su nueva sede propia en la calle 13 # 4-53. Este edificio moderno, construido
                                        bajo las
                                        normas técnicas
                                        colombianas (NTC), se consolidó como un espacio seguro, funcional y
                                        tecnológicamente
                                        avanzado que materializó
                                        la visión institucional de ofrecer educación de calidad en instalaciones
                                        óptimas. La sede
                                        propia representó no
                                        solo un logro infraestructural, sino también la consolidación de la estabilidad
                                        y proyección
                                        a largo
                                        plazo del proyecto educativo humanístico.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item 9: 2020-2021 -->
                    <article class="timeline-item">
                        <div class="timeline-year-marker" aria-hidden="true">
                            <div class="year-circle">
                                <span class="year-text">2020</span>
                            </div>
                            <div class="timeline-marker"></div>
                        </div>

                        <div class="timeline-content-wrapper">
                            <div class="timeline-arrow" aria-hidden="true"></div>
                            <div class="timeline-content">
                                <div class="timeline-header-bar">
                                    <span class="timeline-year-display">2020-2021</span>
                                </div>
                                <div class="timeline-images">
                                    <div class="timeline-image-item">
                                        <img src="{{ asset('images/historia/imagen8.jpg') }}"
                                            alt="Transformación digital educativa durante la pandemia COVID-19 en 2020-2021"
                                            width="400" height="250" loading="lazy">
                                    </div>
                                </div>
                                <div class="timeline-text-content">
                                    <p class="timeline-text">
                                        En marzo de 2020, ante el desafío global sin precedentes de la pandemia por
                                        COVID-19, el
                                        colegio demostró su extraordinaria capacidad de adaptación implementando de
                                        manera inmediata
                                        y efectiva
                                        la educación virtual. Se realizaron inversiones significativas en la adquisición
                                        de software
                                        y hardware
                                        especializado, garantizando la continuidad del proceso educativo sin comprometer
                                        la calidad.
                                        En marzo de 2021, la
                                        institución logró el retorno exitoso a la presencialidad bajo el modelo de
                                        alternancia,
                                        estableciendo
                                        protocolos de bioseguridad rigurosos y manteniendo la excelencia académica que
                                        siempre ha
                                        caracterizado al Gimnasio
                                        Humanístico.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item 10: 2023-2024 -->
                    <article class="timeline-item">
                        <div class="timeline-year-marker" aria-hidden="true">
                            <div class="year-circle">
                                <span class="year-text">2023</span>
                            </div>
                            <div class="timeline-marker"></div>
                        </div>

                        <div class="timeline-content-wrapper">
                            <div class="timeline-arrow" aria-hidden="true"></div>
                            <div class="timeline-content">
                                <div class="timeline-header-bar">
                                    <span class="timeline-year-display">2023-2024</span>
                                </div>
                                <div class="timeline-images">
                                    <div class="timeline-image-item">
                                        <img src="{{ asset('images/historia/imagen6.jpg') }}"
                                            alt="Actualización del Proyecto Educativo Institucional PEI 2023-2024"
                                            width="400" height="250" loading="lazy">
                                    </div>
                                </div>
                                <div class="timeline-text-content">
                                    <p class="timeline-text">
                                        En 2023, se realizó una nueva actualización integral del Proyecto Educativo
                                        Institucional (PEI) y se sistematizó la valiosa experiencia de inclusión
                                        educativa acumulada
                                        a lo largo de los
                                        años. En 2024, una comisión especializada y comprometida se encargó de
                                        reconceptualizar y
                                        actualizar
                                        completamente el PEI, reafirmando el compromiso inquebrantable de la institución
                                        con la
                                        excelencia educativa,
                                        la pertinencia curricular y la adaptación a las normativas legales más
                                        recientes. Después de
                                        más de
                                        cuatro décadas de trayectoria, el Gimnasio Humanístico del Alto Magdalena
                                        continúa
                                        evolucionando y
                                        proyectándose hacia el futuro, manteniendo su esencia humanística mientras
                                        abraza la
                                        innovación y el cambio.
                                    </p>
                                </div>
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

    <!-- Footer del sitio -->
    <footer aria-label="Pie de página del sitio">
        @include('layouts.footer')
    </footer>

    

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
