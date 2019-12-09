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
define( 'DB_NAME', 'liveWordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '13d24e981e30990a52db529d0eb3047917c2f06e181e8220' );

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
define( 'AUTH_KEY',         '8R2iw]svdG_RAK4.#=<I.KQHhJnPXEEQ2@a:Z|?cN)R7arqsMjyT9v1@S;|4xH8%' );
define( 'SECURE_AUTH_KEY',  '(<.eMyrL}kUY)kUc:QfZ,l6tHsj }oe@F3;YQW|K>@~RFeM{uW]tWx9yY30dh}xk' );
define( 'LOGGED_IN_KEY',    'gY^yLlpeSnS!Ldpw!WX_>EVW%TF9ZHwe~(0Os*!-JW:yjt$ c9,g.m,r?j!E9Bm+' );
define( 'NONCE_KEY',        '@&_p- zGAznFQ[O|i7y>-3p`tg3CV-([XKFq{_+(NBB?*,})OA.m)@ 7UTn5|8R$' );
define( 'AUTH_SALT',        '1pg C~>m=Py(~@xB3IQa&Y.iRf_;xzjqCKy|{rj&83=XRDwbrCI*4k2x1}W#XX1x' );
define( 'SECURE_AUTH_SALT', 'cm0p?BNsWa}0`m=^RrHT!KbKR(x;4Vn@A=3VM&qnqWz#qWH&;_csJ&7>2}*L:.m_' );
define( 'LOGGED_IN_SALT',   '.KF1oO;lm&E)eD[XO3KX{/!9_g2FTrF%g:?,_JUV?!&^J`&q(=|`t$sbp<kEUC{a' );
define( 'NONCE_SALT',       ';4Vy]6f3<orYWrF(S?8puK<{DyFg+$h5DLy[WN0w^*4xM#_@e+f+*oQpe:Z2jIgE' );

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
