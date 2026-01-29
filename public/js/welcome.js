document.addEventListener("DOMContentLoaded", () => {

    /* ===========================
       NAVEGACIÓN SCROLL
    =========================== */
    let scrollTick = false;
    window.addEventListener("scroll", () => {
        if (!scrollTick) {
            requestAnimationFrame(() => {
                const nav = document.querySelector(".main-navigation");
                if (nav) nav.classList.toggle("scrolled", window.pageYOffset > 50);
                scrollTick = false;
            });
            scrollTick = true;
        }
    });

    /* ===========================
       CONTADORES
    =========================== */
    function animateCounters() {
        document.querySelectorAll(".stat-number").forEach(el => {
            const target = +el.dataset.count,
                dur = 2000,
                inc = target / (dur / 16);
            let cur = 0;
            const timer = setInterval(() => {
                cur += inc;
                if (cur >= target) {
                    cur = target;
                    clearInterval(timer);
                }
                el.textContent = Math.floor(cur);
            }, 16);
        });
    }

    /* ===========================
       OBSERVER ANIMACIONES
    =========================== */
    const obs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                if (e.target.classList.contains("stats-panel")) animateCounters();
                e.target.classList.add("animate-in");
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll(".stats-panel,.feature-card")
        .forEach(el => obs.observe(el));

    /* ===========================
       SMOOTH SCROLL
    =========================== */
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener("click", e => {
            const id = a.getAttribute("href");
            if (id && id !== "#") {
                const t = document.querySelector(id);
                if (t) {
                    e.preventDefault();
                    window.scrollTo({
                        top: t.offsetTop - 80,
                        behavior: "smooth"
                    });
                }
            }
        });
    });

    /* ===========================
       NAV MÓVIL
    =========================== */
    document.querySelectorAll(".navbar-nav .nav-link").forEach(link => {
        link.addEventListener("click", () => {
            const nav = document.querySelector(".navbar-collapse");
            const tog = document.querySelector(".navbar-toggler");
            if (nav?.classList.contains("show")) tog?.click();
        });
    });

    /* ===========================
       VIDEO HERO
    =========================== */
    const video = document.querySelector(".hero-bg-video");
    const btn = document.getElementById("videoControl");
    let isPlaying = false;

    function forcePlay() {
        if (!video) return;
        video.muted = true;
        video.playsInline = true;
        video.autoplay = true;
        video.play().then(() => {
            isPlaying = true;
            if (btn) btn.innerHTML = '<i class="fas fa-pause"></i>';
        }).catch(() => {
            setTimeout(() => video.play().catch(() => { }), 500);
        });
    }

    if (video) {
        forcePlay();
        ["loadedmetadata", "canplay", "loadeddata"].forEach(ev => {
            video.addEventListener(ev, () => {
                if (video.paused && !isPlaying) forcePlay();
            });
        });

        setTimeout(() => {
            if (video.paused) forcePlay();
        }, 1000);

        btn?.addEventListener("click", () => {
            if (video.paused) {
                video.play().then(() => {
                    btn.innerHTML = '<i class="fas fa-pause"></i>';
                    isPlaying = true;
                });
            } else {
                video.pause();
                btn.innerHTML = '<i class="fas fa-play"></i>';
                isPlaying = false;
            }
        });

        document.addEventListener("visibilitychange", () => {
            if (document.hidden) video.pause();
            else if (isPlaying) video.play().catch(() => { });
        });

        if ("IntersectionObserver" in window) {
            const vObs = new IntersectionObserver(entries => {
                entries.forEach(e => {
                    if (!e.isIntersecting && !video.paused) video.pause();
                    else if (e.isIntersecting && isPlaying && video.paused)
                        video.play().catch(() => { });
                });
            }, {
                threshold: 0.1
            });
            vObs.observe(video);
        }

        function adjustVideo() {
            if (window.innerWidth < 768) {
                const mobile = video.dataset.mobileSrc;
                if (mobile && !video.currentSrc.includes(mobile)) {
                    video.src = mobile;
                    if (isPlaying) video.play();
                }
            }
        }
        adjustVideo();
        window.addEventListener("resize", () => setTimeout(adjustVideo, 250));
    }

    /* ===========================
       SCROLL INDICATOR
    =========================== */
    const indicator = document.querySelector(".scroll-indicator");
    if (indicator) {
        function goWelcome() {
            const sec = document.getElementById("bienvenida") || document.querySelector(".welcome-section");
            const nav = document.querySelector(".main-navigation");
            const off = nav ? nav.offsetHeight : 80;
            const pos = sec ? sec.offsetTop - off : window.innerHeight;
            window.scrollTo({
                top: pos,
                behavior: "smooth"
            });
        }
        indicator.onclick = e => {
            e.preventDefault();
            goWelcome();
        }
        indicator.ontouchstart = e => {
            e.preventDefault();
            goWelcome();
        }
    }

    /* ===========================
       ANIMACIONES HERO
    =========================== */
    const heroEls = document.querySelectorAll(".hero-title-section,.hero-bottom-section");
    if ("IntersectionObserver" in window) {
        const heroObs = new IntersectionObserver(ent => {
            ent.forEach(e => {
                if (e.isIntersecting) {
                    e.target.style.opacity = "1";
                    e.target.style.transform = "translateY(0)";
                }
            });
        }, {
            threshold: 0.1
        });
        heroEls.forEach(el => heroObs.observe(el));
    }

    /* ===========================
       PREFERENCIA REDUCIR MOVIMIENTO
    =========================== */
    const reduce = matchMedia("(prefers-reduced-motion: reduce)");

    function handleReduce(e) {
        if (video && e.matches) {
            video.pause();
            isPlaying = false;
            if (btn) btn.innerHTML = '<i class="fas fa-play"></i>';
        }
    }
    handleReduce(reduce);
    reduce.addEventListener("change", handleReduce);
});

