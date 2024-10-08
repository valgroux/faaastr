<?php /* Template Name: Page d'accueil */ ?>

<?php get_header();?>


<!-- SECTION MASTHEAD -->
<?php get_template_part('src/template-parts/home/home-masthead')?>

<!-- SECTION TEXTE ANIME -->
<?php get_template_part('src/template-parts/home/home-texte')?>

<!-- SECTION NOS DEFIS -->
<?php get_template_part('src/template-parts/home/home-defis')?>

<!-- SECTION NOS DEFIS -->
<?php get_template_part('src/template-parts/home/home-avantages')?>

<!-- SECTION NOTRE METHODE -->
<?php get_template_part('src/template-parts/components/component-methode')?>

<!-- SECTION AVIS -->
<?php get_template_part('src/template-parts/components/component-avis')?>

<!-- SECTION PERFORMANCE -->
<?php get_template_part('src/template-parts/components/component-performance')?>

<!-- SECTION TEAM -->
<?php get_template_part('src/template-parts/components/component-team')?>

<!-- SECTION BLOG -->
<!-- <?php get_template_part('src/template-parts/home/home-blog')?> -->

<?php get_footer();?>