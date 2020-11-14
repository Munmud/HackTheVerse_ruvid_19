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
define( 'DB_NAME', 'hackathon' );

/** MySQL database username */
define( 'DB_USER', 'Mahmood' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fqXub96PxpoynUDc' );

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
define( 'AUTH_KEY',         ',%$,d;*<vS@._9?Fhjsd%N?Yp-DMJA>A$[jPafTcYb+y5d|IA|k~PZn<9-JRM.BO' );
define( 'SECURE_AUTH_KEY',  'QfR7-)Vk3Ht6mA$7Xvb71D*<><,Sq41=gI$h>-Arggt=3WW?Bs)7G*By{:MEof};' );
define( 'LOGGED_IN_KEY',    'OKxmtTCHtI2={uofXR7A#]I!kiTVu-SEflh7uE271r^1<XSTBpV6c/Ak_*?fla=j' );
define( 'NONCE_KEY',        'Sg6k/mVmAeegcMSiRS5!~6qKy0V_uYjhf%)]WX3/PIXD9V2.TnRnm)T7=[sg!~A5' );
define( 'AUTH_SALT',        'tU<YV!5Ckhp9?u/]v?w,1Nuh/XQAn!~onQJG1*kXP>z5XyS{8}^Rk--]7/`zM!gX' );
define( 'SECURE_AUTH_SALT', 'LY< .a EaG>}L3dFbwU^ gYUs`3dWEmo-?oRV7%vwb8cJ7gc~qB|)i 43^.ml[@^' );
define( 'LOGGED_IN_SALT',   '{x#}!)W/B8lxFPj8D09!`]8q4Q<&3/NpLK5WNfJ#5spE1[$!@u (@7-:jL.(c!_ ' );
define( 'NONCE_SALT',       'G@;JN#O2Z5qm-4B.DxTv/=at}AV<,q]`b-o//Hn<u26!)FE7SHLl(a>AvktuRc s' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mm_';

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
