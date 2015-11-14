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
define('DB_NAME', 'san_alfonso_wp');

/** MySQL database username */
define('DB_USER', 'daniel');

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
define('AUTH_KEY',         'w^aJ)Ns}nfS>%w4-GoL_kX<}QU?8)Om},@8PFp5)h=,qy|>>xV/*8P?2;Qx;^kBd');
define('SECURE_AUTH_KEY',  '6H9a?n^~gS(o9i{!J9NB8-:Dv[w@.M8}DI.wPA+F*uFG`x8/;4^)wY? h0L>b<v4');
define('LOGGED_IN_KEY',    '6x;OiS#yVEQE1yhwJZ2!1ww-$P>Fz[<kHk/73rHGrG]2H-K+iC|y9 Y?+Djn0~|*');
define('NONCE_KEY',        '9;3&r:G<hBY>;]3-*z:Swfq9an[uqm+$s pP]V6(:XK)hXW+qz`3Q&!]V&[${Yp|');
define('AUTH_SALT',        'x8o8;+_[@H>YyW(qy-,+P<D+=!y+&Hx@pT0|-xi{#,[|h;A,o[(nx^I0wE&RH$*c');
define('SECURE_AUTH_SALT', '$m!Z[qjWyx5<WY=#z&N<qa-4UTe|i+TT,:-%s.;jvQ,6+-1*mQ~r:,<YmebuwT*E');
define('LOGGED_IN_SALT',   'u]Kq<2b8M#hxzzUtnIHd7!&X&IG_wNI#9+R1mN|08Q|d3GN0s!#ipOymi.nUaWc+');
define('NONCE_SALT',       'G?t=/p&*{-T8|gI|gxWN7*!,2l]M|uM ;k6J<1G|$hFm V@v?n|n~D*yuh0bD>69');

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
