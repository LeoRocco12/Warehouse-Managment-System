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
define( 'DB_USER', 'ClassicPress-dev' );

/** Database password */
define( 'DB_PASSWORD', '6edawuDr!fbf' );

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
define( 'AUTH_KEY',         '^ H,8.byE`A76lC!L!cy}kIQ &8a?pdSDXDI_MkI7EK-aJN,G=d]GFSgZg/q}7Qb' );
define( 'SECURE_AUTH_KEY',  'iE`v`AwzLtp+aPD:a~Q~J91g}C$<U[d0Vy/%g`qaNaw9Mf/pQ}2CA8pa|-pdLaBY' );
define( 'LOGGED_IN_KEY',    'Mf:#g{{,I*?C7Qv8&2lT{%SY?L/90ky;rW_xSdXx,z)Lb6sy6G^v&1B6Y1bDEohz' );
define( 'NONCE_KEY',        '<5(rpHsTi&k=<euSTS[BPdtKcp|c*q $5tbQ>3sRnFtb<_Jn(?vH5](oC*vu-]|,' );
define( 'AUTH_SALT',        'P}+z=`3dmD~LiG3KV&R`y)&]UgB3.>?df,ei32zi7F:t;YW[i5l{^K/~>K(S3+th' );
define( 'SECURE_AUTH_SALT', '_{R46iWy3<^_9tJD[L<Q5gs&~cp/4U.f`yd|C/87fV_,ktbEJb|/{Xw{$*&p1tY;' );
define( 'LOGGED_IN_SALT',   'MO5U9lET1o]0m-T-+4<tOuIvX^%3yISea=jjZhiqwNRdS@htPC5CfD!0Y0x#R B:' );
define( 'NONCE_SALT',       'wH(4kP`9J/$2#w-E^$8>/ltGe#<23X0B$3p0g1L,W2YTo91WVLRZW3.8[lywI$Uk' );

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
