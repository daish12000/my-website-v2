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
define( 'DB_NAME', '_skanzeik_dkk7wg' );

/** Database username */
define( 'DB_USER', '_skanzeik_dkk7wg' );

/** Database password */
define( 'DB_PASSWORD', '9o5rp44izfcurcs' );

/** Database hostname */
define( 'DB_HOST', 'mysql107.phy.heteml.lan' );

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
define( 'AUTH_KEY',         '||kHoO,tq=98.qR[zYL$[UkLZH2Ys&O,D>R-gc4Nt5M6m7=bVder=F]rr;FZ@xkX' );
define( 'SECURE_AUTH_KEY',  '([jnxe[hZhdBeu7@Oc!f!_MsJwIek.[qD5T[ap2?MVV-GSBy;DT<b98&xHjXT5D0' );
define( 'LOGGED_IN_KEY',    '11.Rg%l/a|_9uZz97J;ZJ:e|VEy*~]9@/-mu<N7qo]rYwgYt+nIT2)uOLjXp5W9+' );
define( 'NONCE_KEY',        'im4z@2g8:OX9:;t_3]sw~dAoC1T}OTH={B)Q^nPH[(IG][f<NO#r-CVO_+rnd>53' );
define( 'AUTH_SALT',        'U#Jsq2@#9cI[y*ICWK/irj=(s8tM=oFlrtTXmnZlG!7_+FaguoEbNVh`TRml`-M(' );
define( 'SECURE_AUTH_SALT', '59dho^J:`GJEq%&asJ]`94VTL|_kJlrElL&QiPf70*Cg.I|5vU@vOpE3)deQEMz,' );
define( 'LOGGED_IN_SALT',   '14aaK{YAE49RC}M>wg%AMJ_U(2%LE3W{y=0}NPcvJdDq6t9sQ$/7MHRTAW9jPV9E' );
define( 'NONCE_SALT',       'm0h?FA&t8Ja4^amnd0l,|^ectdB~>Ah4[E:aj@Khd%b0eEe}_FJWc)>MkTp2xMx+' );

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

add_filter('xmlrpc_enabled', '__return_false');

add_filter('xmlrpc_methods', function($methods) {
    unset($methods['pingback.ping']);
    unset($methods['pingback.extensions.getPingbacks']);
    return $methods;
});