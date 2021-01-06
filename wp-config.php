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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbatu_db' );

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
define( 'AUTH_KEY',         '4zb7ynTU={g7pg^XcMeD;?!F/yo|E5>**g]NC4WW*)d;V?E1l v:YLg45q`;|n-f' );
define( 'SECURE_AUTH_KEY',  'Z{24PiYej>oPzj~nP*J.!fJl;.Hb^wmj{8=|bdXNreG8Yx~TR;U)QJ%><L_mC+{8' );
define( 'LOGGED_IN_KEY',    '1:sXZ};{njof+jf <37 .]l^yu,C*$QnP5A*$tdhb3Yh>?(u#e52_dGQn4L!#xIK' );
define( 'NONCE_KEY',        '?8!iw1G|*^MkkPa,qf8zBd>;r{x.y<y@JhO@^UcK]h+6lUNB]Ro`S;&?|BKaz9]H' );
define( 'AUTH_SALT',        'k~ss,E>@sW6a8FiWUSt`[sC>$C7Zl|W;|9XRd+;.4AMV;SoTEn^]I^m1X:uly0`W' );
define( 'SECURE_AUTH_SALT', 'S:&5#r3PYgsz1r~^5_hqd#Az& ]Q#2lfXgPhBb>h!XGC+.]J|>v^Fi~}T;|k}lJT' );
define( 'LOGGED_IN_SALT',   '>v|)|_q?rwS#&W)-w)mv=*&U)M5b9MAaPmXwRPbJ4]tCl~ya41J-`u^TMgNV}XDd' );
define( 'NONCE_SALT',       'A;#PCr%MZ~cHR[M,>WYtvW_{${!S$n, :,}lH>h2fv4ivG!{h VvpZNH5l|zbIC(' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
