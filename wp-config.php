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
define('DB_NAME', 'stay');

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
define('AUTH_KEY',         ')j.DDowh7Hj_{-T|tCu6 qh4g$~{=F>-_|Q!I>z![JJTgPt^4cEe/T0MsH*j#bRr');
define('SECURE_AUTH_KEY',  'T{hxa=O8J1jZtWaf|p7lBOb[v(6^4?85dV4-)UM9.dt0py-?V4nZNh;vklE5Ww22');
define('LOGGED_IN_KEY',    ';JR|<H7#+J=5GK?%G+]CDZ0DJB~>VzUUqeik<=-/cd8Ui;fA!5>i5n9}j$}s71O&');
define('NONCE_KEY',        '{=Wi;}K)3?UX[%df<3q|@Dq-Hq.0<lI - qmP1]wrA^GG%UWW7deCn7dz_ae)PD#');
define('AUTH_SALT',        'tNJClaCB>dnCgnfBm|iHwvhI9b?q>^o{,rk[WN_<L6+KkpN&H0DP`-w+oms6!fMk');
define('SECURE_AUTH_SALT', '1>JP%suy}Tz7!mR(tLlyE_> _2 24R&JO8Oh2xDRD2}}3})[jdHpnkDK@|dP>C||');
define('LOGGED_IN_SALT',   'w]mN;)*+I#6V:4;x?Xv-r P1JyG us=R-2k5E^<KoJ3J%^rp^M]H81cY+V3wy-_4');
define('NONCE_SALT',       'Q8Ai-~]F/55 Z?_47WtJw(G:I|]pl%{XGx;Fc/o&` /}tF[.YXpWnKGB*R8,~=V_');

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
