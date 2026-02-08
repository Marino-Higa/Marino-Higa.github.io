<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xs953439_bistrojojo' );

/** Database username */
define( 'DB_USER', 'xs953439_intp205' );

/** Database password */
define( 'DB_PASSWORD', 'UNA6aDSMWd8f' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '10:3rAq#=lD8>B9uJNnO>E`~~.y?^znvpS}t}VTo)vpzy@j2kbI%W<V5,}CN m>G' );
define( 'SECURE_AUTH_KEY',   'RKU`831cVeUgs&?Srv,*[vlxKFiaG`h^uN1_T}$w$IGDkacmF:k&T~}?yd`N@Q,Q' );
define( 'LOGGED_IN_KEY',     '6g>=PUU3Z,Pk<:A5ishM>8->/6nIe.>[5l`P[4CK{x1A(O*aBOB9> YU3z}.3IYX' );
define( 'NONCE_KEY',         'rbg}J{mWlU.A}1fCawe?,_p6R :`P32{$~oRX.w)}`/EJ-n68?{y+<xgc+al?0gg' );
define( 'AUTH_SALT',         'p<ac$`Xj#dfrKM!)8}McW$o[v&slI>ItmyWX_}3C1dx+X>2mH{*JG_yZ~sYkbT{X' );
define( 'SECURE_AUTH_SALT',  'se2fJE_PP*bj6Z8$g7L>sc6G|dA0SNN|}mzZh/$,AI)K{.d;L6rzNwmL;!_mA{40' );
define( 'LOGGED_IN_SALT',    'lX1Y%0$/<1eOJ.L57`2}QQ%a4:fq*:{S+JSL&n;1z(P5Uut/h [dg_QGQAD4;0]E' );
define( 'NONCE_SALT',        'eGyoiEfyxv/p%h7w(yDMd4GO^ri?Lw_p/+I&MK*xJ-Lvk#DaQ^pvAeyT{;rCF.V.' );
define( 'WP_CACHE_KEY_SALT', 'C7$Xh|[o|Gx7XK]47r(.;EdJj=Nf0B{@6A:TAnhG!vs^:aAC-<Hb:]e9HNhe9$S6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
