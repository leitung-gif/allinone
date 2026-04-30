<?php
/**
 * All in one Beauty — Theme Functions
 * Theme setup, asset enqueuing, SEO, GEO & Structured Data.
 */

// ─── Theme Setup ───
function aio_beauty_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => __( 'Hauptnavigation', 'all-in-one-beauty' ),
    ) );
}
add_action( 'after_setup_theme', 'aio_beauty_setup' );

// ─── Auto-configure Reading Settings (runs once) ───
function aio_beauty_configure_reading_settings() {
    if ( get_option( 'aio_beauty_reading_configured' ) ) return;
    update_option( 'show_on_front', 'page' );

    // Find or create front page
    $front = get_page_by_path( 'home' );
    if ( ! $front ) {
        $pages = get_pages();
        foreach ( $pages as $p ) {
            if ( get_page_template_slug( $p->ID ) === 'front-page.php' ) {
                $front = $p;
                break;
            }
        }
    }
    if ( $front ) {
        update_option( 'page_on_front', $front->ID );
    }
    update_option( 'aio_beauty_reading_configured', true );
}
add_action( 'init', 'aio_beauty_configure_reading_settings' );

// ─── Enqueue Styles & Scripts ───
function aio_beauty_enqueue_assets() {
    $t   = get_template_directory_uri();
    $ver = wp_get_theme()->get( 'Version' );

    // Google Fonts — Cormorant Garamond + Inter
    wp_enqueue_style(
        'aio-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&family=Inter:wght@300;400;500;600&display=swap',
        array(),
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'aio-font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );

    // Main design system stylesheet
    wp_enqueue_style(
        'aio-design-system',
        $t . '/styles.css',
        array( 'aio-google-fonts', 'aio-font-awesome' ),
        $ver
    );

    // WP theme stylesheet (header only)
    wp_enqueue_style(
        'aio-style',
        get_stylesheet_uri(),
        array( 'aio-design-system' ),
        $ver
    );

    // Main JS (in footer)
    wp_enqueue_script(
        'aio-main-script',
        $t . '/main.js',
        array(),
        $ver,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'aio_beauty_enqueue_assets' );


// ─── Preload Critical Assets + GEO Discovery ───
function aio_beauty_preload_assets() {
    $t = get_template_directory_uri();
    echo '<link rel="preload" href="' . esc_url( $t . '/images/hero.webp' ) . '" as="image" fetchpriority="high">' . "\n";
    echo '<link rel="preload" href="' . esc_url( $t . '/images/logo.webp' ) . '" as="image">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'aio_beauty_preload_assets', 1 );

// ─── Custom Meta Tags (SEO, OG, GEO) ───
function aio_beauty_meta_tags() {
    $t   = get_template_directory_uri();
    $seo = aio_beauty_get_page_seo();

    // Favicon & Theme Color
    echo '<meta name="theme-color" content="#9C8970">' . "\n";
    echo '<meta name="theme-color" content="#1E1E1E" media="(prefers-color-scheme: dark)">' . "\n";
    echo '<link rel="icon" type="image/svg+xml" href="' . esc_url( $t . '/favicon.svg' ) . '">' . "\n";
    echo '<link rel="icon" type="image/png" sizes="32x32" href="' . esc_url( $t . '/favicon-32x32.png' ) . '">' . "\n";
    echo '<link rel="apple-touch-icon" sizes="180x180" href="' . esc_url( $t . '/apple-touch-icon.png' ) . '">' . "\n";
    echo '<link rel="manifest" href="' . esc_url( $t . '/site.webmanifest' ) . '">' . "\n";
    echo '<meta name="format-detection" content="telephone=no">' . "\n";

    // Language & Region
    echo '<meta http-equiv="content-language" content="de-CH">' . "\n";
    echo '<link rel="alternate" hreflang="de-CH" href="https://www.all-in-one-beauty.ch/">' . "\n";
    echo '<link rel="alternate" hreflang="de" href="https://www.all-in-one-beauty.ch/">' . "\n";
    echo '<link rel="alternate" hreflang="x-default" href="https://www.all-in-one-beauty.ch/">' . "\n";

    // GEO Tags (Gränichen)
    echo '<meta name="geo.region" content="CH-AG">' . "\n";
    echo '<meta name="geo.placename" content="Gränichen">' . "\n";
    echo '<meta name="geo.position" content="47.3575;8.1050">' . "\n";
    echo '<meta name="ICBM" content="47.3575, 8.1050">' . "\n";

    // Page-specific SEO
    echo '<meta name="description" content="' . esc_attr( $seo['description'] ) . '">' . "\n";
    echo '<meta name="keywords" content="' . esc_attr( $seo['keywords'] ) . '">' . "\n";
    echo '<meta name="author" content="All in one Beauty by Daniela">' . "\n";
    echo '<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( $seo['url'] ) . '">' . "\n";

    // Open Graph
    echo '<meta property="og:title" content="' . esc_attr( $seo['title'] ) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $seo['description'] ) . '">' . "\n";
    echo '<meta property="og:image" content="' . esc_url( $t . '/images/hero.webp' ) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url( $seo['url'] ) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:locale" content="de_CH">' . "\n";
    echo '<meta property="og:site_name" content="All in one Beauty by Daniela">' . "\n";

    // Twitter Card
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr( $seo['title'] ) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr( $seo['description'] ) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url( $t . '/images/hero.webp' ) . '">' . "\n";
}
add_action( 'wp_head', 'aio_beauty_meta_tags', 2 );

// ─── Per-Page SEO Data ───
function aio_beauty_get_page_seo() {
    $base = 'https://www.all-in-one-beauty.ch';

    $seo = array(
        'title'       => 'All in one Beauty by Daniela | Premium Kosmetikstudio Gränichen & Suhr',
        'description' => 'All in one Beauty by Daniela – Ihr exklusives Kosmetikstudio im Aargau. Hair Extensions, Wimpern, Permanent Make-Up, Microblading, Gesichtsbehandlungen, Nails, Body Treatments. Salons in Gränichen und Suhr. Jetzt Termin buchen.',
        'keywords'    => 'Kosmetikstudio Gränichen, Kosmetikstudio Suhr, Beauty Salon Aargau, Hair Extensions Aargau, Wimpernverlängerung Gränichen, Permanent Make-Up Suhr, Microblading Aargau, Gesichtsbehandlung Gränichen, Nails Suhr, Body Treatments Aargau, Kosmetikerin EFZ',
        'url'         => $base . '/',
    );

    if ( is_front_page() ) {
        return $seo;
    }

    if ( is_page( 'behandlungen' ) ) {
        $seo = array(
            'title'       => 'Behandlungen | All in one Beauty – Kosmetik, Nails, Extensions, Permanent Make-Up Gränichen & Suhr',
            'description' => 'Alle Behandlungen von All in one Beauty: Hair Extensions, Wimpern & Brauen, Haarentfernung mit Faden, Gesichtsbehandlungen, Zahnbleaching, Permanent Make-Up, Microblading, Make-Up, Nails, Fusspflege, Body Behandlungen. Salons in Gränichen und Suhr.',
            'keywords'    => 'Hair Extensions Gränichen, Wimpernverlängerung Suhr, Permanent Make-Up Aargau, Microblading Gränichen, Gesichtsbehandlung Suhr, Nails Gränichen, Gelnägel Aargau, Bodyforming Suhr, Waxing Gränichen, Zahnbleaching Aargau',
            'url'         => $base . '/behandlungen/',
        );
    } elseif ( is_page( 'ueber-mich' ) ) {
        $seo = array(
            'title'       => 'Über Daniela | All in one Beauty – Kosmetikexpertin im Aargau, Schweiz',
            'description' => 'Lernen Sie Daniela kennen – Gründerin von All in one Beauty, bekannt aus SRF Jobtausch. Ihre Expertin für exklusive Kosmetik, Hair Extensions, Permanent Make-Up und mehr in Gränichen und Suhr.',
            'keywords'    => 'Daniela Kosmetikerin, All in one Beauty Gründerin, SRF Jobtausch, Kosmetikerin EFZ Aargau, Beauty Expertin Gränichen, Kosmetik Academy Suhr',
            'url'         => $base . '/ueber-mich/',
        );
    } elseif ( is_page( 'kontakt' ) ) {
        $seo = array(
            'title'       => 'Standorte & Kontakt | All in one Beauty – Salons in Gränichen & Suhr, Aargau',
            'description' => 'Kontaktieren Sie All in one Beauty: Zwei Standorte in Gränichen und Suhr im Aargau. Termin buchen per Online-System, WhatsApp, Telefon oder E-Mail. Öffnungszeiten, Anfahrt und alle Kontaktdaten.',
            'keywords'    => 'All in one Beauty Kontakt, Kosmetikstudio Gränichen Adresse, Beauty Salon Suhr, Termin buchen Aargau, Öffnungszeiten All in one Beauty',
            'url'         => $base . '/kontakt/',
        );
    } elseif ( is_page( 'impressum' ) ) {
        $seo = array(
            'title'       => 'Impressum | All in one Beauty by Daniela',
            'description' => 'Impressum und rechtliche Angaben von All in one Beauty by Daniela. Kosmetikstudio in Gränichen und Suhr, Kanton Aargau.',
            'keywords'    => 'Impressum All in one Beauty, Kontaktdaten, Handelsregister',
            'url'         => $base . '/impressum/',
        );
    } elseif ( is_page( 'agb' ) ) {
        $seo = array(
            'title'       => 'AGB | All in one Beauty by Daniela',
            'description' => 'Allgemeine Geschäftsbedingungen von All in one Beauty by Daniela. Gültig für alle Dienstleistungen und Behandlungen in meinen Salons in Gränichen und Suhr.',
            'keywords'    => 'AGB All in one Beauty, Geschäftsbedingungen Kosmetikstudio, Stornierung',
            'url'         => $base . '/agb/',
        );
    } elseif ( is_page( 'datenschutz' ) ) {
        $seo = array(
            'title'       => 'Datenschutz | All in one Beauty by Daniela',
            'description' => 'Datenschutzerklärung von All in one Beauty by Daniela. Informationen zur Verarbeitung personenbezogener Daten gemäss dem Schweizer Datenschutzgesetz (DSG).',
            'keywords'    => 'Datenschutz All in one Beauty, DSG, Datenschutzerklärung',
            'url'         => $base . '/datenschutz/',
        );
    }

    return $seo;
}

// ─── Structured Data (JSON-LD) ───
function aio_beauty_structured_data() {
    $t    = get_template_directory_uri();
    $base = 'https://www.all-in-one-beauty.ch';
    $logo = esc_url( $t . '/images/logo.webp' );

    if ( is_front_page() ) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@graph'   => array(
                array(
                    '@type'         => 'BeautySalon',
                    '@id'           => $base . '/#organization',
                    'name'          => 'All in one Beauty by Daniela',
                    'alternateName' => array( 'All in one Beauty', 'All-in-One Beauty Gränichen', 'All in one Beauty Suhr' ),
                    'image'         => $logo,
                    'logo'          => $logo,
                    'url'           => $base . '/',
                    'telephone'     => '+41765036663',
                    'email'         => 'info@all-in-one-beauty.ch',
                    'description'   => 'Premium Kosmetikstudio im Aargau mit zwei Standorten in Gränichen und Suhr. Hair Extensions, Wimpernverlängerung, Permanent Make-Up, Microblading, Gesichtsbehandlungen, Nails, Bodyforming. Bekannt aus SRF Jobtausch. Coiffeuse & Kosmetikerin EFZ.',
                    'address'       => array(
                        array(
                            '@type'           => 'PostalAddress',
                            'addressLocality' => 'Gränichen',
                            'addressRegion'   => 'AG',
                            'postalCode'      => '5722',
                            'addressCountry'  => 'CH',
                        ),
                        array(
                            '@type'           => 'PostalAddress',
                            'addressLocality' => 'Suhr',
                            'addressRegion'   => 'AG',
                            'postalCode'      => '5034',
                            'addressCountry'  => 'CH',
                        ),
                    ),
                    'geo' => array(
                        '@type'     => 'GeoCoordinates',
                        'latitude'  => 47.3575,
                        'longitude' => 8.1050,
                    ),
                    'openingHoursSpecification' => array(
                        array( '@type' => 'OpeningHoursSpecification', 'dayOfWeek' => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' ), 'opens' => '08:00', 'closes' => '20:00' ),
                        array( '@type' => 'OpeningHoursSpecification', 'dayOfWeek' => 'Saturday', 'opens' => '08:00', 'closes' => '18:00' ),
                    ),
                    'priceRange'         => 'CHF 15 - CHF 500',
                    'currenciesAccepted' => 'CHF',
                    'paymentAccepted'    => 'Bargeld, EC-Karte, Kreditkarte, TWINT',
                    'areaServed' => array(
                        array( '@type' => 'City', 'name' => 'Gränichen' ),
                        array( '@type' => 'City', 'name' => 'Suhr' ),
                        array( '@type' => 'City', 'name' => 'Aarau' ),
                        array( '@type' => 'City', 'name' => 'Lenzburg' ),
                        array( '@type' => 'City', 'name' => 'Buchs AG' ),
                        array( '@type' => 'City', 'name' => 'Oberentfelden' ),
                        array( '@type' => 'City', 'name' => 'Unterentfelden' ),
                        array( '@type' => 'State', 'name' => 'Kanton Aargau' ),
                    ),
                    'sameAs' => array(
                        'https://www.instagram.com/all_in_one_beauty_',
                        'https://www.facebook.com/allinonebeautyaarau/',
                    ),
                    'knowsAbout' => array(
                        'Hair Extensions', 'Tape-In Extensions', 'Wimpernverlängerung', 'Lash Lifting', 'Brow Lifting',
                        'Haarentfernung mit Faden', 'Gesichtsbehandlung', 'Microneedling', 'Hydro Aqua Peel',
                        'Zahnbleaching', 'Permanent Make-Up', 'Microblading', 'Nagelmodellage', 'Gelnägel',
                        'Pediküre', 'Bodyforming', 'Kryolipolyse', 'Waxing', 'Sugaring', 'Body Wrapping'
                    ),
                    'hasOfferCatalog' => array(
                        '@type' => 'OfferCatalog',
                        'name'  => 'Kosmetik-Behandlungen',
                        'itemListElement' => array(
                            array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Hair Extensions', 'description' => 'Tape-In und Bonding Extensions mit Premium-Haarqualität' ) ),
                            array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Wimpernverlängerung', 'description' => 'Classic, Volume und Mega Volume Lash Extensions' ) ),
                            array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Permanent Make-Up & Microblading', 'description' => 'Augenbrauen, Lippen und Lidstrich' ) ),
                            array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Gesichtsbehandlungen', 'description' => 'Individuelle Gesichtspflege, Microneedling, Hydro Aqua Peel' ) ),
                            array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Nagelmodellage & Maniküre', 'description' => 'Gel, Acryl, Schellack und Nageldesign' ) ),
                            array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Body Treatments', 'description' => 'Bodyforming, Kryolipolyse, Waxing, Sugaring, Sprühbräune' ) ),
                        ),
                    ),
                ),
                array(
                    '@type'       => 'WebSite',
                    '@id'         => $base . '/#website',
                    'url'         => $base,
                    'name'        => 'All in one Beauty by Daniela',
                    'description' => 'Premium Kosmetikstudio im Aargau – Gränichen & Suhr',
                    'publisher'   => array( '@id' => $base . '/#organization' ),
                    'inLanguage'  => 'de-CH',
                    'potentialAction' => array(
                        '@type'  => 'SearchAction',
                        'target' => array(
                            '@type'       => 'EntryPoint',
                            'urlTemplate' => $base . '/?s={search_term_string}',
                        ),
                        'query-input' => 'required name=search_term_string',
                    ),
                ),
            ),
        );
        echo '<script type="application/ld+json">' . "\n" . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . "\n" . '</script>' . "\n";
    }

    // BreadcrumbList on subpages
    if ( ! is_front_page() ) {
        $crumbs = array( array( 'name' => 'Home', 'url' => $base . '/' ) );

        if ( is_page( 'behandlungen' ) ) {
            $crumbs[] = array( 'name' => 'Behandlungen' );
        } elseif ( is_page( 'ueber-mich' ) ) {
            $crumbs[] = array( 'name' => 'Über Daniela' );
        } elseif ( is_page( 'kontakt' ) ) {
            $crumbs[] = array( 'name' => 'Standorte & Kontakt' );
        } elseif ( is_page( 'impressum' ) ) {
            $crumbs[] = array( 'name' => 'Impressum' );
        } elseif ( is_page( 'agb' ) ) {
            $crumbs[] = array( 'name' => 'AGB' );
        } elseif ( is_page( 'datenschutz' ) ) {
            $crumbs[] = array( 'name' => 'Datenschutz' );
        } elseif ( is_404() ) {
            $crumbs[] = array( 'name' => '404 - Seite nicht gefunden' );
        } else {
            $crumbs[] = array( 'name' => get_the_title() );
        }

        $items = array();
        foreach ( $crumbs as $i => $crumb ) {
            $item = array( '@type' => 'ListItem', 'position' => $i + 1, 'name' => $crumb['name'] );
            if ( isset( $crumb['url'] ) ) $item['item'] = $crumb['url'];
            $items[] = $item;
        }
        echo '<script type="application/ld+json">' . wp_json_encode( array( '@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $items ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
    }

    // FAQPage on Behandlungen
    if ( is_page( 'behandlungen' ) ) {
        $faq = array(
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => array(
                array( '@type' => 'Question', 'name' => 'Was kostet eine Wimpernverlängerung bei All in one Beauty?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Eine Neuanlage Full Set kostet CHF 149.–. Auffüllen je nach Zeitraum zwischen CHF 59.– und CHF 119.–. Ich biete Classic, Volume und Mega Volume in meinen Salons in Gränichen und Suhr an.' ) ),
                array( '@type' => 'Question', 'name' => 'Bietet All in one Beauty Permanent Make-Up an?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Ja, ich biete professionelles Permanent Make-Up und Microblading für Augenbrauen (ab CHF 185.–), Lippenkontur (ab CHF 180.–) und Lidstriche (ab CHF 130.–) in Gränichen und Suhr an.' ) ),
                array( '@type' => 'Question', 'name' => 'Wo befinden sich die All in one Beauty Salons?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Ich habe zwei Standorte: Den Hauptsalon in Gränichen (Mo-Fr 08:00-20:00, Sa 08:00-18:00) und einen zweiten Salon in Suhr (Mo-Fr 08:30-19:30, Sa 08:00-17:30) im Kanton Aargau.' ) ),
                array( '@type' => 'Question', 'name' => 'Wie kann ich einen Termin buchen?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Sie können online über Treatwell auf meiner Website buchen, per WhatsApp unter 076 503 66 63 schreiben oder mich telefonisch erreichen. Alle Buchungswege sind 24/7 verfügbar.' ) ),
            ),
        );
        echo '<script type="application/ld+json">' . wp_json_encode( $faq, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'aio_beauty_structured_data', 5 );

// ─── Remove WP Defaults (Performance & Security) ───
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
