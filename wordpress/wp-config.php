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
define( 'DB_NAME', 'corneia' );

/** MySQL database username */
define( 'DB_USER', 'mamp' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8888' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '^&Low5r]|D+zR|M+V1y8Jv3sKw~IY0?W|P}6C7ITi]OrdgfeFbrUH-.Ws +PK;Hm');
define( 'SECURE_AUTH_KEY',  'Ahx-|wD/&SIHXgw bw!iG!]UV54D->ER 0K^dqj853m|!WJCMB&jdepO7+?uMd$u');
define( 'LOGGED_IN_KEY',    '[:(:S/Jhu]Z^O.oz(WU&`U %hngr5^$m{O(sD6]SoP[])D;1&i`_db_e$|[|;}h[');
define( 'NONCE_KEY',        '$+UC?]-Re|&y# SPWBa8*/ov!^-!~Qu7@wrhi|LJ3ij-OePm^C}[,wCrf)`/ox(+');
define( 'AUTH_SALT',        '65Ce3$Hb.lwd0U-8)-:Wh*B6^d+_|0(rTH`q;?e0&Sodq{F|XuFq#5vXf0U%Db{y');
define( 'SECURE_AUTH_SALT', 'vK^A.Ed%JZIWB-8B0bWxvy_}b-5W}(:iN$Rmyv0e _F/pzox3(SkIr=V8QO8G-q~');
define( 'LOGGED_IN_SALT',   'w0O@~oos1&$+xr=0:H,0~:X+-^qU9/{KSY6vk*-.;}{N8gFVreJpsj 8x?)Gu6/g');
define( 'NONCE_SALT',       'Ct-6F)#|_fCb`trfs,~-!iLOtm|dYj1F!Tz5dz5P3,]9 eL8EsE*g+eR>|@z=!#/');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
