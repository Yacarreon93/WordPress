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
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '370RR^&bZ6GL8B^3Kw!<W Xf%kewe<;Z)@Un5)Vv#|I% 6[CMaJ9f_N-;r$Pa6H~' );
define( 'SECURE_AUTH_KEY',  '$Z1UIdeTY(Y7$v5WWOR2xJ[I<I[Ek$R/WL:]k3@Gt;-TusN4yoO-1`%kqw#[``R)' );
define( 'LOGGED_IN_KEY',    't`~<qV*nx`vx$2t_cN;$;%w45QD:%6&FwwU)`7EPp=I[Y.SzH_F7!~0ep2X7J1I8' );
define( 'NONCE_KEY',        'cQ&,9j;r-53bySBh-*P1rYjVceGM2{[;9PNVlv^o7(Dx+MyS,r7tFmdHaMC/WV/1' );
define( 'AUTH_SALT',        'xpXguhm4]?IO&E{m+C+]82(=KcJ|eI0:6l%[fIS%NACBwgE]/QqJ*~G2mT`.rXxY' );
define( 'SECURE_AUTH_SALT', 'm^zUIE,$4:ZD1OM]{Y3<H9Mk^=Zse~4?HDnU3rso$DWWFlO:.$49Cx]&TK`/tHYk' );
define( 'LOGGED_IN_SALT',   'kDS^g,1{R|}*G][HsO>3>dMOjramQ.O[ybzYvQ!M.kC 1#`!W)LagFuPWDfX9(e_' );
define( 'NONCE_SALT',       'AG)v^so]b5(|wEj1?i;gFc<Ay.4J~O`?QQN.6V)zAilNwOEzjsV#]}!4/EssUX-f' );

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
