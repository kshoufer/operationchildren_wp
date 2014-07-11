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
define('DB_NAME', 'operationchildren');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'g8s$~k`=GHJ!q-t.%mYQRJcj1:wp+#=`/DO.$ RQ/#D %C[@x}A>m2wZ n^*{ M=');
define('SECURE_AUTH_KEY',  'V|mGTkmERj/TTU* ZbYDY!tEiZmf6p1kL0+wUK..5qE~(qNgk!wa:Rn,0i*u#{MI');
define('LOGGED_IN_KEY',    ' 1uEy?2Y=os)@t0WkUFUmKBqH%P~RYcuocjM)a?0GQ!AaJvJ7$#Cr~Uy<E)c0CFn');
define('NONCE_KEY',        'VAh2Kn3~+n2~0]EBAegEM Rj$9I[a0/vJo-/Xl#>%5AwQz7GxF?$k)r{WexjoCmg');
define('AUTH_SALT',        '_=~ynto}Jun~p4_1+#CZidVTif#^:$q@ndK_40n*rrJFOfY{{0xK@w*I*v)aMRQ ');
define('SECURE_AUTH_SALT', 'h8[l;;:eoS9a*U-3cqu[+~wVDx/&$utUo8-Q`LJ}H0l&y95E]*X>82|wQLV1GI:<');
define('LOGGED_IN_SALT',   'JU{>&WxoEq;=$m^FdA;6I1BKS;Zq1;UA?R9~n`ohiS^7cYE5KTf[cMjJOz.xdn}f');
define('NONCE_SALT',       'v8;~SpAbI{_Mq/sxTlN%E Gx;.v$;_?_4bH_t|?<+`s|Dsh3i[3*q1nJFV%ZyZ`~');

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
