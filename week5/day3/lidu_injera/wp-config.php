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
define( 'DB_NAME', 'lidu_injera' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A PqXCv(ixiwfTu@T2c[rg.yd$/u:a2&8fy a=l~]yAVq5@SZ&19phbr>Bp|vjop' );
define( 'SECURE_AUTH_KEY',  '$n}D`?Q@&kxw;_B<~oPPS, z9!M}iK=.mbQBqzf/Aoh0<yeqG*B8PoO6FLetik9$' );
define( 'LOGGED_IN_KEY',    'cRjVs(%H^;xG_q(0nrJ[Vp6#`3q1G.X_I67Exmd.Vy.iTjhPkJ](qIzz6pSbcTu`' );
define( 'NONCE_KEY',        'i|Uk9;&-K^&e.7zBo+T}_jE!:VE@gEg}+ZZNT|z<qCE&I7NJa ?{@0JYAED*x%nJ' );
define( 'AUTH_SALT',        '+A5eHw)/PucWmgcQTr3N[{Z*M;Skf.U3bhE+n4@;!YqA_9vU6Hg At9NpL/=L:sy' );
define( 'SECURE_AUTH_SALT', 'vytol4T%Ay@Wtl0GFq|e26uu27i,bx{$rm:#?z-H[x/E,D:dafqX5u(MXnn2R{_h' );
define( 'LOGGED_IN_SALT',   'xXgF)7^0]Q%`+qq:=|Y7$a]qa(w&,8HZ!+id}^^f2K-.UiU`M{2~$`tqq-vM_Vt#' );
define( 'NONCE_SALT',       'ai^w+4,XGU>$5d~B~&>=7g{fWI)p,}(Jn;k #HzK7m^@!a?H+Oc-]YiqDZ<OAyOn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
