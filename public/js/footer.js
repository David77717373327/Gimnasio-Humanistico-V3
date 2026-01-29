// JavaScript específico solo para el footer
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar AOS solo para el footer
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 600,
            easing: 'ease-out',
            once: false,
            offset: 50
        });
    }

    // Observer específico del footer - con nombre único
    const footerObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && entry.target.classList.contains('main-footer')) {
                
                // Animación escalonada para los enlaces del footer
                const footerLinks = entry.target.querySelectorAll('.footer-section .footer-link');
                footerLinks.forEach((link, index) => {
                    setTimeout(() => {
                        link.classList.add('footer-link-visible');
                    }, index * 100);
                });

                // Efecto para los iconos sociales del footer
                const socialLinks = entry.target.querySelectorAll('.social-links .social-link');
                socialLinks.forEach((social, index) => {
                    setTimeout(() => {
                        social.classList.add('social-link-visible');
                    }, 300 + (index * 100));
                });

                footerObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });

    // Observar solo el footer
    const footer = document.querySelector('.main-footer');
    if (footer) {
        footerObserver.observe(footer);
    }
});