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
define('DB_NAME', 'lwhh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'F%%zaZ|~Vhp|>]Cv0Q{_!/o,+07Cm3FqG|J`hr]y}Rb+qY0r6[]WF9,z4ZZH2qx^');
define('SECURE_AUTH_KEY',  '&eP+ou_U9s&=iPHz-:]Vo+N8)M4;s_@~&N^+Q%..WCc7~$tWbO<i{KwQsbNlmat ');
define('LOGGED_IN_KEY',    '/{f6x|0/cMf0{Cv?<?nME;TITb(&D0GZ9U:]t>6ts?Dd-@JjQo-8,S9|T%!3tt|l');
define('NONCE_KEY',        'bELk;1sF5HAgy&TP@o)t&Xup*`5PQXKvNhD(-H7`^G=T9DkFGH3P<_1;wo(%#-zI');
define('AUTH_SALT',        'aOISE|k/ k`lAJFdn-$Q29<`A-E0jreYp*T7EO(tStgw*abe0gEkt/-b8cMw5Bwr');
define('SECURE_AUTH_SALT', '|nI-5V9A9S8>9&f- *sMHGMZ>-Sk*|CGUNHYp)LmKD0xmRCIG6)wu;3LPS+3q|{*');
define('LOGGED_IN_SALT',   'lkP`&9oEuI|l# 2blFOC1n}4p%=4l)0(bQ(>7ydW1-t_<`T;|bhjvwQ5V^Mp`g.6');
define('NONCE_SALT',       'jvKF5b-8Z,>t_,,!`|G3SD=Zyo.9.g0gu[ib.-T=W9_O=*G[(U z#|gqn^f)Q3z~');

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
