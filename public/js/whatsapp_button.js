// whatsapp-button.js - Componente que puedes incluir en tu layout

class WhatsAppButton {
  constructor(options = {}) {
    this.phoneNumber = options.phoneNumber || '573001234567'; // Formato internacional
    this.message = options.message || '¡Hola! Me gustaría más información';
    this.delay = options.delay || 3000; // 3 segundos por defecto
    this.position = options.position || 'bottom-right';
    this.showDelay = options.showDelay || 2000; // Tiempo para aparecer
    
    this.init();
  }

  init() {
    // Esperar el delay antes de mostrar el botón
    setTimeout(() => {
      this.createButton();
      this.attachStyles();
      this.attachEvents();
    }, this.delay);
  }

  createButton() {
    const button = document.createElement('div');
    button.id = 'whatsapp-float-button';
    button.className = `whatsapp-button ${this.position}`;
    button.innerHTML = `
      <a href="${this.getWhatsAppLink()}" target="_blank" rel="noopener noreferrer">
        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
          <path d="M16 0c-8.837 0-16 7.163-16 16 0 2.825 0.737 5.607 2.137 8.048l-2.137 7.952 8.135-2.135c2.369 1.228 5.020 1.875 7.865 1.875 8.837 0 16-7.163 16-16s-7.163-16-16-16zM16 29.467c-2.482 0-4.908-0.646-7.07-1.87l-0.507-0.292-5.250 1.378 1.401-5.213-0.321-0.525c-1.362-2.220-2.082-4.779-2.082-7.411 0-7.784 6.337-14.121 14.121-14.121s14.121 6.337 14.121 14.121c0 7.784-6.337 14.121-14.121 14.121zM21.393 18.998c-0.397-0.199-2.348-1.158-2.713-1.291s-0.628-0.199-0.893 0.199c-0.265 0.397-1.026 1.291-1.258 1.556s-0.463 0.298-0.861 0.099c-0.397-0.199-1.678-0.618-3.196-1.973-1.182-1.054-1.980-2.357-2.212-2.754s-0.025-0.612 0.174-0.811c0.179-0.178 0.397-0.463 0.596-0.694s0.265-0.397 0.397-0.662c0.132-0.265 0.066-0.496-0.033-0.694s-0.893-2.151-1.224-2.945c-0.322-0.774-0.649-0.669-0.893-0.681-0.231-0.012-0.496-0.015-0.761-0.015s-0.694 0.099-1.058 0.496c-0.364 0.397-1.389 1.357-1.389 3.311s1.422 3.842 1.62 4.107c0.199 0.265 2.807 4.285 6.798 6.009 0.95 0.411 1.691 0.657 2.269 0.841 0.955 0.303 1.824 0.26 2.512 0.158 0.766-0.114 2.348-0.96 2.68-1.887s0.331-1.723 0.232-1.887c-0.099-0.165-0.364-0.265-0.761-0.463z" fill="currentColor"/>
        </svg>
        <span class="tooltip">¿Necesitas ayuda?</span>
      </a>
    `;
    
    document.body.appendChild(button);
  }

  getWhatsAppLink() {
    const encodedMessage = encodeURIComponent(this.message);
    return `https://wa.me/${this.phoneNumber}?text=${encodedMessage}`;
  }

  attachStyles() {
    if (document.getElementById('whatsapp-button-styles')) return;
    
    const style = document.createElement('style');
    style.id = 'whatsapp-button-styles';
    style.textContent = `
      .whatsapp-button {
        position: fixed;
        z-index: 9999;
        animation: slideIn 0.5s ease-out, pulse 2s infinite 3s;
      }

      .whatsapp-button.bottom-right {
        bottom: 30px;
        right: 10px;
      }

      .whatsapp-button.bottom-left {
        bottom: 30px;
        left: 10px;
      }

      .whatsapp-button a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 55px;
        height: 55px;
        background: #25D366;
        border-radius: 50%;
        box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
      }

      .whatsapp-button a:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
      }

      .whatsapp-button svg {
        width: 35px;
        height: 35px;
        color: white;
      }

      .whatsapp-button .tooltip {
        position: absolute;
        right: 70px;
        background: #fff;
        color: #333;
        padding: 8px 15px;
        border-radius: 8px;
        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        font-size: 14px;
      }

      .whatsapp-button a:hover .tooltip {
        opacity: 1;
      }

      @keyframes slideIn {
        from {
          transform: translateY(100px);
          opacity: 0;
        }
        to {
          transform: translateY(0);
          opacity: 1;
        }
      }

      @keyframes pulse {
        0%, 100% {
          transform: scale(1);
        }
        50% {
          transform: scale(1.05);
        }
      }

      @media (max-width: 768px) {
        .whatsapp-button a {
          width: 50px;
          height: 50px;
        }
        .whatsapp-button svg {
          width: 28px;
          height: 28px;
        }
        .whatsapp-button.bottom-right {
          bottom: 15px;
          right: 15px;
        }
      }
    `;
    
    document.head.appendChild(style);
  }

  attachEvents() {
    const button = document.getElementById('whatsapp-float-button');
    
    // Opcional: ocultar al hacer scroll hacia arriba
    let lastScroll = 0;
    window.addEventListener('scroll', () => {
      const currentScroll = window.pageYOffset;
      
      if (currentScroll > lastScroll && currentScroll > 300) {
        button.style.opacity = '1';
        button.style.pointerEvents = 'all';
      }
      
      lastScroll = currentScroll;
    });
  }
}

// Uso: Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
  new WhatsAppButton({
    phoneNumber: '573152296832', // Cambia por tu número
    message: '¡Hola! Vengo desde la página web',
    delay: 7000, // 7 segundos
    position: 'bottom-right' // o 'bottom-left'
  });
});