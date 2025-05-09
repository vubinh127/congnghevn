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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'congnghe' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '!eytAkci`U&/M;Yr>gOZ:7`_E@ ZL]igbE~} c,XiU41f7bcQS{p^.Rde16*m(Xl' );
define( 'SECURE_AUTH_KEY',  'U6uZ:;$3Y^WLxzY0z2)A1F=(%,:G6q_Nav:S ~f$$=_{I>P?[)KUkf5N]<uXh4zN' );
define( 'LOGGED_IN_KEY',    'c G3n~B0h[H_}$,eX*)[cT:XYj]oL#6~Y?j7N:ZziMg-U?e[#}rU!iZkANV{e*|$' );
define( 'NONCE_KEY',        'ty)4/f.y6sU/x8W.lqF&n5q@{o|eS/M~?Nx!!L6M_K;JC/9,xur!?Jgh^CG@/t*h' );
define( 'AUTH_SALT',        'EJQy}z0#1>baqz-0&!B<F0R=,-Fh( d2])^^Cev&F df?^:zqE#T|dvUsl?9sJ$/' );
define( 'SECURE_AUTH_SALT', 'IVS~Q|^,.%7Vd @X2:pZM/dLh)!{K~!e_5Q1jz)zo*.l8&5S)ZV2[M`@wrVC)<^f' );
define( 'LOGGED_IN_SALT',   ';I1%eydhd92!8O$J,yhTBIX>6~=b6>N(mLfV>jNt8,}I5f{3pTf:%p2O[p@T;<-n' );
define( 'NONCE_SALT',       'Z!JlvQ%ZY-jYA/x[u;H0,+/&RwiM;TQOMUI8z`))z~%`k[G*XC&)?Z%tufk<$V^0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
