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
define('DB_NAME', 'customtheme');

/** MySQL database username */
define('DB_USER', 'custom');

/** MySQL database password */
define('DB_PASSWORD', 'custom');

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
define('AUTH_KEY',         '|K]O&pTS&2zYY ohV`CL+-3$j2x9^hu-ov{pqO3iSnlbgI[tp}cUgZ3{o4$ vt1d');
define('SECURE_AUTH_KEY',  '<TtCA7$*K?qIpZ,>:,gsL6%E3g4:Z>.z$^4R#!2M-IAv*9/QG4rm48(Z#uSNeu-F');
define('LOGGED_IN_KEY',    'B3Xcg@Zl*3*zza(V^%@MSg ./L]#QD/(T&~k_p$jLw!<E|E cc`GVWhGutvjci%%');
define('NONCE_KEY',        '~bcS8!eeLBiy8*|Q{^&h+-q[{^is4%}I}C#J^tAmZ0{BywUXGo3f!5u&~.$Dr3,B');
define('AUTH_SALT',        '2[&U}%(@>+j#+mm}*Jq-<#C$q]?D:$Lt.`deKZ@9;iI54/]#;#@W)8,xwQElK}io');
define('SECURE_AUTH_SALT', '5#a!Y]Ye^OwpY_)*.16epQ[6q:#wC]vrjKmZUt>YmDt30),xJYOtBUg#X;u9PEdy');
define('LOGGED_IN_SALT',   'T[SKrXn0tb,+E,[?9nB-JS$LQM+/z&FoeWuCU(xCSOT!Nlvrdx`l}:Fkzfkv[iHn');
define('NONCE_SALT',       'Iwn@30- vON|IFzUCZSolG}eGQl1d]Y<(C.[+n&`Rj8*MchUC_iw#D`w{1F[zL@f');

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
