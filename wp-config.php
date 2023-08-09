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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tourism' );

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
define( 'AUTH_KEY',         '6IY>E{`whvvYdqf;w#X5XzNfEwJc%6m/TPEhxqorvKk03=)V`~/YKa-jRD/(O]Bd' );
define( 'SECURE_AUTH_KEY',  'jg7+d,A|p+@*nG_Hm:[6n*r|P@QjVRMQ?0kZ7rq}GN-YRb=sf2AZ[Uo99E%S96oY' );
define( 'LOGGED_IN_KEY',    '9eZd5{u_H>;g2<x_vZw<~0xVx;eK9cW]eOC<`^Rd[~8x9EOE.w8.Lwy+R($&<1Rs' );
define( 'NONCE_KEY',        'RX *U~W(O%{]T$:P<uEj,Hzmvrl:Si>%!7u^~6I;t`sWH@L=B&>yO*GGUn1)?PwG' );
define( 'AUTH_SALT',        'TPw>,x[s7D[Gx/#CQj<gL<}(gWa};;qQN/0U7uG&{6G]!69qz:P|8gO%cqk5& !e' );
define( 'SECURE_AUTH_SALT', 'UG|!}c={vocAu@lhUMV{wMF.^}GX4>.xQ3`]{eR88Henh6^IT+IG4#_2Ub/s=)2@' );
define( 'LOGGED_IN_SALT',   '8f#n8`H:?WrUuf,h;Rcb9&lZ*8%~7&/sYTJl4+snO0qTU;$;YP#ViHMYCrkwf`^P' );
define( 'NONCE_SALT',       '::SyP!>R!yfpvsN.VFSn@ 9t/>n|d=XUMpcoN$[F}Y,&;c|,;U@tYtx<%{YR9RdA' );

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
