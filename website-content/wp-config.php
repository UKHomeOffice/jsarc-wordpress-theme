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

$databaseName = getenv('WORDPRESS_DB_NAME');
$databaseUser = getenv('WORDPRESS_DB_USER');
$databasePassword = getenv('WORDPRESS_DB_PASSWORD');
$databaseHost = getenv('WORDPRESS_DB_HOST');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $databaseName);

/** MySQL database username */
define('DB_USER', $databaseUser);

/** MySQL database password */
define('DB_PASSWORD', $databasePassword);

/** MySQL hostname */
define('DB_HOST', $databaseHost);

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
define('AUTH_KEY',         'a^xVkU^S?ZKMtZ9[r^roU<GZ+psX5Yz3eP?1Q,&saA^j1qM~A{<M25y%WDbKp^`p');
define('SECURE_AUTH_KEY',  'xk[4NKNN!1/SR~pZ[X!{qUYvbow 2J;oE^SsHkldL/W(][D5q?v& .Ci~8TjYu)e');
define('LOGGED_IN_KEY',    'r]E[4|RK:TP4NAUE3MCz:va:Tipu|id-&1Z8~>`:.uzo-D+(P)jpHQA7(=f4_{:9');
define('NONCE_KEY',        'c#YL#BRrmp*--? ;8<v-&wM^dN^Y==yIN{eY:VACS+5On R?IsxSP^Wt#9N(Su6T');
define('AUTH_SALT',        ':!.<M<c2@HG@B=%|N+4Ulri~)*5m3S(m`Z`W?E)asEsmxmpCAaTMN]nj;BL`)k*?');
define('SECURE_AUTH_SALT', ',O-5}:+2|R&iu8hpU<W#%<b.-gF+E3aAu2:.|{{k_-.i=u;-)}:;8_lDCcP@}d,i');
define('LOGGED_IN_SALT',   'z.^0nU;ec6Dy_1b`X,jh`}*+7&Ou-^q(KD9~q.lWcS[F+cFue|7b?xZ[DSH|Weo ');
define('NONCE_SALT',       ']%kCIR,w3;5UV$iCp+r]hkQc<W]kr[ycF/|o1JWj+VK2M+,_].~s[+x--#Xk~w5[');

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
define('WP_DEBUG', true);

/**
 * Handle https forwarding
 */
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
    $_SERVER['HTTPS']='on';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
