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
define('DB_NAME', 'mr_franchise');

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
define('AUTH_KEY',         ')fH?><ks+tdl+(p1)p1nAcUZ;fsRj%:ZEy| zoqCa4#MhLDkNa3-Q4 MIaIJ;CXw');
define('SECURE_AUTH_KEY',  'k2uu$w21X|vJ%Y6S]y;!3hKgp>oC{%*yz,HXz{4/%JlOf*,;]ap,1xA[#;1|%8x!');
define('LOGGED_IN_KEY',    'QWOe-Fn/nJIH-fiL<TUP BU_AvB)U4q~ HI>rUYuCx-GM``-t3FF:~A|B6glQtK>');
define('NONCE_KEY',        'G(J`x+q#V~UryfKIH?uN*~[s=7WDnYPF_o1 Q:lRxt-(Ge-BVYv% dVgJPQpcgHV');
define('AUTH_SALT',        '1vfZ{FKW|:sqtD.tcO1i=J1L-ekJY+Jrjj8S-]@))et{#52~pyn|Tb#s)fm!{+,4');
define('SECURE_AUTH_SALT', 'Eo|F|1`SXY>+x~/LrY*@(BTrbl#ApRc}0O+n=c|}y{3BD:mfBw/b-[-Ue *~ULkD');
define('LOGGED_IN_SALT',   '-*ma|!_d*&8H9})#=/z$)b-HPHYv2F8[SM#<TlH&t-+sT}T#!OyuEK#12<mAhOrd');
define('NONCE_SALT',       'j7D;{mUl:jjcuyqAyhMC]ev[6QO9x7bWVvVsR*u5OqK@(%[SH-UAS_`>684c u-a');

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
