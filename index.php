<?php
/**
 * WordPress Fallback Template.
 * Required by WordPress. Redirects to front-page.php.
 */
get_header();
?>
    <section class="page-hero">
        <div class="page-padding">
            <div class="container">
                <h1><?php the_title(); ?></h1>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
