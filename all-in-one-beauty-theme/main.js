document.addEventListener('DOMContentLoaded', () => {

    // 1. Mobile Navigation Toggle
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (navToggle && navLinks) {
        navToggle.addEventListener('click', () => {
            navToggle.classList.toggle('open');
            navLinks.classList.toggle('active');
        });

        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                navToggle.classList.remove('open');
            });
        });
    }

    // 2. Intersection Observer for Fade-Up Animations
    const fadeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.fade-up').forEach(el => fadeObserver.observe(el));

    // 3. Subtle parallax for hero image
    const heroImg = document.querySelector('.hero-img');
    if (heroImg) {
        window.addEventListener('scroll', () => {
            const scrollPos = window.scrollY;
            if (scrollPos < window.innerHeight) {
                heroImg.style.transform = `translateY(${scrollPos * 0.25}px) scale(1.05)`;
            }
        });
    }

    // 4. Set current year in footer
    document.querySelectorAll('.current-year').forEach(el => {
        el.textContent = new Date().getFullYear();
    });

    // 5. Cookie Consent
    const cookieBanner = document.querySelector('.cookie-consent');
    const acceptBtn = document.querySelector('.cookie-accept');
    const declineBtn = document.querySelector('.cookie-decline');

    if (cookieBanner) {
        // Show banner if no consent stored
        if (!localStorage.getItem('aio_cookie_consent')) {
            cookieBanner.style.display = 'flex';
        }

        if (acceptBtn) {
            acceptBtn.addEventListener('click', () => {
                localStorage.setItem('aio_cookie_consent', 'accepted');
                cookieBanner.style.display = 'none';
            });
        }

        if (declineBtn) {
            declineBtn.addEventListener('click', () => {
                localStorage.setItem('aio_cookie_consent', 'declined');
                cookieBanner.style.display = 'none';
            });
        }
    }

    // 6. Skip-link focus fix
    const skipLink = document.querySelector('.skip-link');
    if (skipLink) {
        skipLink.addEventListener('click', (e) => {
            const target = document.querySelector(skipLink.getAttribute('href'));
            if (target) {
                target.setAttribute('tabindex', '-1');
                target.focus();
            }
        });
    }
});
