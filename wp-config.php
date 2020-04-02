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
define( 'DB_NAME', 'arcgroup_db' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AC%s+O-0*YZ:;@fwC8hgh_6?O;lBnYP6A]<_m:l D].oUjH7FQv-GPu9LiA-[2a9' );
define( 'SECURE_AUTH_KEY',  'jP)fQeJHu_|2EY.UVK2+`hZRs}--DD2fp|%XMyGT/o|4_(;`BU|0f S3Pu^ip=g3' );
define( 'LOGGED_IN_KEY',    '0K3Rm5Rl=D(.v:vg&J]K4WiUlgTy)6.#{#*QYUM3&<}i)}s[djg,cle#RP[4^9[&' );
define( 'NONCE_KEY',        'bLeF[.Ql()|]04j;7(&jmBz|Kh>YZkPXD/Fw{]phLTj(S3A(1<B4fH*#(aA,>x!h' );
define( 'AUTH_SALT',        '-p:mARfpZIofZZgewp&^fJLVF#(7_c8CR4hG-dTdS?=boWZ8A7(p],(Vjw36W81&' );
define( 'SECURE_AUTH_SALT', '|+?>,3P3Bg$IeJ)g*|-IW;3|/Lv{p_bBrx#kfpNx8h-viT [#Gh6JMTn^Zn}__WR' );
define( 'LOGGED_IN_SALT',   't,<os9KVL_<fXKH<}epgxUqGr;/oF^uvXs/7WE_3M# 1wZG,GLJhC 4)ilf)bUoN' );
define( 'NONCE_SALT',       'uY&5/f_%M{~6$mVzAy_4 iexH,o29XifVw1?Vav,Wb|fSgrO1b1?*(S}E0^iV,N-' );
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
