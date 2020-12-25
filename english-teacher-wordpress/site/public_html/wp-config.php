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
define('DB_NAME', 'u443761020_wpps');

/** MySQL database username */
define('DB_USER', 'u443761020_wpps');

/** MySQL database password */
define('DB_PASSWORD', 'pablo@souto');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.com.br');

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
define('AUTH_KEY',         '^pu_Q^;[X74oW]$t os;<rIF.hO+lxxGra4n-uk]h}Qdw*|NKNQ;o[]8h8Ypn:Qr');
define('SECURE_AUTH_KEY',  '()U{o,-oJ]o~Q;-]i!HAE`{=o.ba `GUo=ILv4LA7qbyQJpMsD{Fq-qr_VCxAY3|');
define('LOGGED_IN_KEY',    'uXhI4-/~a&sgqd{c{a@4}I(~JNiA(X7}Ik3G[m|1[AFn*KRPO}^THHy!kdVVAh0v');
define('NONCE_KEY',        'A%B`zFE=NDF+Qu>i3`l0Eu<@E/M*)1S^<^(=NTO!UnWwMt~zWLJ[aD?9JC]K]~(p');
define('AUTH_SALT',        'K]FME[R~4k<&{Wjm 2E1[5FfrQS,}qFw&BrOfrU<L`-ppsE@v:><+yOx;UQ(O_3i');
define('SECURE_AUTH_SALT', '~;(v<v(yyE;=J0PgU|krJ_7/)}oOu6GBO$_>mrDwD}W>2Rh_~Z{%xi1gN]=iVNBh');
define('LOGGED_IN_SALT',   '-BYV.8p^]/ J_rug,gE>zGi uTkh.97>oEfGs^-[l;gCO$*>zuGPG5u6ep4u9S1f');
define('NONCE_SALT',       'wct,k!^A0t9Gr4+vvgHe<):K.q,z6_RL!%QTFtS^D-ta#@d}p{xy%]|2VA[r7)S-');

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
