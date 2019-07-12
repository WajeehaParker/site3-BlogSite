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
define('AUTH_KEY',         'c9W|X7:6mlZ-_`FAd[wjlX=G%U3 NYQiG[p>A2 C<e 1bCZGuM0)GAO;tgFnY`nu');
define('SECURE_AUTH_KEY',  'J#Er6#~H+Z,XV4# (Z`[r1km`J$BBA_ :0%uKJI-c|Z/V.g}2>-NncKKly;R1+Wx');
define('LOGGED_IN_KEY',    '-Fw:C~UZ?@Y*$pi(M+DvUp Sw!6Msbz/<($)p(z~O,2gt^{+/.NM[}ytDA8hFSgZ');
define('NONCE_KEY',        '9,@RK8RsiV@0?v@:!0Djy[Zu+AY3jab6Swgyb}Z{v{(;J%>+le^pr>tF%.)NYJ/L');
define('AUTH_SALT',        'Awlet%QMpCff)&}<c$aHW]IO?:Dp5mzC&lu?60@fs^z9Z*]G-5I[8.E<Zs((tbWc');
define('SECURE_AUTH_SALT', '9[O~mj+fhDJ@~p4./ueX#,_AViGI@W)Z]M:%7*(cv+Meg6D$1Zo68l=Npu{~/$W/');
define('LOGGED_IN_SALT',   'tXAaqwF&FiMp9eEJ~|tyt|t{q3Ez%(W#i_]L0yv4ovZ{#%}^Ina^i/~p9d0<C9N[');
define('NONCE_SALT',       '75DxWh:V^xG)0%6sC2cNCysKJtdrF!Ix+?Foks:z)Qgwl35%tRa08_t#yT3_Fw_9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpbookalablog_';

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
