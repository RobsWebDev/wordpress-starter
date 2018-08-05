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
define('DB_NAME', 'wordpress_starter');

/** MySQL database username */
define('DB_USER', 'wordstart_user');

/** MySQL database password */
define('DB_PASSWORD', 'wordstart123');

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
define('AUTH_KEY',         '+a*t7C)LST*$:]|>[fe:Z:*6f0c_C~cXhn/~5~L@7pD*qJS_Z@MW;[r9an,6`Z->');
define('SECURE_AUTH_KEY',  '!O+)+Q7u,#B0~4Ofe~{;9gu=OYGFS3x%lngbtul~Ykv&E|?`h`TaNQ|+;ypH4JC4');
define('LOGGED_IN_KEY',    'xX|g7,>vWz?O>#C.[fViSH=|hDv]IXXalO4d:0a26a/#P#3a+aL9; M8Yj-ENmy}');
define('NONCE_KEY',        '{fC^bmMmBZ,5pnT$Br|bu%d8eAKS0lmcygXkm>H>Yof<d(WrMYjd9gV-=uPGe<H}');
define('AUTH_SALT',        'aha]:2f>b_MxoaQKwSh[^+V*y2$A5TRTM9HySfxQtYX6f#Ly#~.!u-ZMyIf!||~b');
define('SECURE_AUTH_SALT', 'kkJ09Zx+C2.)xS=*P$^<GH85?Z6*HMK3K,u[pyA0SF68l6b^%+<-#B5&A&!NnJ!A');
define('LOGGED_IN_SALT',   '(}*Be5WF0nX#:F*b6$r}S_t0AuG=A=n):ho[fY|Qau`g{F>BSkH]|)%w=y&+]I,h');
define('NONCE_SALT',       'F![y6mq2bk:^RFepaD!gO4gujT=e;-(r!5QEzo14$&X6(:iP<Exn$hA-jiAzQnBu');

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
