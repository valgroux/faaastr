<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container--1700">
            <div class="header__content">

                <div class="header__content__left">
                    <?php if(is_front_page()) : ?>
                        <h1>
                            <a href="<?= esc_url(home_url( '/' )); ?>">
                                <img src="<?= get_template_directory_uri() ?>/src/img/logo.webp" alt="FAAASTR, Optimisez, Automatisez, Se démarquer" width="154" height="47" loading="lazy">
                            </a>
                        </h1>
                    <?php else : ?>
                        <a href="<?= esc_url( home_url( '/' )); ?>">
                            <img src="<?= get_template_directory_uri() ?>/assets/svg/logo.svg" alt="FAAASTR, Optimisez, Automatisez, Se démarquer" width="154" height="47" loading="lazy">
                        </a>
                    <?php endif; ?>
                </div>

                <nav class="header__content__center" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-desktop-menu', 'menu' => 'header-desktop', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>', 'current_class' => 'current-menu-item' ) ); ?>
                </nav>


                <div class="header__content__right">
                </div>
                
            </div>
        </div>
    </header>