<?php
/*
Template Name: Page "Nos offres"
Template Post Type: post, page
*/
get_header(); ?>

<!-- <div class="container--1600">

    <div class="breadcrumb reveal-fast">
        <div class="breadcrumb__content">
            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            } ?>
        </div>
    </div>
</div> -->

<div class="container--1600">
    <a href="https://faaastr.com/nos-offres" class="singleOffre">
        <div class="singleOffre__content">
            <div class="singleOffre__content__left"></div>
            <div class="singleOffre__content__right"><p class="small-text">Retour à la page des offres</p></div>
        </div>
    </a>
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

<!-- SECTION FAQ -->
<?php get_template_part('src/template-parts/components/component-team')?>

<!-- SECTION METHODE -->
<?php get_template_part('src/template-parts/components/component-team')?>

<!-- SECTION METHODE -->
<?php get_template_part('src/template-parts/components/component-performance')?>


<?php get_footer(); ?>