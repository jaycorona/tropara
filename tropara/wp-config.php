<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tropara_db');

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
define('AUTH_KEY',         'n+R[n4/O&E|u96Wt[Fg>-SQ6i{xj$|+lZV&{@ VnO&{DaGK]pwq ~WiOM#D|%q7H');
define('SECURE_AUTH_KEY',  '7~qjhp>+w?X =|ZPD-B`NPfd(v#v<J5)=^_TCc8KZ&w5]G7}aLs_6p0cDg(q#2QU');
define('LOGGED_IN_KEY',    '`+Oc8fgS?n6L$i&MO+O=((?4WZD|+F>-7:g$;Stm+WK$UH|-r;Ig8Q+&j~i -,3z');
define('NONCE_KEY',        'dG76V7Y:bL`xqULNZBsL#8ErMDEdEI+eXp?2T^GNIhbkt4zKs_2*34$xj[w2)y/o');
define('AUTH_SALT',        'Ay|M^R76aNH+Q!qt9Wot7;#-;xp/QPtT8SpCZdW!*TZBvHAF@?|lMhabI[O+RU~/');
define('SECURE_AUTH_SALT', 'KsvK]`vJW`BVjovQc&a!<W1&hmYHla&tth9-xsusAbd{GY!BjPYsvB|+;c#dgs T');
define('LOGGED_IN_SALT',   '].}28mC7@yn[P<Wy|HFLp)8EuD-j1w&!M4ml>QgWM!_#y#|vkv[F+V=c}n@O%%~.');
define('NONCE_SALT',       ')j6y}nw4Yn4p15&W~|@d}h-7kaB]B|fw+w<>Mlr?bLW^T<>):uI$Y{PxNOIcow{Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
