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
define( 'DB_NAME', 'minhokimm202102' );

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
define( 'AUTH_KEY',         'j2k?cC[e_.I/(CSI+T8niL^2N!^xC02w=+N_Fs,j-_RkQ];6*%waENAP-_sHMeG ' );
define( 'SECURE_AUTH_KEY',  'TOndc#?@T&Jt o 4:)#I-W5pnY;zk7qG1<XT7di?X]jxIc#%&139,LQU(<&P/~Ky' );
define( 'LOGGED_IN_KEY',    '_B v2A#u@nD#g0o{,LAQ-xxd%$/f6Uf`xqc`qTN(_F~P&aOvJYLzK]%*f7CzauL<' );
define( 'NONCE_KEY',        'fYTh4EY6w5-ctIK!P,JkMihhYbW{.]u~!@e:Kzw_$.dc|N+YFGnes%@ r<#`9FW]' );
define( 'AUTH_SALT',        '/1F*8}j>TPg#Dr6b2-.g,Vch,a;@x1M&(MkYz,kj,N=YpI<2TI^??v4#F=Q]m#k ' );
define( 'SECURE_AUTH_SALT', '7l(VfFF#$6VA$R5>0<3:n`$aM}gd9>Af1E.|VLtrAk/3]!|0xwmwB/8oK~F12qx_' );
define( 'LOGGED_IN_SALT',   'FOmFtH#Y=`q.k/f/^:>`Gf z`gbT~dl1,! 05.h?EFjF01HJ}8R$_L0 bfe/Uy0a' );
define( 'NONCE_SALT',       'IS+-LV=GU9VuK1iQj,2Od;TYA%3z76Fa$p-eA=5!]s[wr _sZwTWG3a^ScO=7>nG' );

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
