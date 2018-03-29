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
define('DB_NAME', 'dev-insight-2K18');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'OWFx]{S0P$1z[y<b]1{I)$$-(g2H|MO[Kih)Rw)qXoIKUkNgVDT~OGo[ipcDEC2Q');
define('SECURE_AUTH_KEY',  ';*cLe{=z}q}*`4s{8aeUL2qcvAZ(S`BW6U9;Rx:Dh;S0M;qq[1<uj%`No2{=UpwW');
define('LOGGED_IN_KEY',    '|hl:zyz&/XvPQay,(ejV Ora)}$b%|.$0|3>Z1]<FtODG9LxZ,M3N0C5%V5_#Yg<');
define('NONCE_KEY',        'k@*).mzGEOyDg2m{E0En1ju~3VDe]9~p}em9r&)O`d4Z0C0lgwujQJ/ 6sx{?N)4');
define('AUTH_SALT',        'C.sX5ChEcFZ9&NG`B`+J,%`jG:Oi.Lh5DoM^;}(Grv0@C)*ytW[%Xr9E:fC+|*5[');
define('SECURE_AUTH_SALT', 'Lc_l-QNqtaRl=7uX;y5hV5htws]tCU/[{Z<;g{W_hwi7;#gUzaQA)O>)U;62VJ|D');
define('LOGGED_IN_SALT',   ':?$CiC$/t$=fgakNnj1){:[zA@()V gpzAW<C4om6k0KSg0ZZJTs<&~>,^kyBqE5');
define('NONCE_SALT',       '$=avC[n=gSsciPoHe(MT9ef;35a$)H?S9Ok+.#(TQ72(=)jB(sV-rgMSbN[#b)|Y');

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
