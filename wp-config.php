<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tigershredding');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
 */
define('AUTH_KEY',         'yE_qLD$DOVVPV7dg!gd5#WB|G`3*b.A6e30-C_3LCq@2E6+R{9:(`}x9roo7QdM,');
define('SECURE_AUTH_KEY',  '#w%Yqqa39~9(oU62+0$:0vysP<AL8d%RW|@fYqd52izl|}3L_j7b*+j6HMs!-nk?');
define('LOGGED_IN_KEY',    'a]nGT;%VNfJ!Hi*3Xyv{6VdKOsGc0%D2,3~8+bWQVf&n??%A}9xu?5!-OJ9>s[o.');
define('NONCE_KEY',        'ijaUg<1M$XS5QG{Gf)tg@7j|E?Z_?4nZp+G*&_#heEcPe3SsK%kdi/L3aq!Dlq/o');
define('AUTH_SALT',        'PHM@<IZZ,V ~`;Rsa<8$tm!xRCj@m1kXtBsz66r9IA)^3IZx=cJbK9YdG3v8iDMa');
define('SECURE_AUTH_SALT', '{#<=J0j@PP+=kxO`Ta!m.0IVeH+QThw+d`d/a6(.O8Db!YiEI RuQ{!Z4W2!A-IR');
define('LOGGED_IN_SALT',   't)5ba9E]QLsLj>z<v0Y]=9Ln4b=]gUQJ3lQN*33i?SCz%>}Y6)}r=YOe2c])-(Y%');
define('NONCE_SALT',       '|%7Ius@TW4{e+DM1E d^++@=)17/Qo4!U!*_`s71ilM[r@fw59Xa[RTP2|BUDA{}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
