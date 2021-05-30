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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\GO!Orientacion\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'go!orientacion' );

/** MySQL database username */
define( 'DB_USER', 'admi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admi1234' );

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
define( 'AUTH_KEY',         'X`Qp+UY[9.rJh{%zDW]M8;d*4iY^>J}@q/xbH9l]c{)zvBYo6(G6^&2I1QjOWQ/i' );
define( 'SECURE_AUTH_KEY',  '?Tnr2Iy)d Vw2i8m{.Tn[uPc$%0o#Q/&%RibXA$SD|4B8Q5AT<aPWlT)N=n-h?&>' );
define( 'LOGGED_IN_KEY',    'n)=H2Ue]74?DGeE)@`JIsNB|#&Zw3xkER5>Xf#{:K9MJl5&X^jS#:GXaddF<<If6' );
define( 'NONCE_KEY',        'OB_GKvP[tHu{n$X*moI;D{X(^zSz~SyF1_McuN1.7C>aN3h&~ E0qm!Xh>1@ H60' );
define( 'AUTH_SALT',        'xXA2M>.$[ys-*XfMIQ1dpaQzQ.PW&.E0S2hB*/l|(6]q{o*4A_DYC:c,0X)<UW6y' );
define( 'SECURE_AUTH_SALT', 'FoDW.ve$z8ww)e8hT_K)rPH($nYr5joya^&G<n34rE%!83$u|t.n _mHqeL)wP^m' );
define( 'LOGGED_IN_SALT',   'o~9OpJ$a,mClJF&;t9GByc3hw.S=G[V[Fz.x`Ld1Elm02sn:[N/wgX#$(p8J(a|=' );
define( 'NONCE_SALT',       'D?PU3?I_vQd&UHBZF`dY10S)!*j j-8l<jRIyn$hs2+&TJng/#zQigO|}^n!Jw<#' );

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
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );


  
// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );
  
// Disable display of errors and warnings 
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
 
// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
