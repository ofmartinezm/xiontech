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
define('DB_NAME', 'manzover_wp303');

/** MySQL database username */
define('DB_USER', 'manzover_wp303');

/** MySQL database password */
define('DB_PASSWORD', 'D92G-Spv)7');

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
define('AUTH_KEY',         'j1mf3stzfcqay7qdyob6gdlzpkclfyut8yvegd4qcczxf1zgxc4sc415lwyisfas');
define('SECURE_AUTH_KEY',  'h2lwtxjxgw2wwcfuwbzoh2yzwe67ejdouph3bf6qlt6tiswjy5ubgix7k6tikh7d');
define('LOGGED_IN_KEY',    'snspcwoqpouq2ltfdhjc6h4xznybxfbdubzmdma4q3mibhessgix5qvdkren2ojl');
define('NONCE_KEY',        'oowdzrd6m22mvyv6czkrgxykseqor1utakyzgetu5cxnnz1vvcynvvrufbfuv6ko');
define('AUTH_SALT',        'werxxe5b06vizt48pbweurijfcuntoaqajm0lw5anwejyee8r3zizx4u6orez080');
define('SECURE_AUTH_SALT', 'rndv1cmjnltbklnjnckpypbheetl9obomemzl5ajlggzclh2qmj3dzvkekuyylb8');
define('LOGGED_IN_SALT',   'mtfgrgpnwjodj2ztfk9hhom7ykvig2uwno1jtbr3wgazzn8yru7ztfpu3n0taejb');
define('NONCE_SALT',       'proaltvjjv4jhkol3ue3zfxqtam13pyg2ic2wadbjs3na7q1zbe7z5mjaqwoarmh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpni_';

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
