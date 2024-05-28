<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-desktop-menu',
                'menu' => 'header-desktop',
                // 'menu_id'        => 'header-desktop-menu',
                // 'container'      => 'div',
                // 'container_class' => 'header-desktop-menu-container',
                // 'menu_class'     => 'header-desktop-menu',
            ));
            ?>
        </nav>
    </header>
