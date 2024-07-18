<?php wp_footer(); ?>
<footer class="footer">
    <div class="container--1600">

        <div class="footer__text">
            <p>Prêt à gagner du temps ?</p>
        </div>

        <div class="footer__cta">
            <p>Let's Talk !</p>
        </div>

        <div class="footer__info">
            <p>Faaastr.com<br></p>
            <p>620 rue des Fleurs<br></p>
            <p>+33 2 78 45 12 48 96<br></p>
        </div>

        <div class="footer__separator"></div>

        <div class="footer__menu">

            <div class="footer__menu__left">
                <div class="footer__menu__left__logo"></div>
                <p>Marre d'être lent ? On développe les outils qui te font gagner du temps et de l'argent</p>
                <div class="footer__menu__left__note">
                    <div class="footer__menu__left__note__icone"></div>
                    <p>5.0 <span>(+100) clients</span></p>
                </div>
            </div>

            <div class="footer__menu__right">
                <nav class="footer__content__center" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-desktop-menu', 'menu' => 'header-desktop', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>', 'current_class' => 'current-menu-item' ) ); ?>
                </nav>
            </div>

        </div>

    </div>
</footer>
<script type="module" src="<?php echo esc_url(get_template_directory_uri() . '/src/js/main.js'); ?>"></script>
</body>
</html>
