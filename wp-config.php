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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'zVrc-H-hf6e6)IH@3+HZ#!&|H(RV`.K|f_f~4^-`yxMXN-@gt?OdM3EI.,qSv|)f');
define('SECURE_AUTH_KEY',  'z]bj+V>OE$]!vw~C.Iz*n{@ft:UGJKNF1lv4~^nm|k7CErUU0SLzo^Mj4%mC)5kf');
define('LOGGED_IN_KEY',    'oyJx-HJ==j?14;+iX9E3[nqV*Sji|SNsg0BH^ _|s0FqDv`>,ZI&mh^NAFD,5Fj1');
define('NONCE_KEY',        'ch.<7%DKU}j% [;ADfWE@e#BcrPOd7V:|pCQQ:3RSEC>)WcRT;X,SDNcr_iSKY^:');
define('AUTH_SALT',        'T4KA1,B`w[y4?zk7k4M@gHd<e<b+-cRU}Mnj.<:Tdb_@%9 .b9%+/s+p~~{2WORj');
define('SECURE_AUTH_SALT', '-~;||4OKI#qv#D`CQmN.juQFP^DO`;-17vA)IYaGXkK5M-Nr@wna0ht0|J%5u=rU');
define('LOGGED_IN_SALT',   'yBWxYfDf!e5?,ej:+Z+:0-E=|pr6 v5Vi@F-.!A.`0[s9eh;ID)ZNG_|aWa37{;G');
define('NONCE_SALT',       'GzO%&n&+Y?|@N+58O8+x-0W;>JMFM0&PA5N_3Ds//{SGP&f[i-WnvT$&Mp<ntGd+');

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
