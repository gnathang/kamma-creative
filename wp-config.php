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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('MYSQL_DATABASE') ?:'kammacreative' );

/** Database username */
define( 'DB_USER', getenv('MYSQL_USER') ?:'root' );

/** Database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') ?:'root' );

/** Database hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') ?:'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', getenv('AUTH_KEY') ?: ':%HMV+^%nWcdWwz^Du`|t.cd.!K%;x~mqcVoBdC,Q)l!]xs2IbJaRs]bv%83^-5w' );
define( 'SECURE_AUTH_KEY',getenv('SECURE_AUTH_KEY') ?: '&4KMQ)zV{rN@KjH.lC5p#X56N<S]zjB+e3ho&-NL/mWEcQuML=;Ux~=qTog@-{w;' );
define( 'LOGGED_IN_KEY',getenv('LOGGED_IN_KEY') ?: 'C}p-L^hm5 ~GepxG=L;Tc+RlN*@)O^i.[?1:w}7J7V[n/fQ|;b.T/R^|LCHie6C]' );
define( 'NONCE_KEY', getenv('NONCE_KEY') ?:'xf,[n~[K*Qim%=aU}e?D#kFvMm<18sj@W!vF@f.*YVFi y4{KCq+BZp>5HY.E a9' );
define( 'AUTH_SALT', getenv('AUTH_SALT') ?:'jh{=/)__G@]|52t`5/<a5!P:IO2femEC}9f1T= tMNUM9zM2+W#_:.AGszy^_sY3' );
define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?:'uVUq8;AI7(l|[&#icReZkc/0U$HfyW-!#8@ _$e7^cw^FpN>u/hDy$jLmm.<+O[C' );
define( 'LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') ?: 'wu%,>M/seK:{z(5vPO+/cr%- >wdGy|6,N`#Ko+JdwC<<^#&UjDLEA@`ZTym(xdf' );
define( 'NONCE_SALT', getenv('NONCE_SALT') ?:'P|g+$IB.Wlsj=]2VQew1ZG<G$* jAfIfrM9:;}Et8D96%!1n_`vz:943aj@*Pfd_' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
