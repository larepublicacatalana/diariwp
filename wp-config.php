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
define('DB_NAME', 'diariwp_bdd');

/** MySQL database username */
define('DB_USER', 'diariwp');

/** MySQL database password */
define('DB_PASSWORD', 'diariwp');

/** MySQL hostname */
define('DB_HOST', 'mysqlmaster.elpunt.local');

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
define('AUTH_KEY',         'D{bCi5C}DJpk|#,`*?5>#~,Mmk;k32zJCy77}^!1@-+QcIG]VSoo8cOg_5EO(h{b');
define('SECURE_AUTH_KEY',  'o.FyqnL?as7A}AlszNyS0,qIF-2H-2=`*:`Wied]`hOa?fga7cY}Z_-dYB_x]bm-');
define('LOGGED_IN_KEY',    'K2fqAXwN@AQ7,.oPg^A[@-.^-)h4#Thu4J_jtKtl[nJW<r <5PhXM01*HESAZK{V');
define('NONCE_KEY',        '(.D=KA7sLVm6Fo{4v+>.0Z3PE1SJfx@=t: L6?a_IqWPL9sTXUm1RB7#gX=~f^?J');
define('AUTH_SALT',        '5;aDNW!B8EpkSnLjdjBF7Cy^VR2-bgt7,}qgJeHj|YOP3vz,O>xzuMhRK9W_k/9I');
define('SECURE_AUTH_SALT', '*?CBYZGFTg@@;%WSmGm|&UYqQ7f_Og4 Nq}2*x9nA]tiLE>sj)vyB:ib~v$0$[fT');
define('LOGGED_IN_SALT',   '}&*o %=Nz4N]o|9@$ZZFX[ywCLt{]J?O)M3Y{ynw4tDsiB>M RDF^#iXW`|=*>0e');
define('NONCE_SALT',       'm49L|dlOa@31^j>HF~/Zm$L]vYnPwa#3rrwV~cE4 ~!!_>1KOWkO,d+8??C8Xk_O');

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
