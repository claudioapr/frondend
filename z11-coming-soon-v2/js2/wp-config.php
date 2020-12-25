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
define('DB_NAME', 'i5016776_wp1');

/** MySQL database username */
define('DB_USER', 'i5016776_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'V.nc85WN0lgoaJAYWv807');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ZYjaoo5KYvbnLVyaxzIUyRpY5Mq80Lomj0yhgDAOyDwRggsEsa2iaIfUZqkxIAMF');
define('SECURE_AUTH_KEY',  '9bNSJAYOwiXoe7lJEo2A0YrO6nKJDvqZcE5U2gSULVo6ouWydrtwLHOVB2ogZhwn');
define('LOGGED_IN_KEY',    'zxRIdDiPSSLoV7OR02MwKOmBkdou070fnSDHrR26azSVwJnoZwPORfA7UiMYkcnD');
define('NONCE_KEY',        'ChpDrs6FScHiIJGsyEVrYCY8jQnWm9Kd8qtnQIoG2Tm0ProtLIOThxK61puTsKOs');
define('AUTH_SALT',        '7GtJPEYlFlgb2bclMHVRQKXyLNqMUpQrfY147VxZxFNukD8fHthEDEKXYTj7q26o');
define('SECURE_AUTH_SALT', 'xswSuk8wZOikT5m4hTZiCxCNyvIugwbzav0n2cIOLs2XpLsn5EI2QgCQ2aY0SJ5f');
define('LOGGED_IN_SALT',   'pgUlc1bG3zlQEHYiBifKqDzc2AxODAEvSO35ATjimCgsQqaFWZ0cOOxlXIcdqso7');
define('NONCE_SALT',       'WU4iv6M3zTJd0whspqP58C2P8tSDS3duwiWFwPoTLOOpTKGsdlrXBdJacNF8Ip9P');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
