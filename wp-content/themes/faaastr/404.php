<?php /* Template Name: 404 */ ?>

<?php get_header();?>

<section class="redirection">

    <div class="container--1200">

        <div class="redirection__container">

            <div class="redirection__container__left">
                    <h1 class="h1">Oups !</h1>
                    <p class="redirection__container__left__texte">La page que vous recherchez semble introuvable</p>

                    <a class="cta" href="<?php echo home_url(); ?>">
                        <div class="cta__icon cta__icon--arrow"></div>
                        Retour à l'accueil
                    </a>
                </div>

            <div class="redirection__container__right"></div>

        </div>

    </div>

</section>

<?php get_footer();?>