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
define('DB_NAME', 'dhariniMidterm');

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
define('AUTH_KEY',         ']HC);(GRX#.pCt{FwH0Ws>fJreV{-)*#aaQtSLCK,umg[Fc6,zJ7]~1tE+W5sob*');
define('SECURE_AUTH_KEY',  'P5a[:0w42V=ouQsOMku;&-eD5FX.io&P#Kfs,l^Ur^${IdW-Z6YXPDvKN}>l q?4');
define('LOGGED_IN_KEY',    'ujMyb=x67Y=ofO^c|n_iXWsO{h,%/^8@LB=. m%Q&l,3z!H9T?}$~G6YB{%h0cC[');
define('NONCE_KEY',        '!uWg`J7F~``tI+q*u2%&!d03K-ufC2_x(fNf~f+E@(evtN9W#%/2soL{>K0A*NOE');
define('AUTH_SALT',        'Y1x,1liU 0vU6en;b_9thdsUsZQ%Mc@&t_&/]y>d?>Sy!wPq(m7_%`{w1blh6tpb');
define('SECURE_AUTH_SALT', '8h9N3v{nhd~R_5!YbC5m--]6%h%w>08dVO}Grcg)%R8BR(NHuA/]VS343{?{k?:U');
define('LOGGED_IN_SALT',   '50$7{0+Y ~)N8.uj=WY2xp_,wDi+lyV:.;mD+=)n}w)WK*6xGuCmpRs*Tdoyc}Qy');
define('NONCE_SALT',       '?^QZ00zS@j`zBw09HSqN0l98YB~l;-];wGuF}jBSTc|>&YVR5iQ!Bj#d>!{-@Us]');

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
