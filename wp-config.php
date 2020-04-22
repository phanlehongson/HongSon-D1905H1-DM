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
define( 'DB_NAME', 'phanlehongson' );

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
define( 'AUTH_KEY',         '@s>;R3|G4L5Ur(5hQ6(fL$B0~t@SNOH_4N<9iI&o`.b3wvm1~jbFkg9L-uG,Tw&`' );
define( 'SECURE_AUTH_KEY',  'UE]FG/Qy)br{zaO&<=1HUoF5ZU~aYJ1wbY!Go(f2S,xn`^&*oM,0jL:4[+s=%^1U' );
define( 'LOGGED_IN_KEY',    '`lr%Dem2mK&2EvP@hl. qo;b~4nhSGREeM`UPNQ7xO,>*D6P(b$yRX5+Ty[zn/*k' );
define( 'NONCE_KEY',        'f8nZGagI3xtc?,jX2cFkj4FI8d$@|R< ~6TjZ{n=TubN&%iPKLsDx!JQ@)P>J%16' );
define( 'AUTH_SALT',        'RpMFo(P$&i0vrO.=c6]V:9iVBQ|kSeyNCJ<{2&~tLww0]p[o%]2)] 4(XpJsNO[g' );
define( 'SECURE_AUTH_SALT', 'e*y])q(?ByDI_)Eh1#lfy9RD5Te-<vPr?v?fnF8BYODQrM+_c!{FEq)PQ&$~~hO9' );
define( 'LOGGED_IN_SALT',   ';K3.6K8|]vh,b,$vGF;k!@f~6Q9;5<.PAT}x+,N|h1)q%,BDm=k4zvh@z!+uB,E9' );
define( 'NONCE_SALT',       '=0gZ#}K*n>k<h~s[5y/maQ3iE+crP|kEl3_F]pa?vQdkFQwnz})^hu/Vd/hgF]!a' );

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
