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
define( 'DB_NAME', 'bs4wp' );

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
define( 'AUTH_KEY',         'c0IXZ04S`?G-%b7^>N]lwFk[-3c*t[4p?*ft p<2cT0e.@DjY*~#t2$,*.LI$LUN' );
define( 'SECURE_AUTH_KEY',  '7mza.vK~HW)H]gJ9~e`WXQ#m7W,l%0yDMapmF7`;N.;FHsMas4jgnSSlpxl7tw^i' );
define( 'LOGGED_IN_KEY',    '%&f,W>4A`1R@B.4fu][@cR;!?v88w >z+)hG8V26ry4}M|2K^TNf7$p)h;A):,E2' );
define( 'NONCE_KEY',        'kgoB%8_mT=5^Y)y7@Q-CI<K7JlmQ$az$<B3m&/ynP)QtAvF9[O*Of2*O{Q@?r@$g' );
define( 'AUTH_SALT',        'y]q6)Lvz)!6pVnQdfrW74P$yoJMYk-]h7Hj-W2c0,uOBb&m}/y3VWDMtHr]^LF5o' );
define( 'SECURE_AUTH_SALT', 'DEWqcMPU{pldtS{05B*e7+Z)=6(W[{:=QBB$P6~pG} bUyz&SLd1Z,}$<_97~7p3' );
define( 'LOGGED_IN_SALT',   '-DU`~_Xj)CD$(Z<Jb30Z$J3|s]Ky^=A06T#JFk{$@4,K^_Vp|-CT@rUEN4K2@:LC' );
define( 'NONCE_SALT',       '|IX03vK,6<jX+)ed^D4322b1jy)0^cK>tH{^[l.TY6oj!929,;)SiXJ[bOLVO<WL' );

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
