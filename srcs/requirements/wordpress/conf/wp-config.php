<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */


// ** Redis settings - You can get this info from your web host ** //

/** Redis hostname */
define( 'WP_REDIS_HOST', getenv('REDIS_HOST') );

// /** Redis port */
define( 'WP_REDIS_PORT', getenv('REDIS_PORT') );

// /** The timeout seconds for connection on redis */
define( 'WP_REDIS_TIMEOUT', getenv('REDIS_CONNECTION_TIMEOUT_SECONDS') );

// /** The timeout seconds for read on redis */
define( 'WP_REDIS_READ_TIMEOUT', getenv('REDIS_READ_TIMEOUT_SECONDS') );

// /** The logical database index on redis */
define( 'WP_REDIS_DATABASE', getenv('REDIS_DB_INDEX') );

// /** True if do caching */
define( 'WP_CACHE', true );


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv("MARIADB_DB") );

/** Database username */
define( 'DB_USER', getenv("MARIADB_USER") );

/** Database password */
define( 'DB_PASSWORD', getenv("MARIADB_PWD") );

/** Database hostname */
define( 'DB_HOST', getenv("MARIADB_HOST") );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^hI^|n%jz)d9% G_Q$^#f)*1qHb ~r|-!N.lBn1+9U^$D,$:b--wh|Eg9/6y+9*}');
define('SECURE_AUTH_KEY',  '5![1srMR4<~h>Z>L@]VlRed0%J}g(!B.UYTv(Az]&nj.Qi<T;Y~ e}iu]-&i)%h(');
define('LOGGED_IN_KEY',    '%m_S* OP!!KONry[*$-$p@l3xij*LlG_ubRJ^Z?-P[o-8*q6S|2NHJ-`JfZ(Qs+e');
define('NONCE_KEY',        '}|C#UEg9bEqy/X >%|MG:^pz1vkpHCUP-m2l%|)$q1 r$%SX:yvAl5s#sZ3^Gt<#');
define('AUTH_SALT',        'V^8!()D--q8^&VjU|```8W#gp=qmIilMgp$N5[<?ks^QF!DvZgH)Ju0Q%yY=)A+@');
define('SECURE_AUTH_SALT', 'AX^cR~!*nzGk<33#75!`bI@95#zNVR/ZSlfj_IL}AJSbjQ0(63muBen9I%P}HA`C');
define('LOGGED_IN_SALT',   '1b4l[:IcG,$a1EQsQOK!vMq@sLt~+13b?.v4L&N)NncGI-s1`7]j1RBV(PkC.3TX');
define('NONCE_SALT',       '(vJs3Irc1of?%H4@!Zt2-#DPBo(VpMsA{{D(PFiH=pf18%+^p9WmDvvB{nR7 (6x');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
