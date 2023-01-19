<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'elfee' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '|jL)|ae:ddE4|;/5w5o5;~JP?>x3aW]at,rBAp(V=nd]y%!yZ=[Xp4RWw@A&M^:j' );
define( 'SECURE_AUTH_KEY',  'y!^f@a!*3Xx-l(}|^vOPCGKu)ePg!vtlIJ)u11AjQ.n|,G4>STure=dCX!N(LO?e' );
define( 'LOGGED_IN_KEY',    'Map&=OWSj^:yz-d7n0Iqh,ms>+`u#xK0,CdBp^vUJ)Z*9x33NaLcR,KP(=TZBNsV' );
define( 'NONCE_KEY',        '1&dx4AqZ~z.HbLW;>vd4`_SPOWpkJ7da|AEOWXbtUQqF5@=N41([Pk.GgG:skLGJ' );
define( 'AUTH_SALT',        'Mli924Xa~%SE4*hxc|yy:)P;u/Q.XigT6L [0OA_]4tV5LZm42L6bn6_M#a4ViwN' );
define( 'SECURE_AUTH_SALT', 'Vd{kR,A[U*hM&e&|lu##I/{ c)Imf>d]vPDU}B<S)U/?tH3&#*@GI=s!8GtD+<<Y' );
define( 'LOGGED_IN_SALT',   '/MY&!(PD-2}7U/YnIWDc`Bmr+>u|)/Dykb?w5&u%iVo^KHd$y$yX>0B.Qg6]qoB#' );
define( 'NONCE_SALT',       '=w5Hq6#eM;tZe^4@s%16ya @m~PM1[x((EwYHbuEZM7#?b,2FF=GqXrlT,r&C]bF' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
