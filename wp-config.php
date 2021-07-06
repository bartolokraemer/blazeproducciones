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
define('AUTH_KEY',         '/A7NGWsS9zZ1rlQuvfIP0ljroUtqtC07nd2j2AQKXQAZ6evdr5dzZ8qejAjgyMrSeza0ie2mVnPf4RRVLcX5bQ==');
define('SECURE_AUTH_KEY',  'QnQpcD7H2UPbCAa5OiJdqVA4W+2LCu9v61yEnGztMnB4Bel3EbibU9TudDPlB5jozNyGK7F2bkzSJ8C+cs31dA==');
define('LOGGED_IN_KEY',    'mcDedb389hiQ3syT7JWNa+fU2xv1pdU0fqrDF3VWsRgwPLnR22TLpHSI4RjUHJIanCJLJxQTgNnmwcs1QtGo6g==');
define('NONCE_KEY',        '5MnD1zZfrIdIuIgN269krnok/4mF4xBRhNNaT7FU3Zb3/PstgAq9081MsSAAOnN7D9Cw+Qry1DNQ8Yp7gjqU9Q==');
define('AUTH_SALT',        '3deyKtbB3fSjcjHEq8sk/TtuFkLo9tLzahhpZ0HKU+ruxRrZdY6DV8ntvlseZoRWJUTnattB0m8msPeGP91yNA==');
define('SECURE_AUTH_SALT', '6GYERVu/9MVn5Wct9X1fGS1VWUW92W57Jq/iqpNg46vN+oqsqSm4DTyjBznpD+8RbQUfIs2t/L0XLHpeLEoOHA==');
define('LOGGED_IN_SALT',   'uw8zM9MuWeuDl3iLnVVG/h1w489ggjm9GbcHC+Dl5eGGS3x+szGauqzSXUwZV/jfAxFG4V71L+c+M6E1M0Ly6g==');
define('NONCE_SALT',       'O/qQpWs0Ml42EHm/2gYcFvqZ7QHea+g4I3BYn0aAg+Uyp+JUxCozqzaFo1XtJl/OYMzp292cRzOUPV6/YSH5Pg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'JETPACK_DEV_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
