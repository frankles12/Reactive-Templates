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
define('DB_NAME', 'the_REST_test');

/** MySQL database username */
define('DB_USER', 'frank');

/** MySQL database password */
define('DB_PASSWORD', 'sleepisrestful');

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
define('AUTH_KEY',         '0/@X)5;} $:<b&#=_4`rP4a?Rz*ydb:i~Z;i^OU.unooyN A0f,cAxWM{`MFYd}g');
define('SECURE_AUTH_KEY',  ';[0-QrLJhVe!p_bF5y f/uMC1,x])Xa5}RWj !:k]v} lfkx9rTq_F]$Z=Uyg/s}');
define('LOGGED_IN_KEY',    'Zj5wLhfEg*CZWgUq9Y_fE$&{q<.QY,d=GlR LT[&x{9.wlEFw.r5yn61C#[Xz7E`');
define('NONCE_KEY',        '%nrDF/fqCBnuo&#8Xlfz1Y{sbF&!@J%J`20_J[G0hq=/L&fg%-|Nj#/?AEy=[L $');
define('AUTH_SALT',        '#MZ;~~D;K2i*JZJ`V^,FUgcM{U>~-kZ@;;u_F_Hv0}s%HeB;Xm5Twm&3)ab?NU&i');
define('SECURE_AUTH_SALT', 'moZ.8jy>UD;]uw,2KP`.<Sk~8`CaYsub,jjsmpJ9V=M~f9S~/MIg?&/f6NGu.^{v');
define('LOGGED_IN_SALT',   'r}%N9%d4bftq<Hag#WVh,?(e|wp, dbrE4EAO!B@T3brHq,O2{IEuQ/(9U_<h0qK');
define('NONCE_SALT',       '/&]|-80m@l8Bd:~j)vkXUm$n[G^$ECwzmr7E.Sv}2(Pz{z0w`]IiYcRLm@Z]Z~u$');

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
