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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_fashionproject' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '*Gx7W8?v=E7k HXSN5GI9M <^r~5Li+}OF~<,28;PF1;qKlq@v;[8.<Gs[|pM7[Q' );
define( 'SECURE_AUTH_KEY',  'a7VViQ>}JJ{GB@6_aN[hz@?^jPkGdorTIP%Nv5H!|)BPLJ$[mVdm1`F7i7#<m!r#' );
define( 'LOGGED_IN_KEY',    'dD_L^HPW+h#h81eCenF|$%,kArs*H#FOtcIOZZ;r7=?&T@GpBB&rjm|#`w.(_)H8' );
define( 'NONCE_KEY',        '{9s`hB8-; gv*.-P)kRsn1WrYbcFIaD_YFuBs$9Q/(`/;ED9cSN;IPak>usUgC6[' );
define( 'AUTH_SALT',        '1/L>Y*B+/)vnm4GlUTxT|3_U-e%7V{-}3OD=#WUCvV6cCVuk%0q#gJe,Kmx9!Q>>' );
define( 'SECURE_AUTH_SALT', '^]LgUPpyRi;TKu+FPx{Og!-D6m+h4/Lh0v~x=q5h>x|^ryezw-Swy$Fmbr^9Ulmt' );
define( 'LOGGED_IN_SALT',   'libtz~(,B5mJN/o~-87)Ivn9$kiXVyD;OM2/jlL?VWXk|Gg~]b;l0zRaS&lp xgg' );
define( 'NONCE_SALT',       '6dOQHvZvI#NZvM8^TKIbB~nk{<gvUlY 0GZ^dR@x?$fL;x0;7kgU5CU;418Mr5]4' );

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
