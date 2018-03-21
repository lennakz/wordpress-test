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
define('DB_NAME', 'wordpress_test_lennakz');

/** MySQL database username */
define('DB_USER', 'wordpress_test_1');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress_test');

/** MySQL hostname */
define('DB_HOST', '107.180.24.240');

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
define('AUTH_KEY',         'J((j9RP$wpI7vs(=r5u2jM%TtDnP7@Pe.Nd&TEn3GuHCAOYZ-N>2wHvNy[kE6a>q');
define('SECURE_AUTH_KEY',  'Vxdm[%Sd;.eYaP=]KjGf}>CUWGl9pI{PT&%@OMA6$cirNrBM-LN  kT{!kIMwnrX');
define('LOGGED_IN_KEY',    '%{8JIn;FKo9|nic,(&#ygBaA;C!&{DyYUyl_;~6j%6&ZK>UI:BVE7;va6t.Gg`}u');
define('NONCE_KEY',        ';bkmN^jey{l;nKrn2;k&eUFzw,T(c?p]:*D)fd:hh(/YsD<Q=-,+MC<2v6hl8b7b');
define('AUTH_SALT',        'O3kIVoGt8G8%Eh?)=rm&iCTgu,jk@p]*ipRQL:3v[riGFvr5UhC&rlwp,/4jUd<P');
define('SECURE_AUTH_SALT', 'q,r PdUqtMT}m5R{qxX,KB.}#}Y*Sygj3yHG)>[Cmb57*DJC/?C~V*2D,i6NY<s,');
define('LOGGED_IN_SALT',   '}rwll23P]l3l{Z1n{3F7!Kfa!6wG3YqTG?BS4$?O_GW}>qw{UT(+HEo3,a:PnW+l');
define('NONCE_SALT',       '+LhO/2@(l:np-Vj1|Q>#nK_Z$hq6b:PZz&)oNN)zXb`5J9#T;q%&Z[(cQx?ugS`J');

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
