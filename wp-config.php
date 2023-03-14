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
define( 'DB_NAME', 'cafeteria' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '}0>J$bV[>YCF~Pc3/r_iRh9FncG3QN~)-&>Kn?,)`SpHF]DK4mR|6_p^ 1Eeh6bz' );
define( 'SECURE_AUTH_KEY',  '5.6=ZxVXiPi5w$X$_9A{H8&L(uXCFVt6Tq!}4h:%iJn4ROnv^O-9yp]f>,tD?sXJ' );
define( 'LOGGED_IN_KEY',    'FhCHk_RoA 5`S9L:lpeIYtmI;ClxK<>iBBZ-)~RT&$=pw:]CZ0,LH&UNu3JJl&2K' );
define( 'NONCE_KEY',        'k[s`K2{bTDQayLR4ht9H54B]w;-dt8fay$@hk.F x#ljm#ovmc+zkRzxoxs6=[o?' );
define( 'AUTH_SALT',        'ELwC3{-*}!x=P,$PFrg,O~Sh`DO  #9:Fm-]B-1n(4zy<!]rll,|S[JK|#Tmc.cH' );
define( 'SECURE_AUTH_SALT', ')XJ4U/@lg`,8!1&s9g2VI</%0h?fNXolCV0CTJ !lx7s*fConMdS^l^vLkG:DG1V' );
define( 'LOGGED_IN_SALT',   'cbW wWxi9B7<nb%_+-fMx;f+k?j!2VE$!{jwO%s=;wHt*a>.#3b.fPvPk4p807t|' );
define( 'NONCE_SALT',       'l&^.+@o8[Ayqe*>V4V#Sn0,Q0Zq:h}_Az-oAN<yBgED}Ne!`lHaFKTfxvIX@yPop' );
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
