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
define( 'DB_NAME', 'stan' );

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
define( 'AUTH_KEY',         'uX*eDd6j]CS/qT*oFck9`HlnCd|5E5]M@}*Ut[zt{;^?7qx[wet_bA;DQB~HAHJm' );
define( 'SECURE_AUTH_KEY',  ';<;HD@P`3!##+I&f35_j6GdC+,!,OkoVZbr.y6R=e_pT0sq]r.|d!*DU_g!bZ sx' );
define( 'LOGGED_IN_KEY',    'i39;V,.M]SF{2P>1YmG95!n!sx7sGjXi&LYdDwOr>W^_ZVg@77(q=e,^B~V_C_p9' );
define( 'NONCE_KEY',        'x3@-W$=Hj)/cJyDHEa20ve{?aKN./Kyfn9`oT ieEJ1FI~(YFAK33@e/5cEpP%v9' );
define( 'AUTH_SALT',        '+xGHfg<3/+2!}Zi6qK]UKF5}0I<EKe8&?Wg1RHx)Mpz#Wf;z}ad-.?VnU}MG*o5C' );
define( 'SECURE_AUTH_SALT', ';pyh+W=9U$(wB~nbMNw5h~CxSkY.S]u-Z&+5o<GBJ*%&IVp(!U;u, Za^1&#eVRj' );
define( 'LOGGED_IN_SALT',   ')x]G=ah=Gx^9PPzrf8TEL9EzRt<J:f>YyzrV+tX5yp Mk5>|}3NEw{R<xUayJXCM' );
define( 'NONCE_SALT',       '`V,FT@~d/2`Mf`X5kvR05& n^d?=>S^ydn.;9bVJ0O7Eyk:!-|*0XRVTZi4jZs2P' );

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
