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
define( 'DB_NAME', 'wpdb_' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Ycode@2021' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'I&@7M@E)yZ>(FJa.x_SXVro39`q68=o;S~u+,_iOsgW^]@41`EU[$tYdZnlJE;AJ' );
define( 'SECURE_AUTH_KEY',  'O%U.][B)+S),nA]NsiX9$i8v9:>(H[,-}=<rY$2Zx6]^D~4:A?HzjIVj[FzQl6*H' );
define( 'LOGGED_IN_KEY',    'U#hHDv^)aRvR*7~0m?1dk?JL/p6tf-zD;F@.?lX&FS5BpvKlW]6!KFfrHWd)-T:K' );
define( 'NONCE_KEY',        '>pZWz%J>]!OP162})Pu [a++Y& l Bb(A!`()rAYsx(=AmT{{,!#qa2{>H=5>TY%' );
define( 'AUTH_SALT',        '}M(cG>Ua`+~s]cj0E4NS|3uEL;Nt;rYyW-Q[$?Pg~XF)uwx|qL^-5z0u<Nk>[%Be' );
define( 'SECURE_AUTH_SALT', '7Bo?JE]{Yj*#~wCP40tZbNFl6-^GwJIlCv6S]Be>?<=woKAf1[jU,eGLEwz_ W+1' );
define( 'LOGGED_IN_SALT',   '0}-(8Gez;^IA1rL<v@vE2$tb~Iz<1<q1q#1]ICd:6m{^PklbZnEl=Z$mwo|z4*4(' );
define( 'NONCE_SALT',       'KAV$)C(XVp=,7{L5-:4YlGFI|A)]-Yq*7Y0o+BSQ3.#4= Yh+.//WTxT_71eXdfZ' );

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
