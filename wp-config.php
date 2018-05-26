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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'prashanth');

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
define('AUTH_KEY',         ';Ti5L#EzL?E0-*Z71&OvR;4qTC=|BPH$XH}On5@lh0;t![BUFw:z aOp9cAi!O2M');
define('SECURE_AUTH_KEY',  '^9`/ywQDB_F(8)@_Wj>OV=4{!9$R $UdaBU!%}.n*)hd_Sxw;6evj1|Lh4uaftT)');
define('LOGGED_IN_KEY',    'Y7URHHx-<,J:$1#V$_INh-eQb*(q1*!!GFPwaujmarQ^jY8nLf;q~%3=E|_H1IXI');
define('NONCE_KEY',        'R,qEu`%o3|s|jCB1>R.x>%[ujHfZ,.BA]ub*?@oh;>?tXd4X!!y*9NIPy8O&!j~J');
define('AUTH_SALT',        'nagFVC):o.;j_R&7+e)1kz <~:zXH77wPhJ/WmVmipP.{arl`at*~sRmqXE5$ega');
define('SECURE_AUTH_SALT', 'R~FL]*t~rM:0UNJU$Rn{-~DzR!=DRCvG53s?(SG3vTiEH51r=+sgIX`^|bx<Wdt;');
define('LOGGED_IN_SALT',   'U*oPYd*vU0TiPuh$|IGEa~Qk&~8=5e_a8SV~E*wdibTQO>$^/Bglepq9(0:?`$_u');
define('NONCE_SALT',       '+I`_1p2_`BN@OU(B+?!_r*{m`XnlDkWIU_&WNbAe~6B$`L}s$m_ZH(%l E1dbwH|');

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
