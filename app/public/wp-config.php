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
define('AUTH_KEY',         'uzQ0z58g7iMjiBU7OfFx9/tVFm3VS1iinbmtL3OaaxS54zAbyJQ4dIt+SwdlUDDzxtQL3moJvSgKzUtxffJBfQ==');
define('SECURE_AUTH_KEY',  'Ps0HbN1y1KPlB+xYWoiWpwYtANDLXp6CdoTnlcMGuqoU5152O0RT78dEYHVh8ufocxoH0uMNX9rygUDbpoKghQ==');
define('LOGGED_IN_KEY',    'Q3xFa98595fhwlSP6zadhJ0efdCCR18WM8KmdX25BK5/+g6owk49jGPoLl+CQJaTq92FgU/GjCy7pO62GEGM0A==');
define('NONCE_KEY',        'wg86cU29ayHlMzVU7ENvH+AVjll+31Feu2LjA1wkTRmo/pKk8s5SdcKuWvBNk2sYHAqDpcgOcdd2zlvCeI91sQ==');
define('AUTH_SALT',        'C4F7MQxKKllliqUNogfki3Cv2KGszzWVc6TTOEXIJXZEmzRX9HcQef/3YbVl14uPMl3tAko8U+GrJlFRLTIM4w==');
define('SECURE_AUTH_SALT', '0oloU+TlwN+pudoTyQ8DFThf1w6kRWhKC+iLgAdBSkKFBhidNq2IrGmh7/8+7jpsynWiGwSALCFLDUKJ+d4Dmg==');
define('LOGGED_IN_SALT',   's4GkFXw/BXDG5b5GFnmlxVaSVpWuEz501aIV06mtCDBFj4jk/dNLnjPwPeTtxigHDMZZF7RkFaPeFwzBMuKdSg==');
define('NONCE_SALT',       'VIPPK9B/cnniYebjucIVoE6luvvvs+4y8KS/Md+8L8ftAy8orLCx+2zFaJG+9vZo0vQLdDsRXkAVJdkkWoc3KQ==');

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
