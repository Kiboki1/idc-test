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
define('DB_NAME', 'scotchbox');

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
define('AUTH_KEY',         'AXV|5pNp57uREc*K4Pwo+1rD!(s~#D-pK<u0XH_Wh-,I=%hClY!Q-.zCfA0%</dO');
define('SECURE_AUTH_KEY',  'd0XJz`&0]nT8)ud4HM%[^VsW:lp-DfJD+$P|RTt)|eM<0Yd{wHuKkRq.xt0!w+}0');
define('LOGGED_IN_KEY',    'jqFs2.N99]UsRJTsU0TN]qw{>WxK[W1KKD[jD-B0+xfWtRaCGivION<.uNr,T,[d');
define('NONCE_KEY',        '_m|)H145j&n@ujW-qOq6+ZNVLI66Yr+G%+4A}ezRFy{a-f(J;P+|9&O#6IL?6+UU');
define('AUTH_SALT',        ' 9.wCF3$Tww/{^QY6[drlBJg0IXy$ jrLd,A+}iL`!n@kZBOR6E(NBCB6Vbq|P2x');
define('SECURE_AUTH_SALT', 'Hi1W[{;xG#K+< ED&Pq.+<Op2Z.>9-ASSQw#O`m{h8we;c{`%K?.+-#<?jB{Cq@L');
define('LOGGED_IN_SALT',   'kdx+@Oj!kU~^Pns/a>3-_:l+n[sP~ot2sEvBm++[m+S2j.3ttBAQaeZGc^Y{|>l$');
define('NONCE_SALT',       'n>{xa./%g+Cv,&qDye~od7tGB[}.,,K<.+<41(G>{)OGCfxcn-?Ga;myfr-9jkP,');

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
