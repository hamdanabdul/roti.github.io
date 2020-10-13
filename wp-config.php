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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'roti' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'n!dC%!ELJJL:!bn&]bd<-X 28Sm jLRFh.4+@F8v&I-Q3~: Z_)yo=tbJ=o)Om`p' );
define( 'SECURE_AUTH_KEY',  '2u.<CPJzk@+IJ.(TaMp[<y&<6H5,;%wEB6ehS(b1<^aD;zuG?I.W1f7A.|Lt((UG' );
define( 'LOGGED_IN_KEY',    '&dGZO,s~wu0=O[28;!hDaG%!u9,c;h {g$ <4OLzI:XAtq>:Iq4{s%>)b:W&i$i0' );
define( 'NONCE_KEY',        ',@aKvvkL:Ajo,eaf[h:N:,I8_ F(&r_K,9_=%gZT3PMj[{2<`DRYyqm,K;5(3#vv' );
define( 'AUTH_SALT',        '*|_czXN!6AQc(~@- (};zU$MBC|zK8LrmH|quYcXkzqdHkMkP&oqj}k#cVX87T9{' );
define( 'SECURE_AUTH_SALT', 'C!ZwME/V)EOTt]pd/-r+H/z#zVv%`?QM>:<wZ(>r&I(Q|M&>5,][~|wF.cqV[{=N' );
define( 'LOGGED_IN_SALT',   '(#F03OuQBlL%NXA3NNj`bg9eN+?9G.wruO,s/S2z}kF0|3If*I-]RQd_`!@vQj?j' );
define( 'NONCE_SALT',       'cvTYICjTt}E~-8mL mkUj[iI3]mJW3Y}r(zlI2er%Ew+MMkh+9GhN=QpdiVS:8q#' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
