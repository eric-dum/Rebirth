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
define('DB_NAME', 'Rebirth');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Reggie#02');

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
define('AUTH_KEY',         'sa]_~9`~P;-Ar^&Tp~cpOy%5P#tbNv~_bO|3Eiw*%Tm>ug3bC99<ScJY[d7Z75=z');
define('SECURE_AUTH_KEY',  'TvY=qSq.7i=P!DCjY,(;g R<<tFky_BJudDVKBe.Zf&ELwxfUEuL*UaE2H{Fdkj-');
define('LOGGED_IN_KEY',    '@<KPx!^y1jB!|z<0{;}CkYnJ3TVWuW)v@JxG(<BCLiT&~A!N)b:g.;_J-&Uhv#2V');
define('NONCE_KEY',        '@(gGdP7Gy?Ds W+YQ[frOMqFJ L4E($~)D6PzHYkdK&fc9! xowX*}L]MRCb*>Li');
define('AUTH_SALT',        '&5]IL$6V85nqnTUTVk~e-A,&&1N[AoksyC&Xe=<O`J[=10{YUF4l~swv/XRd`F):');
define('SECURE_AUTH_SALT', '<&ISYFWdzC[]>7q,vpQI0mWsu`P1WFyjEK<L>oR/A0^3b!gyD:^u`4/7028dNv6`');
define('LOGGED_IN_SALT',   '>rk4)pTj^2%P5$~?x%w?^tzq9nxjIDhdr4Xe!}&lsT#;#>1Uysd9k2);R!iKhl#r');
define('NONCE_SALT',       'IAG@/y8i^ M${kDj1z|BM_ZhVpapZ]]cJCE5La(EZ0%7XM9DO,4aY{pGK1OVB&?O');

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
