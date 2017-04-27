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
define('DB_NAME', 'tute');

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
define('AUTH_KEY',         'Nc(u?ubOZ@odmXl(`UDpF49E@G#ld3u%6Wnc.1jW 7$#(V]%_nOuUBT664s@38!o');
define('SECURE_AUTH_KEY',  'G;X~NMheKeAHw5_3CD$tEctOs5ts{w0mhq@^&(x&BxImx^Pj}o{{8I@)6ll6jOU)');
define('LOGGED_IN_KEY',    'zDg<ixjU@G|FlQz&0~S<YP4LT>n<J?~wM~(R_&Tahx sz)!v-dLidf/Ee/S` btg');
define('NONCE_KEY',        '@%?? %>%,Ho7cz:1,~>C[m#]5o#z$Pp@jW{Pb5uZr/F2Uw<>CmtL3MD.E,]@GQwx');
define('AUTH_SALT',        'ZM>#M8Yrd+x{(97s?(4w^X)qUzHp<O%i<,9843Q-i([GQ:;,;&Y+m~y%c.TH1SHz');
define('SECURE_AUTH_SALT', '#n?8<m32E7$cPt(&WT+#P0,k X( Jrx|SVE=w[b(bXov=C!!;oD}r;Lu{w53e{Yh');
define('LOGGED_IN_SALT',   'ZQKsx,O(?;RtJ`<r)yf#DoV>w;{>hh#=>tp*M;@C}VR2{SK-)>LhFjQEN_l}}#CO');
define('NONCE_SALT',       'n[s+Yr@3u+{:?dJ?{iQgdE<Y#z :K>F2:(b_Fb}[;X)>t>oy[J#g`.x=jK3>R~Wt');

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
