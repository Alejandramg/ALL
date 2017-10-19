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
define('DB_NAME', 'wp_alejandra');

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
define('AUTH_KEY',         'f_/]r9YI`3Ko;B|(.`Ut8$7:,*NzA6+Ub7KH%dbM3QdQ}8/hzN6[:EEoUKF|=F10');
define('SECURE_AUTH_KEY',  'R@qu7W2dh&H`$TbXOd+Y-tJ/0[Guu&YHF{IR1Q6>94O-|Te2khMoe{)k(oodH5LS');
define('LOGGED_IN_KEY',    'uj~?w8i#x}KxQOuk:~XosF*~-@2>Fv}E2+yZ+==T&1|pX* $f%Ub3]iWp6#fq`p=');
define('NONCE_KEY',        'u>v92[vI[E1|vMMjF~9&aTH;ff*b3br?xK|zYgtRB55WZ(<&;ks(Opcx28v:+./#');
define('AUTH_SALT',        '~t0/|-Vj5yIkI{<[9R^#E]@9B<i(Xnw-K7a?Ng5SzVOf*x ddOKmx]4a5ujK*:Mr');
define('SECURE_AUTH_SALT', 'qwIp&fC)<}{J2l`bIe5^[-7d-BKzdv2<e8ZVX9vtG:yhne/UT=3YXK{H<TbX=$_*');
define('LOGGED_IN_SALT',   '(V!PX](JN~TYRT/b*wqU&9/ZI-%5[{OEkao/c{3$iR;J[$*K3PJ_Gq8; GPJQ}hN');
define('NONCE_SALT',       '(}!jw^QQZm::YQr~OAxZQ!^/O:7!Q(mN&VUs{PKGy`Z8X =t)):PnlmbGE 5?Ej<');

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
