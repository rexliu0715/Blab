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
define('DB_NAME', 'bellezza');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'zgct}^)HM]9hFaEfhBFT4aD+yRFpPV?rNXgHLJ;TUY^YUsaziU');

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
define('AUTH_KEY',         'X@x,^9T0`_Pwy>! PrJPh:CC^7%|@|zo.YN,!N5Dp+zjocL$IO**iEF@U |NJ,g1');
define('SECURE_AUTH_KEY',  'R7 &[#uYa)I}`v4i8.>_=rG!E)pt@0i/Mv3.W^KdO/e_+$z,T@[4w#+%nX#sGt P');
define('LOGGED_IN_KEY',    'N9XD/rD3?$l5~GIQ*23E.-#H?u?~{M#|RjodQNF&w|OkXUrzoL/A&:7L3sIN %.N');
define('NONCE_KEY',        'eXSZ1Y)v3%-OEG?bG8unAwz&YDF|F-}49;kpcMhmx(<^&C/~<Xlw5rv&z3 q?VFb');
define('AUTH_SALT',        'zT4e+ kR23 wa{W2^,$}F!}#j!+&]qyK)MwA;]+j:+wG@g$[LSe7+Ql5hR0tdH+-');
define('SECURE_AUTH_SALT', '_)aCJ*1+k.=Ij>c&Y/VcsV[P1A ]Z1R8*~JM|tu_Fw/CBFd7;%t73c@wg>>Le&ST');
define('LOGGED_IN_SALT',   'y/DP/}.-{_|JyEq!v*l)Ek/Jm%Su5>@~F<vW)WI%+hJW9-3xQ[1G,Xr-~0<JA|5R');
define('NONCE_SALT',       ')|Zn0-7_FOD1faZiDJm!<FtE$LK^RqjmO:;oMy]|qW=sc2fg2,1QKVr8zx&>Vf*F');

/** 
 * FPS
 */
define('FS_METHOD', 'direct');

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
