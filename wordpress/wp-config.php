<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'cttalpa');

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

define('AUTH_KEY',         '1*6%V^5@pU%9JU_4(s$a6EN6]u^*(*:.ymjE +=>Q0q#OO.pCt/sx-3N.EiGb|}D');
define('SECURE_AUTH_KEY',  '0 !|A-8vZ&|nMLn9ZO6Q %~$fgW/J[H~pG]0IbX{}H@[Qd9I.=]j8{.*XR.onH?Q');
define('LOGGED_IN_KEY',    ',W@/BL]1zP@+YnaA*f$IJsUPTqJ=boE<sU!e%89s yuE%t0Qd=>$POm7s[68:J&{');
define('NONCE_KEY',        'Q79*$[tRQZy3<+!;_&TV;g)*fDtJ?sL~g[00%kZ|1zX~;#]jWwIW ^A@z`72(jB]');
define('AUTH_SALT',        'pZ&,);nlk*5SAs#3GQ=)1G,E,(ms^+m|R%OnfddpSe-`Y%:F4&|<p*9T%# Q.Mg;');
define('SECURE_AUTH_SALT', '+Oz!;N /_bX7w89Y$>4~^*fA$N{=YUMjCo}[xDF9uSOdFu|;L>:l*Dk,S@{fQweS');
define('LOGGED_IN_SALT',   '-~3g^KhyfgzufTXN7iT8J]bt>/?-><M:,E6;1#r_Pk)Xyx9U>+[SH/|~^CI+}0>j');
define('NONCE_SALT',       'MphSjs<d7/Qb5r~PN-K+BBv-XxM,4(n)($YE%.ax6>@`;vE+LL;9R}8mov+qBy!/');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ping';

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
