<?php
/**
 * 404 Error Page
 */
get_header();
?>
    <section class="page-hero">
        <div class="page-padding">
            <div class="container fade-up" style="text-align: center;">
                <div class="signpost" style="justify-content: center;"><span class="signpost-text">Seite nicht gefunden</span><div class="signpost-line"></div></div>
                <h1><em>404</em></h1>
                <p style="max-width: 500px; margin: 0 auto;">Die gesuchte Seite existiert nicht oder wurde verschoben. Kehren Sie zur Startseite zurück oder entdecken Sie unsere Behandlungen.</p>
                <div style="margin-top: var(--space-md); display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn">Zur Startseite</a>
                    <a href="<?php echo esc_url( home_url( '/behandlungen/' ) ); ?>" class="btn btn-filled">Behandlungen ansehen</a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
