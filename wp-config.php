<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'commercial' );

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
define( 'AUTH_KEY',         ',tdqWCVLP)1+.(.:ZSDi._sTjU)s.xagRJsj[Cv0mPorW-*lVx_zV5WBodq|4Z9P' );
define( 'SECURE_AUTH_KEY',  'byX(U28Doixs 48[S,5_<mIi6gIsbN=&5C2;jP|X1O^&TexTtL$!,!I;/Q/$bX+_' );
define( 'LOGGED_IN_KEY',    'QnjhN0@-V^Cx=Os/Ecf1r:mDOinY!E_aTx_m>td|N8/_BgHUsGoSH0$f1U<ctj{k' );
define( 'NONCE_KEY',        'LZ}?]psZqrEKh.BTF[4TMw~(#jp>dsw2Mdf2>H{pNAt69A=b@YF~/gqOfMXls**/' );
define( 'AUTH_SALT',        '$6I,-uzP=zl(WB%)IG<D<<E^}^Yx ,//^Rg%7v.)L!:]r_&tuG!MH&J~e`V6<Qk+' );
define( 'SECURE_AUTH_SALT', 'V1U$D^b=QOf|Qvu#q[;{Gz_bwGQwy}!9kn`Bx+4J~oWz1>)8Gr]#pfU<dGkvx8r>' );
define( 'LOGGED_IN_SALT',   '<*>s`p9J{( i2WY)G&[_K8,/l0wa3A~6SnK|}i=;XK;]>MwMMtAExGdaO]^3:d<y' );
define( 'NONCE_SALT',       '?00!mYl#P)n9Emg3K}$p+-6@_z&)2WY9FK8]mZhtg#=#J_gq4tQ*tNhJQAbhb7JZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cm_';

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
