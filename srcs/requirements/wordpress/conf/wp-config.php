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

define('AUTH_KEY',         ',2n!$ZSO_VD;H/114E|NA(Ol9>K2={DCb)kO.~)!|?B,7=,w@83nYP96I<J;[ZJ ');
define('SECURE_AUTH_KEY',  'BP25AI9/V].fjqX9%=*ZYco`75EWt71L|~=D^)vnk.r?1TZ0.Mq7vf:U{;533EGC');
define('LOGGED_IN_KEY',    '4v1(#kJhaXiO*Co.{n,|Yp*2nJQ%B?V5JEg,-)whe<&D#@}c9YE|3^%#*%$(l]Uq');
define('NONCE_KEY',        'yAXBav/DDR#/to3ij+}sInjZ?m-{-![XW[[e-2k9C*+J+Jx`/ou5ULiF-j$YLhG#');
define('AUTH_SALT',        '/[<qYHlFf|-c$QogOaY!lC6(B VFnrsA<9%:$cY%!MbVdDIDmwwjy%bCz,h=>_2K');
define('SECURE_AUTH_SALT', '9L@i+K3O*`IGD34n+u*m68s^&7u1P%M pMu/X5bPaD{}Mh.4!n!-e1(rh*r=(4or');
define('LOGGED_IN_SALT',   ' C x2 XRz85EtJ]$L.Gv/Sd} >|HF9JhD: [IEBnyD%*=i5o<J V-[o|SBE`ua7x');
define('NONCE_SALT',       'Cz.tlGB/~BhhzpPFEb51u:Il:X(*Eb[~Be]$m/?EsJ|?f#BaFa?Hyu=M*CmViqD(');

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
