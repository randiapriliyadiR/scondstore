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
define( 'DB_NAME', 'scondstore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '_uL>N6+zT1D-O-AbRr9p-;0>~ztY]lI5o73&EA94jhMb^m.sn>U:Htf8+E3!m[Sy' );
define( 'SECURE_AUTH_KEY',  '.mr}#KT& 6R`uA0UGY@n9+XL3m^u<af|-cLFda3|pV{pj)hbI`yV>V3fz1/#0VYd' );
define( 'LOGGED_IN_KEY',    ';%mB-Jl5]TVG!A] xF@N(o>RL9zh4KgKEz,<.Gzf[vhX@OiiJE&Df*Siaq}<<Fay' );
define( 'NONCE_KEY',        'gk@#973[IUa}U9Ep`7{>8]Vt2;PC}`h@4dPYp)V xHy=B@;v F/OYrL5e9+8+YVp' );
define( 'AUTH_SALT',        'X  Wf]<:j^~P*d^}bMypSeB#D;bMfb7S+-0lN<SHl18g28d#@vS~NwU_XU0|X{CH' );
define( 'SECURE_AUTH_SALT', '8D;Y_ibLu -wla^a&Nik_G@ptWS`vx,P_cG>!(]BoyL]B~B1zC;YHCT/ |(7r]*n' );
define( 'LOGGED_IN_SALT',   ',^I@ii;-Qa8=^7:p492ALdOo&~K}VEZr6qOyV/@i>},GUuzkb.9+K^,{Q,n]#c_#' );
define( 'NONCE_SALT',       '=Y:W?R{vR4}P<GT$gmooKE&$J:<v2iJ-yRj):S68YYqFn_x,0Q3a*^)0(LWERS<-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'scondstore_';

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
