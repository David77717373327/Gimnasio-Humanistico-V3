<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TITLE optimizado -->
    <title>Video Institucional | Gimnasio Humanístico del Alto Magdalena - Neiva</title>

    <!-- META DESCRIPTION -->
    <meta name="description"
        content="Conoce el video institucional del Gimnasio Humanístico del Alto Magdalena en Neiva. Descubre nuestras instalaciones, valores humanísticos y propuesta educativa.">

    <!-- Robots -->
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://gimnasiohumanisticoaltomagdalena.com/video-institucional">

    <!-- Theme color -->
    <meta name="theme-color" content="#0d3f27">

    <!-- Open Graph -->
    <meta property="og:type" content="video.other">
    <meta property="og:title" content="Video Institucional | Gimnasio Humanístico del Alto Magdalena">
    <meta property="og:description"
        content="Video institucional del Gimnasio Humanístico del Alto Magdalena en Neiva. Educación con valores humanísticos.">
    <meta property="og:url" content="https://gimnasiohumanisticoaltomagdalena.com/video-institucional">
    <meta property="og:image"
        content="https://gimnasiohumanisticoaltomagdalena.com/images/video-poster.jpg">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="player">
    <meta name="twitter:title" content="Video Institucional | Gimnasio Humanístico">
    <meta name="twitter:description"
        content="Conoce el enfoque educativo y las instalaciones del Gimnasio Humanístico del Alto Magdalena.">
    <meta name="twitter:image"
        content="https://gimnasiohumanisticoaltomagdalena.com/video-bienvenida">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/video.css') }}">

    <!-- Schema.org VideoObject -->
    @verbatim
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "VideoObject",
      "name": "Video Institucional del Gimnasio Humanístico del Alto Magdalena",
      "description": "Video institucional del Gimnasio Humanístico del Alto Magdalena en Neiva, que presenta la identidad, las instalaciones y el enfoque educativo de la institución.",
      "thumbnailUrl": "https://gimnasiohumanisticoaltomagdalena.com/video-bienvenida",
      "uploadDate": "2024-01-01",
      "contentUrl": "https://gimnasiohumanisticoaltomagdalena.com/video-bienvenida",
      "embedUrl": "https://gimnasiohumanisticoaltomagdalena.com/video-bienvenida",
      "inLanguage": "es-CO",
      "publisher": {
        "@type": "EducationalOrganization",
        "@id": "https://gimnasiohumanisticoaltomagdalena.com/#school",
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

    <main id="main">

        <!-- Título semántico -->
        <h1>Video Institucional</h1>

        <!-- Video con semántica -->
        <figure aria-describedby="video-description">

            <video
                width="960"
                height="540"
                controls
                preload="metadata"
                poster="{{ asset('images/video-poster.jpg') }}"
            >
                <source src="{{ asset('videos/hero-background9.mp4') }}" type="video/mp4">
                Tu navegador no soporta la reproducción de video HTML5.
            </video>

            <figcaption id="video-description">
                Video institucional del Gimnasio Humanístico del Alto Magdalena, institución educativa ubicada en
                Neiva, Huila, con enfoque en la formación integral y humanística.
            </figcaption>

        </figure>

    </main>

</body>
</html>
