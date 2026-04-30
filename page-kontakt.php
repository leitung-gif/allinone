<?php
/**
 * Template Name: Standorte & Kontakt
 * Contact & locations page.
 */
get_header();
$t = get_template_directory_uri();
?>

    <!-- PAGE HEADER -->
    <section class="page-hero">
        <div class="page-padding">
            <div class="container fade-up">
                <div class="signpost"><span class="signpost-text">Ich freue mich auf Sie</span><div class="signpost-line"></div></div>
                <h1><em>Standorte &amp;</em> <span class="caps">Kontakt</span></h1>
                <p style="max-width: 700px;">Zwei Salon-Standorte im Herzen des Aargaus. Ob Gränichen oder Suhr – ich bin für Sie da. Buchen Sie Ihren Wunschtermin online, per WhatsApp, telefonisch oder per E-Mail.</p>
            </div>
        </div>
    </section>

    <!-- BOOKING CARDS -->
    <section class="section-padding" style="padding-bottom: 0;">
        <div class="page-padding">
            <div class="container">
                <div class="signpost fade-up"><span class="signpost-text">Direkt buchen</span><div class="signpost-line"></div></div>
                <h2 class="fade-up" style="margin-bottom: var(--space-lg);"><em>Ihr Termin.</em> <span class="caps">Sofort gebucht.</span></h2>

                <div class="contact-grid scale-in">
                    <div class="contact-card">
                        <i class="fa-solid fa-calendar-alt contact-icon"></i>
                        <h3><em>Online</em><br><span class="caps">Termin buchen</span></h3>
                        <p>Mein Terminbuchungssystem ist rund um die Uhr für Sie geöffnet. Wählen Sie Ihren gewünschten Salon, Ihre Behandlung und Ihren Wunschtermin – einfach, schnell und unkompliziert. Sie erhalten sofort eine Bestätigung per E-Mail.</p>
                        <a href="https://www.treatwell.ch/" class="btn" style="width: 100%;" onclick='wahanda.openOnlineBookingWidget("https://buchung.treatwell.ch/ort/520140/menue/"); return false;' target="_blank">Jetzt online buchen</a>
                    </div>
                    <div class="contact-card">
                        <i class="fa-brands fa-whatsapp contact-icon"></i>
                        <h3><em>WhatsApp</em><br><span class="caps">Direktnachricht</span></h3>
                        <p>Sie möchten sich vorab beraten lassen oder haben eine spezielle Anfrage? Schreiben Sie mir unkompliziert per WhatsApp. Ich antworte Ihnen in der Regel innerhalb weniger Stunden.</p>
                        <a href="https://wa.me/41765036663" target="_blank" rel="noopener" class="btn" style="width: 100%;">WhatsApp Chat starten</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STANDORTE -->
    <section class="section-padding">
        <div class="page-padding">
            <div class="container">
                <div class="signpost fade-up"><span class="signpost-text">Meine zwei Salons</span><div class="signpost-line"></div></div>
                <h2 class="fade-up" style="margin-bottom: var(--space-md);"><em>Zwei Standorte.</em> <span class="caps">Ein Qualitätsversprechen.</span></h2>
                <p class="fade-up" style="max-width: 600px;">Beide Salons bieten das vollständige Behandlungsspektrum von All in one Beauty. Modernste Ausstattung, eine warme Atmosphäre und höchste Hygienestandards erwarten Sie an beiden Standorten.</p>

                <div class="standort-grid scale-in">
                    <div class="standort-card">
                        <div class="signpost"><span class="signpost-text">Salon 01 – Hauptsitz</span><div class="signpost-line"></div></div>
                        <h3><em>All in one Beauty</em><br><span class="caps">Gränichen</span></h3>
                        <p>Mein Hauptstandort mit dem vollständigen Angebot aller Behandlungskategorien. Hier finden auch meine Academy-Kurse statt. Der Salon verfügt über grosszügige Behandlungsräume, eine ruhige Atmosphäre und kostenlose Parkplätze direkt vor der Tür.</p>
                        <ul class="standort-hours">
                            <li><span>Montag</span><span>08:00–20:00</span></li>
                            <li><span>Dienstag</span><span>08:00–20:00</span></li>
                            <li><span>Mittwoch</span><span>08:00–20:00</span></li>
                            <li><span>Donnerstag</span><span>08:00–20:00</span></li>
                            <li><span>Freitag</span><span>08:00–20:00</span></li>
                            <li><span>Samstag</span><span>08:00–18:00</span></li>
                            <li><span>Sonntag</span><span>Geschlossen</span></li>
                        </ul>
                        <div style="margin-top: 1.5rem;">
                            <a href="https://www.treatwell.ch/" class="btn" style="width: 100%; text-align: center;" onclick='wahanda.openOnlineBookingWidget("https://buchung.treatwell.ch/ort/520140/menue/"); return false;' target="_blank">Termin Gränichen buchen</a>
                        </div>
                    </div>
                    <div class="standort-card">
                        <div class="signpost"><span class="signpost-text">Salon 02</span><div class="signpost-line"></div></div>
                        <h3><em>All in one Beauty</em><br><span class="caps">Suhr</span></h3>
                        <p>Mein zweiter Salon im Raum Aarau – ideal für Kundinnen und Kunden aus Suhr, Aarau, Buchs und Umgebung. Auch hier erwartet Sie der gleiche hohe Qualitätsstandard und das vollständige Behandlungsangebot von All in one Beauty.</p>
                        <ul class="standort-hours">
                            <li><span>Montag</span><span>08:30–19:30</span></li>
                            <li><span>Dienstag</span><span>08:30–19:30</span></li>
                            <li><span>Mittwoch</span><span>08:30–19:30</span></li>
                            <li><span>Donnerstag</span><span>08:30–19:30</span></li>
                            <li><span>Freitag</span><span>08:30–19:30</span></li>
                            <li><span>Samstag</span><span>08:00–17:30</span></li>
                            <li><span>Sonntag</span><span>Geschlossen</span></li>
                        </ul>
                        <div style="margin-top: 1.5rem;">
                            <a href="https://www.treatwell.ch/" class="btn" style="width: 100%; text-align: center;" onclick='wahanda.openOnlineBookingWidget("https://buchung.treatwell.ch/ort/520140/menue/"); return false;' target="_blank">Termin Suhr buchen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KONTAKT DETAILS -->
    <section class="section-padding" style="padding-top: 0;">
        <div class="page-padding">
            <div class="container">
                <div class="section-divider"></div>
                <div style="padding-top: var(--space-xl);">
                    <div class="signpost fade-up"><span class="signpost-text">Alle Kontaktmöglichkeiten</span><div class="signpost-line"></div></div>
                    <h2 class="fade-up" style="margin-bottom: var(--space-md);"><em>So erreichen</em> <span class="caps">Sie mich</span></h2>
                    <p class="fade-up" style="max-width: 600px;">Egal ob per Telefon, E-Mail, WhatsApp oder über meine Social-Media-Kanäle – ich bin für Sie erreichbar und beantworte Ihre Anfragen schnell und persönlich.</p>

                    <div class="social-grid fade-up">
                        <a href="tel:+41765036663" class="social-card">
                            <i class="fa-solid fa-phone"></i>
                            <span>Anrufen</span>
                        </a>
                        <a href="mailto:info@all-in-one-beauty.ch" class="social-card">
                            <i class="fa-solid fa-envelope"></i>
                            <span>E-Mail</span>
                        </a>
                        <a href="https://wa.me/41765036663" target="_blank" rel="noopener" class="social-card">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>WhatsApp</span>
                        </a>
                        <a href="https://www.treatwell.ch/" class="social-card" onclick='wahanda.openOnlineBookingWidget("https://buchung.treatwell.ch/ort/520140/menue/"); return false;' target="_blank">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>Online buchen</span>
                        </a>
                    </div>

                    <div style="margin-top: var(--space-lg);">
                        <div class="signpost fade-up"><span class="signpost-text">Follow &amp; Connect</span><div class="signpost-line"></div></div>
                        <p class="fade-up">Bleiben Sie auf dem Laufenden: Folgen Sie mir auf Instagram und Facebook für Vorher/Nachher-Bilder, Angebote, Neuigkeiten aus meinen Salons und exklusive Einblicke hinter die Kulissen.</p>
                        <div class="social-grid fade-up" style="grid-template-columns: 1fr 1fr;">
                            <a href="https://www.instagram.com/all_in_one_beauty_" target="_blank" rel="noopener" class="social-card">
                                <i class="fa-brands fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a href="https://www.facebook.com/allinonebeautyaarau/" target="_blank" rel="noopener" class="social-card">
                                <i class="fa-brands fa-facebook-f"></i>
                                <span>Facebook</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GUTSCHEIN -->
    <section class="section-padding" style="padding-top: 0;">
        <div class="page-padding">
            <div class="container">
                <div class="section-divider"></div>
                <div class="testimonial-wrapper fade-up">
                    <div class="signpost" style="justify-content: center;"><span class="signpost-text">Das perfekte Geschenk</span><div class="signpost-line"></div></div>
                    <p class="testimonial-quote">"Schenken Sie Ihren Liebsten einen Moment purer Schönheit und Entspannung."</p>
                    <p class="testimonial-author">– All in one Beauty Gutscheine</p>
                    <div style="margin-top: var(--space-md);">
                        <a href="https://www.all-in-one-beauty.ch/shop/gutschein-2/" target="_blank" rel="noopener" class="btn">Gutschein kaufen</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <img src="<?php echo esc_url( $t . '/images/cta.webp' ); ?>" alt="Kosmetikbehandlung buchen" class="cta-bg" loading="lazy">
        <div class="cta-overlay"></div>
        <div class="cta-content fade-up">
            <div class="signpost" style="justify-content: center;"><span class="signpost-text" style="color: var(--clr-bg);">Bereit?</span><div class="signpost-line" style="background: var(--clr-bg);"></div></div>
            <h2><em>Sichern Sie sich</em> jetzt Ihren Termin.</h2>
            <p>Ob in Gränichen oder in Suhr – ich freue mich darauf, Sie persönlich willkommen zu heissen. Buchen Sie jetzt und erleben Sie Kosmetik auf höchstem Niveau.</p>
            <a href="https://www.treatwell.ch/" class="btn" onclick='wahanda.openOnlineBookingWidget("https://buchung.treatwell.ch/ort/520140/menue/"); return false;' target="_blank">Jetzt Termin vereinbaren</a>
        </div>
    </section>

<?php get_footer(); ?>
