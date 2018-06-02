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
define('DB_NAME', 'codeline-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Mx>.3qX=*:+.&`4%Nnb7c )H1QOiHaMEY13/.->PF.T&rpupXF0%@!kXPn :Tv8O');
define('SECURE_AUTH_KEY',  '}]$d&s=^[|K0nipg0!%>8?;qS.Z> 2g.]8fj!}HUh[<sFO&FHpuD:[@U`v,.|/S4');
define('LOGGED_IN_KEY',    '@gEs})m<.SJC]#qxG(O1S;^]Qj+IzfWkH6e7aXZJ[-Ukq]=prWnCOf|rSepp6?/B');
define('NONCE_KEY',        'v*UPB2bU`  P9*1},!^gZ5H,YWKgm>+@29H~u9<rOz@czX5tqZ=2zDMA5; D?.x6');
define('AUTH_SALT',        'tvl.``+;&L`q+]lj8/4b:Fo%x BD/FN<ht ,9=UtntBS3ZlA$H=d#1K}lWlrO`BN');
define('SECURE_AUTH_SALT', '}m1n#e0r ~oHI_-b{y|diK4Q+}{G!C $j|EF6a W`@I=28eMrDH9DE)SKm?X)^2m');
define('LOGGED_IN_SALT',   '<O3}q>FOvo]PH<XZ&t):&.14+.f^kI3oadfd)Na!+9w/NkZD&6JaDt8tG|;HJi[!');
define('NONCE_SALT',       'oEa0F,]mW10VmvvD*{!55cz!](7>/UJh;RJ>vk1FLdvZsZ)Z.;$E}V^C#^.[KI7b');

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
