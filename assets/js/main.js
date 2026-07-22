/* main.js - Site interactivity */

document.addEventListener('DOMContentLoaded', function() {

  // === Typewriter Effect ===
  const typewriterEl = document.getElementById('typewriter');
  if (typewriterEl) {
    const titles = [
      'Computer Engineer',
      'Cybersecurity Researcher',
      'Vulnerability Researcher'
    ];
    let titleIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let currentText = '';

    function type() {
      const fullText = titles[titleIndex];

      if (isDeleting) {
        currentText = fullText.substring(0, charIndex - 1);
        charIndex--;
      } else {
        currentText = fullText.substring(0, charIndex + 1);
        charIndex++;
      }

      typewriterEl.textContent = currentText;

      let speed = isDeleting ? 40 : 80;

      if (!isDeleting && charIndex === fullText.length) {
        speed = 2000;
        isDeleting = true;
      } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        titleIndex = (titleIndex + 1) % titles.length;
        speed = 500;
      }

      setTimeout(type, speed);
    }

    type();
  }

  // === Scroll Reveal ===
  const sections = document.querySelectorAll('.section');

  function revealSections() {
    sections.forEach(section => {
      const rect = section.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      if (rect.top < windowHeight * 0.85) {
        section.classList.add('visible');
      }
    });
  }

  // Initial check
  revealSections();

  // Check on scroll
  window.addEventListener('scroll', revealSections);

  // === Smooth Nav Scrolling ===
  document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      // Only handle anchor links (#something), let external links navigate normally
      if (href.startsWith('#')) {
        e.preventDefault();
        const targetId = href.substring(1);
        const targetEl = document.getElementById(targetId);
        if (targetEl) {
          const offset = 80;
          const targetPos = targetEl.getBoundingClientRect().top + window.pageYOffset - offset;
          window.scrollTo({ top: targetPos, behavior: 'smooth' });
        }
      }
    });
  });

  // === Particles.js Config ===
  if (typeof particlesJS !== 'undefined') {
    particlesJS('particles-bg', {
      particles: {
        number: {
          value: 50,
          density: {
            enable: true,
            value_area: 800
          }
        },
        color: {
          value: ['#22d3ee', '#06b6d4', '#67e8f9']
        },
        shape: {
          type: 'circle'
        },
        opacity: {
          value: 0.6,
          random: true,
          anim: {
            enable: true,
            speed: 0.5,
            opacity_min: 0.1,
            sync: false
          }
        },
        size: {
          value: 2.5,
          random: true,
          anim: {
            enable: true,
            speed: 2,
            size_min: 0.5,
            sync: false
          }
        },
        line_linked: {
          enable: true,
          distance: 150,
          color: '#22d3ee',
          opacity: 0.2,
          width: 1
        },
        move: {
          enable: true,
          speed: 1.5,
          direction: 'none',
          random: true,
          straight: false,
          out_mode: 'out',
          attract: {
            enable: true,
            rotateX: 600,
            rotateY: 1200
          }
        }
      },
      interactivity: {
        detect_on: 'canvas',
        events: {
          onhover: {
            enable: true,
            mode: 'grab'
          },
          onclick: {
            enable: true,
            mode: 'push'
          },
          resize: true
        },
        modes: {
          grab: {
            distance: 140,
            line_linked: {
              opacity: 0.5
            }
          },
          push: {
            particles_nb: 3
          }
        }
      },
      retina_detect: true
    });
  }
});
