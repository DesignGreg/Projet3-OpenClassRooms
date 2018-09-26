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
define('DB_NAME', 'festivalfilms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'h_PH7JVSu`ZBIneX{P:56j(xeWlx7.IdHV`02R, dH}qK7-d6Cy!r4@~*W4x<+Q|');
define('SECURE_AUTH_KEY',  ';Nc.E {nn%-dHNVC(Kd}~WK$T&~M@-M.bdnk?L5%iu__ :a|!UPweqpY`;Cj{rbT');
define('LOGGED_IN_KEY',    'Qdo/8FNS:H6[&C8N@z1p&.P@UQPxJvDWh3Z,TVucmWzCX|a@N1(]:>W([k.d#F_d');
define('NONCE_KEY',        '{!57W:9k*sT; 2%6j UZ/].Ad{W+k{!?pwjK%tkUd};Ke%q>cMM.j1@;h+`j=NOm');
define('AUTH_SALT',        'ZPB,_ROT9@<!F<{!hN5f#u*:QmYIsU|X<Jc1<sI*!</TKb6-y:7`{3i{3Iy@w6m`');
define('SECURE_AUTH_SALT', 'NSw_-Ss6Sm_#R}G0>g&%{FFy^BTHFB4l$[|N2b4II_.A_%lzjl{F!{rh(w>Z|[jB');
define('LOGGED_IN_SALT',   'wSHaT!&iOU0WKS%}xx!dM2]1|.Y{^:ftQe;vsg:nahNraH&yN?Y9>G7ec%03)[Z8');
define('NONCE_SALT',       '<x6_rRklSE$m=qNe+)AL%b].9{khpq5O{cR^D;hC|.Y>c+=qyYFtaVonymlG.[#9');

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
