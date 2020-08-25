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
define( 'DB_NAME', 'Stonedesign' );

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
define( 'AUTH_KEY',         'B6na7Ew1NRCvSEwAhUISIbd5uuqc7frRtcqokQgNrBwvfZdzpboKc54JNA4eUBdM' );
define( 'SECURE_AUTH_KEY',  'Z4DHOHEsl7VvT6qebuJL9wxeIzSgEThgwhiFfADa2zVKbI8IKMNotiS1tbDWeu2q' );
define( 'LOGGED_IN_KEY',    'ind6Is7uN2rkn6QCbgDUh8HGAnLbh9MeJoLUosBjAPhRhVhEdHU6UMkyEWZ4aW4O' );
define( 'NONCE_KEY',        'zRrpdzHjcizx5R2nIDZHgQggj4RwsaDsx22D8nok0I8oXmyrKLmirT5LAfInpFHz' );
define( 'AUTH_SALT',        'YF41jhFYOcg0Rw0D5DzXP5chGg7ar19A1A7qr5WPJ34ciRkJ2dppCtAnviVRphTQ' );
define( 'SECURE_AUTH_SALT', 'FVIe1NexT1v7A9nwth8yJ0pZzIl2wGEgbw1RjcepkAFaofZ6JkiN1jibDeIsApzM' );
define( 'LOGGED_IN_SALT',   'BP93TvxMp4SQsvtotc66NelyMgQwdYwIElxqlR5XXYrHPKFoXdnZG4vPICsnfjkJ' );
define( 'NONCE_SALT',       'JIAf06Thf3B0YcY1bxnRJxOg1C3uDtnxB6i6L04fAwlEKQArNdl2PYRAhBU33zps' );

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
