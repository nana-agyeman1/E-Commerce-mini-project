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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         'm19<qMG`tl/$u|h(=)/Jg}tnII7b,L:Q0|3`DP5>U,6N7_x-2P<])N7S 5.Nx2Ob' );
define( 'SECURE_AUTH_KEY',  'qm{7&N)LX|v!^3xd5D>wVauu-`a0T)bD`.k*mqm]&QS6kF~ibq*MW=i;(JgyEwsy' );
define( 'LOGGED_IN_KEY',    'RvZjYnW]hhAf|4.b$O{0vHF5XmHotUS0x&*Hu&rR7nX3ukVw!;#z6fp+Ht={tzrF' );
define( 'NONCE_KEY',        '/_zP<9SyG[.Decoz:~cW1{$oxH/:QsdbRYfl+Aq^2?RC3c~3C~1xn*x5  _@q#[I' );
define( 'AUTH_SALT',        'TjtG6=u2P+!w$$lKk0zU&D>Ek$(,x)2+[O(^`F%GT*evq,]h WF((V*`Z3{E]J&0' );
define( 'SECURE_AUTH_SALT', 'f5^f1OZ28{O>r9E^UTi+_-;,uYJ5[L@X5+-s`*<6d+,3_DcP(hg8W]h*ydyy=>X3' );
define( 'LOGGED_IN_SALT',   ':xhp.KVI?lCRabL!2k.RfJ.mgn;3P1tMagQS_K=c0,;[|94o/R@,5/C%4djrWfJx' );
define( 'NONCE_SALT',       'v:T1c*Pa-uLbjXm/a6V|R9t?Pn,awp^_> |-vGJ`KS{b}w:T_,yj|HCr0j@W3GzX' );

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
