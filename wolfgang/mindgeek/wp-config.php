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
define('DB_NAME', 'mindgeek');

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
define('AUTH_KEY',         'o4j]Hb82RpI~NFYK:@HO+Ls/$gZwIIHN9] spQ6`=+Vy^D,Ir(iE,!uagSExGnyn');
define('SECURE_AUTH_KEY',  'Hu[vv3qu{%*kt1.OFv0mGfn4B2g]tt}]<Z}CN!<coBN:h7uX4Cx/[!LOmZ)V_6a4');
define('LOGGED_IN_KEY',    '/(o^cu`j9STG$/IpjfOxNq?W2-h&8ccns&W)*@ejm8):EXK;^eA+=-6q|@6wYt:n');
define('NONCE_KEY',        'D _:.)g5ExdzK62/e`N_9XUc6YA5+Xy8X&TrH7B*|gh{e/J]9KuYtH^FzzS(|q#Z');
define('AUTH_SALT',        '&lJ[CTh{r7@Lh-j%jqq^t3Cbi(K/;D%*}Z:O(0Sk0/a@ALYqdDcD{C:+r+kHv9>R');
define('SECURE_AUTH_SALT', 'e3d>Lla) $y%ZK{jJhbhj/oyK7 O[K`zAF_WPcD?zb9,Hl)Iw,&fn9F]>l1!n,{w');
define('LOGGED_IN_SALT',   'yz|Ap[5XZ]?,B7]dv:FV=cwSMn]aiTjR9eMh._yKgG/;6O0/9YUlRr1dEnhsdk{<');
define('NONCE_SALT',       '6Nrn.sKLX$B._yRB@]mpyS`}jEh=wmFc0-[a~ANyj]LH^Mnd2D2hVGgn#AHQcDFR');
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