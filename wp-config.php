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
define( 'DB_NAME', 'j0303211030' );

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
define( 'AUTH_KEY',         'WO$SX4p/t{AOX~d]o2H|eDy(LA[@RqmUOQbn9Yuec^1|e1bpI a` ug&Xj#cYzeO' );
define( 'SECURE_AUTH_KEY',  '.]C7#mNl^#QcDdV#Umn1QUB=.NZ%OaCUZ((m2jy3v3lU<h7)(Irs*E5IEU_Zc@Ij' );
define( 'LOGGED_IN_KEY',    'eav.;PHP!`%O&3+f9*US,Go66YYXCNkgRoYH#4K_DD>;}%m]tAKgG#[c.LZ7s/!c' );
define( 'NONCE_KEY',        '1w&2-ZG9LmMwCcLearH#@N2&F5`H^ggi^/]J90Pq:1|/{n^udBFg8 z,>Ao8o_u+' );
define( 'AUTH_SALT',        '6~s{1F<e{AW_x#/zL*kc,]=cb+XnF.`FEb)A1Imn+LkfE@LvnSOl@zK[cY.)J5Ka' );
define( 'SECURE_AUTH_SALT', 'vv?ZohEe)KY;Kq,9cYW2w9WoqAT2GypDvj%d-SUA&{:A+1V0EOn$GckBZrR!2se_' );
define( 'LOGGED_IN_SALT',   '!Pp~y9.0uQ-ui0WC74+L;3Xjx~1X=$r}UbEFAYi1+XFqGv%^618#B,c1SAa0J,8m' );
define( 'NONCE_SALT',       'E(0ey<]TOP>veJ[w!#6p!E;8b/|$8oKYrRl 9#8 >xuQsU3A:]7 @A,lx%)&dRF&' );

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
