<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'daryllpu_wp181' );

/** MySQL database username */
define( 'DB_USER', 'daryllpu_wp181' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p][yQS54g5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kthvsolyboo0qbbfxky9ogb7skywxrbvccf6i8m8oimrxyzjglwo4801ibmmnzok' );
define( 'SECURE_AUTH_KEY',  'j7skyq7ujxvemuea0gkzi536omncny4zslql17vrywblmysmsheyyhdouik3hjp4' );
define( 'LOGGED_IN_KEY',    'khpkcwb1jwb6tgxi9dzesj1jwparqbbgplxnm6wokl65hgclfkf3n4jpqjcgy6eu' );
define( 'NONCE_KEY',        '4ijzitqhqxnrgqcuhjihvb2k87pyxsfxlvoxaxxnhj7r8f4uzvciwyyv7xdh5mdf' );
define( 'AUTH_SALT',        '1njavceyuelawayc50yo8rzyd3vf2yqrrjatqxkohikk1qd8dvrp3dhadvi0fll7' );
define( 'SECURE_AUTH_SALT', 'rkil4zpjyfmzx3l5n6idj7w4uqlslfuso5y64dnkw5ou5wuvwzcn4n0lw4csaesw' );
define( 'LOGGED_IN_SALT',   'qujocaoi9hqd1x4pvdx8wpcf8jjigc4ewbnxm8jg5mbqhz57eygbf4382zc85vvy' );
define( 'NONCE_SALT',       'q8i0hsgcxawdazsf6pmhy6ivas0fzpegbmbapxqagw7cf5cbwdrbirzjdl3ptssa' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkm_';

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
define( 'ALLOW_FILE_EDIT', true );
define('ALLOW_FILE_MODS',true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
