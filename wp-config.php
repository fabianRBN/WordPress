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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '|F%H>wmQN;}`kbB,Yj7H-uujb*_J=uT54My|}rU6Ct5uLBvv8oc0P`Is =eg` %w' );
define( 'SECURE_AUTH_KEY',  '01i9`[|yaF?z XE:-d=v:iz3,(GE?DN%q7j;C&gLy6v=%70`^h<%Bc2 m,)>.,9W' );
define( 'LOGGED_IN_KEY',    '1K|:SW0K$D:RPY%n{|!Jt;D^45+bEKzqI2xg~n0dUvJhY7Q+c(c @v<h-.GTGrMq' );
define( 'NONCE_KEY',        'YQ;{sd|g=y8N+j@%-!X[Z57|<pjw[Hpg%t7THheYtx[uDp Mfn`<&yH@gW8K(wNA' );
define( 'AUTH_SALT',        'mWIrk~#w:zyDBdlQT^rJp(9q_(XTo ^;rG~ ?z}lLyM3e%c6hlaSzu|M8H^/kG1C' );
define( 'SECURE_AUTH_SALT', 'j858.6K/EmS)>hH/}|X{V6r,PHr#oC7q,K5mbMkdZJ%zpWK[M9wVmk.l]|;yC)84' );
define( 'LOGGED_IN_SALT',   'BdW+|(+P_(zQ+bF$m8Laj,P0jZBogcwVB^LqR][2MC[x.:vfQ0j|]s0waiFNTcch' );
define( 'NONCE_SALT',       'VgUp%fV0?</s{d__D7>WJLa-e5n^b`eqs093as+9*ldjnHePANPWXR[>[LF!E3sy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wordpress';

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
