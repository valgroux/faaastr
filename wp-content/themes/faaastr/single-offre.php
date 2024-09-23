<?php
/*
Template Name: Article "Nos offres"
Template Post Type: post, page
*/
get_header(); ?>

<div class="container--1600">

    <div class="breadcrumb reveal-fast">
        <div class="breadcrumb__content">
            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            } ?>
        </div>
    </div>
</div>

    <!-- Contenu de l'article -->
    <div class="content">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>

<!-- SECTION METHODE -->
<?php get_template_part('src/template-parts/components/component-team')?>

<!-- SECTION METHODE -->
<?php get_template_part('src/template-parts/components/component-performance')?>


<?php get_footer(); ?>
