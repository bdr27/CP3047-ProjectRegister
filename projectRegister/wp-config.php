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
define('DB_NAME', 'splashin_wp1');

/** MySQL database username */
define('DB_USER', 'splashin_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'U[28TdqMOg&]5');

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
define('AUTH_KEY',         'ZgLIoLt4x2t0WD4lDdHL9Cn0ApHsiZ7SGL9ai1wxZWi4LYp9myvPbBGFV0leCVtA');
define('SECURE_AUTH_KEY',  'GedKYYSJmp5kPwKD0AisJtqnbom3q4dJpedJpgLEQlE31C3GWI9ja7cUkNPlvmHg');
define('LOGGED_IN_KEY',    'OLc0OFyvD6UdZk19N3Tx9xAQCalwBQmfmTqilQ27NrMqVRJRatkCvWwBGPMT16Fi');
define('NONCE_KEY',        'yl9EjnuOLZhBfTxV0vJ4ckMJZJXkQW2k3mDaWN2osq5Yu8TNi2VY6UJFEdj7Ea5b');
define('AUTH_SALT',        'tqgTm7dvO5UgbECIIbzjARO2oOZCmX37puR9aHl9YzESLOCbmwFuzIP6R8Ff94Xw');
define('SECURE_AUTH_SALT', '0tvFHqC3xblazZRavzQs928471q1Q29XcPoLkRmQUREZTy042sIoMb9ZIuA6s28i');
define('LOGGED_IN_SALT',   'AhVdHVV58j4D4ZpSgoL60VIGJzmu0O78ZIHdbj1U3OILMvklM3LAZ4tfBqFl1CzX');
define('NONCE_SALT',       'a7oVuLoLlbBnczipXf3Vv9BHxvtGHjfQCJxwCwT7iRBIiTUqtnZzaJjVFBCrjdTQ');

/**
 * Other customizations.
 *
 */
define('FS_METHOD','direct');
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
