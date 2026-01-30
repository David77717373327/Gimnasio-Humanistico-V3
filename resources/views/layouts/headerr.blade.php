<!-- Header institucional -->
<header class="logo-bar" aria-label="Encabezado institucional del Colegio Gimnasio Humanístico del Alto Magdalena">
    <div class="container-fluid">
        <div class="institutional-header" role="banner">
            
            <!-- Logo -->
            <div class="logo-container">
                <img 
                    src="{{ asset('images/logo.png') }}" 
                    alt="Logo oficial del Colegio Gimnasio Humanístico del Alto Magdalena" 
                    class="institutional-logo"
                    width="150"
                    height="150"
                    loading="lazy"
                >
            </div>

            <!-- Título institucional -->
            <div class="institutional-title">
                <h1 class="college-main-title">
                    <span class="title-line-1">COLEGIO GIMNASIO HUMANÍSTICO</span>
                    <span class="title-line-2">DEL ALTO MAGDALENA</span>
                    <span class="title-line-3">Neiva, Huila</span>
                </h1>
            </div>

        </div>
    </div>
</header>



<!-- Incluye el botón de WhatsApp -->
    <script src="{{ asset('js/whatsapp_button.js') }}"></script>







<script>
document.addEventListener("DOMContentLoaded", () => {

    const navLinks = document.querySelectorAll(".nav-link:not(.login-btn)");
    const indicator = document.querySelector(".nav-indicator");
    const navbarNav = document.querySelector(".navbar-nav");
    const navbarCollapse = document.querySelector(".navbar-collapse");
    const dropdownItems = document.querySelectorAll(".nav-item.dropdown");

    function forceCleanDropdowns() {
        dropdownItems.forEach(i => {
            i.classList.remove("show");
            const m = i.querySelector(".dropdown-menu");
            if (m) {
                m.classList.remove("show");
                m.style.display = "none";
                m.style.opacity = "0";
                m.style.maxHeight = "0";
            }
        });
    }

    function initDesktopFeatures() {
        if (innerWidth <= 992 || !indicator || !navbarNav) return;

        const currentUrl = location.href;
        const currentPath = location.pathname.toLowerCase();

        function moveIndicator(link) {
            const r = link.getBoundingClientRect();
            const nr = navbarNav.getBoundingClientRect();
            indicator.style.left = r.left - nr.left + "px";
            indicator.style.width = r.width + "px";
            indicator.style.opacity = "1";
        }

        function setActiveLink() {
            let active = null, bestMatch = null, bestLen = 0;

            document.querySelectorAll(".dropdown-item").forEach(i => {
                const href = i.getAttribute("href");
                if (!href || href === "#") return;
                const full = new URL(href, location.origin).href;
                if (full === currentUrl || currentPath.includes(href.toLowerCase())) {
                    const parent = i.closest(".dropdown")?.querySelector(".nav-link");
                    if (parent && href.length > bestLen) {
                        bestMatch = parent;
                        bestLen = href.length;
                    }
                }
            });

            navLinks.forEach(link => {
                link.classList.remove("active");
                const href = link.getAttribute("href");
                if (!href || href === "#") return;
                const full = new URL(href, location.origin).href;

                if (full === currentUrl || (href !== "/" && currentPath.includes(href.toLowerCase()))) {
                    link.classList.add("active");
                    active = link;
                }
            });

            if (!active && bestMatch) {
                navLinks.forEach(l => l.classList.remove("active"));
                bestMatch.classList.add("active");
                active = bestMatch;
            }
            return active;
        }

        const activeLink = setActiveLink();
        if (activeLink) moveIndicator(activeLink);

        navLinks.forEach(l =>
            l.addEventListener("mouseenter", () => moveIndicator(l))
        );

        navbarNav.addEventListener("mouseleave", () => {
            const active = document.querySelector(".nav-link.active:not(.login-btn)");
            if (active) moveIndicator(active);
        });
    }

    function initDesktopDropdowns() {
        if (innerWidth <= 992) return;

        dropdownItems.forEach(i => {
            const m = i.querySelector(".dropdown-menu");
            i.addEventListener("mouseenter", () => {
                m.classList.add("show");
                i.classList.add("show");
            });
            i.addEventListener("mouseleave", () => {
                m.classList.remove("show");
                i.classList.remove("show");
            });
        });
    }

    function initMobileDropdowns() {
        if (innerWidth > 992) return;

        forceCleanDropdowns();

        dropdownItems.forEach(item => {
            const navLink = item.querySelector(".nav-link");
            const menu = item.querySelector(".dropdown-menu");

            if (!navLink || !menu) return;

            navLink.removeAttribute("data-bs-toggle");
            navLink.removeAttribute("data-bs-target");
            navLink.removeAttribute("aria-expanded");

            const newLink = navLink.cloneNode(true);
            navLink.parentNode.replaceChild(newLink, navLink);

            newLink.addEventListener("click", e => {
                e.preventDefault();
                e.stopPropagation();
                const open = menu.classList.contains("show");

                dropdownItems.forEach(o => {
                    if (o !== item) {
                        o.classList.remove("show");
                        const om = o.querySelector(".dropdown-menu");
                        if (om) {
                            om.classList.remove("show");
                            om.style.display = "none";
                        }
                    }
                });

                if (open) {
                    item.classList.remove("show");
                    menu.classList.remove("show");
                    menu.style.display = "none";
                } else {
                    item.classList.add("show");
                    menu.classList.add("show");
                    menu.style.display = "flex";
                }
            });
        });

        // SOLO cerrar el navbar cuando se hace clic en un dropdown-item (elemento final del menú)
        document.querySelectorAll(".dropdown-item").forEach(i =>
            i.addEventListener("click", closeNavbar)
        );

        // SOLO cerrar para links directos que NO son parte de dropdowns
        document.querySelectorAll(".nav-link:not([role='button'])").forEach(l => {
            const parentDropdown = l.closest(".dropdown");
            // Solo agregar evento de cierre si NO está dentro de un dropdown
            if (!parentDropdown) {
                l.addEventListener("click", () => {
                    closeNavbar();
                });
            }
        });
    }

    function closeNavbar() {
        if (navbarCollapse?.classList.contains("show")) {
            const bs = bootstrap.Collapse.getInstance(navbarCollapse);
            if (bs) bs.hide();
            else navbarCollapse.classList.remove("show");
        }
        forceCleanDropdowns();
    }

    if (navbarCollapse) {
        navbarCollapse.addEventListener("hidden.bs.collapse", forceCleanDropdowns);
        navbarCollapse.addEventListener("shown.bs.collapse", forceCleanDropdowns);
    }

    function initialize() {
        forceCleanDropdowns();
        if (innerWidth > 992) {
            initDesktopFeatures();
            initDesktopDropdowns();
        } else {
            initMobileDropdowns();
        }
    }

    initialize();

    let resizeTimer;
    window.addEventListener("resize", () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            forceCleanDropdowns();
            navbarCollapse?.classList.remove("show");
            initialize();

            if (innerWidth > 992 && indicator) {
                const active = document.querySelector(".nav-link.active:not(.login-btn)");
                if (active) {
                    const r = active.getBoundingClientRect();
                    const nr = navbarNav.getBoundingClientRect();
                    indicator.style.left = r.left - nr.left + "px";
                    indicator.style.width = r.width + "px";
                }
            }
        }, 250);
    });

    document.addEventListener("click", e => {
        if (innerWidth <= 992 && navbarCollapse?.classList.contains("show")) {
            if (!e.target.closest(".navbar")) closeNavbar();
        }
    });
});
</script>


