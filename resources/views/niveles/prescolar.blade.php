<!DOCTYPE html>
<html lang="es-CO">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preescolar en Neiva | Educación Inicial | Gimnasio Humanístico</title>


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

    <!-- Scripts -->
    <script src="{{ asset('js/hero.js') }}" defer></script>


    <!--Meta descripción SEO-->
    <meta name="description"
content="Preescolar en Neiva con enfoque humanista. Educación inicial basada en el juego, valores y desarrollo integral. Gimnasio Humanístico del Alto Magdalena.">


    <!-- CSS -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prescolar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/galeria.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">


    @verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOccupationalProgram",
  "name": "Educación Preescolar",
  "description": "Programa de educación preescolar del Gimnasio Humanístico del Alto Magdalena en Neiva, enfocado en el desarrollo integral, social y emocional.",
  "educationalLevel": "Preescolar",
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
        <section class="hero-section" aria-label="Educación Inicial y Preescolar en Neiva">
            <div class="hero-background">
                <img src="{{ asset('images/educacion_inicial/sanpedrito.jpg') }}"
                    alt="Instalaciones del colegio en Neiva enfocadas en educación inicial y preescolar" width="1920"
                    height="1080" loading="lazy">
            </div>

            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Nuestra Identidad Institucional">
                         Educación Inicial y Preescolar en Neiva
                    </h1>

                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Ir a contenido principal" onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECCIÓN PRINCIPAL PREESCOLAR -->
        <section class="preescolar-content" id="siguiente_sesion">

            <div class="metodologia-section">
                <div class="container">

                    <!-- Título SEO -->
                    <header class="admision-nav-header">
                        <h2 class="admision-nav-title">Propósitos de la Educación Inicial</h2>
                    </header>
                </div>


                


                <div class="row align-items-center g-5">

                    <!-- Imagen -->
                    <div class="col-lg-6 order-lg-1 order-2">
                        <article>
                            <div class="metodologia-image">
                                <img src="{{ asset('images/educacion_inicial/imagen1.jpg') }}"
                                    alt="Niños en actividades de educación inicial y preescolar en Neiva"
                                    loading="lazy">
                            </div>
                        </article>
                    </div>

                    <!-- CONTENIDO SEO -->
                    <div class="col-lg-6 order-lg-2 order-1">
                        <article class="metodologia-content">

                            <h3 class="section-title">Educamos desde los 3 Propósitos Fundamentales</h3>

                            <p class="hero_parrafo">
                                En nuestro programa de educación inicial y preescolar en Neiva, brindamos experiencias
                                de aprendizaje
                                centradas en el desarrollo integral de los niños, fortaleciendo sus capacidades
                                emocionales,
                                comunicativas, sociales y cognitivas mediante el juego, la exploración y la interacción
                                diaria.
                            </p>


                            <div class="metodologia-list">

                                <!-- Propósito 1 -->
                                <article class="metodologia-item">
                                    <div class="metodologia-number">01</div>
                                    <div class="metodologia-text">
                                        <h4>Construir su identidad en relación con los otros</h4>
                                        <p>
                                            Promovemos que cada niño desarrolle seguridad, autonomía y vínculos
                                            afectivos sólidos,
                                            reconociéndose como un ser único dentro de su entorno familiar, escolar y
                                            social.
                                        </p>
                                    </div>
                                </article>

                                <!-- Propósito 2 -->
                                <article class="metodologia-item">
                                    <div class="metodologia-number">02</div>
                                    <div class="metodologia-text">
                                        <h4>Ser comunicadores activos de sus ideas y emociones</h4>
                                        <p>
                                            Impulsamos la expresión oral, corporal, artística y simbólica para que los
                                            niños
                                            compartan su manera de ver el mundo y desarrollen habilidades comunicativas
                                            esenciales
                                            para su vida escolar y personal.
                                        </p>
                                    </div>
                                </article>

                                <!-- Propósito 3 -->
                                <article class="metodologia-item">
                                    <div class="metodologia-number">03</div>
                                    <div class="metodologia-text">
                                        <h4>Aprender explorando y descubriendo su entorno</h4>
                                        <p>
                                            A través del juego, las experiencias sensoriales y la exploración del
                                            entorno, los niños
                                            construyen conocimiento significativo y disfrutan aprendiendo de manera
                                            natural, activa y creativa.
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>


        <!-- GALERÍA -->
        <section aria-label="Galería de momentos especiales en el preescolar de Neiva">
            <header class="gallery-header">
                <h2 class="gallery-title">Momentos Especiales</h2>
                <p class="gallery-subtitle">
                    Actividades, juegos y aprendizajes que viven nuestros estudiantes de educación inicial y preescolar.
                </p>
            </header>

            <div class="lightbox" id="lightbox">
                <!-- BOTÓN DE CERRAR -->
                <button class="lightbox-close" onclick="closeLightbox()" aria-label="Cerrar galería">&times;</button>

                <!-- FLECHA IZQUIERDA - FUERA DEL CONTENEDOR -->
                <button class="lightbox-nav lightbox-prev" onclick="changeImage(-1)" aria-label="Imagen anterior">
                    &#10094;
                </button>

                <!-- IMAGEN -->
                <div class="lightbox-content">
                    <img id="lightbox-img" src="" alt="Imagen ampliada">
                </div>

                <!-- FLECHA DERECHA - FUERA DEL CONTENEDOR -->
                <button class="lightbox-nav lightbox-next" onclick="changeImage(1)" aria-label="Siguiente imagen">
                    &#10095;
                </button>
            </div>


            <!-- GRID -->
            <div class="gallery-container">
                <div class="gallery-grid">

                    <article class="gallery-item" onclick="openLightbox(0)">
                        <img src="{{ asset('images/educacion_inicial/imagen11.jpg') }}" alt="Niños jugando en el aula del preescolar de Neiva"
                            loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(1)">
                        <img src="{{ asset('images/educacion_inicial/imagen2.jpg') }}"
                            alt="Actividades creativas para primera infancia" loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(2)">
                        <img src="{{ asset('images/educacion_inicial/imagen3.jpg') }}" alt="Aprendizaje colaborativo en preescolar"
                            loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(3)">
                        <img src="{{ asset('images/educacion_inicial/imagen6.jpg') }}" alt="Exploración educativa al aire libre"
                            loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(4)">
                        <img src="{{ asset('images/educacion_inicial/imagen7.jpg') }}" alt="Juego libre y diversión en el colegio"
                            loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(5)">
                        <img src="{{ asset('images/educacion_inicial/imagen5.jpg') }}"
                            alt="Desarrollo integral y acompañamiento docente" loading="lazy">
                    </article>

                    <article class="gallery-item" onclick="openLightbox(6)">
                        <img src="{{ asset('images/educacion_inicial/imagen8.jpg') }}" alt="Momentos de aprendizaje diario"
                            loading="lazy">
                    </article>
                </div>
            </div>
        </section>

        <footer aria-label="Pie de página">
            @include('layouts.footer')
        </footer>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <script>
        // Array con todas las imágenes de la galería (7 imágenes)
        const galleryImages = [{
                src: 'images/educacion_inicial/imagen7.jpg',
                alt: 'Niños jugando en el aula del preescolar de Neiva'
            },
            {
                src: 'images/educacion_inicial/imagen2.jpg',
                alt: 'Actividades creativas para primera infancia'
            },
            {
                src: 'images/educacion_inicial/imagen3.jpg',
                alt: 'Aprendizaje colaborativo en preescolar'
            },
            {
                src: 'images/educacion_inicial/imagen6.jpg',
                alt: 'Exploración educativa al aire libre'
            },
            {
                src: 'images/educacion_inicial/imagen7.jpg',
                alt: 'Juego libre y diversión en el colegio'
            },
            {
                src: 'images/educacion_inicial/imagen5.jpg',
                alt: 'Desarrollo integral y acompañamiento docente'
            },
            {
                src: 'images/educacion_inicial/imagen8.jpg',
                alt: 'Momentos de aprendizaje diario'
            }
        ];

        let currentImageIndex = 0;

        // Mostrar u ocultar flechas según posición
        function updateArrows() {
            const prevBtn = document.querySelector('.lightbox-prev');
            const nextBtn = document.querySelector('.lightbox-next');

            prevBtn.style.display = currentImageIndex === 0 ? "none" : "flex";
            nextBtn.style.display = currentImageIndex === galleryImages.length - 1 ? "none" : "flex";
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
    </script>
</body>

</html>
