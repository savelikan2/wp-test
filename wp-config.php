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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1111');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uL19c+>vwAAMuF.*+bR3<I0C8LZ/lIu|C,yy3p(-I=fj?9j+yK(9QcP]QwLGI0]?');
define('SECURE_AUTH_KEY',  '_HDd/`/;Qy1@9c4Pj#TscnY`{9Quy;IZxw4gC -.EKE}@f-i,lU7Z3sD1zxgd^^?');
define('LOGGED_IN_KEY',    'jRZ.bM0PZ6H[iUbOIep?n_z-~7eB#?9ZV<11^G0b%)?#ZYLW/)vjK5+r^Nw-ESu*');
define('NONCE_KEY',        'Fu,SaF9//z:f^ a.{btncn+^jt~{28eJL)kjKUE9zO7?,[2{|L]1mm$fh%V+A:[b');
define('AUTH_SALT',        'RCL/%5<x^6L!QNpG]C< :5%G(zo_tkSn~V!2!x&}D[96ilIE$5bR?L/Dw]X@b}a^');
define('SECURE_AUTH_SALT', '$4Y?Rxi$y?S4STckq3hd=<n7[@~rhOz,~yZ|8z( !1#{H-4TaXJR=!+OGE~gv,[%');
define('LOGGED_IN_SALT',   '`>fC]H4YwMIQ<JR@LgpW/dH?]urj?mS>q<C US$}B snUO<6vhXp~RYGH Td^Sg`');
define('NONCE_SALT',       'g@1Kh7IO!aJvnU`TSz?ct-gpzT zVPq1E|21. -#5jTk?M{ohl_U&.@+/FSpnZoT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
