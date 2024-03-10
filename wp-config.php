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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carwash_db' );

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
define( 'AUTH_KEY',         '`8ldxqLFeqtuam5?4JC}le+)[AgcB*70]Ntr0x{?rl&Pz8Cf+qFQGln`kT3]-TJm' );
define( 'SECURE_AUTH_KEY',  '}EMye/5[G]MtsV6X!}mun|6cT6nZ)ZY{wM/X:d)h9dCMt=*W&e#:r6[e~E>$DYCU' );
define( 'LOGGED_IN_KEY',    'r_X5>Ca25*L_h=OI/N%%tr$dLsN_WM Y2-fvN7Y* N{/FhuTDPF]gQSAAr$qc*#_' );
define( 'NONCE_KEY',        'kc;iEEN6}D|)|MGZH)rPb@9:ETD&IP-0xB?;m8Wpa`VK%-,j1Q)J&s6I(k?8t:X#' );
define( 'AUTH_SALT',        '5+bx2r!El]X!n:euz*?Z 7yp.W[H}Y2&E>X.*G]?k,6=+Pads@fL.m`Z!d:?!8,j' );
define( 'SECURE_AUTH_SALT', 'D0WBEDWn$[G&8[p}5r})#w8Y0F$9?A~pU7)=4Yx`wq5Pe25-%5)ti Z0K.]&PN$R' );
define( 'LOGGED_IN_SALT',   'g8O6/*)~uT8g(lNB`GxYD7&hMF(oO9c>*{|}8HU6nMAi0<Y+&`C|$y(~_70)$1[J' );
define( 'NONCE_SALT',       ';&7Zg+?_UQ(3{dts&J.B}UZ+jGBPI,`xNG]@zlS4$-7|)D%ujcKKa,=86:)7nR9]' );

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
