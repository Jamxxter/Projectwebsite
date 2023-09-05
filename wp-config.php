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
define( 'DB_NAME', 'Projectwebsite' );

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
define( 'AUTH_KEY',         ';Uh<AN&sv(f65fCh>WVn+4^R1*?#8NJ(dlYEue$d2><5;NMAA9=_Qmx8zgTS<^(H' );
define( 'SECURE_AUTH_KEY',  'cx+/c?RZ<3rJ3nA@Phw|4d,R[BCiG3>4.S_{:=5zc/7<l!:x$[41`CD8 k+$Q@vf' );
define( 'LOGGED_IN_KEY',    'OWYs`#UPO,Vx)`iFO-iF.Z.^T&|6V$0V|@$MpzC_Ti*@}?3>}~045hF]2^YP gNA' );
define( 'NONCE_KEY',        '~5.Dq4=|CxSGCJ&ts5SyQ|{$([1h}oemcxGciQE+;g6z)oqSBSp3b`k#1T#Y:;hw' );
define( 'AUTH_SALT',        'T}Vcn|xP8xUBJ$krWy1#3t3ta(4bjKvN[rMKCSPA i+KD+enR5`-3p#iwdJ^~f{C' );
define( 'SECURE_AUTH_SALT', '_m@|H~=ZXW01t3KjL+ng?0rpe=|G#a ]rDK{jb3r4^m`kXc!3B.[Ok(<d9GpO+i,' );
define( 'LOGGED_IN_SALT',   '8|%?AA8OOoWJx!jzzo:X5o RNGL/V$aI:%UXCT/N/W2zb{Q]MfH(Nv.O/D-<AO9A' );
define( 'NONCE_SALT',       '<%J|Kr,l/)LM[_ c/7Z)-b]$L}M(;S0?#wy_Wj^2H#tvRQB!B#*(p1W0Vx&U,s5C' );

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
