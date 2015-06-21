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
define('DB_NAME', 'wordpress_1');

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
define('AUTH_KEY',         'F?9C&-P7&PG2;=m(.IHT=7YO#24=fK.G#:6Mnf|F2vvx~tT=fGMXLhk%4*,2H|y[');
define('SECURE_AUTH_KEY',  '*B=-^T_5Sb%B/jy^~q5OEZE^]u6KR|Ar5X!)d&e3MQjP3GDFAZGlm T7&|,C,Z) ');
define('LOGGED_IN_KEY',    '$zn%~M-=rM4&QRRI6*CFH]Azr|9AFGOG<B5Jlj0QRB6^Z~u~?sg(@,s.ox0#! !D');
define('NONCE_KEY',        'Rs^CRzo>7n1+@^y^-m+Dcnanu^EFy4!,o8aWQ4rfy=Ee+4_z])Aqy`$DB14-PL)t');
define('AUTH_SALT',        'k>b)INa%LV~>mCplQUOYm~P<3-BC{5Sk^S!-Di3asB?esm1U3z.m?ETMeUSz>|W3');
define('SECURE_AUTH_SALT', 'Y1L_$+KlvguHFJC-,l_V (+gxOAz8,P4`[.](1mgJNfIYZw_+?|ibbvv}_XYsjt$');
define('LOGGED_IN_SALT',   'rQ.DG+.%ve9zd7J<A|]7LM/@Be>i^JYz}#^xq-8{bo%(7&QLjs2{|NG}pnWGE5%.');
define('NONCE_SALT',       '|5im-d|]AlzHbH4r;FKC=h/`!7Y&g#)4eD9eX$d9T(<%4HR1+|_y3zb-*a6JJtLp');

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
