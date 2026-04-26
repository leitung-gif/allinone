<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Skip Navigation (Accessibility) -->
    <a href="#main-content" class="skip-link" id="skip-nav">Zum Inhalt springen</a>

    <!-- ========== HEADER ========== -->
    <header class="header">
        <div class="page-padding">
            <div class="header-topbar">
                <a href="tel:+41765036663">T: +41 76 503 66 63</a>
                <a href="mailto:info@all-in-one-beauty.ch">E: info@all-in-one-beauty.ch</a>
                <a href="https://wa.me/41765036663" target="_blank" rel="noopener">WhatsApp</a>
            </div>
            <div class="container">
                <div class="nav-container">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.webp' ); ?>" alt="All in one Beauty Logo">
                    </a>
                    <button class="nav-toggle" aria-label="Menu öffnen"><span></span><span></span></button>
                    <nav class="nav-links">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link<?php if ( is_front_page() ) echo ' active'; ?>">Home</a>
                        <a href="<?php echo esc_url( home_url( '/behandlungen/' ) ); ?>" class="nav-link<?php if ( is_page( 'behandlungen' ) ) echo ' active'; ?>">Behandlungen</a>
                        <a href="<?php echo esc_url( home_url( '/ueber-mich/' ) ); ?>" class="nav-link<?php if ( is_page( 'ueber-mich' ) ) echo ' active'; ?>">Über mich</a>
                        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="nav-link<?php if ( is_page( 'kontakt' ) ) echo ' active'; ?>">Standorte &amp; Kontakt</a>
                        <a href="https://allinone.hairlist.ch/termin" target="_blank" rel="noopener" class="btn btn-filled">Termin Buchen</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Floating Booking Button -->
    <a href="https://allinone.hairlist.ch/termin" target="_blank" rel="noopener" class="fab">
        <span class="fab-icon"><i class="fa-solid fa-calendar-check"></i></span>
        <span class="fab-text">Termin Buchen</span>
    </a>

    <main id="main-content">
