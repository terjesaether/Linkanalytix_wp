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
define('DB_NAME', 'wp_linkanalytix');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'b4ll3&##');

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
define('AUTH_KEY',         'GSe#q,ka`%(5rGqOOj!/EFcIO]NDpH>{~)lST6y&C_;u{qHSPyPcdm%m~.pwU2yi');
define('SECURE_AUTH_KEY',  ':3e5Fs~`y5Q.}7L5_5YkN^5r6ENho:nSn,U;>RbU3/&Nr[{MG-*1#&y]AvN=p&jq');
define('LOGGED_IN_KEY',    'fQ{ox4tY%?Y_|A6~WLZ&60/vS{hSz4!<=MNHzdh`9>U.ghbavDXZ/V,6)WK0G.sF');
define('NONCE_KEY',        'jI_1MJTh|~ay-}/X!w)?XyH*gdK#eA^:mBVWD_^Tfzh,*xrh`WW^5i0SCISyl[()');
define('AUTH_SALT',        'cr<hdMrzmeED/1)$,j4Z31mPlEXmJ>r`zWL@g(^^@^L:qyO^^,y5IWCI#1 oRL)%');
define('SECURE_AUTH_SALT', 'fZA.ADu54a}4ZO7+ ,aPi`5 aG{$/F|8t|_bLxqFYDB;9U|Xw*C&2P7AWdyd*mE5');
define('LOGGED_IN_SALT',   '02kTov#F5_w7%G]B&Lk?AiG~mr(>M7R#|X9=o/IGlCxcDO`8*3V8P,U0)M*P!$v{');
define('NONCE_SALT',       'Ck9{7;<@9~bRp|c[JPWMLzs<Y.iw!RVG$5|P{-5p|CB6F7#bF<n5;2R5w<vn7Vul');


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
