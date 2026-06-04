<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "theme4" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "rootpassword" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '@tMfyeWwII/n8,|r$N,|/i!Hevpo_vSeG+z9j~eMq>@0!H. vYlH#<Oc1O&[oF(u' );
define( 'SECURE_AUTH_KEY',  'veYDAXu)YQhy/2~ru37cvXeX=&>x`I]J*o|W1q3_k+uqt~WO>Zu_{$-vf3Fm+,Q~' );
define( 'LOGGED_IN_KEY',    '_X*#s}EHM+fEpqf)TB8RH^(id=V_#&*vxAlL8V/)dZB9&7%/kc5xXDoTQ1/2_?_s' );
define( 'NONCE_KEY',        ':()F n7O/6@%B#3NqL}fMI`$^=qQEspVFQ<Z&E|G>(I-Evmkfh,9T(dl_N}o|M}h' );
define( 'AUTH_SALT',        '5G_QJGJCmphuI0aQY|;riB$b_m0;$%+0V1HS]TR:/rp=+4aV`grs]$|$#,zxyx!:' );
define( 'SECURE_AUTH_SALT', 'bBFS=EFk Yg7rf;yuXJMMQ+;9+jQyP$JF$.1 i,!Aa!pQtBZZO= cS_m{~uSQ,Ka' );
define( 'LOGGED_IN_SALT',   '$k47[(v9`+2.j$6S;K(,7L-C2Xz^6BAbz4joqEvR?QDI0-+1Gjt.O=]f&EZb=i9n' );
define( 'NONCE_SALT',       '?=X-} /dhTrYDE59k&DmXk$>C(+OK2hFv`xaW;Jj,tc/$K./8[/M[4(0kgUB| ?R' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);


define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
