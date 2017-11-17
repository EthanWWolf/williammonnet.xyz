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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         '&{cX!_r,cR5j@#?=:XPucq&EX#h^CA09 }3fkDja,(SW!u)zsA}p^8]Cbvky|JbA');
define('SECURE_AUTH_KEY',  '{p|Z%Zr<T #_2a~4kf=]8t)50ye}yfFsbfr%F|X Y0/ooRLD*Nh{#)ijW 7IbS23');
define('LOGGED_IN_KEY',    'If!ubkU4pqP3)Lj#8,0KY!vJcI!~k!j[cD<K}y~{9LWf($QG`W^}HAmf%0J}q3lK');
define('NONCE_KEY',        'X7sh?rb{7,fNP?y,YDtcM3>3.s]zKI$:Uj,rA0L7acAkK?wX2*qF%GN*3zW%Z#D>');
define('AUTH_SALT',        '0aC=p|uPhm)A4RhuO|waPPDNkE;br%OMnsHPqmMEN.-N2UkCy|5JPUNh<Fg8i&T1');
define('SECURE_AUTH_SALT', '?D2ix)Dn*lgg sd>gLr2E1.l2k1R$F;u|{UG{|yq+9BnUu/rx2HQ7.8?K]bQ M.<');
define('LOGGED_IN_SALT',   'jX1R$_YQujnKZ=xtxO/Ie&PTwE_;* PWY#=CCKl9q}7}i64&xqv#Grmw?iV*VAt^');
define('NONCE_SALT',       'CL?5+@4m(f(F<r+G*y-cZ>FcEr_Q3+.QpA,k/ZnK(/$>:7M4a`B.bbHhdu?<7BGM');

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
