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
define( 'DB_NAME', 'M2WowL8Xr6' );

/** MySQL database username */
define( 'DB_USER', 'M2WowL8Xr6' );

/** MySQL database password */
define( 'DB_PASSWORD', 'k3BlMTWto7' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'HaaH>iJ16KIhoh-|8))Ab~<m?cO!G[$t}KD?H5o:Jv9$a9<@FB+eW&O(25fOPZ <' );
define( 'SECURE_AUTH_KEY',  '%HLc$<JBjRS[PQ9pExj>n<&sOY2XrQYFmyYB]mZk(W~/#ZO/xR#zL`_g24dIK--7' );
define( 'LOGGED_IN_KEY',    'M2 wv;[oElkc)v5YF!UlU/+3z-|p70!3o]z<i*JWO_^jXeqA-)sc&m6Ah&3sx()4' );
define( 'NONCE_KEY',        'S!7kSjLiG[L^vjeXLU<GCSk7w(~xB0/C*Y{~.re,fwD{+&t[pt}u:W~QieD7sfTM' );
define( 'AUTH_SALT',        'WIO(e%5Xb7^k4j.|x$4:ZD_I4HeyMugH%Ui+iQE0Cpa8<m=WaAfqM!z,/|AOeomM' );
define( 'SECURE_AUTH_SALT', '(epd!xoEzghQW}<kb9Y8B/{p+51k4|l`^?{u@fLA&E21{~ad6>-sqj +H<N$Wa!^' );
define( 'LOGGED_IN_SALT',   'l+!s{M9%~Ykg<NKwF3fGlp&Cf*evAkI`$PEp<E-(!i1c:}YY=Y[,hE7yU)0L$ehG' );
define( 'NONCE_SALT',       '9E927p$HWUuu4mbnJC[z,~{&1A(aX/U)Co,F{0q50B+abII3t.r`S[^SeUTbkI1_' );

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
