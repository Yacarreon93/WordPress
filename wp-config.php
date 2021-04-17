<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?XKY,1Aq/1<X@lj](oE5*8rm3|>{KZGU|W~/t+i``,<f2SxR=pxOTt&GWsoC%=Vv' );
define( 'SECURE_AUTH_KEY',  '1-/BAs^m3@(8Md:?+_l)4RYH}.S;1yDTO|ggp+6)4VI~x?(jTW5UC/VIK(7.|cGT' );
define( 'LOGGED_IN_KEY',    '-kT>zxLUdJ<MTShlHImg0KVTWV_$mS]P+Ev|-NP=Kwev1L)1jia@95HoK+GLfaNN' );
define( 'NONCE_KEY',        'eH79nIEQ)*Mn4O_rBiq-fw`o{QYbL^4jfHx$=`P>KqtY-0[XoX0su]+#_Tk`X)?&' );
define( 'AUTH_SALT',        '8bGHkHg<=_sK^0f@]Q]b^?c>wx#l+_^8*`!h`h#Wa;S_e,2(9*,07>2sA;1S*E)X' );
define( 'SECURE_AUTH_SALT', 'Z5Rs+,2xW{;=Prhs >_0fZ$,70JP[L[Fg)P9-+vN5V&aBG~`$UEu*fCV4Y+6A01W' );
define( 'LOGGED_IN_SALT',   '86G=Z2s1k`b74p[FL%|;o!E$=;QsO0h/MlLm$-%=XI!nSj?Lao=Ey6Ad&8=Oe+8x' );
define( 'NONCE_SALT',       '<Um(iK5H_0L>Nj]^}zD7|f.?g.i)1Txh8y[xKU`dx-Iuw/-V|v=#R O-(j<T-0B ' );
define( 'FS_METHOD', 'direct' );
define('JWT_AUTH_CORS_ENABLE', true);
define('JWT_AUTH_SECRET_KEY', 'your-top-secret-key');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
