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
define( 'DB_NAME', 'demoweb' );

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
define( 'AUTH_KEY',         '3T7:Cpz2nU?:F%X}>06kL)Ay=hes3T!AP.&kdv.LKbZ{1!`,PZF@U}Hx.%SH]a)E' );
define( 'SECURE_AUTH_KEY',  '&Naj>IN-C)L@b9~|7@c;I2@fz>KPxljk>#.tM2y]X*2(KFXP`*QKdFfPZ6UPX?w0' );
define( 'LOGGED_IN_KEY',    'e k/2A`G(r;h_p_5;>5vKDz4DAf[orA?G./w]Xxn.+=iW[6Vd3Hld%Wubq:&=/-0' );
define( 'NONCE_KEY',        '#vn_Y`ZT(g:XLo-pgiF~j|:TKDQcG.!D{_gO)>}2VX6Y&<ZsS1QiEfUC[Iqs`1~v' );
define( 'AUTH_SALT',        'rW4CIxe3$_fQaJZwc3b 8B--AJz@hx,OGJ!O4K*)+D)VBFq&blRE^57b]|6kLZ~$' );
define( 'SECURE_AUTH_SALT', 'HjFIL:35f8Ik]EPJiUP8zlnXx/`P/[@Y)^AJ0[HXrNgnKo^%,Ja-;W<4V CKQ6<L' );
define( 'LOGGED_IN_SALT',   'PUs(gWc$c=0[52`&n#WqC4d0e{eVFua/p;)f/b=H#!Xs?*d?a6|R&9|7@ tAsPe6' );
define( 'NONCE_SALT',       '{=8i}Cj_&!jMiB@1>R9@ZT6%eToEp`+on>><rmejL0|$%lg/)GlHMpYfmwXPK2&<' );

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
