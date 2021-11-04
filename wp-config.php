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
define( 'DB_NAME', 'Assignment' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define('AUTH_KEY',         's2z|cb25,[+L0Rc|0K==[HRG2mS+3Y4e6^&k(Z#x[KWqJG@Oi&ds{!|[@!p,Ry^l');
define('SECURE_AUTH_KEY',  'zX5*eRAUY+QJ-xx&|O[ 0A>!adE=$i$kukD|)jbQY)TY8Tw-2^L%)-s%;Unf0PYg');
define('LOGGED_IN_KEY',    '+2|O]cveVG@|(lk M#}Y0tLj}Rr!n:8BE;7}^yv[G%@_?SVoN<r#]AD2;JLs|O#G');
define('NONCE_KEY',        'tLD)BQ4>>O&>gdhMugYp])geSi3r2/4e(bt5/5k&iMO=E.BZ-QV Lp N#/XCJ3~F');
define('AUTH_SALT',        'WT-}NdO-m@ [B&GNgZc%4|Eev oJ=&Pq^-J`Oh0GqL.|Sw;~im?[#$6l|M [T_$A');
define('SECURE_AUTH_SALT', '*?$C(H+1?oPy?Z-F TaqAXmKx{PSrsfOj#XRXm%cdz<G --N+%=FJ|nyin(O`=+B');
define('LOGGED_IN_SALT',   '*QzpGGYj,%C;zK=NU|2:tmpKK|=7C]PEB-6|iqWl3LR]~R{Bno3,s|n7JzRK#jZf');
define('NONCE_SALT',       'we--x`_,q95P/XS-])uiS^}0R0F>fVn]E@Zeq3eYGN&3-2xMhSPDO->M31;-gD2K');

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
