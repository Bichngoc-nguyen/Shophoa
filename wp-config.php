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
define( 'DB_NAME', 'shophoa' );

/** MySQL database username */
define( 'DB_USER', 'shophoa' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'XXS60knNz*I2LZ0i(hb<oJ4]0r!L4j[s%sV3u2@=W!EO`-;CqcUVP>3!ZH)e2D^g' );
define( 'SECURE_AUTH_KEY',  'E0]}bz^fE+<F,OH$!Mj^5@|hLc#;mbM1S^ c8|rs6E}N`VWYb:}s&-TqL++I]^rI' );
define( 'LOGGED_IN_KEY',    '+ &^PL9u]bE<4hnVD;?}[ikKDnIoj7O+eJK?.xe&LVD5NM4&s=<qkI;Ij777)GkC' );
define( 'NONCE_KEY',        'E8_#_LrF&-{bJA1}` .Ws=-r -?)x&z-k+^q83X%{8@SEyAn=Z`Wzxg(7a?tF$@_' );
define( 'AUTH_SALT',        'R9b_kQ:<d3{RMZl0v(+!>{,q*Pbjv1u89=Of$%!`7ty&zk]c&/jtXI,QNX]9RqF`' );
define( 'SECURE_AUTH_SALT', 'Hy9HcEH%NUEfJgyS}7^%= s1No-i]4f$$]ndqa$={YtwF>L^3:w.IXSx?MU_)~x$' );
define( 'LOGGED_IN_SALT',   'MG0CZOE%V~fAM3Be*f|>skIKLXzyW-UQ7E {Sx48++F@XkI6,L[@z[B=|c!y+w%<' );
define( 'NONCE_SALT',       '&JVQ,l=tzWJ6v4]P8.v2Z5w&y->^,=@8<Woa&^g`O76IYb|2wNqm}ex0D!Zf~/c5' );

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
