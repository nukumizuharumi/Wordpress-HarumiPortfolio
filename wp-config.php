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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'PCZlwo2]S%(X}f(bb/ksLgP q$11Lj8;/PU3_,srT6#q*MKqi:Fb8Gm>yhjm-r(:' );
define( 'SECURE_AUTH_KEY',   '[ sl[on8BVKTbZH9Iw-JcHPjywck7qdTJN(v^_e4kmL|XxY7ih4ofaR[pS;qYa-X' );
define( 'LOGGED_IN_KEY',     'l?q #kYz~h_~5yma-h(zHkK]sp@2ojC8ja(/Lz,I1YOw)}`4Ef:A@1QF1plIe{z=' );
define( 'NONCE_KEY',         'B[]7Ku^$&L9)-g9LZrEoU%(|Y55vZert!/)eB)~{YlM%nI/8-v5X=,4#P,J27{SW' );
define( 'AUTH_SALT',         'n=^FnhMr<lA,KC-r0RWI{%5{0B55G[ktQT}VL8F/Fdah;{7H(waj_4]$/eO+ZtAh' );
define( 'SECURE_AUTH_SALT',  'A1_/Mpc9.9L#;@pZYT>c-gYJ=<yAk425sv+>k|?8qKNwvY33QyZaKb?w=5$QF9y?' );
define( 'LOGGED_IN_SALT',    'nAOurqqiKOvYrTSwIbIML);#uBAEMU>evg3^;w8~c,jWUAH755C=Z@*r1vDipLM[' );
define( 'NONCE_SALT',        'FKl/)l0PG),}Pjzq0AzWt:<z!k^Td|U=.C([)YqizWXy`p|#@{+pe[Y25<HT>1IS' );
define( 'WP_CACHE_KEY_SALT', 'V7x1@G_|O9N:m0y64~6w~GoDY6bzkHMOTm|;)UUXTu:dGgh^E76SQk[TY!&7)+G%' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
