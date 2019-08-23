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
define('DB_NAME', 'ninja');

/** MySQL database username */
define('DB_USER', 'ninja');

/** MySQL database password */
define('DB_PASSWORD', 'ogunssam10');

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
define('AUTH_KEY',         '9Zy%Y)}},rbZ!{4M^3v.HfVmQ`G`3FBTNht]J~faCY[5TV,XmDl=x3W qGi:daL}');
define('SECURE_AUTH_KEY',  '8lg%[uI<_Kz77Cx6-O=b~WR,p 4he%C!2$11K-5`GL24U$N* _VHbw6y$z<({fuf');
define('LOGGED_IN_KEY',    'L=FF6OiJWo`}ryReqM!{YX9e{)NZ-(%P6g/@f{:pS,8UW:g+xps&??&5lp7GFZKM');
define('NONCE_KEY',        '+ajE<R,+G/<|R3;@S!)hc(YAEXobeW.zo`0GZxv(mWk`GNw~5t.!JyMJ!}1#$s]b');
define('AUTH_SALT',        '@ 0d<6owMrl!=e}cS#I>^{j%_{3%RXW{p-.6em#2r);w-TyiSP2K-j8]3umWv!Lh');
define('SECURE_AUTH_SALT', 'ux-ZY9d1FVu>DIjHh09&jmaK#7AK$c+_X+85Y(cNW/r=W,_Ki};~-P?(Mj&6c);J');
define('LOGGED_IN_SALT',   '?t`S%zNcvrsP`$HeLM -1>W_WuK XB4|]43[?r)k[y]sjJ9oB=gKvJ!u,<qkAhUf');
define('NONCE_SALT',       'WP!0YH-Nl/De](^-:V ~>{M]e2y3ZAjEZ.bj9Ye %E*Ag)4<ZYUpWrQiMUS>8Ua-');

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
