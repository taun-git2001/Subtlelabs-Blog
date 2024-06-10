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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'subtlelabsblog' );

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
define( 'AUTH_KEY',         '%[>x{JF+:;42A,adY!Ce>/vIte e(OA%YgQ+Kf0q0RMjYWTana>OARZZ$ib#EjeP' );
define( 'SECURE_AUTH_KEY',  'Rwt`=N%TH[(4S*^J>PLI5rDw.G;Icg6MJ$G3,%~zj5_>s](qIyKs)UDqk]-r[g9<' );
define( 'LOGGED_IN_KEY',    '}pku)`P|J!SbENu<`*E^JJtXC{tMF7GZ_=3~o*SBR#$y;I.ol.z9cFkoZ9THUvCP' );
define( 'NONCE_KEY',        'soiM A00Tb_i3]*Q<_Ze^ugIeYL}L-!Bjz~n`oG m--2}$D03hr$EiXHlyj:`IDd' );
define( 'AUTH_SALT',        '9e%awLXkWVA<H}L0LC&PD2ZRX3_}.,~cKQ~VM)z8iy1;8iL|4kyaJd/F]JJh=Qht' );
define( 'SECURE_AUTH_SALT', 'GvVe1P<sz|qi`/1z-JpFxy<#yiN!T|KDneql-#l!r {K$Fp]4lKt,*D~S8Wu02H6' );
define( 'LOGGED_IN_SALT',   '<NsAwu)Pu/GQ67T=r&Ll`%2+OIZVD3?`n?8)HY~m[6@TfwZYdP}ZodFj`KwTP,g8' );
define( 'NONCE_SALT',       '&vT 1N2ur&1-0S+08_3JbtYdN9T{5?YWZ8Ue$LE*5JXxcd59OC=2Ceb$i[Xt ,JQ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
