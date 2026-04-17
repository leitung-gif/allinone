<?php
/**
 * Generic Page Template.
 */
get_header();
?>
<main id="main-content">
    <section class="page-hero">
        <div class="page-padding">
            <div class="container fade-up">
                <div class="signpost"><span class="signpost-text">All in one Beauty</span><div class="signpost-line"></div></div>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="page-padding">
            <div class="container">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
