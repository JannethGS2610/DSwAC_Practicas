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
define( 'DB_NAME', 'ejemplodb' );

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
define( 'AUTH_KEY',         'JPg*CC`i^?Q!&UQ#Ek.}$!|Rjn]T</tI@N_Ir0InampQ0aIe^Sn.!o`/^g}IhAQT' );
define( 'SECURE_AUTH_KEY',  'Q`6&f?7~3-]<|}$?Lp*/(M}zOs;C;<V7nKwl/~:Sz./S~Z7PQ<5zTh?dw}%@&/(=' );
define( 'LOGGED_IN_KEY',    'S`Dq ,5 #z?/4a,zF=<&>|uD+7AyiS9V)`GW.5|uc(FpPbNL-1Eq^,yQ5:o|[P:T' );
define( 'NONCE_KEY',        'WJ/H#:;87tzU>W=J{30Pk&z$NB52soM#h).g6qE+%.R_:$$FQgH1*x!8NrF!K:/#' );
define( 'AUTH_SALT',        'X>A66#R`pAY/k22bQ1HK|W)zM;F|Wxg$vY[Q8Pb*]6xA]`EVH6uzq?;pWrmQZ!89' );
define( 'SECURE_AUTH_SALT', 'PhFpu~&.kf+B9||x?W$1YZz.nGxjdVITl2AcEJ:NAX+$pQv;K`=y&mqRWw LoL?Z' );
define( 'LOGGED_IN_SALT',   '&9grs$= V{{-h`S1?w.E.gWqDn fMFZlx^uIjK$?1^p?VI/QzM~$+ZX,T#mmos+l' );
define( 'NONCE_SALT',       'NfiNA~@rswo0!${1rSL^kr$okDE&?Yp9X!p.;#gI-/@nrx&V_s]2KH5_4$gGH?pm' );

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
