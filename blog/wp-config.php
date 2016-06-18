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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home2/mizu/public_html/chrissamuel.me/blog/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('MMAFF', 'hostgator' ); //Added by QuickInstall

define('DB_NAME', 'mizu_wrdp1');

/** MySQL database username */
define('DB_USER', 'mizu_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', '13CvQnZISpr1ym');

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
define('AUTH_KEY',         'Jy*\`@kvK>4ISJ!wph2Pc*<sa<B(EIPE<(VS@34;vonu(a=t\`6M~KJH_Pvk!We7Z~U**zh~$~i9YR');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    'YdPN8IZHNq\`FzFdE1wG^Cw~nM?h~>Xi38WfAEL!fL2n5lL*Yw5Z=/uk|p;B1Dz1-~dwL2zE=e');
define('NONCE_KEY',        'JAt93k?Ffmf8UQ;L=g~\`mn$~~QDCU)VQ0$m:0!@)j/ryAZpF=Kfnn<C^1H=Ra3ey?9ru');
define('AUTH_SALT',        '\`3Khl(*FM399;f@W~JMWX_>pISxve28?E(4$;R5O$FkqYj<qGUkQI2\`/Ibh78-zAK');
define('SECURE_AUTH_SALT', 'v#;fo=m2/-QYKDiiJNvUfStB<bqm$y^Sa|a3gaYb#IQra$MK617=!e5cfx;hYWoSU0h<c=c\`V-3W');
define('LOGGED_IN_SALT',   'jwsmria$Yyl9sTuV0px0Fnc_yc9?8^p^~tUo>3aDBY\`Np|7ZXtHyow#q;DQK0LEK/0CShjG=');
define('NONCE_SALT',       '>VFL#p93pwE0@fb28?gF5eIV-?$9@_cge|*?_@S0D~J=@r*9?4V~t|!c$f4~<|1sJNnITnRDH\`>>DK_dyX');

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
