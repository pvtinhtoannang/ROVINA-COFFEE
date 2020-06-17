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
define( 'DB_NAME', 'wp_rovina' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '3jAxOVql+5I--Wpy_8-gQOPWOi[%T-FZCEw+z</B[&*E#=-CyV9~y#.[^,06~&l+' );
define( 'SECURE_AUTH_KEY',  '_$boORH-9mA|prP2tL):Q=)A 6~wh/Ds:uW)QQPW4}ELkbVkziE*W}5Bzs_^@1mh' );
define( 'LOGGED_IN_KEY',    'r/Y3Rbm>E25f//$hSnVxp6Hjw(?fDMgB&N/;Ff=9X$JX6ajWVH;3jG%lut~]wFLW' );
define( 'NONCE_KEY',        ']<i2FGZ1n7LpW?Q@PP9s^xfIP9?g)97k.3)m@ +haJ#w!M!LG-kQd%v/qrZB.BWA' );
define( 'AUTH_SALT',        'y+Q)[KrVF^`L(@~*cQIWG`H!>LxSg/IcZjDjOkC}){bN#,++,rzsi}kmZTmORm#K' );
define( 'SECURE_AUTH_SALT', 'Ti7wR)gKf3C?Hzt!}FQzMvXZLZ>u 5#cBb4YB IUudq3@Tq*WIi<$Gunqb/bKL4|' );
define( 'LOGGED_IN_SALT',   '*?6i@d1thi[C5#Q+qV3?bNTiS)qb;Iw7YTw=zOI|HC|!D[VH5FGKYLn5_;ol[O4^' );
define( 'NONCE_SALT',       '2_Q.n0!I2U@nkTiJ@-(x.!IBYi/3R<6_vEYQSnB^KCZOvJ$9EP^/gQ0EuhOjD50O' );

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
