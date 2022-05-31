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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         'RI]uZ9#@sCV(;UtDg]O2I(.{G&H;KncqVj^Ld|GWl?dW-Rld+Gja-jd,Z5*E.q1@' );
define( 'SECURE_AUTH_KEY',  '^wtdJI:[l=u?B@Z.6]{+)Kgfaci*NQz9sxzgq!JbS293XozTz{XzbG2-W,+&y8s!' );
define( 'LOGGED_IN_KEY',    '-ob}T,l$)E=9b!RJSH0V[*jnfJ :tYs.tgogWh@;=sUi*9h#aZ/L{szq_uiXnkvr' );
define( 'NONCE_KEY',        '@!b/)DxG=F~:iJ@]d(dyO.F]kp&_-gW~/i5V9KFihq&(6R(3?F#szc79a@J&fo:L' );
define( 'AUTH_SALT',        ':Rnv94Dj-ww56xHZl7S(WfS9!eF>ww%0Yw1~,Q2MIbx@ EOAv<%M>DzwIQ-w9X9Y' );
define( 'SECURE_AUTH_SALT', 'AF55,(ARdVJ+)@TUX#^&rB?VwWO.g%l:HD?tovxr{Y>#ETk (EK.x`HkXj5})owe' );
define( 'LOGGED_IN_SALT',   '<u)/}Fv}dTA?6vMEQm@vuzRZF^Gf+qs(]vuY.N=,fBX`bs*,J9wm5!!6Z*RN8).&' );
define( 'NONCE_SALT',       't#hZ]E-vG3{@9?]2m=P`WZfqyuFm7G|n=* k2*Bh vdB<6zo6~xQK^$v}Ngt1p*=' );

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
