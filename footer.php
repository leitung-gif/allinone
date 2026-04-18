    </main>

    <!-- ========== FOOTER ========== -->
    <footer class="footer">
        <div class="page-padding">
            <div class="container">
                <div class="footer-grid">
                    <div class="footer-col">
                        <div class="signpost"><span class="signpost-text">Buchung &amp; Kontakt</span><div class="signpost-line"></div></div>
                        <p class="footer-info">Für Buchungen und Anfragen<br>kontaktieren Sie uns gerne.</p>
                        <a href="https://allinone.hairlist.ch/termin" target="_blank" rel="noopener" class="footer-text-link">Online Termin buchen</a><br>
                        <a href="tel:+41765036663" class="footer-text-link">T: +41 76 503 66 63</a><br>
                        <a href="mailto:info@all-in-one-beauty.ch" class="footer-text-link">E: info@all-in-one-beauty.ch</a>
                        <div class="social-links">
                            <a href="https://www.instagram.com/all_in_one_beauty_" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.facebook.com/allinonebeautyaarau/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://wa.me/41765036663" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="footer-col">
                        <div class="signpost"><span class="signpost-text">Salon Gränichen</span><div class="signpost-line"></div></div>
                        <p class="footer-info">Mo–Fr: 08:00–20:00 Uhr<br>Sa: 08:00–18:00 Uhr</p>
                    </div>
                    <div class="footer-col">
                        <div class="signpost"><span class="signpost-text">Salon Suhr</span><div class="signpost-line"></div></div>
                        <p class="footer-info">Mo–Fr: 08:30–19:30 Uhr<br>Sa: 08:00–17:30 Uhr</p>
                    </div>
                    <div class="footer-col">
                        <div class="signpost"><span class="signpost-text">Links</span><div class="signpost-line"></div></div>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-text-link">Home</a><br>
                        <a href="<?php echo esc_url( home_url( '/behandlungen/' ) ); ?>" class="footer-text-link">Behandlungen</a><br>
                        <a href="<?php echo esc_url( home_url( '/ueber-mich/' ) ); ?>" class="footer-text-link">Über Daniela</a><br>
                        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="footer-text-link">Standorte &amp; Kontakt</a><br>
                        <a href="https://www.all-in-one-beauty.ch/academy/" target="_blank" rel="noopener" class="footer-text-link">Academy</a><br>
                        <a href="https://www.all-in-one-beauty.ch/shop/gutschein-2/" target="_blank" rel="noopener" class="footer-text-link">Gutschein kaufen</a>
                    </div>
                </div>
                <div class="footer-credit" style="text-align:center;padding:0.75rem 0;font-size:0.7rem;color:var(--clr-text-muted);letter-spacing:0.08em;text-transform:uppercase;">Made by <a href="https://www.lorien.group/" target="_blank" rel="noopener" style="color:var(--clr-accent);">Lorien Group</a></div>
                <div class="footer-bottom">
                    <div class="footer-copyright">&copy; <?php echo date( 'Y' ); ?> All in one Beauty by Daniela. Alle Rechte vorbehalten.</div>
                    <div class="footer-legal">
                        <a href="<?php echo esc_url( home_url( '/impressum/' ) ); ?>">Impressum</a>
                        <a href="<?php echo esc_url( home_url( '/agb/' ) ); ?>">AGB</a>
                        <a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>">Datenschutz</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent Banner -->
    <div class="cookie-consent" role="dialog" aria-label="Cookie-Hinweis" style="position:fixed;bottom:0;left:0;right:0;background:var(--clr-text);color:var(--clr-bg);padding:1.25rem 5%;display:none;z-index:9999;align-items:center;justify-content:space-between;gap:1rem;flex-wrap:wrap;font-size:0.8125rem;font-family:var(--font-body);">
        <p style="margin:0;color:rgba(255,252,245,0.8);flex:1;">Wir verwenden Cookies, um Ihnen die bestmögliche Erfahrung zu bieten. <a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>" style="color:var(--clr-accent);text-decoration:underline;">Datenschutz</a></p>
        <div style="display:flex;gap:0.75rem;">
            <button class="cookie-accept" style="padding:0.6rem 1.5rem;background:var(--clr-accent);color:#fff;border:none;font-family:var(--font-body);font-size:0.7rem;text-transform:uppercase;letter-spacing:0.12em;font-weight:500;cursor:pointer;">Akzeptieren</button>
            <button class="cookie-decline" style="padding:0.6rem 1.5rem;background:transparent;color:var(--clr-bg);border:1px solid rgba(255,252,245,0.3);font-family:var(--font-body);font-size:0.7rem;text-transform:uppercase;letter-spacing:0.12em;font-weight:500;cursor:pointer;">Ablehnen</button>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
