<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'projetTamTamLovers');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wy.]q:Z@avHSv^KAZWI`.Ga9j+%1,/%S|=@IoRkEcluSR?vs0s]ofE0^IN`EnBL1');
define('SECURE_AUTH_KEY',  'eZh7UH/g9CognEz$*owp(71 jc9P;>sv.hf,!]BP^jYO$as^WNLDu^S[^[n3INWA');
define('LOGGED_IN_KEY',    '@SXYjU0l_nu_&::M3gw}f8jC Wq152py,<F>sLnU;>6$.vlDN_:VYs(2Fm?g+6Sl');
define('NONCE_KEY',        'mH0]UKoE6{hOe=fZaXKv.1C;F<zPmVOc{Xn.>,Ce/PZRI)2?&g,Ka$JrsK&4Eka`');
define('AUTH_SALT',        '>DJn.-.sZ9J#(+bZGHY-u-]quap^Mfvf;LQDY;`FO TGEjj#%c+Nzw@`=iI.J%O>');
define('SECURE_AUTH_SALT', 'S,2casGd{XxH[^:<-/tk$yv5@J}K2zAeDZ*C^>TD+Rx4Sa(UWr3a4DKV@NrgJ]YX');
define('LOGGED_IN_SALT',   'Ob9w`PUmdLH9]*>,/fNKKK0b (r)eh?LR4t)Es%`|>ZxUkjFep.rb@:y|`G@7{2f');
define('NONCE_SALT',       'qf8_y}5P]rb^t%mMI}Yg5i^&,zy>D=,qWfA=wBE9X-|R,ldm ryr 0waW3L&+<Ea');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');