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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qz583J8oaXofbf8AwCIiI8LYldggqAqAhA7K5ssfEPFo0IhXpPMU5TqQMCbJ2ow1zPfanKJpI1Jh0wJ72u+Lcg==');
define('SECURE_AUTH_KEY',  '1t6BMs6e+kQaUlIFoVgNY52IknhrBtsLlvCDS8VlUhtIm1vlLsT79FQCHLvfjn79Fi4fHKrevo8lRe1HPyPWDg==');
define('LOGGED_IN_KEY',    'EdofmuY8JUlYVfZrYok0Ngq0eVO/T28bPB9cwytiLkH4bnAA0n94DlghfF6bZAYym5GKGkgpej7uvXeiY+6oiQ==');
define('NONCE_KEY',        'DEASpqCenfgxMOLpnzlrLTgyrfoPnPiTONXRcMTgJQbBEaW6IJF/0kVHfoPKZ+Rye5IBj9bSG8Z1Vk+VLZs0gA==');
define('AUTH_SALT',        'QoLcpBXjFzOdkVYfyp3BnInRaIX3i1RyVn/+TJCEFehxN3m/PY8B/uS0s0uTbC+6xcW0Z+Y668MYVxU/8PJoJQ==');
define('SECURE_AUTH_SALT', 'kyMApKCXPFoh2tEboHxd3oh5Foq5qAC2spYhkOFHg7L2T94abk5qOuQKJwurx5/kXYWgHUDXqDKzh6EU1dAVAg==');
define('LOGGED_IN_SALT',   '04ajbFnncGdXIRRg6zB/ArdidA8iaumHhI8Mz6wDIGXWKkkYwbMYSG9pW0kRbvShndeFT6JcmlgVXf0QGMMs5Q==');
define('NONCE_SALT',       'GmW3Lfk7r2MhOH1khvsi7YLKdAu2hv99WvHK11rWCGVqiePKQDO8PPBN897PhMP1D0Kf0uaSWSeIDX3Mbq1iFQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
