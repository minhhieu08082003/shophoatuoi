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
define( 'DB_NAME', 'hoatuoi' );

/** Database username */
define( 'DB_USER', 'hoatuoi2' );

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
define( 'AUTH_KEY',         '/ou>3Bk3G(;1v{>|(*Hdnt(cAC_dJOe</gk-O?F|jc4*e22o{TlGgU@*buZ94&?{' );
define( 'SECURE_AUTH_KEY',  'FE9(Y<;;,9%P]qD$3s03rJW;O9MXGI/17k7ifZB}:)YT/eVH1LoVnA<d3I+1m6!w' );
define( 'LOGGED_IN_KEY',    'HHSK{jgdJ.)%[$Ok/1G/I0%[tC&QzBFX!8,1b/[Bg@!5km)1e^*-Em:Fv6_nHaIx' );
define( 'NONCE_KEY',        'O{$y3mc=H]lb;>&,WLEffIQ%6&A}^)p @% [>>oRYvyRsCv+<i>z-{Qp^:GRLf+;' );
define( 'AUTH_SALT',        'y[LW.49sP5l~9iF?9mFyKjQiM YKb6);$cJW j<oxl+qj<pZtPCZWMHO]k|vO_W1' );
define( 'SECURE_AUTH_SALT', '6]F[x&slup(eX~hV5/=i:qQ{`rWe6S)H94QN)7jBWU*XG0I~aj$_H1ZRB)NwTWvf' );
define( 'LOGGED_IN_SALT',   ' MAr7pvV1^RBH^_dg;.+]4Au$$M =NP#mu,M9:DUDe2bW+l8.1K.bik<9y{NYr*^' );
define( 'NONCE_SALT',       'R+KiT{s546}@.c0v2E&!B&%{l`h&PKU$Fm<D%Oq?.rwPjd[G$F9Oq)`l[_/;B74u' );

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
