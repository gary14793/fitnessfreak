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
define('DB_NAME', 'fitnessfreak');

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
define('AUTH_KEY',         '@xa7|io)cI&:8>2^7f1-S1ZRD;I3Bx8-[CG!WC;a~S }]VCQ><k;12GZeMf8sfdf');
define('SECURE_AUTH_KEY',  '@~N[G9Wp%]ln:Z#<7b*fUW3/MN1-g-q?M~o5xqN.^na]SWRh4.4KJF RcKU6Dfu2');
define('LOGGED_IN_KEY',    '[^oC.rPQ@_,L}Qdy 7S~IyF0EQ)GvlAzA:dIzafDV`[NjOT%xzj%%$5jv.poauZL');
define('NONCE_KEY',        '$Z`wmUmG;C:lXfv.?4Nts{Md/]yGU!dcpIQe)a1j)+_A3h>5wtOPLDT4{i^+FJUm');
define('AUTH_SALT',        '+8/y,gKf21e/J`g;lPK^?TsiP9TNA/$Ngp2YXvLKxBc|f1iMvEN}jHOjs(zDFQ9<');
define('SECURE_AUTH_SALT', 'g/,qk:}(jfl!X)%s30%*oT,D!:NimKl8([*V}_qYx)th?2)hdltc,~2,2jGWSsvm');
define('LOGGED_IN_SALT',   'ja8G)(13!-L_~1}C(LYu+JB(fOTepoX*VyQ!t^Ela~[k[,(;^hRe*nGyxQpGl4jy');
define('NONCE_SALT',       '4Q=OH,41in]- +Z&rq`Cv[6T~)jo2v+V`P2r#K9aQ$]5N3`B9mp%t<UA30iB%7c<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ff';

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
