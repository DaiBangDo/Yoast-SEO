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
define( 'DB_NAME', 'yosastseo' );

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
define( 'AUTH_KEY',         'F1-zD00R5,4 1@#5OlH>PQ]~c*e+!Ln5{n!!Ez|+U5]LYb<`hFxp6KLz3%csCq3w' );
define( 'SECURE_AUTH_KEY',  '2l4)m1Kc|NKfam2SylNP3loSFAq3j!-9U@Fnxum-x>{fS7,]k-<h6 6S1wq* hms' );
define( 'LOGGED_IN_KEY',    'QHiYGqV2vZ0@xjPl-)O$*|J[H~P_UInB*S&m!GSs}w/|TUTR#St-L5dW(S)-w e=' );
define( 'NONCE_KEY',        'WrP2O2Xdp51[VMvSpN;W4oK,V(g5ltvx-%:fL)=iIw0.4jrqHaP)p-#o7%8qGnXq' );
define( 'AUTH_SALT',        '%Tk8t_r X:z+b5y>7L BIk},O?[5e&MWLb%rP3GfG?8@MjI<e1}@0ug?ZR<#MCrD' );
define( 'SECURE_AUTH_SALT', '9p0<IKl,?nC{)z;k25 p~-bT2nbY@a8Z6$E,/geMTV8c;kBkf3,|]2e4V5A[g4Xq' );
define( 'LOGGED_IN_SALT',   'Q+)dh$s0#zqO?hS@T1f(vPu=xN_7u/B&}Z5f*#**:2GZ|PD5B:Oc*>3.HT-LZ.ud' );
define( 'NONCE_SALT',       'y,r70?`GOr+bF,%?W0Ue?Q~irk b`TJ;U_{ZD|6!T!;f?~ #E|yxl/WVCQnOcIVW' );

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
