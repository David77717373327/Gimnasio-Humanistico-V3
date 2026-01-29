<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organigrama Institucional | Gimnasio Humanístico del Alto Magdalena - Neiva</title>

    <!--Meta Descripción SEO-->
    <meta name="description" content="Conoce el organigrama institucional del Gimnasio Humanístico del Alto Magdalena en Neiva. Descubre la estructura organizacional, cargos directivos y funciones administrativas.">

    <!--SEO INDEXACIÓN-->
    <link rel="canonical" href="https://gimnasiohumanisticoaltomagdalena.com/organigrama">

    <meta name="theme-color" content="#0d3f27">

    <meta name="robots" content="index, follow">

    <!-- Tipografías -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap y Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/hero.js') }}" defer></script>

    <!-- CSS -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/organigrama.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navegacion.css') }}" rel="stylesheet">


    @verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://gimnasiohumanisticoaltomagdalena.com/organigrama",
  "name": "Organigrama Institucional",
  "description": "Organigrama institucional del Gimnasio Humanístico del Alto Magdalena en Neiva. Presenta la estructura organizacional, cargos directivos y áreas administrativas de la institución.",
  "url": "https://gimnasiohumanisticoaltomagdalena.com/organigrama",
  "isPartOf": {
    "@type": "EducationalOrganization",
    "@id": "https://gimnasiohumanisticoaltomagdalena.com/#school",
    "name": "Gimnasio Humanístico del Alto Magdalena"
  },
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://gimnasiohumanisticoaltomagdalena.com/images/organigrama.jpeg",
    "caption": "Organigrama Institucional del Gimnasio Humanístico del Alto Magdalena"
  },
  "inLanguage": "es-CO"
}
</script>
@endverbatim

</head>

<body>

    <!-- ENCABEZADO -->
    <header class="header-top" aria-label="Encabezado principal">
        @include('layouts.header')
    </header>

    <!-- NAVEGACIÓN PRINCIPAL -->
    <nav class="nav-sticky" aria-label="Navegación principal">
        @include('layouts.navigation')
    </nav>

    <!-- CONTENIDO -->
    <main>

        <!-- HERO -->
        <section class="hero-section" aria-label="Sección inicial del Organigrama Institucional">
            <div class="hero-background">
                <img src="{{ asset('images/politica_de_calidad4.webp') }}"
                    alt="Política de Calidad del Gimnasio Humanístico del Alto Magdalena"
                    width="1920" height="1080" loading="lazy">
            </div>

            <div class="hero-overlay"></div>
            <div class="hero-particles" aria-hidden="true"></div>

            <div class="container hero-container">
                <div class="hero-content">
                    <h1 class="hero-title" data-title="Compromiso Institucional">Organigrama Institucional</h1>

                    <div class="hero-scroll-indicator" onclick="scrollToContent()" role="button" tabindex="0"
                        aria-label="Desplazarse a la siguiente sección"
                        onkeypress="if(event.key==='Enter')scrollToContent()">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- ORGANIGRAMA -->
        <section id="siguiente_sesion" class="organigrama-section">
            <div class="container">

                <header class="text-center mb-5">
                    <h2 class="section-title">Estructura Organizacional</h2>
                    <p class="section-subtitle">
                        Conoce la jerarquía y distribución de responsabilidades en nuestra institución
                    </p>
                </header>

                <div class="row justify-content-center">
                    <div class="col-12">

                        <article class="organigrama-container animate-in">

                            <!-- Contenedor -->
                            <div class="organigrama-content-wrapper">

                                <!-- Logo -->
                                <figure class="organigrama-logo-container">
                                    <img src="{{ asset('images/logo.png') }}"
                                        alt="Logo del Colegio"
                                        class="organigrama-logo"
                                        id="logoImg">
                                </figure>

                                <!-- Imagen del organigrama -->
                                <div class="organigrama-wrapper">
                                    <img src="{{ asset('images/organigrama.jpeg') }}"
                                        alt="Organigrama Institucional Gimnasio Humanístico"
                                        class="organigrama-image"
                                        id="organigrama-img"
                                        crossorigin="anonymous">

                                    <div class="organigrama-overlay">
                                        <span class="overlay-text">
                                            <i class="fas fa-search-plus"></i> Click para ampliar
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- CANVAS OCULTO -->
        <canvas id="downloadCanvas" hidden></canvas>

    </main>



<!-- NAVEGACIÓN INTERNA -->
    <nav aria-label="Navegación interna del sitio">
        @include('layouts.navegacion_interna')
    </nav>

    <!-- PIE DE PÁGINA -->
    <footer aria-label="Pie de página del sitio">
        @include('layouts.footer')
    </footer>



    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const downloadBtn = document.getElementById('downloadBtn');
            const organigramaImg = document.getElementById('organigrama-img');
            const logoImg = document.getElementById('logoImg');
            const canvas = document.getElementById('downloadCanvas');
            const ctx = canvas.getContext('2d');

            // Función para descargar organigrama con logo y título
            downloadBtn.addEventListener('click', function() {
                // Crear nuevas imágenes para asegurar que se carguen
                const img = new Image();
                const logo = new Image();

                img.crossOrigin = "anonymous";
                logo.crossOrigin = "anonymous";

                let imagesLoaded = 0;

                function checkImagesLoaded() {
                    imagesLoaded++;
                    if (imagesLoaded === 2) {
                        generateDownload();
                    }
                }

                img.onload = checkImagesLoaded;
                logo.onload = checkImagesLoaded;

                img.src = organigramaImg.src;
                logo.src = logoImg.src;

                function generateDownload() {
                    // Dimensiones
                    const padding = 60;
                    const logoSize = 120;
                    const titleHeight = 80;
                    const spacing = 40;

                    canvas.width = img.width + (padding * 2);
                    canvas.height = img.height + titleHeight + spacing + (padding * 2);

                    // Fondo blanco
                    ctx.fillStyle = '#ffffff';
                    ctx.fillRect(0, 0, canvas.width, canvas.height);

                    // Dibujar logo en esquina superior izquierda
                    ctx.drawImage(logo, padding, padding, logoSize, logoSize);

                    // Título centrado
                    ctx.fillStyle = '#1a1a1a';
                    ctx.font = 'bold 36px Playfair Display, serif';
                    ctx.textAlign = 'center';
                    ctx.fillText('ORGANIGRAMA INSTITUCIONAL', canvas.width / 2, padding + 50);

                    ctx.font = '20px Open Sans, sans-serif';
                    ctx.fillStyle = '#666666';
                    ctx.fillText('Gimnasio Humanístico', canvas.width / 2, padding + 85);

                    // Dibujar organigrama
                    ctx.drawImage(img, padding, padding + titleHeight + spacing, img.width, img.height);

                    // Descargar
                    canvas.toBlob(function(blob) {
                        const url = URL.createObjectURL(blob);
                        const a = document.createElement('a');
                        a.href = url;
                        a.download = 'Organigrama_Gimnasio_Humanistico.png';
                        document.body.appendChild(a);
                        a.click();
                        document.body.removeChild(a);
                        URL.revokeObjectURL(url);
                    }, 'image/png');
                }
            });

            // Click para ampliar (funcionalidad básica)
            organigramaImg.addEventListener('click', function() {
                const modal = document.createElement('div');
                modal.style.cssText =
                    'position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.9);z-index:9999;display:flex;align-items:center;justify-content:center;cursor:pointer;';

                const img = document.createElement('img');
                img.src = this.src;
                img.style.cssText = 'max-width:90%;max-height:90%;object-fit:contain;';

                modal.appendChild(img);
                document.body.appendChild(modal);
                document.body.style.overflow = 'hidden';

                modal.addEventListener('click', function() {
                    document.body.removeChild(modal);
                    document.body.style.overflow = 'auto';
                });
            });
        });
    </script>
</body>
</html>
