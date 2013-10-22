<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'yMrN`Ndf0IP3~6;xv:$zk^^{ <qs8ErOiSL+H~xl5Z3z`=+xEH !qrTpBnz[/;4?');
define('SECURE_AUTH_KEY',  '-d2N`E=j,&M8H>@`QfGA{f~~Ma:ER[`0YMq~|vfu{KmJnuSKlUtzoXxM>Ca42?}U');
define('LOGGED_IN_KEY',    '$74hp=!}su zG@jmlggtg^3UANI:}sG6_od>W|e[1kDT9^QD*JV@ps8$~$IQy_Pq');
define('NONCE_KEY',        '-)x&QI@e4Sv1F0|Jr%vk@s[Eo6Cw}Q4jI(]dL&MMeHtHD7;$`qtI-IRq*q4dm:X@');
define('AUTH_SALT',        'cIFPBS?u^EMUA?8+q0u;PS7xvgh:e@V{icv!WcruNV~0Q;xM6HRVeWQxI k}4`8J');
define('SECURE_AUTH_SALT', 'mR2UKjLw/Nlr:wmT@?d!L5Fh!c3Ya;M7_&lUt#8%Z!!L9j<%ZqP^7n%$3)Q>CO{a');
define('LOGGED_IN_SALT',   ')$[yrh[>8C<*UkQ+OZ%%0X?cSxAT},R2zV4[xLzzq-#OS8ZA_{i(vh*N(6|9<6d#');
define('NONCE_SALT',       '11^[!$cgd!tDeAFRnb2wi.0o>[kAvPe@ChPN.ePr:GuqX$JbXP1?isi1NP&$R8DK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
