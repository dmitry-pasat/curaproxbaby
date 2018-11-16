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
define('DB_NAME', 'curaproxbaby');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'T,l2azz2@|J2HhbNg>6Kud>]+?L:X_M#L7#!7O0*9%{au+pc{(Tn5u&DP} S7Sv1');
define('SECURE_AUTH_KEY',  '}agWRK!_+D&W3App<f%9)}HI{i1#<mt=T3mft/.[v;uq_C6vdM#E*fXzF0gYxlb?');
define('LOGGED_IN_KEY',    '1AelR9U-W(1ZA3[>2Dg+EIC+[hKX3~^VRecVHsOB?SQ97Qb%f(eR6wTIJ^}5s3|A');
define('NONCE_KEY',        'IHAU0Bk yQ-CBg-Rc[haV_uz~*zVaC^awR&cgX00pyu9%D*> {C$up]QzevRk?3f');
define('AUTH_SALT',        'Rg%,BRn!kH;J*2%-Tg}?I_f$|Dd$H7$LvK<qML3^=[~V.-.kAolNKC^@qD3aB**v');
define('SECURE_AUTH_SALT', '}W6cc^H}gQFeEN`Ors!xwjrsP3B7I*OdSLrQGUPJHU$L^<lAkwBZ(p+y9>Lo*(}3');
define('LOGGED_IN_SALT',   '=%=pz{0!n2D2I<jz?O75*hBIy1fNJ,};4=x9S$D1haI6YQOd5GtXVb$$#.?POBEM');
define('NONCE_SALT',       'w7J6WzPE?tv$IljyaiBg+*5^ARIhED{`459eOj`0.8c1ji.R- UtWr`F_8#oN-]`');

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
