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
define('DB_NAME', 'goldknoepfchen');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '3{Uh7a2;v`O06B6)A((bv5Mf#+{A&3@8&N<me%qgwThe+-KWn|l)Q*}Lr;je4UfU');
define('SECURE_AUTH_KEY',  '0b4nI,%]Je:pZ2H~FyVbgPzZUnz~qwrp!CPnHW3(_=V{*BJicT=/DzPtemyPi5j-');
define('LOGGED_IN_KEY',    'Xus,ixh%6c|RQ+L|^|~SzQ`g+|(`+<})pd*3[oIC0AjN9HL$F1Wo!t4ge[Z@YL8I');
define('NONCE_KEY',        '!}j2E*Og$Z.>=|`38yLY^SYhDn3^s+-V,+>Kblf;5/nXe|Q@T%+xe=& D6k_f<Ec');
define('AUTH_SALT',        'I8)&[URW&hADrKu=C9)Oibnd6f{6;SeDs>b>@_K%1+j+K/+=9N/$gU4b&jv!DTPi');
define('SECURE_AUTH_SALT', ' aA(wHKJ-+$NQVQ`;/~H;|syFsEe/-d@ -j}]:*<%P!+rktJ{uULmdb,U%rT[g+A');
define('LOGGED_IN_SALT',   '8??oG<m=<i~Q N[!QMY%U%MI *C[K r@<Kq8_q+Uo,c3zHJyYp,+^S|{|;%G|C(Z');
define('NONCE_SALT',       'M@%yj@OsG (/=f;R?1SH+x,C7,4jfk~tU2lra&lCWkDU]*s%uc))eKrG&7f=8yCu');

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
