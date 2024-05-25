<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'faaastr' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a$t>NMU%-b]]]5(6nLl,P2b-vWivUG$BIQT[jZi&jxmQ*tx}ky4m^f,BSou0l1)T' );
define( 'SECURE_AUTH_KEY',  'E%[zR@{z2N+ks2kYn$0yI;*FX#I-+>D5_&O{//m21?<5mF);!/}@KyN<ty!<r/|u' );
define( 'LOGGED_IN_KEY',    'WFu_E k:UD9bE}on6qWrLz }]nGA/j[ EX7wEDCsZm!p;rvtI|ZD5v&o1Ax^IWo$' );
define( 'NONCE_KEY',        '@GShuyPp]~8[JtSf1wQR^ Kq{JhCU(Y_BL(@aoEP~W&6%*es!N*$`7I!(XP(U>CS' );
define( 'AUTH_SALT',        '5#G|0R_I|f<Xg*}XC{XDKfLXArK1y; EW?{a~<?k)s8vZ,DBP9YM?r>,a|Sf0g.G' );
define( 'SECURE_AUTH_SALT', 'SZ;PWO|wlXq][^-rAFBrSwkWAts#;|h-E(;jJOj@%N2B5gB@?/#e5])dniUkbF/<' );
define( 'LOGGED_IN_SALT',   'EH!yE,9Rf5LmU~!8V.b>8~I45%K@Jj]l9j U0Pp]25xF?VCgHEEiR+GU&k>7Exj@' );
define( 'NONCE_SALT',       'Lv*5{oLEAa5+@|UOn| K+aE?FEcT_GXZESlOShU==X3]niCa4[@r<.G#d))qnLbd' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
