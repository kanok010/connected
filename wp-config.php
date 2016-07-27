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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'connexted');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RO#`K2,Dciv3qe|lTj[0CsNIjoe{LZT0y?UO~!iYJiMX@-K@pOr7{!9i}IkyFKs:');
define('SECURE_AUTH_KEY',  'FMWB*;,8,s%kwFpDI3Sv18WUoD.ke[*R4.1GMOs%Q5 ynbd=Yp[{R{@Us?8fQ/v[');
define('LOGGED_IN_KEY',    'ugvNnsGA:m$[0MqWnbzA.MMg`,0lf2+I{p3gCP1wKD3aaJY,#hy%4~W.aI4;)M/%');
define('NONCE_KEY',        'Ndj%j!Lua[^~v$8TzKXp_imY[5KEfT#)dH#K0[&un[.TUN;>omU*WBAMz+:EJj#o');
define('AUTH_SALT',        'N;=QAbfW)n;HXt<m:>S9!:O8QrCg1zAY2[ou14Mp6nI*%dR8gHfl(!%#}TG{cywr');
define('SECURE_AUTH_SALT', 'oTVS5irH-Iu},x~^d5FGR`ZNs&$,<.;[J&IZi0iM(oEGKs@)jeRGG&c|%VeU9~1>');
define('LOGGED_IN_SALT',   '[on6p!?NAh@hhzj+>x.IMvJl/*8IYuU}S+5M/L!R;AL):PU`h0d9MC^T2m|)~#Xs');
define('NONCE_SALT',       '7eL*coP$;29:~>rf8,HqfxJ6<W:k/ #&TQg0;:.N,$(]@)_h7Hc5)c5frNd={=V]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
