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
define( 'DB_NAME', 'xs953439_chalon' );

/** Database username */
define( 'DB_USER', 'xs953439_intp205' );

/** Database password */
define( 'DB_PASSWORD', 'UNA6aDSMWd8f' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '2ulz6QH|;Q4%3|=.oPkYr!e@u9_3Hbx5y6&I*jRzgG;I$&d(GlX:+kbw:[3x-NRR' );
define( 'SECURE_AUTH_KEY',  'IW<d,EIh;Q?)inm?!i$)v)@5PZ;J><sH5_N3_#VtA[1!xU&J]tYD1iKf)+x=.Jv1' );
define( 'LOGGED_IN_KEY',    'gvQ,rQrkp]8i?=l.o_#/+|y4cpIB,F?[vBqhdbJw`d1E? s&$[3zF3qAC]dVaw4J' );
define( 'NONCE_KEY',        'AMCtUwvXRQGS%2^/DRVY33rBp4LEL((FiH>50)F(vKQhB}o&OWv&ca;[[!1/7XVa' );
define( 'AUTH_SALT',        'fK{ >:GwwC(7V<a<qI?3%:JD=BuE=V|W?pzLewqf|.RbIKETvAbPmiK-4{a$$!8A' );
define( 'SECURE_AUTH_SALT', 'bs_05R1NUTFl^=T,[#JH&6zf{0=7gOALF<C@rkZWH@*ojpL8z).4 iY{YUv>?tR]' );
define( 'LOGGED_IN_SALT',   'Sf33(oBBAO&W0q$p%h|OzBeH~+~~.:T-_HDOW(?lx+A`vxRv.WGSN=/,6.z4jMyx' );
define( 'NONCE_SALT',       'i=>9:{,jRI)T`+#2r{a])zp,IQ7r!QLv*kp6vkln V{DF.H[Q.ubcKu4}nu/[a}*' );

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
