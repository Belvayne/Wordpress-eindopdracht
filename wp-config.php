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
define( 'DB_NAME', 'wp1_dealer' );

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
define( 'AUTH_KEY',         'Yv#EnTWpK8DWVm[A(r~Wp}VrN~>AU^|*%`E&j]d:M&v|aL<nQZTLJw1CW|-7VL8`' );
define( 'SECURE_AUTH_KEY',  'NIh5I|Hg^hlF`.*Z4X]I*l.9&g%/da)lR,_qEdZ>I%S)2b0VJXSKm09*5<n.!pm0' );
define( 'LOGGED_IN_KEY',    'f0I#{S:?fYEzB&vvkM{lErXGuhzA9(ig;8fOrFC<%$dHSTydhp*N$Y.+dcv%[-Gi' );
define( 'NONCE_KEY',        'L;Mt77tQo/Ho#}TAAL<H?+6JX`x#z{:w]L ]/]DCY)_f%V})+c0Rs`?=yQE9<t#c' );
define( 'AUTH_SALT',        '`2R$rXQ]=:iiI?cm+ByR`ON`8hhAj_C1cGFD}9j~H&Z+-x$Pwzr^9b|sCc{}1$tg' );
define( 'SECURE_AUTH_SALT', 'ap6ArAMx3WhA8NAW2WoWFNxOC+ioKl;rFGSQR{YCBj>j<ZEM9DV%(OPDN7bPr>}O' );
define( 'LOGGED_IN_SALT',   'd=5vYwy|H`=yoP:5Ghy%z9id|?w5!/]m8Pjm^q@ka9d~:M[WlKh>Z={ 7IA6t0pk' );
define( 'NONCE_SALT',       '5$+!yJdNke%8w$[KAYDZrjM_Wtl5Wj4k33I^mv&Ngz;wP_=*Wg+7GG5/$2c/F^J%' );

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
