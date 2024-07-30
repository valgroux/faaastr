<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container--1600">
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
                            <img src="<?= get_template_directory_uri() ?>/src/img/logo.webp" alt="FAAASTR, Optimisez, Automatisez, Se démarquer" width="154" height="47" loading="lazy">
                        </a>
                    <?php endif; ?>
                </div>

                <nav class="header__content__center" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-desktop-menu', 'menu' => 'header-desktop', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>', 'current_class' => 'current-menu-item' ) ); ?>
                </nav>

                <div class="header__content__right">
                    <button class="cta">
                        <div class="cta__icon cta__icon--projet"></div>
                        <a href="https://cal.com/faaastr/consultation" target="blank">Tu as un projet ? Parlons en</a>
                    </button>
                </div>

                <div id="menu" class="header__content__burger">
                    <button class="header__content__burger__btn">
                        <span class="bar bar-top"></span>
                        <span class="bar bar-bottom"></span>
                    </button>
                    <div class="header__content__burger__wrapper">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-desktop-menu', 'menu' => 'header-desktop', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>', 'current_class' => 'current-menu-item' ) ); ?>
                    </div>
                </div>

            </div>
        </div>
    </header>
</body>
</html>
