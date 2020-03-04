<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'spreadout' );

/** MySQL database username */
define( 'DB_USER', 'sisey' );

/** MySQL database password */
define( 'DB_PASSWORD', 'shaban123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.uVfG3tC6[.8WIahD<{S`<Mm.^4YRDnr[*{qCW;+zc^b/rBLK/K;.vIo]Mxy/5)o' );
define( 'SECURE_AUTH_KEY',  'K c)]4:!=14,/yv 5WB)%NU.*9]+R71YF=tgN||x*~hTImI&6E{fsap^:V4mq<k<' );
define( 'LOGGED_IN_KEY',    ')Yevw!NkJ)j4?Z6xBhhs<Ut{i#WCH.AMS#@=ccww&}p6uiF.u7D_89]tmQwSabw]' );
define( 'NONCE_KEY',        '<8RGYVJpla{<YDd,}]H#CkV[0|D(,lrmZ]q(lAr2~Y*%?J&B3|/!w/H9@5fRs$3G' );
define( 'AUTH_SALT',        'n*V~?e6oi&;I^&wtyMkpf<h,NOw!YS2n~Isj-gLk1(b^3lGpICwqXNinrPEabTx5' );
define( 'SECURE_AUTH_SALT', 'YQrRAkhhfbmXvHUU3CT(M680Sf]VF i&r~idC$E|))hmhx|t<|}52%OYKvS;Iex7' );
define( 'LOGGED_IN_SALT',   'B@_(K#8f:^d?I?>Gh^`cG(vl8ka!@VAj!Y):~?J8F4Uyzc:Kg_ =-@~*UQ)9YxUM' );
define( 'NONCE_SALT',       'E[VTL/ACz[!Z-^Y.21W><d0_|O/RZamQQ0zTBa?TunLW^:-L/l[rq`}pju+1>DlE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
