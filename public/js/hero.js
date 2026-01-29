// Función para scroll suave mejorada con offset
function scrollToContent() {
    const targetSection = document.getElementById('siguiente_sesion');
    if (targetSection) {
        const targetPosition = targetSection.getBoundingClientRect().top + window.pageYOffset;
        const offset = 60;

        window.scrollTo({
            top: targetPosition - offset,
            behavior: 'smooth'
        });
    } else {
        const heroHeight = document.querySelector('.hero-section').offsetHeight;
        window.scrollTo({
            top: heroHeight - 60,
            behavior: 'smooth'
        });
    }
}

// Auto-ajuste del tamaño según longitud del título
document.addEventListener('DOMContentLoaded', function () {
    const title = document.querySelector('.hero-title');

    if (title) {
        const titleLength = title.textContent.trim().length;

        title.classList.remove('title-short', 'title-medium', 'title-long', 'title-extra-long');

        if (titleLength <= 15) {
            title.classList.add('title-short');
        } else if (titleLength <= 25) {
            title.classList.add('title-medium');
        } else if (titleLength <= 35) {
            title.classList.add('title-long');
        } else {
            title.classList.add('title-extra-long');
        }

        setTimeout(() => {
            title.classList.add('typing-complete');
        }, 300);
    }

    createParticles();

    const scrollIndicator = document.querySelector('.hero-scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', scrollToContent);
    }
});

// Función para crear partículas animadas
function createParticles() {
    const particlesContainer = document.querySelector('.hero-particles');
    if (!particlesContainer) return;

    const particleCount = 30;
    particlesContainer.innerHTML = '';

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';

        particle.style.left = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 5 + 's';
        particle.style.animationDuration = (7 + Math.random() * 7) + 's';

        particlesContainer.appendChild(particle);
    }
}

// Scroll suave para todos los enlaces con ancla
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});