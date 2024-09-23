<?php
/*
Template Name: En construction
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

<section class="redirection">

    <div class="container--1200">

        <div class="redirection__container">

            <div class="redirection__container__left">
                    <h1 class="h1">Patience..</h1>
                    <p class="redirection__container__left__texte">Cette page est en cours de construction</p>

                    <button class="cta">
                            <div class="cta__icon cta__icon--arrow"></div>
                            <a href="<?php echo home_url(); ?>" target="blank">Retour à l'accueil</a>
                    </button>
                </div>

            <div class="redirection__container__right redirection__container__right--construction"></div>

        </div>

    </div>

</section>

<?php get_footer(); ?>