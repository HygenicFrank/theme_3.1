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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'halfdanmartinussen_dk_halfdanmartinussen_dk_v2' );

/** MySQL database username */
define( 'DB_USER', 'halfdanmartinussen_dk_halfdanmartinussen_dk_v2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'BLbbF6zfabaTgXzR' );

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
define( 'AUTH_KEY',         'Xb;G>M=**x9jdk|yCA_>se_^c}PFR-j*nL~[ `H. -99XQ2h.Ye:Si#oY-sp&>w+' );
define( 'SECURE_AUTH_KEY',  ',|0t(x^?2#p%3sFqR!=$1<_})ZYA_PRu|a]CVw#/o}3rM$ix&WE-jkQAzdlO3VRE' );
define( 'LOGGED_IN_KEY',    't6T-~4y@X#n9~%O.yGow*(mem2Zca?}R}3GN:p)}ku8DNrD.|H+TDzsNlzM81X[(' );
define( 'NONCE_KEY',        '+zmb?Hx.TnI6E:HFus>Lp%`ddCR.EGhtx]LQmO=(+om#9Iz;|~Mt}A7{6Zo2LNl%' );
define( 'AUTH_SALT',        'BCRMxq(T-pl7`@QQeC,d6zUn4L-A!Jhyh^)y_[ 4*t3OOyyaj9<E)pkLQWr#6e;M' );
define( 'SECURE_AUTH_SALT', 'mgI {QF@Vcr-^I5u62X=p%|dnYLm_a>0*@;r$hxQv?Ov>viwu}sj)5}AHw6:H?N*' );
define( 'LOGGED_IN_SALT',   '|#x8D+qp2sx[&In=]vJ?X_i.O11iCq4ZW(;eA8h =>e-(r(MA 4Ps3(@YZC7yi>I' );
define( 'NONCE_SALT',       '<kCkl-SU7MdchU*V8k~R[?u@@)(mc05rM-O+]$dRu*|~QQK%y[^j5Nq0OxoIgr@B' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
