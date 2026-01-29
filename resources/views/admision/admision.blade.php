<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de Admisiones en Neiva | Gimnasio Humanístico del Alto Magdalena</title>
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
content="Conoce el proceso de admisiones en Neiva del Gimnasio Humanístico del Alto Magdalena. Requisitos, horarios, rutas de admisión y matrícula para preescolar, primaria y secundaria.">


    <!-- Scripts -->
    <script src="{{ asset('js/hero.js') }}" defer></script>

    <!-- CSS personalizado -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admision.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://gimnasiohumanisticoaltomagdalena.com/admisiones">



@verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Gimnasio Humanístico del Alto Magdalena",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "CLL.13 4-53",
    "addressLocality": "Neiva",
    "addressRegion": "Huila",
    "addressCountry": "CO"
  },
  "telephone": "+573152296832",
  "email": "gimnasiohumanistico@homt.com",
  "url": "https://gimnasiohumanisticoaltomagdalena.com",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Proceso de Admisiones",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "EducationalOccupationalProgram",
          "name": "Admisiones Preescolar"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "EducationalOccupationalProgram",
          "name": "Admisiones Básica Primaria"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "EducationalOccupationalProgram",
          "name": "Admisiones Básica Secundaria y Media Académica"
        }
      }
    ]
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

    <main id="main" aria-label="Contenido principal del proceso de admisiones">


        <!-- HERO -->
        <section class="hero-section" aria-label="Sección de bienvenida a procesos de admisión en Neiva Huila">
            <div class="hero-background">
                <img src="{{ asset('images/simbolos.jpg') }}"
                    alt="Simbolos del Gimnasio Humanístico del Alto Magdalena Neiva Huila" width="1920"
                    height="1080" loading="lazy">
            </div>

            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Proceso de Admisiones en Neiva">
                        Proceso de Admisiones en Neiva
                    </h1>
                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Ir a contenido principal" onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>


        <!-- NAVEGACIÓN INTERNA DE ADMISIÓN -->
<section class="admision-nav-section" id="siguiente_sesion">
    <div class="container">

        <div class="admision-nav-layout">

            <!-- Grid Principal -->
            <div class="nav-grid-main">

                <!-- Requisitos de inscripción -->
                <a href="#costos-educativos"
                   class="nav-card-featured nav-card-featured--primary admision-bg admision-bg--requisitos">

                    <!-- Imagen de fondo -->
                    <div class="admision-bg-image"></div>

                    <!-- Overlay oscuro -->
                    <div class="admision-bg-overlay"></div>

                    <!-- Contenido -->
                    <div class="featured-header">
                        <div class="featured-icon featured-icon--green">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                    </div>

                    <div class="featured-content">
                        <h3 class="featured-title">Requisitos de Inscripción</h3>
                        

                        <div class="featured-action">
                            <span class="action-text">Ver requisitos</span>
                            <div class="action-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </a>



                <!-- Grid Secundario -->
            <div class="nav-grid-secondary">

                <!-- Horarios de atención -->
                <a href="#horarios-atencion"
                   class="nav-card-featured admision-bg admision-bg--horarios">

                    <div class="admision-bg-image"></div>
                    <div class="admision-bg-overlay"></div>

                    <div class="featured-header">
                        <div class="featured-icon">
                            <i class="far fa-clock"></i>
                        </div>
                    </div>

                    <div class="featured-content">
                        <h3 class="featured-title">Horarios de Atención</h3>
                        

                        <div class="featured-action">
                            <span class="action-text">Ver horarios</span>
                            <div class="action-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

                <!-- Ruta de Admisión -->
                <a href="#ruta-admision"
                   class="nav-card-featured admision-bg admision-bg--rutas">

                    <div class="admision-bg-image"></div>
                    <div class="admision-bg-overlay"></div>

                    <div class="featured-header">
                        <div class="featured-icon">
                            <i class="fas fa-route"></i>
                        </div>
                    </div>

                    <div class="featured-content">
                        <h3 class="featured-title">Rutas de Admisiones</h3>
                        
                        <div class="featured-action">
                            <span class="action-text">Ver rutas</span>
                            <div class="action-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Modalidades -->
            <a href="{{ route('preescolar') }}"
               class="nav-card-featured admision-bg admision-bg--modalidades">

                <div class="admision-bg-image"></div>
                <div class="admision-bg-overlay"></div>

                <div class="featured-header">
                    <div class="featured-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>

                <div class="featured-content">
                    <h3 class="featured-title">Modalidades Educativas</h3>
                    

                    <div class="featured-action">
                        <span class="action-text">Ver modalidades</span>
                        <div class="action-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>


















      <!-- SECCIÓN REQUISITOS DE ADMISIÓN -->
<section class="requisitos-admision-section" id="costos-educativos">
    <div class="container">
        <!-- Header de la sección -->
        <div class="admision-nav-header">
            <div class="header-content-wrapper">
                <div class="header-text-content">
                    <h2 class="admision-nav-title">Requisitos de Admisión</h2>
                </div>
            </div>
        </div>

        <!-- PREESCOLAR -->
        <div class="modalidad-container style-table">
            <div class="modalidad-header">
                <div class="modalidad-icon">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Gimnasio Humanístico">
                </div>
                <h3 class="modalidad-title">PREESCOLAR</h3>
                <span class="modalidad-badge">Pre-jardín, Jardín y Transición</span>
            </div>

            <div class="modalidad-content">
                <!-- Card de información -->
                <div class="info-card">
                    <div class="info-section">
                        <div class="info-header">
                            <i class="far fa-clock"></i>
                            <h4>Horario</h4>
                        </div>
                        <p class="info-detail">7:00 a.m. - 11:30 a.m.</p>
                    </div>

                    <div class="info-section">
                        <div class="info-header">
                            <i class="fas fa-file-alt"></i>
                            <h4>Requisitos de Matrícula</h4>
                        </div>
                        <ul class="requisitos-list">
                            <li>Fotocopia documento de identidad ampliado</li>
                            <li>Boletín final</li>
                            <li>Paz y salvo</li>
                            <li>Retiro del Simat</li>
                            <li>1 carpeta azul colgante</li>
                            <li>Fotocopia cédula de los padres o acudiente</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- PRIMARIA -->
        <div class="modalidad-container style-table">
            <div class="modalidad-header">
                <div class="modalidad-icon">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Gimnasio Humanístico">
                </div>
                <h3 class="modalidad-title">PRIMARIA</h3>
                <span class="modalidad-badge">Grados 1° a 5°</span>
            </div>

            <div class="modalidad-content">
                <!-- Card de información -->
                <div class="info-card">
                    <div class="info-section">
                        <div class="info-header">
                            <i class="far fa-clock"></i>
                            <h4>Horario</h4>
                        </div>
                        <p class="info-detail">6:00 a.m. - 12:00 p.m.</p>
                    </div>

                    <div class="info-section">
                        <div class="info-header">
                            <i class="fas fa-file-alt"></i>
                            <h4>Requisitos de Matrícula</h4>
                        </div>
                        <ul class="requisitos-list">
                            <li>Fotocopia documento de identidad ampliado</li>
                            <li>Certificados de estudio del grado anterior</li>
                            <li>Paz y salvo</li>
                            <li>Retiro del Simat</li>
                            <li>1 carpeta azul colgante</li>
                            <li>Fotocopia cédula de los padres o acudiente</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECUNDARIA -->
        <div class="modalidad-container style-table">
            <div class="modalidad-header">
                <div class="modalidad-icon">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Gimnasio Humanístico">
                </div>
                <h3 class="modalidad-title">SECUNDARIA</h3>
                <span class="modalidad-badge">Grados 6° a 11°</span>
            </div>

            <div class="modalidad-content">
                <!-- Card de información -->
                <div class="info-card">
                    <div class="info-section">
                        <div class="info-header">
                            <i class="far fa-clock"></i>
                            <h4>Horario</h4>
                        </div>
                        <p class="info-detail">6:00 a.m. - 12:30 p.m.</p>
                    </div>

                    <div class="info-section">
                        <div class="info-header">
                            <i class="fas fa-file-alt"></i>
                            <h4>Requisitos de Matrícula</h4>
                        </div>
                        <ul class="requisitos-list">
                            <li>Fotocopia documento de identidad ampliado</li>
                            <li>Certificados de estudio de los grados anteriores</li>
                            <li>Paz y salvo</li>
                            <li>Retiro del Simat</li>
                            <li>1 carpeta azul colgante</li>
                            <li>Fotocopia cédula de los padres o acudiente</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>













        <!-- ============================================
                CÓDIGO HTML - SECCIÓN HORARIOS DE ATENCIÓN
        ============================================ -->

        <!-- SECCIÓN HORARIOS DE ATENCIÓN -->
        <section class="horarios-atencion-section" id="horarios-atencion">
            <div class="container">

                <!-- Header de la sección con logo -->
                <div class="admision-nav-header">
                    <div class="header-content-wrapper">
                        <div class="header-text-content">
                            <h2 class="admision-nav-title">Horarios De Atención</h2>
                        </div>
                    </div>
                </div>

                <!-- Grid de horarios -->
                <div class="horarios-grid">

                    <!-- Card: Coordinación Académica -->
                    <div class="horario-card">
                        <div class="horario-card-header">
                            <div class="horario-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h3 class="horario-card-title">Coordinación Académica</h3>
                        </div>
                        <div class="horario-card-body">
                            <div class="horario-item">
                                <span class="horario-label">Mañana</span>
                                <span class="horario-time">6:00 AM - 12:00 PM</span>
                            </div>
                            
                            <div class="horario-item">
                                <span class="horario-label">Días de atención</span>
                                <span class="horario-time">Lunes a Viernes</span>
                            </div>
                        </div>
                        <div class="horario-card-footer">
                            <i class="fas fa-calendar-check"></i>
                            <span>Agendar con 24 horas de anticipación</span>
                        </div>
                    </div>



                    <!-- Card: Oficina Administrativa (PREFERENCIAL) -->
                    <div class="horario-card horario-card-featured">
                        <div class="featured-badge">
                            <i class="fas fa-star"></i>
                            <span>Preferencial</span>
                        </div>
                        <div class="horario-card-header">
                            <div class="horario-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <h3 class="horario-card-title">Oficina Administrativa</h3>
                        </div>
                        <div class="horario-card-body">
                            <div class="horario-item">
                                <span class="horario-label">Mañana</span>
                                <span class="horario-time">7:00 AM - 12:00 PM</span>
                            </div>
                            <div class="horario-item">
                                <span class="horario-label">Tarde</span>
                                <span class="horario-time">2:00 PM - 5:00 PM</span>
                            </div>
                            <div class="horario-item">
                                <span class="horario-label">Días de atención</span>
                                <span class="horario-time">Lunes a Viernes</span>
                            </div>
                        </div>
                        <div class="horario-card-footer">
                            <i class="fas fa-info-circle"></i>
                            <span>Atención presencial y telefónica</span>
                        </div>
                    </div>





                    <!-- Card: Proceso de Admisión -->
                    <div class="horario-card">
                        <div class="horario-card-header">
                            <div class="horario-icon">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <h3 class="horario-card-title">Proceso de Admisión</h3>
                        </div>
                        <div class="horario-card-body">
                            <div class="horario-item">
                                <span class="horario-label">Mañana</span>
                                <span class="horario-time">7:00 AM - 12:00 PM</span>
                            </div>
                            <div class="horario-item">
                                <span class="horario-label">Tarde</span>
                                <span class="horario-time">2:00 PM - 5:00 PM</span>
                            </div>
                            <div class="horario-item">
                                <span class="horario-label">Días de atención</span>
                                <span class="horario-time">Lunes a Viernes</span>
                            </div>
                        </div>
                        <div class="horario-card-footer">
                            <i class="fas fa-phone-alt"></i>
                            <span>Llamar para agendar cita</span>
                        </div>
                    </div>
                </div>

                <!-- Información adicional -->
                <div class="horarios-info-adicional">
                    <div class="info-card">
                        <i class="fas fa-phone"></i>
                        <div class="info-content">
                            <h4>Teléfono</h4>
                            <p>(+57) 315 2296832</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <i class="fas fa-envelope"></i>
                        <div class="info-content">
                            <h4>Correo Electrónico</h4>
                            <p>gimnasiohumanistico@homt.com</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info-content">
                            <h4>Dirección</h4>
                            <p>CLL.13 4-53 Neiva, Huila - Colombia</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- SECCIÓN PROCESO DE ADMISIONES -->
<section class="admisiones-carousel-section" id="ruta-admision">
    <div class="header-section">
        <h2 class="main-title">Ruta Proceso De Admisión</h2>
    </div>

    <div class="progress-counter">
        Paso <span id="currentNum">1</span> de <span id="totalNum">4</span>
    </div>

    <div class="carousel-container">
        <div class="carousel-track" id="carouselTrack">
            <!-- Tarjeta 1 -->
            <div class="carousel-card active">
                <div class="card-number">01</div>
                <span class="card-category-badge">Inicio del Proceso</span>
                <h3 class="card-title">Compra del Formulario</h3>
                <p class="card-text">El primer paso es adquirir el formulario de inscripción en la secretaría del colegio. Este cuadernillo es el documento oficial que da inicio a tu proceso de admisión y contiene toda la información que necesitamos conocer sobre el estudiante y su familia.</p>
            </div>

            <!-- Tarjeta 2 -->
            <div class="carousel-card next">
                <div class="card-number">02</div>
                <span class="card-category-badge">Documentación</span>
                <h3 class="card-title">Diligenciamiento y Entrega de Documentos</h3>
                <p class="card-text">Completa cuidadosamente el formulario con los datos personales del estudiante. Asegúrate de diligenciar toda la información solicitada de manera clara y precisa. Este paso es fundamental para continuar con el proceso de admisión.</p>
            </div>

            <!-- Tarjeta 3 -->
            <div class="carousel-card hidden">
                <div class="card-number">03</div>
                <span class="card-category-badge">Evaluación Personal</span>
                <h3 class="card-title">Entrevista con la Rectora</h3>
                <p class="card-text">Una vez entregado el formulario completo, se agendará una cita para la entrevista con la rectora del colegio. En este encuentro participarán el estudiante y los padres de familia para conocer nuestra filosofía institucional, compartir expectativas y resolver todas las inquietudes sobre nuestro proyecto educativo.</p>
            </div>

            <!-- Tarjeta 4 -->
            <div class="carousel-card hidden">
                <div class="card-number">04</div>
                <span class="card-category-badge">Finalización</span>
                <h3 class="card-title">Matrícula y Bienvenida</h3>
                <p class="card-text">¡Felicitaciones! Después de aprobar exitosamente la entrevista, podrás proceder con el pago de la matrícula. Con este paso final quedas oficialmente admitido al Gimnasio Humanístico Del Alto Magdalena. ¡Bienvenido a nuestra familia educativa! Recibirás toda la información necesaria para iniciar clases.</p>
            </div>
        </div>

        <!-- Controles -->
        <div class="carousel-controls">
            <button class="control-btn" id="prevBtn">←</button>
            <button class="control-btn" id="nextBtn">→</button>
        </div>

        <!-- Indicadores -->
        <div class="carousel-indicators" id="indicators"></div>
    </div>
</section>

    </main>
        <!-- Incluir el footer -->
        @include('layouts.footer')

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

        <script>
            const cards = document.querySelectorAll('.carousel-card');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const indicators = document.getElementById('indicators');
            const currentNum = document.getElementById('currentNum');
            const totalNum = document.getElementById('totalNum');
            let currentIndex = 0;

            // Crear indicadores
            cards.forEach((_, index) => {
                const indicator = document.createElement('div');
                indicator.className = 'indicator' + (index === 0 ? ' active' : '');
                indicator.addEventListener('click', () => goToSlide(index));
                indicators.appendChild(indicator);
            });

            totalNum.textContent = cards.length;

            function updateCarousel() {
                cards.forEach((card, index) => {
                    card.classList.remove('active', 'prev', 'next', 'hidden');

                    if (index === currentIndex) {
                        card.classList.add('active');
                    } else if (index === currentIndex - 1) {
                        card.classList.add('prev');
                    } else if (index === currentIndex + 1) {
                        card.classList.add('next');
                    } else {
                        card.classList.add('hidden');
                    }
                });

                document.querySelectorAll('.indicator').forEach((ind, index) => {
                    ind.classList.toggle('active', index === currentIndex);
                });

                currentNum.textContent = currentIndex + 1;
                prevBtn.disabled = currentIndex === 0;
                nextBtn.disabled = currentIndex === cards.length - 1;
            }

            function goToSlide(index) {
                currentIndex = index;
                updateCarousel();
            }

            prevBtn.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateCarousel();
                }
            });

            nextBtn.addEventListener('click', () => {
                if (currentIndex < cards.length - 1) {
                    currentIndex++;
                    updateCarousel();
                }
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') prevBtn.click();
                if (e.key === 'ArrowRight') nextBtn.click();
            });
            updateCarousel();
        </script>
</body>
</html>
