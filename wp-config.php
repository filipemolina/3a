<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define('DB_NAME', '3aworldwide');
define('DB_NAME', 'smkunlike');

/** MySQL database username */
// define('DB_USER', 'root');
define('DB_USER', 'smkunlike');

/** MySQL database password */
// define('DB_PASSWORD', '');
define('DB_PASSWORD', 'smkunlike1401');

/** MySQL hostname */
// define('DB_HOST', 'localhost');
define('DB_HOST', '186.202.152.234');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Liberar o Cache de consultas ao banco */
define('DISABLE_CACHE', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f>R9t}icufN#$gD#.`iGYqlzg/GP(dN9{2rpSF3kH3L@]^`QG`X@3OYWl|GbMDRT');
define('SECURE_AUTH_KEY',  'lv6ufGNG3UiML_>[ii[u<! $SBPSZ6XevGxtf;RwaD@JU*7,9!Y9|5*xa|0RmCw7');
define('LOGGED_IN_KEY',    'b[se08J*Toy{RYbhxw|=.btY:~I4rsLgV2|(3<f|D,$r9-Jjzhamv*||>0tv&!+H');
define('NONCE_KEY',        '+)jHs^+*Nj^*|5x6][)}358@T8D5:X4D=u4^N.2`8%k?ca]{+G(@**BWcsbO)GnF');
define('AUTH_SALT',        'xSZ*pa#eo7r.lcGX))`-%ba47y!ZyMu(lu4FgX0SAuQ4E-r,[V3T%qyPc{_=F$-S');
define('SECURE_AUTH_SALT', '|IN2A,ewYJwXtp#2*V7>G1/g>7fgr*~-WyZfc7h?-*J|l|MBSrq:9n-E)NzK f-^');
define('LOGGED_IN_SALT',   'e*?aVE$R.rxmP|4<][||Ez2v*>mjy0ta># AF#*,X]:{pScm%gDU3y;w*uv[4_[q');
define('NONCE_SALT',       'ELFr|!uB0D-<p;iDwyitw>Qzda-8H-zb8%|,(-:(/F-*eaJ]2k.1:~J~-|?^Qme.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
