<?php
// Activer le support des balises <title>
add_theme_support('title-tag');

// Activer le support des images mises en avant
add_theme_support('post-thumbnails');

// Activer le support du logo personnalisé
add_theme_support('custom-logo');

// Activer le support des balises HTML5
add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
));

// Activer le support des liens RSS automatiques
add_theme_support('automatic-feed-links');

// Activer le support des menus personnalisés
add_theme_support('menus');

// Enregistrer les menus
function faaastr_register_menus() {
    register_nav_menus(array(
        'header-menu' => __('Header Desktop Menu', 'faaastr'),
        'footer-menu' => __('Footer Menu', 'faaastr')
    ));
}
add_action('init', 'faaastr_register_menus');

// Ajouter les styles et scripts
function faaastr_enqueue_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'faaastr_enqueue_styles');
?>
