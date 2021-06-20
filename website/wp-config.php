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
define( 'DB_NAME', 'sys' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '?mT,BdKC6<o{JjScq]TgkI|-;zUfUcp;6L_o|/Yk}S31?-Sxu[,c%5(O>QWex;94' );
define( 'SECURE_AUTH_KEY',  '+SHW&~Zm0i$oA9-k~RtL^: `2zm#FGWr6}E3h{:;ov,</gjdJD&g]ylPM(iy}.Kn' );
define( 'LOGGED_IN_KEY',    'znmh+P]>,zwH_6xI[AB8*nO/,|kyM%)@1+FnBVsCp!_ceHbECymu[x!n/$qH#FAj' );
define( 'NONCE_KEY',        'xwLD!;*:bpk{WP?{K?<OFPHNL:vtB9^moW*S]r,!}H<^#CMhe(a!xQ4oxvkBJ8s?' );
define( 'AUTH_SALT',        '-B_3i{3JC_{0fO0-kV1C}MN-y@L;@Y[e0>XtQrS+NQM*qH}Yx]E~=-@1[9oK1iKL' );
define( 'SECURE_AUTH_SALT', 'YEb`zi#lVma)GTv{$^k4GfXdqi%:/vK+bF=3(q0v@+x OI[C_;/UMfzi*tT~?4II' );
define( 'LOGGED_IN_SALT',   'os+Y7!eWht_qGMp6k.D)[.>G4[cUlfQ7zl_rOV?L plSZ(%(;k*QDd}pJZE8]D[6' );
define( 'NONCE_SALT',       'nV3$VcLBojOmbjE{ZS^pg{J]yLb1]dAx%p>VQSbU=H%^&B}ca;%=sr~)n4I~ve[i' );

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
