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
define('DB_NAME', 'engstrom_new-republique');

/** MySQL database username */
define('DB_USER', 'engstrom_root');

/** MySQL database password */
define('DB_PASSWORD', 'UJf-GT-t-22');

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
define('AUTH_KEY',         'LF-U=lQPy7FkN*|Ply6_P^kgl1),B#u(yV%fLxfxAH_-Y$-b3/)<#=0>oKU(vrl=');
define('SECURE_AUTH_KEY',  '(ZZWcVd_$AHxCX`PVqh]*.*--CraGf8TOQ^[3LP,ho`~ht.wY5d&ySGB5`tbt|TQ');
define('LOGGED_IN_KEY',    'yrj9PNYaH@(x{|-~w.w{9P5EF=&. UyQH7jG,<k-T`q*t;!g(-?@3a$sp>kFymWP');
define('NONCE_KEY',        '#[G~*(*.rA lB9u<Cq5gMji @Zn>WQ}Q=5Dw*LV9.4IW<L:I:&ewuaWXx--QzDZq');
define('AUTH_SALT',        'fRb+ QgZ j1}H:oN1vyB:R9. j7oXmZov+?c;`l<F~vg!vM*f|WUFY_@80eK,$u]');
define('SECURE_AUTH_SALT', 'V tw.z3!1aI,|&eHw,lQ$NW._b+fOxP;_!Pna~f- +Y!*2K!bwPFY9/Os@syV%nc');
define('LOGGED_IN_SALT',   ']KB->RoCvRya~MwV$.JK]b9w[(F2?6 (#aIk!705}nvVPn*#P+K;ClZ RUgiwmL+');
define('NONCE_SALT',       'O< )%1Z6/bz@=|SRoB3cO==E66kvB;,c4X4I*,;z+Wp| B%m&h4}^4FWiNV75+*g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nr_';

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
