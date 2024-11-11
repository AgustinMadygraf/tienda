<?php
/*
Path: wp-config.php
*/


// Cargar el archivo .env usando phpdotenv
require_once __DIR__ . '/vendor/autoload.php'; // Asegúrate de tener phpdotenv en tu proyecto
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// Detect environment (local or production)
if ($_SERVER['SERVER_NAME'] == '10.176.61.55' || $_SERVER['SERVER_NAME'] == 'localhost') {
    // Local environment settings
    define('DB_NAME', $_ENV['DB_NAME_LOCAL']);
    define('DB_USER', $_ENV['DB_USER_LOCAL']);
    define('DB_PASSWORD', $_ENV['DB_PASSWORD_LOCAL']);
    define('DB_HOST', $_ENV['DB_HOST_LOCAL']);
} else {
    // Production environment settings
    define('DB_NAME', $_ENV['DB_NAME_PROD']);
    define('DB_USER', $_ENV['DB_USER_PROD']);
    define('DB_PASSWORD', $_ENV['DB_PASSWORD_PROD']);
    define('DB_HOST', $_ENV['DB_HOST_PROD']);
}

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 		$_ENV['AUTH_KEY']		);
define( 'SECURE_AUTH_KEY', 	$_ENV['SECURE_AUTH_KEY']);
define( 'LOGGED_IN_KEY', 	$_ENV['LOGGED_IN_KEY']	);
define( 'NONCE_KEY', 		$_ENV['NONCE_KEY']		);
define( 'AUTH_SALT', 		$_ENV['AUTH_SALT']		);
define( 'SECURE_AUTH_SALT', $_ENV['SECURE_AUTH_SALT']);
define( 'LOGGED_IN_SALT', 	$_ENV['LOGGED_IN_SALT']	);
define( 'NONCE_SALT', 		$_ENV['NONCE_SALT']		);

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
