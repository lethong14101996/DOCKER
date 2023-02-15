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
define( 'DB_NAME', 'db_site' );

/** Database username */
define( 'DB_USER', 'siteuser' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'c-mysql' );

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
define( 'AUTH_KEY',         '/,.o$sJ^(EUPRZh>ktNpohhqKu8^N`>(!+N&P<Z}(IWHu{v#^+S*cjSHOS_l/#r2' );
define( 'SECURE_AUTH_KEY',  'o{fwmu4aaV LEi>`8x>TxQ_+&3#,Xk/?#x6o6woCdiz:S;&,k&#w>R6(H7Vzze4g' );
define( 'LOGGED_IN_KEY',    '1i,-M-xIJ)D`Jqaas:W@F4SxN13YvJu,i$.n,i!cZHt<XC3O-nB/hm!S!3Qg;q]q' );
define( 'NONCE_KEY',        '{Yt?qjZL@[e:_Ms2cU,1YNsRTEb!B*?Oye&o#^LzxM7A2Z?.q/:u2OBp($:}%O/J' );
define( 'AUTH_SALT',        '86HKICIba5W}V1`bk7V+?hS3J^8Go0B!LA4HAE:;x --JD .q:).n?As B<]/f39' );
define( 'SECURE_AUTH_SALT', '_eE/qnIAoMj.U;Td[ogKPm+k+sGCFu|gOWm3(wuUyA#i<T(wP,E]}h6?7N$}@4O@' );
define( 'LOGGED_IN_SALT',   '9xHMF7&.@+[:DuNS*ipeA?2h+b(f|OkU0:&c~7rWD$CJ??C5}/CBmf/neq<:ca>H' );
define( 'NONCE_SALT',       '`|2X@5;f7A2;du=oS*s|Ubr@DGUDmKzWKQN+-$0q:VI`5m/QHaMELg^k0`/6<7yZ' );

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
