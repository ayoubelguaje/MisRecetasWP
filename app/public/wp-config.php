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
define('AUTH_KEY',         'jpB5vBFBN/rswjgQngVhpVUNEyZtp36b1X8/4a0Xw93Xd/y6S+mhhykTIkwEbrc5oiD1iYhfU4+JN97oJ7PRng==');
define('SECURE_AUTH_KEY',  'Rr64zL8EYtJGPqtN8j+xMnt4tWahwP50t9C7TK4EOZ5HtLxw/CeioyUeMnbObq6cvdUlSIrGZmDF/0OkjRB+Ow==');
define('LOGGED_IN_KEY',    '1K+X1dt7nParWy+OGnTjdBv9qtmmWwaGxWaZFlWmKvfEHG5J6EMJZlhgD/AzdcKOHUSO5fEOi8gFwe+hWv0bMw==');
define('NONCE_KEY',        'g26zkJ91dFRQBPqn9SCJHHa6FnSTAHa68o1vcJmg1AJhg8fDlWSyr9KPzEYIiLvw//gL2++DWlUr80HbWCgFBA==');
define('AUTH_SALT',        'qHwBUSh1CR3ZvtksIBrRnygg2d0J2wPQR2dQO941i5BGxgJ55tcIvt0V8xOzIbagbOvBhPzuLQIQ8iEWi1FIvw==');
define('SECURE_AUTH_SALT', '2M3wNURyi2DW9vaP+vpkQKwm6Mb0rb++/o+4Hn89sAB8eu/A4oNfycE5Ch2Ri4AszGTqXhszSS33YI8bhf6dqw==');
define('LOGGED_IN_SALT',   'MM2YpJi0yJhItWVN7IVz/OsDzGPf8JCPpRmUqqJEoHirMiF+z7tKtevZ7yTBuP1WI0mjXmI/+epeY/D7UX3+Cw==');
define('NONCE_SALT',       'w97WWLHCfOfMbcCtm7YCt9Djf6i/KLEYqP8ORO7ykm3JW/Bs25MS4RBRBffO1AtlgtiDuXGZ7Thb37QroBrKUg==');

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
