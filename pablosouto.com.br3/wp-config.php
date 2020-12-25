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
define('DB_NAME', 'u443761020_wpps2');

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
define('AUTH_KEY',         '6UJF`RbckI*;L$^;D|RCL3NRX&XEFL{FsDx-~h`6,Hm=Rsz<_{Sw.I*_]@c~1S=S');
define('SECURE_AUTH_KEY',  'L210OBmijsh(}#w8oTj=sg#y6!I,i<d_kLFNudi1oJ>]mfmX0c;.q{sX>6}O19IE');
define('LOGGED_IN_KEY',    '~ I}cM@R)hy9eZ5zc8My_duq)WZD?r_S{M>zk!_a}N`~HsH9DHa%pu[Q$Ktf Sbb');
define('NONCE_KEY',        'x4M9=Iz_WrW]~T /;O-r%@[nel7FX#bBp`z|<?L./-pu=-T7{~=u[la=,_|. ,f=');
define('AUTH_SALT',        '{H_8;<KRyqQ!?W#x528Xjw!@%RO7-/r*>1cHRAoD]o!g%w[-Ko`Y)c;HGck:22t>');
define('SECURE_AUTH_SALT', 'H<9FW)ZHPO(eKMuhcietFWpM`*Rf3=t&^:^k5>;*W<],Pk=]=FUF!*0tO7|rdt)Y');
define('LOGGED_IN_SALT',   '@<zPJ@l.mBWuh&O-aeNWsV3 c NTk-&Jnn3.W$yG|<>ai4^P_tF<_c`UExM#LTyI');
define('NONCE_SALT',       'y1T[rbW{rsKv8<ke#&v()u*^^uy&KO7:slT1=p@sV2]ou%#jO*dc8BxEuV2>dO`k');

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
