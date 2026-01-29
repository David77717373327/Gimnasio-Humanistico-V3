<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Eventos y Celebraciones Institucionales | Gimnasio Humanístico del Alto Magdalena - Neiva</title>

    <meta name="description"
        content="Conoce los eventos y celebraciones del Gimnasio Humanístico del Alto Magdalena en Neiva: actividades académicas, culturales, deportivas y espirituales que fortalecen la formación integral.">

    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0d3f27">

    <!-- Canonical -->
    <link rel="canonical" href="https://gimnasiohumanisticoaltomagdalena.com/eventos-celebraciones">

    <!-- Preconnect fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap y Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.png') }}">

    <!-- CSS -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/eventos_celebraciones.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">

    <!-- JS -->
    <script src="{{ asset('js/hero.js') }}" defer></script>



    @verbatim
    <!-- Schema.org -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "@id": "https://gimnasiohumanisticoaltomagdalena.com/eventos-celebraciones",
      "name": "Eventos y Celebraciones Institucionales",
      "description": "Eventos académicos, culturales, deportivos y espirituales del Gimnasio Humanístico del Alto Magdalena en Neiva.",
      "inLanguage": "es-CO",
      "isPartOf": {
        "@type": "EducationalOrganization",
        "@id": "https://gimnasiohumanisticoaltomagdalena.com/#school",
        "name": "Gimnasio Humanístico del Alto Magdalena"
      },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "url": "https://gimnasiohumanisticoaltomagdalena.com/images/educacion_secundaria/imagen1.jpg"
      }
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
        <section class="hero-section" aria-label="Sección destacada de eventos">
            <div class="hero-background">
                <img src="{{ asset('/images/educacion_secundaria/imagen1.jpg') }}"
                    alt="Vista del Gimnasio Humanístico del Alto Magdalena, institución educativa en Neiva"
                    width="1920" height="1080">
            </div>
            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Eventos y Celebraciones">Eventos y Celebraciones</h1>
                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Desplazarse a la siguiente sección"
                        onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- Navegación de Tabs -->
        <section class="eventos-tabs" id="siguiente_sesion" aria-label="Navegación de eventos y celebraciones">
            <div class="container">
                <div class="tabs-wrapper" id="tabsWrapper">
                    <!-- Tabs se generan dinámicamente -->
                </div>
            </div>
        </section>

        <!-- Contenido -->
        <section class="eventos-content">
            <div class="container">
                <div id="tabsContent">
                    <!-- Contenido de tabs se genera dinámicamente -->
                </div>
            </div>
        </section>

        <div class="lightbox" id="lightbox">
            <button class="lightbox-close" onclick="closeLightbox()" aria-label="Cerrar galería">
                <i class="fas fa-times"></i>
            </button>
            <button class="lightbox-nav lightbox-prev" onclick="navigateLightbox(-1)" aria-label="Imagen anterior">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="lightbox-nav lightbox-next" onclick="navigateLightbox(1)" aria-label="Imagen siguiente">
                <i class="fas fa-chevron-right"></i>
            </button>
            <div class="lightbox-content">
                <img src="" alt="" class="lightbox-image" id="lightboxImage">
                <div class="lightbox-counter" id="lightboxCounter"></div>
            </div>
        </div>

    </main>
    <script>




        // ============================================
// NAVEGACIÓN DE TABS - SOLO 1 VISIBLE A LA VEZ
// ============================================

document.addEventListener('DOMContentLoaded', function() {
    // Esperar a que renderTabs() termine
    setTimeout(function() {
        if (window.innerWidth <= 1023) {
            initializeTabsArrows();
        }
    }, 200);

    // Re-inicializar en resize con debounce
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            if (window.innerWidth <= 1023) {
                removeTabsArrows();
                initializeTabsArrows();
            } else {
                removeTabsArrows();
            }
        }, 250);
    });
});

function initializeTabsArrows() {
    const tabsWrapper = document.getElementById('tabsWrapper');

    if (!tabsWrapper) {
        console.log('No se encontró tabsWrapper');
        return;
    }

    // Verificar si ya existen las flechas
    if (document.querySelector('.tabs-arrow-left')) {
        console.log('Las flechas ya existen');
        return;
    }

    // Obtener o crear el contenedor
    let container = tabsWrapper.parentElement;

    // Si el padre no es .container, buscar hacia arriba
    if (!container.classList.contains('container')) {
        const eventosTabsSection = tabsWrapper.closest('.eventos-tabs');
        if (eventosTabsSection) {
            container = eventosTabsSection.querySelector('.container');
        }
    }

    if (!container) {
        console.log('No se encontró contenedor adecuado');
        return;
    }

    // Crear wrapper solo si no existe
    if (!container.classList.contains('tabs-wrapper-container')) {
        const wrapper = document.createElement('div');
        wrapper.className = 'tabs-wrapper-container';

        // Mover tabsWrapper dentro del nuevo wrapper
        const parent = tabsWrapper.parentNode;
        parent.insertBefore(wrapper, tabsWrapper);
        wrapper.appendChild(tabsWrapper);

        container = wrapper;
    }

    // Crear flecha izquierda
    const arrowLeft = document.createElement('div');
    arrowLeft.className = 'tabs-nav-arrow tabs-arrow-left';
    arrowLeft.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
        </svg>
    `;

    // Crear flecha derecha
    const arrowRight = document.createElement('div');
    arrowRight.className = 'tabs-nav-arrow tabs-arrow-right';
    arrowRight.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
        </svg>
    `;

    // Insertar flechas
    container.appendChild(arrowLeft);
    container.appendChild(arrowRight);

    console.log('Flechas creadas correctamente');

    // Calcular ancho de scroll para 1 tab completa
    function getTabWidth() {
        const tab = tabsWrapper.querySelector('.tab-btn');
        if (!tab) return 300;
        
        const tabStyle = window.getComputedStyle(tab);
        const tabWidth = tab.offsetWidth;
        const gap = parseFloat(window.getComputedStyle(tabsWrapper).gap) || 0;
        
        return tabWidth + gap;
    }

    // Funcionalidad de scroll - SCROLL DE 1 TAB COMPLETA
    arrowLeft.addEventListener('click', function() {
        const scrollAmount = getTabWidth();
        tabsWrapper.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    });

    arrowRight.addEventListener('click', function() {
        const scrollAmount = getTabWidth();
        tabsWrapper.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });

    // Actualizar visibilidad de flechas
    function updateArrows() {
        const scrollLeft = tabsWrapper.scrollLeft;
        const maxScroll = tabsWrapper.scrollWidth - tabsWrapper.clientWidth;

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

    // Escuchar scroll con throttle para mejor rendimiento
    let scrollTimeout;
    tabsWrapper.addEventListener('scroll', function() {
        if (scrollTimeout) {
            window.cancelAnimationFrame(scrollTimeout);
        }
        scrollTimeout = window.requestAnimationFrame(updateArrows);
    });

    // Soporte para gestos táctiles
    let touchStartX = 0;
    let touchEndX = 0;

    tabsWrapper.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    tabsWrapper.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });

    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;

        if (Math.abs(diff) > swipeThreshold) {
            updateArrows();
        }
    }

    // Actualizar al inicio
    updateArrows();
    setTimeout(updateArrows, 100);
    setTimeout(updateArrows, 300);

    // Observar cambios en el DOM
    const observer = new MutationObserver(updateArrows);
    observer.observe(tabsWrapper, { 
        childList: true, 
        subtree: true 
    });

    // Actualizar cuando se cambia de tab
    tabsWrapper.addEventListener('click', function() {
        setTimeout(updateArrows, 100);
    });
}

function removeTabsArrows() {
    const arrows = document.querySelectorAll('.tabs-arrow-left, .tabs-arrow-right');
    arrows.forEach(arrow => {
        arrow.remove();
    });
}

// Función auxiliar para scroll suave al cambiar de tab
function scrollTabIntoView(tabElement) {
    if (window.innerWidth <= 1023) {
        const tabsWrapper = document.getElementById('tabsWrapper');
        if (tabsWrapper && tabElement) {
            const tabLeft = tabElement.offsetLeft;
            const tabWidth = tabElement.offsetWidth;
            const wrapperWidth = tabsWrapper.offsetWidth;
            const scrollLeft = tabLeft - (wrapperWidth / 2) + (tabWidth / 2);

            tabsWrapper.scrollTo({
                left: scrollLeft,
                behavior: 'smooth'
            });
        }
    }
}

// Exportar función para uso en switchTab
window.scrollTabIntoView = scrollTabIntoView;






        const eventos = [{
                id: 'sanpedrito',
                category: 'Tradición',
                title: 'San Pedrito',
                icon: 'fa-child-reaching',
                description: 'Celebración tradicional donde nuestros estudiantes más pequeños comparten su alegría y talento en un ambiente festivo y educativo que fortalece su desarrollo integral.',
                date: 'Junio',
                images: [
                    '/images/celebraciones/sanpedro1.jpg',
                    '/images/celebraciones/sanpedro2.jpg',
                    '/images/celebraciones/sanpedro3.jpg'
                ]
            },
            {
                id: 'englishday',
                category: 'Académico',
                title: 'English Day',
                icon: 'fa-language',
                description: 'Jornada dedicada a la celebración del idioma inglés con actividades interactivas, presentaciones culturales y dinámicas que fortalecen el aprendizaje del idioma.',
                date: 'Septiembre',
                images: [
                    '/images/celebraciones/english_day2.jpg',
                    '/images/celebraciones/english_day1.jpg',
                    '/images/celebraciones/english_day3.jpg'
                ]
            },
            {
                id: 'salidas',
                category: 'Experiencial',
                title: 'Salidas Pedagógicas',
                icon: 'fa-bus',
                description: 'Experiencias de aprendizaje fuera del aula que conectan teoría con práctica, explorando el entorno natural, histórico y cultural de nuestra región.',
                date: 'Todo el año',
                images: [
                    '/images/educacion_secundaria/imagen1.jpg',
                    '/images/educacion_secundaria/imagen1.jpg',
                    '/images/educacion_secundaria/imagen1.jpg'
                ]
            },
            {
                id: 'comuniones',
                category: 'Espiritual',
                title: 'Comuniones',
                icon: 'fa-church',
                description: 'Ceremonia religiosa significativa donde nuestros estudiantes reciben el sacramento de la Eucaristía, acompañados por sus familias y comunidad educativa.',
                date: 'Mayo',
                images: [
                    '/images/celebraciones/comuniones2.jpg',
                    '/images/celebraciones/comuniones1.jpg',
                    '/images/celebraciones/confirmaciones1.jpg'
                ]
            },

            {
                id: 'confirmaciones',
                category: 'Espiritual',
                title: 'Confirmaciones',
                icon: 'fa-dove',
                description: 'Sacramento de la Confirmación donde nuestros jóvenes fortalecen su compromiso con la fe y los valores cristianos que guían nuestra institución educativa.',
                date: 'Octubre',
                images: [
                    '/images/celebraciones/comuniones1.jpg',
                    '/images/celebraciones/comuniones2.jpg',
                    '/images/celebraciones/confirmaciones1.jpg'
                ]
            },
            {
                id: 'deportivo',
                category: 'Deportivo',
                title: 'Eventos Deportivos',
                icon: 'fa-medal',
                description: 'Competencia deportiva anual que promueve el trabajo en equipo, el espíritu deportivo y la vida saludable entre todos nuestros estudiantes.',
                date: 'Agosto',
                images: [
                    '/images/proyecto/imagen4.jpg',
                    '/images/proyecto/imagen11.jpg',
                    '/images/proyecto/imagen12.jpg'
                ]
            }
        ];

        // Variables para el lightbox
        let currentLightboxImages = [];
        let currentLightboxIndex = 0;

        function renderTabs() {
            const tabsWrapper = document.getElementById('tabsWrapper');
            const tabsContent = document.getElementById('tabsContent');

            eventos.forEach((evento, index) => {
                // Crear tab button
                const tabBtn = document.createElement('button');
                tabBtn.className = `tab-btn ${index === 0 ? 'active' : ''}`;
                tabBtn.onclick = () => switchTab(evento.id);
                tabBtn.innerHTML = `
            <i class="fas ${evento.icon} tab-icon"></i>
            <span class="tab-title">${evento.title}</span>
        `;
                tabsWrapper.appendChild(tabBtn);

                // Crear tab content
                const tabPanel = document.createElement('div');
                tabPanel.className = `tab-panel ${index === 0 ? 'active' : ''}`;
                tabPanel.id = evento.id;
                tabPanel.innerHTML = `
            <div class="evento-layout">
                <div class="evento-info">
                    <span class="evento-category">${evento.category}</span>
                    <h2 class="evento-title">${evento.title}</h2>
                    <p class="evento-description">${evento.description}</p>
                    
                    <div class="evento-stats">
                        <div class="stat-box">
                            <span class="stat-number">${evento.date}</span>
                            <span class="stat-label">Fecha</span>
                        </div>
                    </div>
                </div>
                
                <div class="evento-gallery">
                    ${evento.images.map(img => `
                                    <div class="gallery-item" onclick="openLightbox('${img}')">
                                        <img src="${img}" alt="${evento.title}" class="gallery-img">
                                        <div class="gallery-overlay">
                                            <i class="fas fa-expand gallery-icon"></i>
                                        </div>
                                    </div>
                                `).join('')}
                </div>
            </div>
        `;
                tabsContent.appendChild(tabPanel);
            });
        }

        function switchTab(tabId) {
            // Desactivar todos los tabs
            document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.tab-panel').forEach(panel => panel.classList.remove('active'));

            // Activar tab seleccionado
            const selectedBtn = Array.from(document.querySelectorAll('.tab-btn')).find(btn =>
                btn.querySelector('.tab-title').textContent === eventos.find(e => e.id === tabId).title
            );
            selectedBtn.classList.add('active');
            document.getElementById(tabId).classList.add('active');
        }

        function openLightbox(src) {
            // Encontrar el evento actual
            const currentTab = document.querySelector('.tab-panel.active');
            const evento = eventos.find(e => e.id === currentTab.id);

            currentLightboxImages = evento.images;
            currentLightboxIndex = currentLightboxImages.indexOf(src);

            updateLightboxImage();

            const lightbox = document.getElementById('lightbox');
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function updateLightboxImage() {
            const img = document.getElementById('lightboxImage');
            const counter = document.getElementById('lightboxCounter');

            img.src = currentLightboxImages[currentLightboxIndex];
            counter.textContent = `${currentLightboxIndex + 1} / ${currentLightboxImages.length}`;
        }

        function navigateLightbox(direction) {
            currentLightboxIndex += direction;

            // Loop circular
            if (currentLightboxIndex < 0) {
                currentLightboxIndex = currentLightboxImages.length - 1;
            } else if (currentLightboxIndex >= currentLightboxImages.length) {
                currentLightboxIndex = 0;
            }

            updateLightboxImage();
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Click fuera del lightbox para cerrar
        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) closeLightbox();
        });

        // Navegación con teclado
        document.addEventListener('keydown', function(e) {
            const lightbox = document.getElementById('lightbox');
            if (lightbox.classList.contains('active')) {
                if (e.key === 'Escape') {
                    closeLightbox();
                } else if (e.key === 'ArrowLeft') {
                    navigateLightbox(-1);
                } else if (e.key === 'ArrowRight') {
                    navigateLightbox(1);
                }
            }
        });

        // Inicializar al cargar la página
        document.addEventListener('DOMContentLoaded', renderTabs);
    </script>


    <!-- Footer del sitio -->
    <footer aria-label="Pie de página del sitio">
        @include('layouts.footer')
    </footer>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
