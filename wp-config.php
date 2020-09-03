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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anengineerfactez' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q{m{-=v=C,QUM$GY)S6Hx)ZdF8Dnp^mTTY>7EfeH@MCl7GU>FNHT7?^FraIWKJ43' );
define( 'SECURE_AUTH_KEY',  '#EI>Gbix1sw9eUxml6KkW`r3#A#I1(oo)MQKPJct(j<l4pypa2qQY57It2TV*p$4' );
define( 'LOGGED_IN_KEY',    '_Hu 4mT}z RRDhrLKyic$cR]39X_1Ip<g9=)7JgTm~?LF?l[?q,5;xJ2,^$HJ&@)' );
define( 'NONCE_KEY',        '<)iItLt @rjY^QnWTRXeuRFv^t2l46>I2OTc(5f^fA<O=|mVV`vH,i};Pyj}PqEZ' );
define( 'AUTH_SALT',        '<?cSvo60UIBL%M/RR4x+, D4(.PoIp;*_[uE)z#u@a:O`RGgF7>E}._<y$RQbYJA' );
define( 'SECURE_AUTH_SALT', 'b`{F?Od[(m7ZT7b?OSe>#0gjfLW&~2R>wqn>D5]FP/~RW;gic tSh.q%!YFT.Dkz' );
define( 'LOGGED_IN_SALT',   'UK6qs[KyVy#opsX]!CWRqI}G<$(tpJ>H* _BF7o5P?t93W:Y$##CWNNlZq+`KfH~' );
define( 'NONCE_SALT',       'WOb(OK72T5%C&Tr%k[mUa@pbgO;ka@t0^,]ds1iVj-%Ug4#ZyPD;b~,t?8n0N--?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
