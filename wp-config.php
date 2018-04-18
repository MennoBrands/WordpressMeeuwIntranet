<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'demeeuw_wp1');

/** MySQL database username */
define('DB_USER', 'demeeuw');

/** MySQL database password */
define('DB_PASSWORD', 'mOAV6vM8');

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
define('AUTH_KEY',         'Tq|!O1@ZIiboiW>w)dBdNgL.^FUE|%-|x?ot2v:U1e;L);|uSDK|)O1rh=t0q{ 1');
define('SECURE_AUTH_KEY',  'c{]0TZ!L<^IC(u-&Gcc>Fl`/qaWXsZ>l?ES2jiGBXHtOGvJU H/7+0 ]CP/r0RIQ');
define('LOGGED_IN_KEY',    'PracT}&;cBtmd0}k<2(,A<hmsp`U7!+PwpVq(gF0=Q_y;o*+sb+ vD6l!rwmtdEU');
define('NONCE_KEY',        '5y4P29/-m~[PW(-p*5xE5!u.D2,cCL+cS[^|k-%U-4Z2TZQypk)?Nu+_;^L$:^o2');
define('AUTH_SALT',        'JzZx9lo5)X,8h.6@[cF77BOz6:EG+ M~P* _+-OJ-$(bX|Lc)~0(zcn(O0JK1~e@');
define('SECURE_AUTH_SALT', 'yT`a^ahKKD$uP+rGr7iYA%}o:K*U$[FV|H39:Z7|ReoQ{D#t&ZI{-eqT#`e|,yk.');
define('LOGGED_IN_SALT',   ':53{]DkiF-z1!-u@:Ga=n1;UTf|}8~aG[1AUK/tq/ViV{3jCQmRlNP-lj%qnj1E?');
define('NONCE_SALT',       '}?x?-kcd-r]lT1`A0Nz!jNW[tGpGy7l)J?%HIl>/2fSs|2No}Kc}BKV0{_]|B5g?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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