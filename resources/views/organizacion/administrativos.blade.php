<!DOCTYPE html>
<html lang="es-CO">

<head>
    <!-- 🧠 SEO BÁSICO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo Administrativo | Gimnasio Humanístico del Alto Magdalena - Neiva</title>
    
    <!-- 📝 META DESCRIPTION (SEO) -->
    <meta name="description"
        content="Conoce al equipo administrativo del Gimnasio Humanístico: Jefe Administrativo, Contador, Secretaria Académica, Pagador-Tesorero, Maestra de Apoyo y Servicios Generales. Profesionales que garantizan calidad, transparencia y bienestar institucional.">

    <!-- 🔑 PALABRAS CLAVE -->
    <meta name="keywords"
        content="equipo administrativo, Gimnasio Humanístico, talento humano, administración educativa, servicios generales, secretaria académica, contador, pagador, tesorero">

    <!-- 👤 AUTOR -->
    <meta name="author" content="Gimnasio Humanístico">

    <!-- 🌐 OPEN GRAPH (SEO PARA REDES SOCIALES) -->
    <meta property="og:title" content="Equipo Administrativo | Gimnasio Humanístico">
    <meta property="og:description" content="Conoce al equipo administrativo del Gimnasio Humanístico. Profesionales que garantizan la excelencia institucional.">
    <meta property="og:image" content="{{ asset('images/politica_de_calidad2.webp') }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_CO">
    <meta property="og:url" content="https://gimnasiohumanisticoaltomagdalena.com/administrativos">
    <meta property="og:site_name" content="Gimnasio Humanístico del Alto Magdalena">

    


    <!-- 🎨 Bootstrap y Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- 🔵 Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">

    <!-- 🎨 CSS -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/administrativos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navegacion.css') }}" rel="stylesheet">

    <!-- ⚡ JS -->
    <script src="{{ asset('js/hero.js') }}" defer></script>

    @verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Gimnasio Humanístico del Alto Magdalena",
  "url": "https://gimnasiohumanisticoaltomagdalena.com",
  "department": [
    {
      "@type": "Organization",
      "name": "Equipo Administrativo",
      "employee": [
        { "@type": "Person", "jobTitle": "Jefe Administrativo" },
        { "@type": "Person", "jobTitle": "Contador" },
        { "@type": "Person", "jobTitle": "Secretaría Académica" },
        { "@type": "Person", "jobTitle": "Pagador - Tesorero" },
        { "@type": "Person", "jobTitle": "Maestra de Apoyo" },
        { "@type": "Person", "jobTitle": "Servicios Generales" }
      ]
    }
  ]
}
</script>
@endverbatim

</head>

<body>

    <!-- Header -->
    <header class="header-top" aria-label="Encabezado institucional">
        @include('layouts.header')
    </header>

    <!-- Navegación -->
    <nav class="nav-sticky" aria-label="Navegación principal">
        @include('layouts.navigation')
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <main id="contenido" role="main">

        <!-- HERO -->
        <section class="hero-section" aria-labelledby="titulo-pagina">
            <div class="hero-background">
                <img src="{{ asset('images/administrativos.jpeg') }}"
                    alt="Instalaciones del Gimnasio Humanístico en Neiva que representan la gestión administrativa."
                    width="1920" height="1080" loading="lazy">
            </div>

            <div class="hero-overlay"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 id="titulo-pagina" class="hero-title" data-title="Liderazgo Institucional">
                        Equipo Administrativo
                    </h1>

                     <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Desplazarse a la siguiente sección"
                        onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN DE EQUIPO -->
        <section class="intro-section" id="siguiente_sesion" aria-labelledby="titulo-equipo">
            <h2 id="titulo-equipo" class="visually-hidden">Equipo Administrativo del Gimnasio Humanístico</h2>

            <div class="equipo-grid">

                <!-- Jefe Administrativo -->
                <article class="equipo-column" aria-labelledby="jefe-admin">
                    <h3 id="jefe-admin" class="column-title">Jefe Administrativo</h3>
                    <p class="column-description">
                        Responsable de la planificación operativa y supervisor del equipo administrativo.
                    </p>

                    <div class="flip-card" role="group" aria-label="Información del Jefe Administrativo">
                        <div class="flip-card-inner">

                            <div class="flip-card-front" aria-hidden="false">
                                <div class="card-logo">
                                    <img src="{{ asset('images/jefe_administracion.png') }}"
                                        alt="Contador del Gimnasio Humanístico del Alto Magdalena">
                                </div>
                                <h4 class="front-title">Jefe Administrativo</h4>
                                <p class="front-subtitle">Liderazgo Operativo</p>
                            </div>

                            <div class="flip-card-back" aria-hidden="true">
                                <h5 class="back-title">Funciones del Jefe Administrativo</h5>
                                <p class="back-description">
                                     Lidera la planificación operativa (presupuesto, compras, infraestructura) alineada 
                                con las directrices de la Rectoría. Supervisa y articula el trabajo del personal 
                                administrativo (Contaduría, Pagaduría, Servicios Generales, Secretaría).
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Contador -->
                <article class="equipo-column" aria-labelledby="contador">
                    <h3 id="contador" class="column-title">Contador</h3>
                    <p class="column-description">
                        Encargado del rigor contable y la transparencia financiera.
                    </p>

                    <div class="flip-card" role="group" aria-label="Información del Contador">
                        <div class="flip-card-inner">

                            <div class="flip-card-front">
                                <div class="card-logo">
                                    <img src="{{ asset('images/contador.png') }}"
                                        alt="Contador del Gimnasio Humanístico del Alto Magdalena">
                                </div>
                                <h4 class="front-title">Contador</h4>
                                <p class="front-subtitle">Rigor Financiero</p>
                            </div>

                            <div class="flip-card-back">
                                <h5 class="back-title">Funciones del Contador</h5>
                                <p class="back-description">
                                Es el profesional responsable del rigor contable y la transparencia financiera, 
                                esencial para la toma de decisiones estratégicas. Es experto en NIIF y en la 
                                legislación tributaria colombiana, garantizando la veracidad, exactitud y oportunidad 
                                de todos los informes contables.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Secretaría Académica -->
                <article class="equipo-column" aria-labelledby="secretaria">
                    <h3 id="secretaria" class="column-title">Secretaría Académica</h3>
                    <p class="column-description">
                        Custodia la información académica y atiende a la comunidad educativa.
                    </p>

                    <div class="flip-card" role="group" aria-label="Información de la Secretaría Académica">
                        <div class="flip-card-inner">

                            <div class="flip-card-front">
                                <div class="card-logo">
                                    <img src="{{ asset('images/secretaria_academica.png') }}"
                                        alt="Ícono representativo de la Secretaría Académica del Gimnasio Humanístico">
                                </div>
                                <h4 class="front-title">Secretaría Académica</h4>
                                <p class="front-subtitle">Gestión Académica</p>
                            </div>

                            <div class="flip-card-back">
                                <h5 class="back-title">Funciones de la Secretaría Académica</h5>
                                <p class="back-description">
                                    Es la depositaria y responsable de la información académica, procesos de matrícula 
                                y demás funciones afines que le asigne la rectoría y el primer punto de contacto 
                                para la comunidad, requiere precisión técnica, confidencialidad, y alta calidad humana.
                                </p>
                            </div>

                        </div>
                    </div>
                </article>

                <!-- Pagador - Tesorero -->
                <article class="equipo-column" aria-labelledby="pagador">
                    <h3 id="pagador" class="column-title">Pagador - Tesorero</h3>
                    <p class="column-description">
                        Gestiona las transacciones financieras con seguridad y exactitud.
                    </p>

                    <div class="flip-card" role="group" aria-label="Información del Pagador-Tesorero">
                        <div class="flip-card-inner">

                            <div class="flip-card-front">
                                <div class="card-logo">
                                    <img src="{{ asset('images/pagador_tesorero.png') }}"
                                        alt="Ícono representativo del Pagador-Tesorero del Gimnasio Humanístico">
                                </div>
                                <h4 class="front-title">Pagador - Tesorero</h4>
                                <p class="front-subtitle">Gestión Financiera</p>
                            </div>

                            <div class="flip-card-back">
                                <h5 class="back-title">Funciones del Pagador-Tesorero</h5>
                                <p class="back-description">
                                     Ejecuta las transacciones financieras con máxima exactitud y puntualidad. Es garante 
                                de la seguridad en el manejo del flujo de caja y la documentación de soporte.
                                </p>
                            </div>

                        </div>
                    </div>
                </article>

                <!-- Maestra de Apoyo -->
                <article class="equipo-column" aria-labelledby="maestra-apoyo">
                    <h3 id="maestra-apoyo" class="column-title">Maestra de Apoyo</h3>
                    <p class="column-description">
                        Profesional en inclusión educativa y flexibilidad curricular.
                    </p>

                    <div class="flip-card" role="group" aria-label="Información de la Maestra de Apoyo">
                        <div class="flip-card-inner">

                            <div class="flip-card-front">
                                <div class="card-logo">
                                    <img src="{{ asset('images/maestra_apoyo.png') }}"
                                        alt="Ícono representativo de la Maestra de Apoyo del Gimnasio Humanístico">
                                </div>
                                <h4 class="front-title">Maestra de Apoyo</h4>
                                <p class="front-subtitle">Inclusión Educativa</p>
                            </div>

                            <div class="flip-card-back">
                                <h5 class="back-title">Funciones de la Maestra de Apoyo</h5>
                                <p class="back-description">
                                   Es el experto técnico que materializa la inclusión educativa, trabajando como docente 
                                y consultor para la flexibilidad curricular. Posee un profundo conocimiento del Diseño 
                                Universal de Aprendizaje DUA y del Decreto 1421/2017. Es el experto en el diseño e 
                                implementación de los Planes Individuales de Ajustes Razonables PIAR y la flexibilidad 
                                curricular.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Servicios Generales -->
                <article class="equipo-column" aria-labelledby="servicios-generales">
                    <h3 id="servicios-generales" class="column-title">Servicios Generales</h3>
                    <p class="column-description">
                        Equipo encargado de la higiene, seguridad y bienestar institucional.
                    </p>

                    <div class="flip-card" role="group" aria-label="Información de Servicios Generales">
                        <div class="flip-card-inner">

                            <div class="flip-card-front">
                                <div class="card-logo">
                                    <img src="{{ asset('images/servicios_generales.png') }}"
                                        alt="Ícono representativo de Servicios Generales del Gimnasio Humanístico">
                                </div>
                                <h4 class="front-title">Servicios Generales</h4>
                                <p class="front-subtitle">Bienestar y Seguridad</p>
                            </div>

                            <div class="flip-card-back">
                                <h5 class="back-title">Funciones de Servicios Generales</h5>
                                <p class="back-description">
                                   Es el equipo garante de la salud, seguridad y habitabilidad de la institución, 
                                fundamental para el bienestar de toda la comunidad. Garantizan la higiene y salubridad 
                                de todas las áreas, actuando de manera proactiva en la prevención de riesgos sanitarios. 
                                Mantiene los estándares de orden y limpieza requeridos para un ambiente educativo de 
                                calidad.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer aria-label="Pie de página del sitio">
        @include('layouts.footer')
    </footer>

    <!-- SCRIPTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
