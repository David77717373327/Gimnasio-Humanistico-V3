<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Descubre los proyectos de vida del Gimnasio Humanístico del Alto Magdalena en Neiva. Más de 40 años formando líderes con excelencia académica y valores humanísticos.">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0d3f27">
    <title>Proyectos de vida | Gimnasio Humanístico del Alto Magdalena - Neiva</title>

    <!-- Canonical URL -->
    <link rel="canonical" href="https://gimnasiohumanisticoaltomagdalena.com/proyectos-institucionales">

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
    <link href="{{ asset('css/proyectos_de_vida.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">


     @verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://gimnasiohumanisticoaltomagdalena.com/proyectos-institucionales",
  "url": "https://gimnasiohumanisticoaltomagdalena.com/proyectos-institucionales",
  "name": "Proyectos Institucionales",
  "description": "Proyectos institucionales del Gimnasio Humanístico del Alto Magdalena en Neiva: danzas, fútbol, natación, artes, voleibol y formación espiritual, orientados al desarrollo integral de los estudiantes.",
  "inLanguage": "es-CO",
  "isPartOf": {
    "@type": "EducationalOrganization",
    "@id": "https://gimnasiohumanisticoaltomagdalena.com/#school",
    "name": "Gimnasio Humanístico del Alto Magdalena"
  },
  "about": [
    {
      "@type": "EducationalOccupationalProgram",
      "name": "Proyectos de vida institucionales",
      "description": "Programas extracurriculares y formativos que fortalecen habilidades deportivas, artísticas, espirituales y sociales."
    }
  ],
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://gimnasiohumanisticoaltomagdalena.com/images/educacion_secundaria/imagen1.jpg",
    "caption": "Proyectos institucionales del Gimnasio Humanístico del Alto Magdalena"
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
    <main id="main" role="main">

        <!-- HERO SECTION -->
        <section class="hero-section" aria-label="Sección destacada de historia">
            <div class="hero-background">
                <img src="{{ asset('/images/educacion_secundaria/imagen1.jpg') }}"
                    alt="Vista del Gimnasio Humanístico del Alto Magdalena, institución educativa en Neiva"
                    width="1920" height="1080">
            </div>
            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Proyectos de Vida">Proyectos Institucionales</h1>
                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Desplazarse a la siguete sesion"
                        onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>



        <!-- CONTENIDO PRINCIPAL -->
        <div class="proyectos-container" id="siguiente_sesion">

            <!-- PROYECTO 6: DANZAS -->
            <article>
                <div class="proyecto-item" data-proyecto="danzas">
                    <div class="proyecto-header">
                        <h2 class="proyecto-titulo">1. Danzas</h2>
                    </div>
                    <div class="proyecto-content">
                        <div class="proyecto-carrusel">
                            <div class="carrusel-counter">
                                <span class="current-slide">1</span> / <span class="total-slides">3</span>
                            </div>
                            <div class="carrusel-indicators"></div>
                            <div class="carrusel-images"></div>
                            <div class="carrusel-controls">
                                <button class="carrusel-btn prev-btn">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="carrusel-btn next-btn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="proyecto-info">
                            <p class="proyecto-descripcion">
                                La danza es una celebración del movimiento, cultura y expresión corporal. Nuestro
                                programa abarca folclor colombiano, ballet clásico, danza contemporánea y ritmos
                                urbanos. Los estudiantes desarrollan coordinación, flexibilidad y musicalidad
                                conectándose con raíces culturales. El grupo ha representado con orgullo a la
                                institución en festivales nacionales e internacionales.
                            </p>
                        </div>
                    </div>
                </div>
            </article>




            <!-- PROYECTO 2: FÚTBOL -->
            <article>
                <div class="proyecto-item" data-proyecto="futbol">
                    <div class="proyecto-header">
                        <h2 class="proyecto-titulo">2. Fútbol</h2>
                    </div>
                    <div class="proyecto-content">
                        <div class="proyecto-carrusel">
                            <div class="carrusel-counter">
                                <span class="current-slide">1</span> / <span class="total-slides">3</span>
                            </div>
                            <div class="carrusel-indicators"></div>
                            <div class="carrusel-images"></div>
                            <div class="carrusel-controls">
                                <button class="carrusel-btn prev-btn">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="carrusel-btn next-btn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="proyecto-info">
                            <p class="proyecto-descripcion">
                                El fútbol es más que un deporte en nuestra institución; es una escuela de vida que
                                enseña trabajo en equipo, respeto y disciplina. Nuestro programa ofrece entrenamiento
                                técnico de alto nivel con entrenadores especializados. Los estudiantes desarrollan
                                habilidades físicas, mentales y sociales con campos profesionales y equipamiento de
                                última generación.
                            </p>
                        </div>
                    </div>
                </div>
            </article>


            <article>
                <!-- PROYECTO 1: NATACIÓN -->
                <div class="proyecto-item" data-proyecto="natacion">
                    <div class="proyecto-header">
                        <h2 class="proyecto-titulo">3. Natación</h2>
                    </div>
                    <div class="proyecto-content">
                        <div class="proyecto-carrusel">
                            <div class="carrusel-counter">
                                <span class="current-slide">1</span> / <span class="total-slides">3</span>
                            </div>
                            <div class="carrusel-indicators"></div>
                            <div class="carrusel-images"></div>
                            <div class="carrusel-controls">
                                <button class="carrusel-btn prev-btn">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="carrusel-btn next-btn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="proyecto-info">
                            <p class="proyecto-descripcion">
                                El programa de natación desarrolla habilidades acuáticas fundamentales en nuestros
                                estudiantes. A través de entrenamientos progresivos, los alumnos aprenden diferentes
                                estilos de nado mientras fortalecen su resistencia cardiovascular. Contamos con piscinas
                                de competencia y entrenadores certificados que garantizan un aprendizaje seguro y
                                efectivo.
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PROYECTO 3: PRIMERA COMUNIÓN Y CONFIRMACIÓN -->
            <article>
                <div class="proyecto-item" data-proyecto="sacramentos">
                    <div class="proyecto-header">
                        <h2 class="proyecto-titulo">4. Primera Comunión y Confirmación</h2>
                    </div>
                    <div class="proyecto-content">
                        <div class="proyecto-carrusel">
                            <div class="carrusel-counter">
                                <span class="current-slide">1</span> / <span class="total-slides">3</span>
                            </div>
                            <div class="carrusel-indicators"></div>
                            <div class="carrusel-images"></div>
                            <div class="carrusel-controls">
                                <button class="carrusel-btn prev-btn">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="carrusel-btn next-btn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="proyecto-info">
                            <p class="proyecto-descripcion">
                                La formación espiritual es un pilar fundamental en nuestra educación integral. Nuestro
                                programa de preparación acompaña a los estudiantes en su camino de fe con catequesis
                                dinámicas y retiros espirituales. Los jóvenes fortalecen su relación con Dios y aprenden
                                valores cristianos que guiarán sus decisiones, involucrando también a las familias en
                                este proceso formativo.
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PROYECTO 4: VOLEIBOL -->
            <article>
                <div class="proyecto-item" data-proyecto="voleibol">
                    <div class="proyecto-header">
                        <h2 class="proyecto-titulo">5. Voleibol</h2>
                    </div>
                    <div class="proyecto-content">
                        <div class="proyecto-carrusel">
                            <div class="carrusel-counter">
                                <span class="current-slide">1</span> / <span class="total-slides">3</span>
                            </div>
                            <div class="carrusel-indicators"></div>
                            <div class="carrusel-images"></div>
                            <div class="carrusel-controls">
                                <button class="carrusel-btn prev-btn">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="carrusel-btn next-btn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="proyecto-info">
                            <p class="proyecto-descripcion">
                                El voleibol se ha consolidado como uno de los deportes de mayor tradición y éxito
                                competitivo. Este proyecto desarrolla coordinación, agilidad, trabajo en equipo y
                                pensamiento estratégico. Bajo la guía de entrenadores experimentados, nuestros equipos
                                han obtenido importantes reconocimientos en torneos regionales y nacionales con canchas
                                profesionales.
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PROYECTO 5: ARTES -->
            <article>
                <div class="proyecto-item" data-proyecto="artes">
                    <div class="proyecto-header">
                        <h2 class="proyecto-titulo">6. Artes</h2>
                    </div>
                    <div class="proyecto-content">
                        <div class="proyecto-carrusel">
                            <div class="carrusel-counter">
                                <span class="current-slide">1</span> / <span class="total-slides">3</span>
                            </div>
                            <div class="carrusel-indicators"></div>
                            <div class="carrusel-images"></div>
                            <div class="carrusel-controls">
                                <button class="carrusel-btn prev-btn">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="carrusel-btn next-btn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="proyecto-info">
                            <p class="proyecto-descripcion">
                                El programa de Artes despierta la sensibilidad estética y creatividad en nuestros
                                estudiantes. A través de pintura, escultura, fotografía y artes digitales, los jóvenes
                                descubren nuevas formas de expresión personal. Nuestros talleres están equipados con
                                materiales profesionales dirigidos por artistas reconocidos que inspiran a explorar el
                                potencial creativo.
                            </p>
                        </div>
                    </div>
                </div>
        </div>
        </article>

    </main>

    <!-- MODAL -->
    <div class="modal" id="imageModal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">&times;</button>
            <button class="modal-nav prev" onclick="modalPrevImage()">
                <i class="fas fa-chevron-left"></i>
            </button>
            <img class="modal-image" id="modalImage" src="" alt="Imagen ampliada">
            <button class="modal-nav next" onclick="modalNextImage()">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- Footer del sitio -->
    <footer aria-label="Pie de página del sitio">
        @include('layouts.footer')
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <script>
        // CONFIGURACIÓN DE IMÁGENES (3 por proyecto)
        const proyectosData = {


            danzas: [
                '../images/proyecto/imagen1.jpg',
                '../images/proyecto/imagen2.jpg',
                '../images/proyecto/imagen3.jpg'
            ],

            natacion: [
                '../images/proyecto/imagen5.jpg',
                '../images/proyecto/imagen6.jpg',
                '../images/proyecto/imagen7.jpg'
            ],
            futbol: [
                '../images/proyecto/imagen4.jpg',
                '../images/proyecto/imagen11.jpg',
                '../images/proyecto/imagen12.jpg',
            ],
            sacramentos: [
                '../images/celebraciones/comuniones3.jpg',
                '../images/celebraciones/comuniones2.jpg',
                '../images/celebraciones/confirmaciones1.jpg',
            ],
            voleibol: [
                '../images/proyecto/imagen8.jpg',
                '../images/proyecto/imagen9.jpg',
                '../images/proyecto/imagen10.jpg'
            ],
            artes: [
                '../images/proyecto/imagen13.jpg',
                '../images/proyecto/imagen15.jpg',
                '../images/proyecto/imagen14.jpg',
            ],
        };

        // Variables globales para el modal
        let currentModalProject = null;
        let currentModalIndex = 0;

        // Inicializar todos los carruseles
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.proyecto-item').forEach(item => {
                const proyecto = item.dataset.proyecto;
                const images = proyectosData[proyecto];

                if (images) {
                    initCarrusel(item, images);
                }
            });
        });

        // Función para inicializar cada carrusel
        function initCarrusel(container, images) {
            const carruselImages = container.querySelector('.carrusel-images');
            const indicators = container.querySelector('.carrusel-indicators');
            const totalSlides = container.querySelector('.total-slides');
            const currentSlide = container.querySelector('.current-slide');

            // Actualizar total de slides
            totalSlides.textContent = images.length;

            // Crear imágenes
            images.forEach((src, index) => {
                const imgDiv = document.createElement('div');
                imgDiv.className = `carrusel-image ${index === 0 ? 'active' : ''}`;
                imgDiv.innerHTML = `<img src="${src}" alt="Imagen ${index + 1}">`;
                imgDiv.onclick = () => {
                    const activeIndex = Array.from(
                        container.querySelectorAll('.carrusel-image')
                    ).findIndex(img => img.classList.contains('active'));

                    openModal(container.dataset.proyecto, activeIndex);
                };

                carruselImages.appendChild(imgDiv);
            });

            // Crear indicadores
            images.forEach((_, index) => {
                const indicator = document.createElement('div');
                indicator.className = `indicator ${index === 0 ? 'active' : ''}`;
                indicator.onclick = () => goToSlide(container, index);
                indicators.appendChild(indicator);
            });

            // Agregar eventos a los botones
            const prevBtn = container.querySelector('.prev-btn');
            const nextBtn = container.querySelector('.next-btn');

            prevBtn.onclick = () => changeSlide(container, -1);
            nextBtn.onclick = () => changeSlide(container, 1);

            // Auto-play (10 segundos)
            let autoplayInterval = setInterval(() => changeSlide(container, 1), 10000);

            // Pausar autoplay al hover
            container.addEventListener('mouseenter', () => clearInterval(autoplayInterval));
            container.addEventListener('mouseleave', () => {
                autoplayInterval = setInterval(() => changeSlide(container, 1), 10000);
            });
        }

        // Cambiar slide
        function changeSlide(container, direction) {
            const images = container.querySelectorAll('.carrusel-image');
            const indicators = container.querySelectorAll('.indicator');
            const currentSlideSpan = container.querySelector('.current-slide');

            let currentIndex = Array.from(images).findIndex(img => img.classList.contains('active'));
            let newIndex = currentIndex + direction;

            // Loop circular
            if (newIndex >= images.length) newIndex = 0;
            if (newIndex < 0) newIndex = images.length - 1;

            // Cambiar imagen activa
            images[currentIndex].classList.remove('active');
            images[newIndex].classList.add('active');

            // Cambiar indicador activo
            indicators[currentIndex].classList.remove('active');
            indicators[newIndex].classList.add('active');

            // Actualizar contador
            currentSlideSpan.textContent = newIndex + 1;
        }

        // Ir a un slide específico
        function goToSlide(container, index) {
            const images = container.querySelectorAll('.carrusel-image');
            const indicators = container.querySelectorAll('.indicator');
            const currentSlideSpan = container.querySelector('.current-slide');

            const currentIndex = Array.from(images).findIndex(img => img.classList.contains('active'));

            // Remover clases activas
            images[currentIndex].classList.remove('active');
            indicators[currentIndex].classList.remove('active');

            // Agregar clases activas
            images[index].classList.add('active');
            indicators[index].classList.add('active');

            // Actualizar contador
            currentSlideSpan.textContent = index + 1;
        }

        // Abrir modal
        function openModal(proyecto, index) {
            currentModalProject = proyecto;
            currentModalIndex = index;

            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');

            modalImage.src = proyectosData[proyecto][index];
            modal.classList.add('active');

            // Prevenir scroll del body
            document.body.style.overflow = 'hidden';
        }

        // Cerrar modal
        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Navegación en modal - Anterior
        function modalPrevImage() {
            if (!currentModalProject) return;

            const images = proyectosData[currentModalProject];
            currentModalIndex--;

            if (currentModalIndex < 0) {
                currentModalIndex = images.length - 1;
            }

            document.getElementById('modalImage').src = images[currentModalIndex];
        }

        // Navegación en modal - Siguiente
        function modalNextImage() {
            if (!currentModalProject) return;

            const images = proyectosData[currentModalProject];
            currentModalIndex++;

            if (currentModalIndex >= images.length) {
                currentModalIndex = 0;
            }

            document.getElementById('modalImage').src = images[currentModalIndex];
        }

        // Cerrar modal con tecla ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Navegación con flechas en modal
        document.addEventListener('keydown', (e) => {
            const modal = document.getElementById('imageModal');
            if (modal.classList.contains('active')) {
                if (e.key === 'ArrowLeft') {
                    modalPrevImage();
                } else if (e.key === 'ArrowRight') {
                    modalNextImage();
                }
            }
        });

        // Cerrar modal al hacer clic fuera de la imagen
        document.getElementById('imageModal').addEventListener('click', (e) => {
            if (e.target.id === 'imageModal') {
                closeModal();
            }
        });
    </script>
</body>

</html>
