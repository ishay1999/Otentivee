<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'otentiVegan');

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
define('AUTH_KEY',         '>6Y^<FQ`)R7lz66eiGJw?,1}ExCpo-}r_R>`F4W(Tubx|fHL~IL910i(lP;DW#o1');
define('SECURE_AUTH_KEY',  '/0`aK0DKMg[WJ)H-xQ8&m.SJ^r)SgRFbDO+`][5TN/oK|CvSu2*/+jXP?OTInl9#');
define('LOGGED_IN_KEY',    '/vIG>7(+D1jBb~18FjZeO{Xz4Y8^d8js9,p m&e_vik5Z5<R-3|^ZYw^O71PWh/$');
define('NONCE_KEY',        '(S&!8*m%KyytUbqd(M]X)Ulnx@}-Yq0u2J{w%D-x:-5I{z4|Cw+_|T%+K,Q66,)m');
define('AUTH_SALT',        'j7h&Uf:37BjV&+gZyL/qj[W|KyZ69#U-8Vg|>,x)++y*sNU!#?qE2Ti9QgFe6S-%');
define('SECURE_AUTH_SALT', '`x3E7+daOi8^TJ*B7cS<[-%+D5VkpGZAq/G$zC`w5L-.O@uk2GZI]Hj,gxi!X]1u');
define('LOGGED_IN_SALT',   '[/=`QQP8DV{XM&OS6czN@rV+ MZr`,CqEDTBo!+7$*UJ>?fzLkN}e#%`rMf^;IG,');
define('NONCE_SALT',       'qK8-u}.s7v5bwfdr8-c?gxntST{m$f!UT/aOO2t$# #o2H>O+b3qg,0c*#nE:jRm');

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
