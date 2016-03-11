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
define('DB_NAME', 'arosenius');

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
define('AUTH_KEY',         '<nU}rK3h}Nz<&yVZ0!Ko;#>bjvP8OBXE`#^*8:6GJ@3XTX[ust,I-t}|DC8Sl|t1');
define('SECURE_AUTH_KEY',  't|BB%u26|$P>x]C->c-yu*OUF>^,m?W0^mL wE3[}q3 U@kWR9+{#&7&KN=#S$gu');
define('LOGGED_IN_KEY',    '^A46:t{Y0}#@]^vh }tetSfBAev<S.4d]^--orQdQpy?Y2|J&v506Y5PhYp6[F<P');
define('NONCE_KEY',        '@Y1#eF6b1qu9_h][c9y&-9H.]$}A*cLC^6u#OO=M}_/Sch6Iucn]oo;XYgVC8+d6');
define('AUTH_SALT',        'Zh:=PA(eM_9BTGSYcv218R]<3!S!_u6U!4p?%LnV=&kiv8K1RqSrgRV,OlQ6,SiP');
define('SECURE_AUTH_SALT', '0&HJeuQfOP dU%obojtB5Q=B{}Lq-GGEnZeAL$o?c*9[mc~RyJ,a# X7sW!)`&0h');
define('LOGGED_IN_SALT',   '=cp6.P~B-+Kcs%s]CV-T+XbMw.[W5L|5J^.5OhmMUdA@<hn+=(}]5FoX7wO~Xai%');
define('NONCE_SALT',       ' Q#XKf@CKz|Diy[1w]to$^}>;]@&e)g.D*})$++|iW4(fVC4Q;Mv@o`KPO1U((Ja');

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
