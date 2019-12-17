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
define( 'DB_NAME', 'i6168012_wp2' );

/** MySQL database username */
define( 'DB_USER', 'i6168012_wp2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'J.cMZJgcTy5tk0NdgXt44' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
 
define( 'WP_HOME', 'https://applyvisausa.com' );
define( 'WP_SITEURL', 'https://applyvisausa.com' );
define('AUTH_KEY',         '3WPDrbrxJF1dlodaTJnrlKFLMn7AfCTBGeWLUwAMdOuVdhLcriNuu3ElXQIhyLsV');
define('SECURE_AUTH_KEY',  'HVKAwGav5i2Kll4og5OBpfAUer76rEusE4clE7QYZBrHcRPoySJRFPFNjiq0nWl7');
define('LOGGED_IN_KEY',    '8pR6JqdgwR8qWOEuZZad3eT50fFIuPJsEFmmr8FT9Iyr1y2bZ3OtEMwToEHDvzgq');
define('NONCE_KEY',        'DbkC2FwrSSevEqJ3DeWBDEJZRqaXgbbFKB5dJpNm1HY2azGAcKjx2ubcxh9NxhRp');
define('AUTH_SALT',        'vqpgWON76SkeTLf55b9EmSAw6NfceHX7SalBytQWKYlCCnbwMY4xh6V8gxhL0OQd');
define('SECURE_AUTH_SALT', 'Y6dD6AQWaQegtHZQPN8bSIjeKBhBcWAxZuS8Fpg8LCVP2c5VOkrKfbNV5wdXEKLf');
define('LOGGED_IN_SALT',   'VjqAIqr9zbZPpYjIQVLobiC6OcwmwRCCHZUWgQXSj0KCI11VkcA7odIgjxGpIj9U');
define('NONCE_SALT',       'U0refy0EiAhHG4uMz3DIvu6se4Zl6glSlSA0vZKdao57uuZqqOJclaXPXKPSanib');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
