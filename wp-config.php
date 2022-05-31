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
define( 'DB_NAME', 'wordpress5' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         'H?)qjr,*@K(LIp; z-S4$X]hydCKxDE^1SVce{<Z-{&.xklb^7lff1zKa?0xJobh' );
define( 'SECURE_AUTH_KEY',  'fR8N!r[nWFM~;oz9^l8t{42uuvxV&jmL 0C$K+w*PSjK;*rCOoym_WCL>,bO(r:L' );
define( 'LOGGED_IN_KEY',    'cj)|;=xsD3q nPL>`gOo`|^p|CXg?3nd+=RVmk2+i%F+et]S`3?v)`6jN&A T}P ' );
define( 'NONCE_KEY',        'Pnzhi?Nt+7L61JBbfRX_R^)H/5R)qU1Bff`H $=c^t17-^A/NA(,9CIO&7zVFSym' );
define( 'AUTH_SALT',        'b6[4:fYz[wya<:e>griWYLm<9:#]C+oIz+@?HYQAsG6r,`ZRsOm%PR &%h)DbE+9' );
define( 'SECURE_AUTH_SALT', '/M!.@9svTG=UgH_Bk9l5ysN.x6RORwkJ^aXT7>p6X~cYj8?p8|`k|i^>s#o~$zWd' );
define( 'LOGGED_IN_SALT',   'lg;XJJ bqj]pZ])f}%vyqdHdWud{vs;HVkCSxu5y)zy}X`Nbe63eRgn99<{n<7+K' );
define( 'NONCE_SALT',       'c-l&MFy[d.c/E|cHl`Y)N@xy*,L] I]IL)2#+K+U$IG~4N]r$6D*NptEe:/A%YWc' );

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
