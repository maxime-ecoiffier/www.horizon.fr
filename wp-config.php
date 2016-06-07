<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */
 $host = php_uname('n');
 if ($host == "190.local")
 {
 	define("ENVIRONMENT", "develop");
 }
 else
 {
 	define("ENVIRONMENT", "production");
 }
 if (ENVIRONMENT == "develop")
 {
 	define('DB_NAME', 'wp_hrz_2k16');
 	define('DB_USER', 'root');
 	define('DB_PASSWORD', '');
 	define('DB_HOST', 'localhost');
 }
 else
 {
 	define('DB_NAME', 'wp_hrz_2k16');
 	define('DB_USER', 'root');
 	define('DB_PASSWORD', '');
 	define('DB_HOST', 'localhost');
 }

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7f+Qg3|lptZM8t(1}:]f[gHtSj4QDNHN}rYTF9a~*l.e4g NlLJ:v~y@p$}TjO`7');
define('SECURE_AUTH_KEY',  '/}1oy*@?|R`+!L&=Ec_,Ke}6G/V.TN**4G?7mgA=d1b|&wuKXKVQP+y={a/#eHNp');
define('LOGGED_IN_KEY',    '=!<yw S`3~QlAc0)VY<d._p.GU7Nn,%iSLpWJM.uC[[s?h5V,#Q_>=wOMNg#=+zN');
define('NONCE_KEY',        'Z4Wk1Z#qweI$6D;gdsV~N5YOL|$`UIL<;PM&+zl89FP{3OFtC439W[*V)(bjaxs$');
define('AUTH_SALT',        '`zG.V-~^dy4L9Kf+`BTR.-/80}YF8mz2vW?DpJ%[9rzPr_2#(kgG+</*({=1F.%q');
define('SECURE_AUTH_SALT', 'qgo#?*:#4r9q}tJ65N[,;O+8QEW3Wxp{T?J+YC)Uw7wE5NBlp^Kpx([dCp=lDkbl');
define('LOGGED_IN_SALT',   '6*~hw4IhfAD(f_oUu~U5H};`L~S3o$${I)ET+Q#!wftWb]yUf,#+[t;2*Ux$kJ5K');
define('NONCE_SALT',       'j.2f/N{+R%YDBG=3m2/To%e{O7GPx<^Tpf4py+i^?!R!&AS?&#=y]4DB/xps0JHy');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
