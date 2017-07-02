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
define('DB_NAME', 'vananhvo_db');

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
define('AUTH_KEY',         'gjH2AbO#lteHgHmg$3+LLy8ydgU;[dC5>0M(<=Yz 7Ag]`PShf0ptO5|%ZCY- HR');
define('SECURE_AUTH_KEY',  ':XxR11R<a9sK>Er]I~e|;7HY%L(!+Mke{*c1!-c0S*a&@NApk7ni-3cG0DN#4u)f');
define('LOGGED_IN_KEY',    '2G ,[$3lz?wH0eF*2-fEX+d{}w@@t@FBmO!H4cGx?Q` V4w4K-s>8),k[Wz+wXi+');
define('NONCE_KEY',        '{Q@32E^qeP<7NL]wq|A|3N^ TQg_Y/INl $z,?+K{gw7EROKl;vzXDtC6ydA=LCF');
define('AUTH_SALT',        '79EdSu~QVP0mpx:Db:&/[2y-<r:zjZ_G5PpX(Aa?cREo0tonmpL|x]]eb{/>uv%b');
define('SECURE_AUTH_SALT', '*i+:4&]?<gOs,Q4y#Mg%)%TaRihqw=5C~HQ{>q0DCrY~Mz|ILQ:&(JRf>@^_{@6+');
define('LOGGED_IN_SALT',   'fAeoT;>Fa+F?NNo1quJdn16^i.UU<K%]Sm[v}Ew]hv5,iH1@;a#=ixBlDff+Nw7-');
define('NONCE_SALT',       '5jw8Gz9uGs)vpL0#Av.i_CeGQJo&_|(%k)=,%rAN -khsT_1s=E|^)s9MiYa%+s[');

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
