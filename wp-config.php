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
define( 'AUTH_KEY',         '?4o0o|oY@$khoPq=Bg.8nr4A6cTQ7D:vE>hC+2M-i70d?IZe}ho`XA%-Q$x2Gh,Q' );
define( 'SECURE_AUTH_KEY',  'TJu|^rP0e;LIch/)6W#PvRG$%/$ [0vfYq1]]x%V{ZU`~T<&]L/iULl|eG=i,or/' );
define( 'LOGGED_IN_KEY',    'mkET3rc@:t98MQYgiUW>RRVr2PF7=Wzo,S@/C*-H1]KquNwAUR{D5L&T`o@?[{C`' );
define( 'NONCE_KEY',        'X!-vW?iR0 3f[3n7I}f0qeul:*R)^>`PI;L-{8.h;k^wV~sS*^]7n.=$?5vr@aW0' );
define( 'AUTH_SALT',        'E<rhWf!3M_&vJ:vXH|erZhROF1o1p<;gZK(oZoioVAL#o+}-Sx(u|k:2|gz}4``!' );
define( 'SECURE_AUTH_SALT', '5IHXko6$^RbrJHK#*&mG0S(Tf(fqQv~(],~HcN^EFr}$as<dd?@lm$Z{,P[Rn]Xz' );
define( 'LOGGED_IN_SALT',   '(85LvbP?1W&3RX@E7<$d[/ rp|vl4!(|F1K#(abyK|!W<@LDPo~q4X8m>iRkzE0^' );
define( 'NONCE_SALT',       'JLsC^QCq1<c>`X<{}4pTMcvTm[,<WLqikw7Iqoov$~E>e7ZL%zOCE<JCbg92*:$y' );

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
