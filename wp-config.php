<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'crackcom_Valenti');

/** MySQL database username */
define('DB_USER', 'crackcom_Valenti');

/** MySQL database password */
define('DB_PASSWORD', 'Blacky@seth2002');

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
define('AUTH_KEY',         'aBL9|.v*h5}*tj]-k}* K#DhX|$w~ ~-MHaWCDDbIGO=>*VLb5D|hB8^=o+WGR>y');
define('SECURE_AUTH_KEY',  'n^U}:| vO.<o3h+Ad=m|)|+flGM@*h*6leqBh-6OwN-.&u+4IN#98x=@jb1<{57K');
define('LOGGED_IN_KEY',    '{fwl-0GJfB]b2Nt.nP{_eGX?G#(M,[N6I_6p|Z!6`gc-Y`G%#+P:6w*MS)Q93A/5');
define('NONCE_KEY',        'sJ G|`M$@BS$slyU/^a^ASlvhb2b+;2FwnpXwF+OD5087dC-?-J5!1ECJUQk~ZFT');
define('AUTH_SALT',        '/{m+{| $]o!(e;nW9}nP}oAilTtGkzX1N3NYd6/^]^A;JHkSb,gpX0@jZ:-i&46=');
define('SECURE_AUTH_SALT', 'J35wm-@&rfIW_yUMl7Q,M-8:BSAj+?3:-w@W4ruK$/F$,C|],LqJcu-MBb]Do9(/');
define('LOGGED_IN_SALT',   '%eSGa6#0,0W2$i2;1|6,q3z G9e47OcfG2 `X*/_lI]A*Eo~t3:h[2IVU;^U<4An');
define('NONCE_SALT',       'o|/)QR|f+?UfF|-Un. L1Yvk2T=fvA>-B=okj}1lL6:n=gs#xOE-Rsh-z+r;~S/,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
