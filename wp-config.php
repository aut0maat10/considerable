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
define('DB_NAME', 'considerable');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ' }x+8O$exL:Cn7VcLncictJjKdGsDg4[Yk=$vs19O*) fitYP!3DFSG#0tal8*p|');
define('SECURE_AUTH_KEY',  'E/w &IXi,u~Ap1c5]#C^Ndl&e-61cTk3uMetETtRx9Lgkb8t0~3]O MyT{&5>Fh(');
define('LOGGED_IN_KEY',    'jl0W+3s#bdBF8GQ-hi]kJvFK9i rjZ?Zhf};r`9y _qB1-7(xf 8E{[>RQ-3#5aB');
define('NONCE_KEY',        'gg~ZF>.3;(pHi;ymwCD2<AI3(Bk]Wh av<m{K@GV2Zg[)Vc3soI(;IV{Bk.QSPrw');
define('AUTH_SALT',        'YOlniW<K% 1z]iTi2E<=f`b!2EAhdZ$#X 66BzW-`^nF6Lo5;^^JDvw7IED@c9:H');
define('SECURE_AUTH_SALT', 'mDVScp^0oj}jq%-!wHy{*=4z{1|~/,Z%PzktB;//]NC+(Vr%1!c96(Y1cwR:sk.2');
define('LOGGED_IN_SALT',   'XF4Z$0Li_uXJGFZzhZA}$umV/-9#b1<AntiWflG](LUW[@XvhG&@{R$eg0kQW_?(');
define('NONCE_SALT',       'l3OPpqIv}b 88~V`HzfQm2#V})FEh=$fjmDj>hZAnjK}T-/EP9,0[0#a{whIZi3 ');

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
