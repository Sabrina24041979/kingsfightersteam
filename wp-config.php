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
define( 'DB_NAME', 'king_fighter_team' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']JsYWw10Sf9F!kKO;;JeWqZ_FB8sP-S^.FNIO#m1am8[6Dn n)H*_g9OV}vQU_(-' );
define( 'SECURE_AUTH_KEY',  '|80aO*N=Dm5T9s2E8v@c9 z?:-y^o#6`5n&bhz9XVcGE </xt%c:btn (Z%ugR})' );
define( 'LOGGED_IN_KEY',    '*Goi>)e?%P:&LU_wR#gXhVEehNyo4^BGD]mI*,_m:P%+^:_Szp#39d8kj#;)$oqO' );
define( 'NONCE_KEY',        '%I?MmO&g>$Ui#iT>uZMX.R{Ma3~u(hGa-.jp+)?s=75bNyK{u9|QhKE&yAC-[P;C' );
define( 'AUTH_SALT',        'R{JBl!%sl<Nskj4?=[GQ?NyMhD<to_ygxPLA+ARK3=CMve~ENvw;dfp!GSP**bm}' );
define( 'SECURE_AUTH_SALT', 'U4!DRf]KEhy_J6nw3bRj$8J}i>InRdB2QYQH_]Kr,T|)j=t>v6-k]2CilNj2rEeE' );
define( 'LOGGED_IN_SALT',   '<^a|-q$Ix-|NfVW{:~GeEB^ PWrgwt%f9 DkW?38/RIiY1{!)WPKRs=Ex!X#(zz=' );
define( 'NONCE_SALT',       '@l~YaG0HeJib?Q0bxGrQLx7xp-cw(=rH2[n-{n<$k+,mBS0%fL2o@GvFO!S}-VUw' );
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
