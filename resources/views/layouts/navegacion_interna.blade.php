<!-- ============================================
     NAVEGACIÓN VISUAL INSTITUCIONAL
     Navegación interna optimizada para SEO y accesibilidad
     ============================================ -->

<!-- SECTION SEMÁNTICA que describe la navegación -->
<section class="institutional-nav-section" aria-labelledby="titulo-navegacion-interna" role="navigation">

    <!-- Título oculto SOLO para SEO y lectores de pantalla -->
    <h2 id="titulo-navegacion-interna" class="sr-only">
        Navegación institucional del Colegio Gimnasio Humanístico
    </h2>

    <div class="institutional-nav-container">

        <div class="institutional-nav-grid">

            <!-- Misión y Visión -->
            <a href="{{ route('mision.vision') }}"
               class="nav-card-inst"
               aria-label="Ir a la sección institucional: Misión y Visión">
                <div class="nav-card-overlay-inst"></div>
                <div class="nav-card-content-inst">
                    <div class="nav-icon-inst">
                        <i class="fas fa-landmark" aria-hidden="true"></i>
                    </div>
                    <h3 class="nav-title-inst">Misión y Visión</h3>
                </div>
            </a>

            <!-- Filosofía institucional -->
            <a href="{{ route('filosofia.institucional') }}"
               class="nav-card-inst filosofia"
               aria-label="Ir a la sección institucional: Filosofía">
                <div class="nav-card-overlay-inst"></div>
                <div class="nav-card-content-inst">
                    <div class="nav-icon-inst">
                        <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <h3 class="nav-title-inst">Filosofía</h3>
                </div>
            </a>

            <!-- Principios -->
            <a href="{{ route('principios.valores') }}"
               class="nav-card-inst principios"
               aria-label="Ir a la sección institucional: Principios y valores">
                <div class="nav-card-overlay-inst"></div>
                <div class="nav-card-content-inst">
                    <div class="nav-icon-inst">
                        <i class="fas fa-user-friends" aria-hidden="true"></i>
                    </div>
                    <h3 class="nav-title-inst">Principios</h3>
                </div>
            </a>



            <!-- Cambiar ícono  a un libro abierto -->
            <!-- Símbolos institucionales -->
            <a href="{{ route('simbolos.institucionales') }}"
               class="nav-card-inst simbolos"
               aria-label="Ir a la sección institucional: Símbolos del colegio">
                <div class="nav-card-overlay-inst"></div>
                <div class="nav-card-content-inst">
                    <div class="nav-icon-inst">
                        <i class="fas fa-book-open" aria-hidden="true"></i>
                    </div>
                    <h3 class="nav-title-inst">Símbolos</h3>
                </div>
            </a>
        </div>
    </div>
</section>
