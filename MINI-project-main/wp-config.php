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
define( 'DB_NAME', 'easybucket' );

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
define( 'AUTH_KEY',         '.r,z_MYcg`poRzbJ`!Z1<QL$h5m~&AXk`>NfSSY,x{;T6_aZ0TEgb`bf L(QQq -' );
define( 'SECURE_AUTH_KEY',  'zKiBrjOuEnfEU/EeWscwtuVTQ|>1qz0NcoqWc5A]y<YQkXA$X3UAfG:^Y%J|N(RS' );
define( 'LOGGED_IN_KEY',    '/<b/WlMBobMkJ8w%=ze,[+;m=!&=2vAp]c28_@V?.B*W[7^oH&o1RZqtN;c!BH[#' );
define( 'NONCE_KEY',        '#A/hlG>(r46R(f/2aBBk`cK[[zi=>!.dq5aq=9cJv[a|.e!#eub1,+B02{PEL(#&' );
define( 'AUTH_SALT',        'wp^w0&LQ+~9:]-^f5HQs Tg)PkBd]g7>_-`YKe=X,z::q}Ya*atWtVYhHL#J!<|,' );
define( 'SECURE_AUTH_SALT', 'zl-{YuFS25dH&m-4$kyXq*fE1,PN+q9B?kT0hxq($JZA^hNk>Y8T/*=m`F%.[Z}}' );
define( 'LOGGED_IN_SALT',   'M.Y8.M|1TQU!37}uFOD[FLM{B15L@j%78X&ERxqB^hpBHq(]!cl.SjTk4;i|^^mC' );
define( 'NONCE_SALT',       'i#c9bh<({+o.x5-x;AU`_IzJ1hk1.WBGyD!9yD,<ljp$0A*5^BnPQ]2erD<y,@I;' );

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
