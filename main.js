document.addEventListener('DOMContentLoaded', () => {

    // ── 1. Mobile Navigation ──────────────────────────────────────
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks  = document.querySelector('.nav-links');

    if (navToggle && navLinks) {
        navToggle.addEventListener('click', () => {
            const isOpen = navToggle.classList.toggle('open');
            navLinks.classList.toggle('active');
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                navToggle.classList.remove('open');
                document.body.style.overflow = '';
            });
        });
    }

    // ── 2. Motion Preference ──────────────────────────────────────
    const motionOK = !window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // ── 3. Scroll Reveal — All Animation Classes ──────────────────
    const animSelectors = '.fade-up, .fade-left, .fade-right, .scale-in, .clip-reveal';

    if (motionOK) {
        const revealObserver = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        document.querySelectorAll(animSelectors).forEach(el => revealObserver.observe(el));
    } else {
        document.querySelectorAll(animSelectors).forEach(el => el.classList.add('visible'));
    }

    // ── 4. Hero Parallax ──────────────────────────────────────────
    const heroImg = document.querySelector('.hero-img');
    if (heroImg && motionOK) {
        let heroTick = false;
        window.addEventListener('scroll', () => {
            if (!heroTick) {
                requestAnimationFrame(() => {
                    const y = window.scrollY;
                    if (y < window.innerHeight) {
                        heroImg.style.transform = `translateY(${y * 0.25}px) scale(1.05)`;
                    }
                    heroTick = false;
                });
                heroTick = true;
            }
        }, { passive: true });
    }

    // ── 5. Hero Cursor-Responsive Gradient (desktop only) ─────────
    const hero       = document.querySelector('.hero');
    const cursorGrad = document.querySelector('.hero-cursor-gradient');

    if (hero && cursorGrad && window.innerWidth > 768) {
        hero.addEventListener('mousemove', (e) => {
            const rect = hero.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;
            cursorGrad.style.setProperty('--mx', x + '%');
            cursorGrad.style.setProperty('--my', y + '%');
        });
    }

    // ── 6. Stats Counter Animation ────────────────────────────────
    const counters = document.querySelectorAll('[data-count]');
    if (counters.length && motionOK) {
        const counterObs = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                const el  = entry.target;
                const end = parseInt(el.getAttribute('data-count'), 10);
                if (isNaN(end)) { obs.unobserve(el); return; }

                const duration = 2000;
                const t0 = performance.now();
                const tick = (now) => {
                    const p    = Math.min((now - t0) / duration, 1);
                    const ease = 1 - Math.pow(1 - p, 3);           // easeOutCubic
                    el.textContent = Math.round(ease * end);
                    if (p < 1) requestAnimationFrame(tick);
                };
                requestAnimationFrame(tick);
                obs.unobserve(el);
            });
        }, { threshold: 0.5 });

        counters.forEach(el => counterObs.observe(el));
    }

    // ── 7. Scroll-Driven CTA Background Zoom ─────────────────────
    const ctaBgs = document.querySelectorAll('.cta-bg');
    if (ctaBgs.length && motionOK) {
        let ctaTick = false;
        window.addEventListener('scroll', () => {
            if (!ctaTick) {
                requestAnimationFrame(() => {
                    const vh = window.innerHeight;
                    ctaBgs.forEach(bg => {
                        const rect = bg.parentElement.getBoundingClientRect();
                        if (rect.top < vh && rect.bottom > 0) {
                            const progress = 1 - rect.top / vh;
                            bg.style.transform = `scale(${1 + progress * 0.08})`;
                        }
                    });
                    ctaTick = false;
                });
                ctaTick = true;
            }
        }, { passive: true });
    }

    // ── 8. Header Compact on Scroll ───────────────────────────────
    const header = document.querySelector('.header');
    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('header-scrolled', window.scrollY > 60);
        }, { passive: true });
    }

    // ── 9. Magnetic Button Effect (desktop only) ──────────────────
    if (window.innerWidth > 768 && motionOK) {
        document.querySelectorAll('.btn-hero').forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const r  = btn.getBoundingClientRect();
                const dx = e.clientX - r.left - r.width / 2;
                const dy = e.clientY - r.top  - r.height / 2;
                btn.style.transform = `translate(${dx * 0.12}px, ${dy * 0.12}px)`;
            });
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = '';
            });
        });
    }

    // ── 10. FAQ Accordion ─────────────────────────────────────────
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const item      = btn.closest('.faq-item');
            const wasActive = item.classList.contains('active');

            // Close all
            document.querySelectorAll('.faq-item.active').forEach(i => i.classList.remove('active'));

            // Toggle clicked
            if (!wasActive) item.classList.add('active');

            // Update aria
            document.querySelectorAll('.faq-question').forEach(q =>
                q.setAttribute('aria-expanded', q.closest('.faq-item').classList.contains('active'))
            );
        });
    });

    // ── 11. Set current year in footer ────────────────────────────
    document.querySelectorAll('.current-year').forEach(el => {
        el.textContent = new Date().getFullYear();
    });

    // ── 12. Cookie Consent ────────────────────────────────────────
    const cookieBanner = document.querySelector('.cookie-consent');
    if (cookieBanner && !localStorage.getItem('aio_cookie_consent')) {
        cookieBanner.style.display = 'flex';
    }

    const acceptBtn = document.querySelector('.cookie-accept');
    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            localStorage.setItem('aio_cookie_consent', 'accepted');
            if (cookieBanner) cookieBanner.style.display = 'none';
        });
    }

    const declineBtn = document.querySelector('.cookie-decline');
    if (declineBtn) {
        declineBtn.addEventListener('click', () => {
            localStorage.setItem('aio_cookie_consent', 'declined');
            if (cookieBanner) cookieBanner.style.display = 'none';
        });
    }

    // ── 13. Skip-link Focus Fix ───────────────────────────────────
    const skipLink = document.querySelector('.skip-link');
    if (skipLink) {
        skipLink.addEventListener('click', () => {
            const target = document.querySelector(skipLink.getAttribute('href'));
            if (target) { target.setAttribute('tabindex', '-1'); target.focus(); }
        });
    }

});
