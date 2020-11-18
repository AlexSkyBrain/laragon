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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pg3ZHU2940H3ydrl6BDAyayZxXHcs3NA8ohLZt2yI9JWMN7e0mHDvVmbeCdomPSo' );
define( 'SECURE_AUTH_KEY',  '13G2cu44ZZKdXbXm93w51D19U1Cka7j54SAEGNJMjBMbCT9e4UEB0GZVCf9CtMoq' );
define( 'LOGGED_IN_KEY',    'Z4QH8M5ZUml5JZ4vDKUwFuh29rHrgj0M991JQgMIRhWAyrwX0kgxtxyVlFiQyZyx' );
define( 'NONCE_KEY',        'SLE7rtI5B6mxqVcajP5vLRctFlEfxIjAArCKrZ40ow1GOWpculiz0Xmw6mYTSkb9' );
define( 'AUTH_SALT',        'O88Eyt3Ap0adEiP4TIld9YhEywbdJwOQQJDNPAIQWu8WUY3GH4CyE6xPkVSwA7AZ' );
define( 'SECURE_AUTH_SALT', 'N9hltL4vkvL5q7UdoqIFNPyxLXgkPJEyWZ5S14KMuahkPwqpMtevYX7Q4l3JEjK6' );
define( 'LOGGED_IN_SALT',   'TDteAZA5pQwIvzHeemKeUjAZtOGciyurgH7wnln53VZq1nruGrOR2TIVv44kNH56' );
define( 'NONCE_SALT',       'qKr8hhVzemNHn6KZnYxY52SqwA3a7cFtndZngMH4CF1x2WJfIisSRVZXpPJYxdOS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
