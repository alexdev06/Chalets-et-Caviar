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
define( 'DB_NAME', 'dbs69277' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'dbu28366' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '13021981Azer@' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db5000074755.hosting-data.io' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[^v[Fk-Lw3$WxSl0gE&+onkK-:,hNr~~!d ${v;?Mt2w00BrhjVc2$GBO;YW}H*i' );
define( 'SECURE_AUTH_KEY',  ',[W?|$su.K]Stm`@Ocxl^+=8<y.L^P@LbzEy=iehGR6ft`~+oodP:wXxjQaQC20k' );
define( 'LOGGED_IN_KEY',    ',e,g$(~k6k>%D.]z$fXe[hqoa[<GJ+D@hOwtjO@0[#Y` lwi|~v(@,D[d5Y!y[3B' );
define( 'NONCE_KEY',        '_Lq~Ml?@CL,@V%Q4TRtIrtBPl:h17p0g:)l8{&?kt@o#FzR16,S4rR=oq-{x?9@o' );
define( 'AUTH_SALT',        'N$Ta7%A&IF3rT/d7FLXwL%UReL-9sd&]1%0D8MXq{S$:K+p[[nGA+L+0mhh]5X<Y' );
define( 'SECURE_AUTH_SALT', 'XKPl  ~2(Q4Y,8=zdhh19OIz<(Vm^SLyE=Fd.WK&eu%h CtDP]7hVDsQ z/b{pY,' );
define( 'LOGGED_IN_SALT',   'VMB`:;`AqEmLL=WC$j &x:s:+<o 3bv!)Ywx$a/j^1 s[c7[KdH~K;jr%+(ry1M:' );
define( 'NONCE_SALT',       'fD~HfH2K ]U{fo30zSE.-0hI57y:aCt]P-KCUS&%d|OJEJ$$?5eOHW6D^(us|2fW' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');