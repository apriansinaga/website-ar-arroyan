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
define('DB_NAME', 'db_sekolah');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '9~)7]QE6u$?%0<[]P/)FSBL-JMm9d1[ncF4#8_Q3wxYue;u@rv[47Y{sH)%-|Z2O');
define('SECURE_AUTH_KEY',  ')V-PFuaT+Xm/~G4I05/L.ATB8Kj,tJ%EUA([-.Dq m>T[bG$Z_p!r`zW|b5-BuUy');
define('LOGGED_IN_KEY',    '-r0liilG3{&qdRvx#!}z{aB9TF5w6-H*S@sva]-#s~1qKq#huWY>@$<#n-Q@pw<?');
define('NONCE_KEY',        'i}CsmpJ^R{[2yp1tdfff5!!AU!TA$p?1f/oB|c{6c>|aoVR+5%.[7Rr:]1M|%=DY');
define('AUTH_SALT',        'k*6{qZ/5-a_2Zk(gXM fI&)CIbG4bc`q<nAwrw}WI>$v|:F~|)}B_3jLk_E8.wCS');
define('SECURE_AUTH_SALT', 'f6t[%6;MxIEzQf!L+t`.wN%P@{7t (A^9RTH,t)>EJTc#F$V!,9PKlZ8.+w|:qgD');
define('LOGGED_IN_SALT',   'R(TD]LPS<CBh8`7}~> ZU,}r X9/%5NGGb/l{KV)ty^(Ef.yuk0:O/Ho}$x7>)jh');
define('NONCE_SALT',       'u|HiW!gcK})k9G&#ggzlx],)n>4u.I9,A@PywMv*X[U~7ek}mY?{&{K*YG-QE4Du');

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
