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
define( 'DB_NAME', 'Warehouse-Managment-System' );

/** Database username */
define( 'DB_USER', 'Admin' );

/** Database password */
define( 'DB_PASSWORD', '6edawuDr!' );

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
define( 'AUTH_KEY',         'iM{7<NLvA(0`6;fB|A(Wutzz7:jPo?>E`Uz|W+`a{v#eT..;$dt!L5K#Wp=L7GLj' );
define( 'SECURE_AUTH_KEY',  'u%-pPR@}<(B$spH>1)>l:GvK3]?ED%J/?w3C$f`yZD;~}=`+(H+;h3ky/0/7R -A' );
define( 'LOGGED_IN_KEY',    'HANHBpW*6JB:K!7i7SVgtp?hU u%+/OBf=wOzDHP0`8=dU$40j<Y>MZnVZ3%e24O' );
define( 'NONCE_KEY',        'R41Ie&TG;f8;[.koKo)C;8Y5UXEZI9BPqm`t0j/(p1J=xABXO>8=pI<0${7EC7=4' );
define( 'AUTH_SALT',        'jvJ4<PDg%AX]|eD <{SV-$]`G>IL>-Yh}_c3t6dT*G1h_sCzbQj}a)} U{/)k^zd' );
define( 'SECURE_AUTH_SALT', 'tv)v*8@V.9}1]LaS$oTIv=X5.QQZ.S?6mS?9]0b7Y^`x bXdz:2e&GS&rE=oC,!B' );
define( 'LOGGED_IN_SALT',   'BOq=H+P6UQ@)!i8sk8}V8a<NV@irH(dCXQQcQjzHtz }I~U%FOOf-iX%,;#zuvs@' );
define( 'NONCE_SALT',       'BEV5QWkXVX1;,GIZ$9E=E#giQ.X(O8E1Y{ U*CcQ1Xah1Enu`h6]EQdMx~i#XEJK' );

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
