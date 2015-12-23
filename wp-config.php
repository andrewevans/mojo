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
define('DB_NAME', 'mojo');

/** MySQL database username */
define('DB_USER', 'mojonogg');

/** MySQL database password */
define('DB_PASSWORD', 'makeitrain');

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
define('AUTH_KEY',         'RMr`Hao~u1z%<a9zR@ry~x9p,Ry;89P%@=v60f46(1{,1-j$KU)*JJ#FhT$Yv}<d');
define('SECURE_AUTH_KEY',  '.H;`Yh#-;>p})<+`FK8wEH-U:-o,f4wT$)!A(+vuyr%nc:a$99HaQZ]B80wNEZ|+');
define('LOGGED_IN_KEY',    '-sP.}+|W+l>#l]+u`<AC=Y3A>4useHH+2i3&1Q7Y`hrB?G8G1ljz tFpqD(G~e.|');
define('NONCE_KEY',        'On{N`7bcbS}VqW5F66+Nc-KT4hf#n&fU!^ya9f7_wb?E)dC-Z#L^dj=vLYH6VL][');
define('AUTH_SALT',        '?vk0f=Bn,7:FFr%[yDJ/b6sy!XEXy@E.p~2!R#9P+|#R4})p@+S-y>_|kb6Wp<AR');
define('SECURE_AUTH_SALT', '!{4B@pf]c.33<WF2U}4e|gYhIu6h[jGn+sjppd;s+L8foO^a.C+zb|X<j8P.d]r,');
define('LOGGED_IN_SALT',   'J@D_Glg2H5nSk?-: ?1[I(&2^go6#.TxVXTkF3/(h;Wn.!(!gqu?:=L-hmU:BqMD');
define('NONCE_SALT',       'A]ot>_nd+b>VKcEYX~FAqgYY+ pi>8Sb#jbsJ;8v#gHYd3Rfg&QWTDJ?FwcO gT%');

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

