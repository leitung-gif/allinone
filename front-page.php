<?php
/**
 * Template Name: Front Page
 * Homepage — All in one Beauty
 */
get_header();
$t = get_template_directory_uri();
?>

    <!-- ========== HERO ========== -->
    <section class="hero">
        <img src="<?php echo esc_url( $t . '/images/hero.webp' ); ?>" alt="All in one Beauty Studio – Premium Kosmetik Gränichen & Suhr" class="hero-img">
        <div class="hero-overlay"></div>
        <div class="hero-cursor-gradient"></div>
        <div class="hero-content page-padding">
            <div class="container fade-up">
                <img src="<?php echo esc_url( $t . '/images/logo-sw.webp' ); ?>" alt="All in one Beauty" class="hero-logo">
                <h1><em>Ihr Kosmetikstudio</em><br><span class="caps">im Aargau</span></h1>
                <p class="hero-subtitle">Hair Extensions · Wimpern · Permanent Make-Up · Gesichtsbehandlungen · Nails · Bodyforming</p>
                <div class="hero-btns">
                    <a href="https://allinone.hairlist.ch/termin" target="_blank" rel="noopener" class="btn btn-hero">Jetzt Termin Buchen <i class="fa-solid fa-arrow-right"></i></a>
                    <a href="<?php echo esc_url( home_url( '/behandlungen/' ) ); ?>" class="arrow-link hero-arrow-link">
                        <span>Alle Behandlungen &amp; Preise</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" viewBox="0 0 21 14" fill="none"><path d="M20.1336 7.00037C16.2576 7.00037 13.1152 3.86612 13.1152 0M20.1336 7.00037C16.2576 7.00037 13.1152 10.1339 13.1152 14M20.1336 7.00037L0 7" stroke="currentColor"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="hero-floating-badge">
            <i class="fa-solid fa-star badge-icon"></i>
            <div>
                <div class="badge-number">20+</div>
                <span>Jahre Erfahrung</span>
            </div>
        </div>
    </section>

    <!-- ========== QUICK BOOKING BAR ========== -->
    <div class="quick-book-bar">
        <div class="page-padding">
            <div class="container">
                <div class="quick-book-inner">
                    <div class="quick-book-label">
                        <i class="fa-regular fa-calendar-check"></i>
                        <span>So einfach buchen Sie:</span>
                    </div>
                    <div class="quick-book-actions">
                        <a href="https://allinone.hairlist.ch/termin" target="_blank" rel="noopener" class="quick-book-btn qb-primary">
                            <i class="fa-solid fa-calendar-plus"></i> Online buchen
                        </a>
                        <a href="https://wa.me/41765036663" target="_blank" rel="noopener" class="quick-book-btn qb-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> WhatsApp
                        </a>
                        <a href="tel:+41765036663" class="quick-book-btn">
                            <i class="fa-solid fa-phone"></i> +41 76 503 66 63
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== MARQUEE STRIP ========== -->
    <div class="marquee-strip">
        <div class="marquee-track">
            <span class="marquee-item">Hair Extensions <span class="dot"></span></span>
            <span class="marquee-item">Wimpern &amp; Brauen <span class="dot"></span></span>
            <span class="marquee-item">Haarentfernung <span class="dot"></span></span>
            <span class="marquee-item">Gesichtsbehandlungen <span class="dot"></span></span>
            <span class="marquee-item">Permanent Make-Up <span class="dot"></span></span>
            <span class="marquee-item">Make-Up <span class="dot"></span></span>
            <span class="marquee-item">Nails &amp; Füsse <span class="dot"></span></span>
            <span class="marquee-item">Body Treatments <span class="dot"></span></span>
            <span class="marquee-item">Hair Extensions <span class="dot"></span></span>
            <span class="marquee-item">Wimpern &amp; Brauen <span class="dot"></span></span>
            <span class="marquee-item">Haarentfernung <span class="dot"></span></span>
            <span class="marquee-item">Gesichtsbehandlungen <span class="dot"></span></span>
            <span class="marquee-item">Permanent Make-Up <span class="dot"></span></span>
            <span class="marquee-item">Make-Up <span class="dot"></span></span>
            <span class="marquee-item">Nails &amp; Füsse <span class="dot"></span></span>
            <span class="marquee-item">Body Treatments <span class="dot"></span></span>
        </div>
    </div>

    <!-- ========== TRUST STRIP ========== -->
    <section class="trust-strip fade-up">
        <div class="page-padding">
            <div class="container">
                <div class="trust-inner">
                    <div class="trust-item">
                        <img src="<?php echo esc_url( $t . '/images/srf-logo.webp' ); ?>" alt="SRF – Schweizer Radio und Fernsehen" class="trust-logo trust-logo-srf">
                        <span class="trust-label">Bekannt aus SRF Jobtausch</span>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <img src="<?php echo esc_url( $t . '/images/bodyforming-lizenz.webp' ); ?>" alt="V-NISSG Zertifikat für dauerhafte Haarentfernung" class="trust-logo trust-logo-cert">
                        <span class="trust-label">V-NISSG für dauerhafte Haarentfernung</span>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <div class="trust-qualifications">
                            <span class="trust-badge">EFZ</span>
                        </div>
                        <span class="trust-label">Coiffeuse &amp; Kosmetikerin EFZ</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== SERVICES RANGE ========== -->
    <section class="section-padding">
        <div class="page-padding">
            <div class="container">
                <div class="signpost fade-up">
                    <span class="signpost-text">Meine Behandlungen</span>
                    <div class="signpost-line"></div>
                </div>
                <h2 class="fade-up" style="margin-bottom: 0.5rem;"><em>Alles, was</em> <span class="caps">Schönheit</span> braucht.</h2>
                <p class="fade-up" style="margin-bottom: var(--space-lg); max-width: 600px;">Wähle deine Behandlung – jede Kategorie mit vollständiger Preisliste. Buchen geht direkt online.</p>

                <div class="range-grid fade-up" data-delay="1">
                    <a href="<?php echo esc_url( home_url( '/behandlungen/#hair-extensions' ) ); ?>" class="range-item">
                        <div class="range-item-bg" style="background-image: url('<?php echo esc_url( $t . '/images/hair-extensions.webp' ); ?>');"></div>
                        <div class="range-item-overlay"></div>
                        <div class="range-item-content">
                            <div class="range-number">1</div>
                            <div class="range-title"><em>Hair</em><span class="range-title-caps">Extensions</span></div>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/behandlungen/#wimpern-brauen' ) ); ?>" class="range-item">
                        <div class="range-item-bg" style="background-image: url('<?php echo esc_url( $t . '/images/wimpern-brauen.webp' ); ?>');"></div>
                        <div class="range-item-overlay"></div>
                        <div class="range-item-content">
                            <div class="range-number">2</div>
                            <div class="range-title"><em>Augen, Brauen &amp;</em><span class="range-title-caps">Wimpern</span></div>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/behandlungen/#faden' ) ); ?>" class="range-item">
                        <div class="range-item-bg" style="background-image: url('<?php echo esc_url( $t . '/images/faden.webp' ); ?>');"></div>
                        <div class="range-item-overlay"></div>
                        <div class="range-item-content">
                            <div class="range-number">3</div>
                            <div class="range-title"><em>Haarentfernung</em><span class="range-title-caps">mit Faden</span></div>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/behandlungen/#gesicht' ) ); ?>" class="range-item">
                        <div class="range-item-bg" style="background-image: url('<?php echo esc_url( $t . '/images/gesicht.webp' ); ?>');"></div>
                        <div class="range-item-overlay"></div>
                        <div class="range-item-content">
                            <div class="range-number">4</div>
                            <div class="range-title"><em>Gesicht &amp;</em><span class="range-title-caps">Zahnbleaching</span></div>
                        </div>
                    </a>
                </div>

                <div class="range-grid fade-up" data-delay="2" style="border-top: none;">
                    <a href="<?php echo esc_url( home_url( '/behandlungen/#pmu' ) ); ?>" class="range-item">
                        <div class="range-item-bg" style="background-image: url('<?php echo esc_url( $t . '/images/permanent-makeup.webp' ); ?>');"></div>
                        <div class="range-item-overlay"></div>
                        <div class="range-item-content">
                            <div class="range-number">5</div>
                            <div class="range-title"><em>Permanent</em><span class="range-title-caps">Make-Up</span></div>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/behandlungen/#makeup' ) ); ?>" class="range-item">
                        <div class="range-item-bg" style="background-image: url('<?php echo esc_url( $t . '/images/makeup.webp' ); ?>');"></div>
                        <div class="range-item-overlay"></div>
                        <div class="range-item-content">
                            <div class="range-number">6</div>
                            <div class="range-title"><em>Professionelles</em><span class="range-title-caps">Make-Up</span></div>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/behandlungen/#nails' ) ); ?>" class="range-item">
                        <div class="range-item-bg" style="background-image: url('<?php echo esc_url( $t . '/images/nails.webp' ); ?>');"></div>
                        <div class="range-item-overlay"></div>
                        <div class="range-item-content">
                            <div class="range-number">7</div>
                            <div class="range-title"><em>Nails &amp;</em><span class="range-title-caps">Füsse</span></div>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/behandlungen/#body' ) ); ?>" class="range-item">
                        <div class="range-item-bg" style="background-image: url('<?php echo esc_url( $t . '/images/body.webp' ); ?>');"></div>
                        <div class="range-item-overlay"></div>
                        <div class="range-item-content">
                            <div class="range-number">8</div>
                            <div class="range-title"><em>Body</em><span class="range-title-caps">Treatments</span></div>
                        </div>
                    </a>
                </div>

                <div style="margin-top: var(--space-lg); text-align: center;" class="fade-up">
                    <a href="<?php echo esc_url( home_url( '/behandlungen/' ) ); ?>" class="btn">Alle Behandlungen &amp; Preise ansehen</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== ABOUT DANIELA SPLIT ========== -->
    <section class="about-split">
        <div class="about-img-col">
            <img src="<?php echo esc_url( $t . '/images/daniela.webp' ); ?>" alt="Daniela – All in one Beauty Kosmetikexpertin" loading="lazy">
        </div>
        <div class="about-text-col fade-right">
            <div class="signpost">
                <span class="signpost-text">Über Daniela</span>
                <div class="signpost-line"></div>
            </div>
            <h2><em>Ihre Schönheit,</em><br><span class="caps">meine Berufung</span></h2>
            <p>Seit 2005 schlägt mein Herz für die Beauty-Branche. Was damals als Hobby begann, ist über die Jahre zu meiner Berufung geworden. Meine Basis bilden die abgeschlossenen Lehren als Coiffeuse EFZ und Kosmetikerin EFZ sowie der abgeschlossene V-NISSG.</p>
            <p>2007 habe ich voller Stolz mein erstes Studio eröffnet – damals noch unter einem anderen Namen. Nun bin ich bewusst zu meinen Wurzeln zurückgekehrt – als Ein-Frau-Betrieb, näher und persönlicher für meine Kundinnen und Kunden.</p>
            <div style="margin-top: 1.5rem; display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="<?php echo esc_url( home_url( '/ueber-mich/' ) ); ?>" class="arrow-link">
                    <span>Mehr über mich</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" viewBox="0 0 21 14" fill="none"><path d="M20.1336 7.00037C16.2576 7.00037 13.1152 3.86612 13.1152 0M20.1336 7.00037C16.2576 7.00037 13.1152 10.1339 13.1152 14M20.1336 7.00037L0 7" stroke="currentColor"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ========== STANDORTE PREVIEW ========== -->
    <section class="section-padding">
        <div class="page-padding">
            <div class="container">
                <div class="signpost fade-up"><span class="signpost-text">Meine Standorte</span><div class="signpost-line"></div></div>
                <h2 class="fade-up" style="margin-bottom: var(--space-md);"><em>Zwei Salons.</em> <span class="caps">Ein Anspruch.</span></h2>
                <div class="standort-grid scale-in">
                    <div class="standort-card">
                        <div class="signpost"><span class="signpost-text">Salon 01</span><div class="signpost-line"></div></div>
                        <h3><em>All in one Beauty</em><br><span class="caps">Gränichen</span></h3>
                        <p>Mein Hauptsalon mit dem vollständigen Angebot.</p>
                        <ul class="standort-hours">
                            <li><span>Mo–Fr</span><span>08:00–20:00 Uhr</span></li>
                            <li><span>Sa</span><span>08:00–18:00 Uhr</span></li>
                        </ul>
                        <div style="margin-top: 1.5rem;">
                            <a href="https://allinone.hairlist.ch/termin" target="_blank" rel="noopener" class="btn" style="width: 100%; text-align: center;">Termin buchen Gränichen</a>
                        </div>
                    </div>
                    <div class="standort-card">
                        <div class="signpost"><span class="signpost-text">Salon 02</span><div class="signpost-line"></div></div>
                        <h3><em>All in one Beauty</em><br><span class="caps">Suhr</span></h3>
                        <p>Mein zweiter Standort im Raum Aarau.</p>
                        <ul class="standort-hours">
                            <li><span>Mo–Fr</span><span>08:30–19:30 Uhr</span></li>
                            <li><span>Sa</span><span>08:00–17:30 Uhr</span></li>
                        </ul>
                        <div style="margin-top: 1.5rem;">
                            <a href="https://allinone.hairlist.ch/termin" target="_blank" rel="noopener" class="btn" style="width: 100%; text-align: center;">Termin buchen Suhr</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section-padding" style="padding-top: 0;">
        <div class="page-padding">
            <div class="container">
                <div class="section-divider"></div>
                <div style="padding-top: var(--space-xl);">
                    <div class="signpost fade-up"><span class="signpost-text">Häufige Fragen</span><div class="signpost-line"></div></div>
                    <h2 class="fade-up" style="margin-bottom: var(--space-lg);"><em>Noch Fragen?</em> <span class="caps">Ich habe Antworten.</span></h2>

                    <div class="faq-grid fade-up">
                        <div class="faq-item">
                            <button class="faq-question" aria-expanded="false">
                                <span>Was kostet eine Wimpernverlängerung bei All in one Beauty?</span>
                                <i class="fa-solid fa-plus faq-icon" aria-hidden="true"></i>
                            </button>
                            <div class="faq-answer">
                                <p>Eine Neuanlage Full Set kostet CHF 149.–. Auffüllen je nach Zeitraum von CHF 59.– bis CHF 119.–. Ich biete Classic, Volume und Mega Volume Wimpernverlängerungen in meinen Salons in Gränichen und Suhr an.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question" aria-expanded="false">
                                <span>Bietet All in one Beauty Permanent Make-Up an?</span>
                                <i class="fa-solid fa-plus faq-icon" aria-hidden="true"></i>
                            </button>
                            <div class="faq-answer">
                                <p>Ja, ich biete professionelles Permanent Make-Up und Microblading für Augenbrauen (ab CHF 185.–), Lippenkontur (ab CHF 180.–) und Lidstriche (ab CHF 130.–) in Gränichen und Suhr an.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question" aria-expanded="false">
                                <span>Wo befinden sich die All in one Beauty Salons?</span>
                                <i class="fa-solid fa-plus faq-icon" aria-hidden="true"></i>
                            </button>
                            <div class="faq-answer">
                                <p>Ich habe zwei Standorte im Kanton Aargau: Den Hauptsalon in 5722 Gränichen (Mo–Fr 08:00–20:00, Sa 08:00–18:00) und einen Salon in 5034 Suhr (Mo–Fr 08:30–19:30, Sa 08:00–17:30).</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question" aria-expanded="false">
                                <span>Wie kann ich einen Termin buchen?</span>
                                <i class="fa-solid fa-plus faq-icon" aria-hidden="true"></i>
                            </button>
                            <div class="faq-answer">
                                <p>Online unter allinone.hairlist.ch/termin, per WhatsApp an 076 503 66 63, per E-Mail an info@all-in-one-beauty.ch oder telefonisch. Die Online-Buchung ist rund um die Uhr verfügbar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="cta-section">
        <img src="<?php echo esc_url( $t . '/images/cta.webp' ); ?>" alt="All in one Beauty Kosmetikbehandlung" class="cta-bg" loading="lazy">
        <div class="cta-overlay"></div>
        <div class="cta-content fade-up">
            <div class="signpost" style="justify-content: center;"><span class="signpost-text" style="color: var(--clr-bg);">Jetzt Termin sichern</span><div class="signpost-line" style="background: var(--clr-bg);"></div></div>
            <h2><em>Bereit für Ihren</em> Verwöhn-Moment?</h2>
            <p>Buchen Sie Ihren Termin online, per WhatsApp oder direkt telefonisch.</p>
            <div class="cta-actions">
                <a href="https://allinone.hairlist.ch/termin" target="_blank" rel="noopener" class="btn">Jetzt Termin buchen</a>
                <a href="https://wa.me/41765036663" target="_blank" rel="noopener" class="btn btn-whatsapp"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
