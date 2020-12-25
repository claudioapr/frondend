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
define('DB_NAME', 'flaudemir1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Cl@ud10');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Wp];vaM(O@@Jx^{%hYM21[)c+Mqov$3*6~cF)d`Ela`eiQ/q4-/uk&;b]&-74#V$');
define('SECURE_AUTH_KEY',  'A2,ZQlV]7(vOYBZ5!AS2UR0o5a{*@~g{H#eBtER@Uev&u^6hgl_3HctNff)nd--D');
define('LOGGED_IN_KEY',    'd6u^i`>-_yZ2Ep|j*QN?euBr27qH+_g2-v?@X;Z>()^F18FAk&5rDnT0]!2Rl?Xf');
define('NONCE_KEY',        '4hR@T`fee)V3t_W&os(2+FTw]nYq%B~K7E_CyMv@Jsc1K}z#/ZfTD,+pC=[4?21h');
define('AUTH_SALT',        ']2jl[o 2&ufSHVdtrPGmCo`hvKzy}$[y8uwryYd@-R_;3V7N`AM>XnmpX4h59wOq');
define('SECURE_AUTH_SALT', '2JeYf4B}E(n*,PBe ~xKsaxoivOK+/gjWu}4wJNvHx5j-[N?`R vc8,|[MfdH-:1');
define('LOGGED_IN_SALT',   'jnpRd+lxk+to^b;bO+IZkoMxl!u<b`PGh7>us9nl@,ZP(Axa0c*@_Ee_/OtzmuEr');
define('NONCE_SALT',       'SJ9I>7VMa`I*_6po`GTp>t1dfAvluHT6hP+,LU7 a(P{N 2it[%ug[S.V^QIoPXa');

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
