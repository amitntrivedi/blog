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
define('DB_NAME', 'amitntrivedi');

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
define('AUTH_KEY',         '@xdD?+PUZ9G~cUZ@7w^uir/zY7M,Gyd.PlR3tSG]*,$adb(b8q4&rBq#MbSxO~&`');
define('SECURE_AUTH_KEY',  'e)yrX1+1T67pecICfH;rdZ>ji wQVQ!.j=D*j(v9%-?t!i9;M0[e*S?+QU]V.yzU');
define('LOGGED_IN_KEY',    'M6Hf)##:z|qMW_>I1oK)-1qor;KwIvQ!Jq/i_.!}{,!cn^RmXLivd2i^AI%rqN_#');
define('NONCE_KEY',        ':/&WbS.@UdYUE&i;Efj=%Rm|Cj0%s95]k]_cYX8m~-*?(vDwfw{zzHH@<!Wr6>Gc');
define('AUTH_SALT',        '%;>!ja3SuK,s!t1bBFWN*UEq?-Qq9f+)cw0:p)zX#+[q7AQFCj+n%Qmrjp=14{1P');
define('SECURE_AUTH_SALT', 'UA{>j91&Wh-e@,N_HS;aUBm&1:&%VP@q9P>:fhU=Zq+OR}1P&D=U.THR}p(DYukH');
define('LOGGED_IN_SALT',   'bH9u%czgY^ff9x2.L%jIH#z.aQim`R5Ka?-lm~:^+wEph2tA6V_e%g?Mv$UGk_ 3');
define('NONCE_SALT',       'PbP$-Fu0`60J`R4p[0^rC*^7NVKY4cL[9o5|uf5]]R0f{+8-FKOGkTd<:vR0H}8m');

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
