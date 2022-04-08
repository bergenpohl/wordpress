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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define('AUTH_KEY',         '[m2+? +pR3;13u$Nize:FFi#qE.7<8>:3myjOd+@{}=t|thA3P sk|~ZY0`8U]GL');
define('SECURE_AUTH_KEY',  '/I~Ea6#0lPc=3<(5y=8@Rvn:iiw{nTuSxB]N bQ@Y,)`hlJ~p/{e^*;1Kd8}QhS3');
define('LOGGED_IN_KEY',    'Vyi{o-Ha)UuKODT&;L]:/:Ntw&::/;-wIN$8M%tl`%UAy{w6el$,t2J9-pA4x.T ');
define('NONCE_KEY',        'K,r-P,=RQ3+tCmbJV(o3!E*?(|,c(#GAi.sLr]|~5sn3=6C|&7C4l%.-<iwW=E>`');
define('AUTH_SALT',        'rr~Nx4O#Q+%vQ+=pm5El5q<!iS>q3,vceq7IU/l 1x$S_%tcbok}kF2f_+r*,2x/');
define('SECURE_AUTH_SALT', 'nr=D*mEA&z|it%,^sRv4 y9-YZ,V%^IQ?y>W|bo-n[K~&vto+]o~J&Gf*oV#yZ]+');
define('LOGGED_IN_SALT',   '6;4hrvvPD[UR :#`]finX.D4+)Cg.UwDgY*f![-&Zl6KjY}=pIf$nT!-w/ba&S|{');
define('NONCE_SALT',       'c<A.XG@v}~Y>%tbgHr>~I:GMx^9 isn%f+IZt:I*jQYmHb*t(duOQ4 /<!sMGiPn');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/var/www/wordpress/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** FTP settings */
define( 'FTP_HOST', 'localhost' );
define( 'FTP_USER', 'wp_user' );
/** define( 'FTP_PASS', '' ); */
define( 'FTP_BASE', '/var/www/wordpress/' );
define( 'FTP_CONTENT_DIR', '/var/www/wordpress/wp-content' );
define( 'FTP_PLUGIN_DIR', '/var/www/wordpress/wp-content/plugins' );
define( 'FTP_SSL', true );
define( 'FTP_PUBKEY', '/etc/ssl/certs/localhost.crt' );
define( 'FTP_PRIKEY', '/etc/ssl/private/localhost.key' );

/** Site URL */
define( 'WP_HOME', 'https://localhost' );
define( 'WP_SITEURL', 'https://localhost' );
