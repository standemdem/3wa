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
define('DB_NAME', 'wolfgang');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'troiswa');

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
define('AUTH_KEY',         'P&ke]set7,FgNMq|v;XRrmE5+>-*z2_0cHi)Dw#e2!?>mIEPdFpzeEQnpY.e261a');
define('SECURE_AUTH_KEY',  '@uK.OJt.P=rl!I=+dHlc!c?0x=kA3I*9=j^%FrA#s_,bm1iXr&Mm*2Cz<sG!+[~-');
define('LOGGED_IN_KEY',    '3VyRamP=_{aX5yjN}BO6LX8Q+aTnI<Rn2/,>M=@VlqW 4Cj~:Q-o?ug^pCo~R{&z');
define('NONCE_KEY',        'ilVfE.r|l$+Y_wjmr%1W;k&v]b[,HxvF)]*jh& u9n}w?bMc4]NaVa^OdMLz>prg');
define('AUTH_SALT',        'fb3:Bn)&KUhI8r4;`h>xrj+D+q#b)~txtvf.@<`ch[g?I^yx{pnbQ]?@]S[aqnn2');
define('SECURE_AUTH_SALT', 's~DT,IOzkO5LI-zNM5@7~9IO7Y:~1nM-63%2SWnm4O6L3?Rz4c?&9-;-Zr?e#D+<');
define('LOGGED_IN_SALT',   'R7aU1>@:FWl_rDKLYM(#RO;!d:;rj@yeEt6;.-X#BKP}d>t4?pF.U*[P3<$du;_{');
define('NONCE_SALT',       'mn]7P@@-7Wf5?1tBm&3eF5p2@`ycH3;<4l@CsR%F-^h(::m~X~[pA~Ma.xuFPGtC');
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