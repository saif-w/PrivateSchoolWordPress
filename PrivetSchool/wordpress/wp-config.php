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
define( 'DB_NAME', 'PrivetSchool' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'xLLY/j6DKL5~ezyoNl`vSx$osdRH};&7+FOx? =M.3$ZwQg.$}0AevpkCsod2:E}' );
define( 'SECURE_AUTH_KEY',  'E1CJ).A7G1F2KTl{YHgb/m*LPFPz9Cl*Rw3HP<=.o}gIc#@Cr},X2oRe{1e,;;]x' );
define( 'LOGGED_IN_KEY',    '3g-Maz-YBzOcuis=c^#=<&Gn,leeQ.fEvQ2g_IiGUJlR#Z T,&xpOM][{:Sh9Khx' );
define( 'NONCE_KEY',        '5q#HCP4u>$_FjYG&>dDWt]55rv/}.2w]j7LLa1&>IYlJiFALxcEGpTy%$JnE{]oY' );
define( 'AUTH_SALT',        'q[t>;oa-/Z[/-Zyjc?VNOXnt#MdbSSad</g&HBS?hL,QAUGK&%9obW7z!FFV Y&B' );
define( 'SECURE_AUTH_SALT', '&rF,220T @KAz>W7sg{5WBV--]yU>3~:0Z9^jxfHAJDKInKUF?Bu[X>1_<<$ez(+' );
define( 'LOGGED_IN_SALT',   ';EKDy4g6rB-&<*B#1?ZTNmk$NN}KF@.MRp+w>mTBW4T==DzrtY8,Y2+)4(&`@g,u' );
define( 'NONCE_SALT',       '!vS-SN[DsP^9aTU&Is`dJp.KH7+ZYGrXK,Sw/H0@a}kP!l<g/zSQ8}*CzXAG_-61' );

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
