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
define( 'DB_NAME', 'la_vie_des_plantes' );

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
define( 'AUTH_KEY',         'Lle5KPGiMSgh?/hy5m9rmz?xF;dS;+2&.JD*nTTQVOmPvEpzi9n}owP|^)|E_`^$' );
define( 'SECURE_AUTH_KEY',  '^f/M/DN[6x,A[*th[I~,/c<;Er!; ++6)kavy;1<{Jln@Y0d%I<x$m/uO(aHfQx ' );
define( 'LOGGED_IN_KEY',    '~9&BAW1UG-_hdt K(qu8Y:y.JnrtPKS}![VWSq:l2)N`WGrM[)NB(S3y-$D/mFsD' );
define( 'NONCE_KEY',        '`pAERm`vJE`#bDcv~Lw(wk(MJUV;Q~Mr~L7S-bB*#rAt.$D04qkx+qM:+^J%;~O(' );
define( 'AUTH_SALT',        '^quzx<]#/r:o~G!yh`zz]dL-A7|F>3]!^px+JEB/-leo~Of?D{Q#oBOGR8u@y&@W' );
define( 'SECURE_AUTH_SALT', 'Yl[)B+Z}KWVAi-FN_rT[iQ~}AYs2W{<A:%@VpSHQ:]nc`L.0~e/vKP5cG`b_1pqn' );
define( 'LOGGED_IN_SALT',   'J]3w!eN#(/VH,iN?iB`r7|}02b3xF?=: A,!w18!>Y:<:.pq|eFZg}P5))T!m?1`' );
define( 'NONCE_SALT',       'NwWgJN7K=OIXy16n`sI+v+5})Ya0*Uq|,yY(TuI9v4G4 +Tl:DpA(!-eCSNwg{v6' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'vp_';

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
