<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '~XKiu({s>0@$b=p2XlD2*8i3q:,,qYPf~[I ;rkv6S8`LEWEQcP+# _+4$AP+JP$');
define('SECURE_AUTH_KEY',  'N#,$Q<[[z^/|}74R)S|4+|C#+C3GBVT~_}&tp(n|/_YA7fvR3v@<L|KMpXFzf<b#');
define('LOGGED_IN_KEY',    '8M}7F1ao$GoQJvd9ha|W=Coro,`_q>_lFB~c4zqYHl(+,XS>Yj#_AIH3aESl_lyg');
define('NONCE_KEY',        'D&)V-kTn!4yKjh@S;mc+_Xnpl;g.i!G>D~=#(&DW[8Vk=#V=<u3i|!ZpD![VI|?%');
define('AUTH_SALT',        '}ra]ph*47{89OAN)1f|tsw |`l>Qu`3P7M+N|bJ91)_Wf|4-+&w+=%^ C@}T7V%D');
define('SECURE_AUTH_SALT', ']nTNFulr<Q@|+m8Y~-tYeOC>HyJ^9v!x|B8nl3kA#FT(38Lb@;pD-23fFW6u*Eb3');
define('LOGGED_IN_SALT',   '&K5`yn>tQWj@E-aBf=kFa|_hr0[-)1XV4ML9jdw0cz$l/-liLTP)$4abC|`ALqTD');
define('NONCE_SALT',       '.cFHMGy$U)^Rzs#]TGd4K:6[<0j-0Wn,Np)I+ X77zIVn_rBJM+g/VzuOByv&Qw4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
