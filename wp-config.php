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
define( 'DB_NAME', 'hike_test' );

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
define( 'AUTH_KEY',         'eL 3mLoImTgX/(|S.)gd5:./Y(lWzen1Bk@~{3zZC4:H.W7pR=9-sJw/*(x8AHlp' );
define( 'SECURE_AUTH_KEY',  '7$8Q;V},fJd9li iqZV&;NbxB]x~(9HeAY<t#{=]U91,Aa?c~^M =bHnUNA/..Y?' );
define( 'LOGGED_IN_KEY',    '#Cw,-f699]s&[sZy${pk!fD~FxD4/1IZs,R6.LJLV]Gv<pGNFck S><fI-:s:sW{' );
define( 'NONCE_KEY',        '~Z!:<-t]KHB5`O.P^^H#yi^!,@pZNKm(P/v$>zvr3GtXWB!)4/M&Sn!_y|b^+%o}' );
define( 'AUTH_SALT',        '48?-p)D}GWF&Oj$.,pz1FuQx@lL8ef|.XPU4{X/pBD+Z(uM7wlgc-gK4>F4,u|:0' );
define( 'SECURE_AUTH_SALT', 'tqH;rSD9Rv7&d8=E*YU;b?$~9||>f1)09NL0$ut&SJ(Ddr%R^(^hDF)+~Ajhs&zG' );
define( 'LOGGED_IN_SALT',   '2;^q6OC+/<Q?+j&^l~31v+W11<^ho*en2@/()Dg0`WBy`U7!;s2?SVo0jdkThR[7' );
define( 'NONCE_SALT',       '^$=!naG%PXHDcy-^32mTni#Q|[UyJEvLIk9y80:fB*|Pph>LKXD-M21%Z-]M,, >' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hike_';

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
