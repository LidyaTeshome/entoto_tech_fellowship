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
define('DB_NAME', 'W5D3');

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
define('AUTH_KEY',         'G^duh%wOF](RpxZ;;hET`P1+PQ6G5^RWgB$.I.N4GR9dmDXn86;GXxWexLG^Zo+/');
define('SECURE_AUTH_KEY',  '>>X5FKv$c5?[5alhqn)c25Fp:$3*0SLM@)?M;$5X2o:O*3Ubx!f|/_Rp8_>[0#Np');
define('LOGGED_IN_KEY',    'V6e>2Lp,xzhApqHo)!|An(M-<P)0$*F! /_JjdNwvQ@kxBad.PIA$ycDz!Dd@|wP');
define('NONCE_KEY',        'x7Ro94NZ)ZoXe+p0N(8)>(r`nivk==*$XT~Dr 6mW>a>N`a ;]!=($Qoqrxo*J_d');
define('AUTH_SALT',        'mvzrE8*Fm?piIzAa3t>V@v5Os-H&N/MfJ$In*>3-0hsTAYV`fmEdO!Vh;a]STl$<');
define('SECURE_AUTH_SALT', 'LKs 4-4<eAo6LW&HJDIgYewq{lCD+ion2gLReReqIS6o1w9#-J`C)|{$9I%hlv*3');
define('LOGGED_IN_SALT',   'cyzj5|x;QEL)7yX2baN%lxKb`0/msC)RC:cufV~+^@fLDS(i>?ZU,yjx70yaP!dM');
define('NONCE_SALT',       '_LRRgLgD@<M5ilN-!;R>IIR$][x`&Y4Y2+4i&b>3UB~o1K`|_98`x=-L4*@8jTbt');

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
