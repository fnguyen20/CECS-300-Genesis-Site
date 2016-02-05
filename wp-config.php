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
define('DB_NAME', 'cecs300sDBhsk0s');

/** MySQL database username */
define('DB_USER', 'cecs300sDBhsk0s');

/** MySQL database password */
define('DB_PASSWORD', 'iXD47rilnW');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'I+qPDLXLT2<;A;2<quuiqP*LOeSa9;5H69.x*]*#mae_w-dSZladG5DOWK]1#19;');
define('SECURE_AUTH_KEY',  'ddOCK[Z|[K:0|os:s-oNVwVdR1gnNBJ8}r}4zogkY8FvYcQ7MBJ>$^0,>rgjznrg');
define('LOGGED_IN_KEY',    'f,jXfEMnMF3B^uyI<+.i.<qfPXjXfE26MAE<$*P;.]p];.iWeqemLADeHLA.<W5D1');
define('NONCE_KEY',        'P6{q{3ymuTb$bQX6mqTHP;PT6];.26*uxm+*uXbPpxlOSHSaO25~9D#+*i.#peiL-');
define('AUTH_SALT',        '0}7}0,nr}rznNU,jXbEfjXBE<IMB^u$>$^vYbmPTH];P;.<q{ymqTuymtSaP;5W9');
define('SECURE_AUTH_SALT', 'G1wlo[swlKStSGK:OSG[:_C0[:wkodswkKRGVZC:4[J8F,}!}!|ocgcCcgV8C0UYM');
define('LOGGED_IN_SALT',   'eLADTHL;.<I<;.i.<qfiX+*emLSH#HP;6]px2+*tTa]pwlOStSaO15K9D5]txlgVZ');
define('NONCE_SALT',       '$ujujnbEIjMQE<{aA;2#2A;uim<quiHPqPXL{aeS19;9;2+pt;x+pPWxWLPDhlZ9G');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
