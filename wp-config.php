<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'echoomerch' );

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
define( 'AUTH_KEY',         '%h?mjQg9N)l]/ZzLS=e]cfz0,>/@il+D,PWvWCZUwM1EXFXuys~:o2?e]o.A(jue' );
define( 'SECURE_AUTH_KEY',  'dWJ%hXh}nS&eiSBH9<f@pgo4J^U#In]/T*0}&W3~FZzB>]<h&=R+O)_Vd~+Vu<]X' );
define( 'LOGGED_IN_KEY',    'S>!N &H)!@x1~kg`4&#^/@?2h?^*4oHD#/HOhzefyr3Cs%a&(@}$8pDf:Aeo<<R3' );
define( 'NONCE_KEY',        'B/%#s`B,oMDqxn4]Us)mcS=IHO+HnO2{x$p83~(eX#&wvD%Z.IqsMUUo#ZP&NPcm' );
define( 'AUTH_SALT',        'k0Ppa]-si_ @_&qM.&+oyaDPfU3S0-x5lq6{U ~uhB%t|5bxGH&}C0~DEKq]}D!;' );
define( 'SECURE_AUTH_SALT', ']H%L`_[<6o_/Z[&,&3]z7J7+j09.ZL?dTA]pkWTf#FYf!3augQA4jM4tJ)uX.(d_' );
define( 'LOGGED_IN_SALT',   'FXR>tu&8t~*82:}W6|KB&qX_(x,2Ars=Mz,Xm5ed0_YQ)WqZHfKA3VqC5X>V,Ro3' );
define( 'NONCE_SALT',       '5475F2pF[b=%0m+nh{7/<tjJ]H B<)41:Hf,ET0]@!gDf6I3aROp`H39`qU#wiIT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
