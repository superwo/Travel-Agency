<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'aroundtheworld');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}_z:V[-`~kzaLTyR0MsE4[,-vk9w3?|JTiK)obH(a~e-W78By$KFpcjTv*XqM<s2');
define('SECURE_AUTH_KEY',  'I ].~-w@_-cjrl>HVVLoMB)tvfi&$E?rEA.Dys^55gmg5m$*;a@u]NOu>Gp#Nu>i');
define('LOGGED_IN_KEY',    'KDgfOM?w3Tus9-d8 RoH?mtD|^h,AO5N3J7vuAC9Fq(0|@1#ptcBXwq&.bK=[h3k');
define('NONCE_KEY',        't||WF2@>j|Lq]mB#>g9+b9NBupdg9@7j-er%L ^0#T|}1}G-ADlIA^~!%tsLTGp6');
define('AUTH_SALT',        'Hue@k;~FAlA|iC;L[:+a aA/5eUWqt.rJGB[mN=08)0PVXd`QF]q!Dik8Eg|M:H9');
define('SECURE_AUTH_SALT', '=Q`-BZM5:Y<M@/,1jh562IymVr_o(p6LB ?7%TDocbm([7!0<W{}_6N+x&CJ,|~m');
define('LOGGED_IN_SALT',   'Kw)>g|he333H$N9,`PdgEAFKL!O%o327CF26&UVHLH;c0W@%<P5~*D+9ok[BO2mj');
define('NONCE_SALT',       '7DXO:2]^d/|,HhX4ZW*M5NN:(yCfa{|&>R{-fl#-p3Z$BfAN-`t!BfHo$[D/]|??');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
