<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "asesore5_ualett" );

/** Database username */
define( 'DB_USER', "asesore5_ualett" );

/** Database password */
define( 'DB_PASSWORD', "4NG\$eIJ[wDdd" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l{I06(ME<i_tF7=/XjM{gFru`C~/@I]O-!I.KWoI5hN6K2Rp(!!jy|M>/H7.i7-A');
define('SECURE_AUTH_KEY',  '5_#7Yft|U;;}~5b;{>#K}..PNeFC]XqB*>Pl!gYV2to8*|~V3Z KI(HZa&GE#(+K');
define('LOGGED_IN_KEY',    '<[5,^@O[3-$O_:yv<SO]E-P#-F.d>E0ij^7N%&J=K}<-%Vn]uF5p!_kc-5kP@0=1');
define('NONCE_KEY',        'jI?0?0ob&Yc{s4H[VD-^fc|M@JI2^Zabz,ex~U-felku1dzNz6:u-iIflf&TNIKA');
define('AUTH_SALT',        'X/,u41XcZT$Uk[Amf,^W}>w4OuKar5+i~k.Qbgw_o(+R*AV7py+OnUrxt+-lV5t,');
define('SECURE_AUTH_SALT', 'Z|Pd+B!Q#g4#G!WM*)G^>Bgvkwks_).Jt8x][XZRX4^t,|xq|;uE,eZ&B7I;6|;_');
define('LOGGED_IN_SALT',   '@J>jMjJ/`AGCU=m2d{KnT3%p+A!1B||Ilh8X`*Z2]mPW|@ ;K8e|FQ/|CMm`qIhS');
define('NONCE_SALT',       'j3z0:nqh{w!m065(%hS}6|/u< a-lV^n~LiR!g|]A[JH+.+a{zAneEP)3y)A*,DI');

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
