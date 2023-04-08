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
define( 'DB_NAME', 'doorsconstruction' );

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
define( 'AUTH_KEY',         '--~TbNW>58jhm1po$=eIR^yhMy6)eiBhxvorNW<?&TCu3AvgK4|mkTBji{gB`h2F' );
define( 'SECURE_AUTH_KEY',  's!k*6`$.o]6hxNpt{:Na2/(|3O$?-jWC.$&|45t:<DAvBw{<px:VFc&gO:RbVIJY' );
define( 'LOGGED_IN_KEY',    'OQ%H ZX@fs0EZ1P=uldm$aFMPb&vd^;I^@H_MJ05<Ps,2qkfk,HG7T@y 1h6$2$)' );
define( 'NONCE_KEY',        'C1*hbx[m5Dsdz(z!!k-mKz-cTrllT.A;k;^u`3aldOU41paS-`MlgWgEj:j7t8k5' );
define( 'AUTH_SALT',        'M:0}t}d:gvm[c$)JLF&`qAani;nG>rpeJ}!(6/@IY<)psx(?(^L>Zb1<k1;nTgjs' );
define( 'SECURE_AUTH_SALT', 'ww$ta!<SV/:6QGbFo5JPd@h8K>.*7rAV#1OVX/:uIs!VNo=F7<c)AI$FLU-lruv+' );
define( 'LOGGED_IN_SALT',   'U*p9[zlQ1/CG;3:n-t4(2fD6pY0FS%Oc:O542);osLrXYtbL4B_9&=Y2rvIljg-Y' );
define( 'NONCE_SALT',       '&7dj>Z1q[UgxEHfOm$vop0Mp((&9Z}XhkY^ODI!>^nWX+JG[z<RK.d_5zAlV>)Pp' );

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
