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
define('DB_USER', ‘root’);

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost’);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Z2D]_e;/{`Q}YK[vNJ/D_Ol|k9XFAG?bIPm9Y9fjQ&]t<6)B/`#XRyv+]$>7-(f(');
define('SECURE_AUTH_KEY',  'lbo-|v&/quo0[SqB I-2-Ee7TV1#-;~,#QDCn=$v?I8!~A&DBjtbG#-Hj%.`F<0b');
define('LOGGED_IN_KEY',    '}0:R/iLBSw-`#]-1X}+W*&c/>OHD!C`PKC=O6a(3&(W;*uJ?NXaUgpP)|2dvxnD[');
define('NONCE_KEY',        '8=m|ckkm+2#i!A: .&g0c,Rw{@-3GEk4CHsGy[M*>u.>! HB|Vc.q5+vg(5Tk{(w');
define('AUTH_SALT',        'J)zC|@$k|8Cuav_Zf(7adjcv:fgc2>:O>twXK#8i l[-Z+sxno$TvN;DwkD-yw&Z');
define('SECURE_AUTH_SALT', 'D|*PFX|_Cb.~i(PI4Bi@yO5>UVr{w57(W}|7B^F&dH-kdkA;~LHx?Q>n)]8BnWF:');
define('LOGGED_IN_SALT',   '?dmhQc2SjnCt3n]mFj^|b]D.w}TZ@JMrL)uL 0CW<rm&7cgtJ-K~~dn?.KDkJN/z');
define('NONCE_SALT',       'oVzv)!<[`V*Ghx:o)0*n^$y0z+(T^CM0!/dhleZKi?}F)[-|;X:aM<N>(7lA{bR-');

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
