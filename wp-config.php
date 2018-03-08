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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'rDhZ>F!3>2d,-EQc:-^v2.dfvEIGJAq41^;0@P),wgYQ<QlWVAP#m%1b6kWss=+x');
define('SECURE_AUTH_KEY',  '~9{)*oM8O^q>mf.a-{ZHkC)uduP5x#!C8{n>}r1CD|_;7C4~JA@c<P1JhU}iXeGi');
define('LOGGED_IN_KEY',    '@.V kvmn63iwh{=03s-Mfi 5A/Fr|Lp=)CX{K0*0`TzKO<zo-E2J4;1!m0wiRMI0');
define('NONCE_KEY',        'g7z-c8p#sA,2,1Fyx%5_ B@hL{ycv]&Y*U,yYu3H1!hI%6.Vmn{5C]|Wi2B2B.(v');
define('AUTH_SALT',        ',Sjnn,8D;0+oG> ]yPBXUE]nr0V]/HHaWSp7HJf.:ju()o5u?$FY3V||ioyrG{>e');
define('SECURE_AUTH_SALT', '[q/x9jGCixV}UYW8~8a^.9u|_oLjV]qc9e~s[1)3|gH+q>[GY47]wirA{&[DwH$i');
define('LOGGED_IN_SALT',   '--Hl=Xpw2:xS_fc8c#<Bwb#srhzK8Ox@Zv$%BxBBEe``d>n#+7=*}&fFSbe&@i7H');
define('NONCE_SALT',       '+vYc7{Z`!bI+p[#/L4R,Fpo{5fpq^jzO@z$trWh9cz{YVcSYlQ~FEDne/U{&y(`j');

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
