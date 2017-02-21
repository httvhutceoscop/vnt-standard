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
define('DB_NAME', 'vnt_db');

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
define('AUTH_KEY',         'uvdcTrY{2C#g~U03erdERYy}#J~%BVk:s)^{blztA]!*>tI@]+!Z[!,aH3ZU>D<D');
define('SECURE_AUTH_KEY',  'X@vCO?_6j#rb})g%|wCZnX&R,j~63S-t.I~d)|3GWbhj*_B8%q;Wsa3&eMxH333c');
define('LOGGED_IN_KEY',    'n.*n+7Ct8N ;5eaQx(@_zrk rd!Av02=)yR{{l2Y(/?Oz m|d.aynp;{`Ph,t~yu');
define('NONCE_KEY',        '!=VLaaL<{4LS~k_U/[sYm$J?MU.nNF9bRAO*WFZ6{<yg4m@nReIn~iA7oxxI:[Sy');
define('AUTH_SALT',        'PYR_F)EiU?I#Lc|:*,9p*p[g7=]w,Z$Ls;Xg&TuU`qARdH$;ww~Xx^6DN|^ZYd;x');
define('SECURE_AUTH_SALT', 'r+=P^RArWaxmn|1T7RXuV/zr<?_#5Q}Ok1A1W4Gb$Cj<kp5:#+N]V:3e]D!3{7>2');
define('LOGGED_IN_SALT',   'f2T{ eXZ4m)!ns_$cKJwjiqAc8w7nLq<~(+#~Fy$E4X),IpT1dc9<a@AP^*^&.a?');
define('NONCE_SALT',       '8f)YkEU.MO{0$K_=X# G|aSeV5IWO[_FT4`DutI;%K(|NF*bc)?&W@:N:!FQA!-x');

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
