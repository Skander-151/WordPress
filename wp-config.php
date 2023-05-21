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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ali' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' #a6j+e6m$Mm?Q9@A~eL@w7 8kJ})[.57XUf>G[[uDnZI?8~Il1T#TX,_li`, 3j' );
define( 'SECURE_AUTH_KEY',  'V[QznX:7+Gav @~8g7^8S_~KD#0ijtCE1x7R1&iHr`EdM%t U/V{y]u^$I3z8 &E' );
define( 'LOGGED_IN_KEY',    'O`o(v@H!|EX]O5v,|);9t|$-vJ/06~CC~mpU6TlLyaBYsWMi,JwSC[7bq}I(<Ly5' );
define( 'NONCE_KEY',        'i)v*yPrGMZ%Jh2MGe6UY`Kv.:rhqH(#drg%!Zpwek2M1nf4Nay81tG{-yOj<g[>I' );
define( 'AUTH_SALT',        '{Zu)(!|CSln/xAm^dm&dBeH<(~sUymcHO_k:v`+/&-w,KPM<w#w6HvyjO-vb=>em' );
define( 'SECURE_AUTH_SALT', '6A[>XVLzWH+.RIZ~MXzWxoOh4}iEob*&+#-+6 pO)da^s{(l@zyUAx-|igln*=&C' );
define( 'LOGGED_IN_SALT',   'p~_Nf$.J|?.I0PyQBGFVn<fR0Yg<m0p&vZa.i0,oLcW<Viv>;}hH,nFv#C&56#/#' );
define( 'NONCE_SALT',       'VgU.i5;~4&ROqG m rk^R0.C|l5OD?~K`]eK,J+;oVULx%[)sVo6ORl#;&=(wUf(' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
