<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'c25631MatherialDB' );

/** Database username */
define( 'DB_USER', 'c25631MatioDB' );

/** Database password */
define( 'DB_PASSWORD', '3CbFKQc):8kgb"]' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rbpl{+wfhCJqF#dN..0%@ql}.4,1R]LvC)$m@]&wvOWoPBvm1K@6yh1k*J-h%(:j' );
define( 'SECURE_AUTH_KEY',  '?rm&1X*PR&_I>> 4ZrA5)-tZ|q|yS;i&fFtVZ0mALMMB0{3Mjbk66c]O|BGeva%E' );
define( 'LOGGED_IN_KEY',    'vr:PR!ShHmLzM= Jkm4^dta6lPDRK/B01Dt8)$cZT{FJZ:->s*l#jz9X3A~(T>?j' );
define( 'NONCE_KEY',        '2.7o}f,ECiAy^(D|4>kGcFO(lgsB+uq1},.x-@T-mPZD5X&p=05W`<Us)XJr{QvQ' );
define( 'AUTH_SALT',        'V`#tx?G+h98lNr[RjVuiB+;7T6N4Cci/_Kv8]{3eh22Y><T)8M%pJlL-U%G_lJZ]' );
define( 'SECURE_AUTH_SALT', '0([ ZO%t;>cU=)hnv5 P#r9-!w,z}))*:pD##uU,>OHA,#]*F`(iQ.YWPI}GMpPO' );
define( 'LOGGED_IN_SALT',   '/i8Zl-CBDcZbfdb0J`Qs|:i2s5]Je7QLl,93M$r:CK>1-Z<GU8wm3Yt/Ni(L[JJ*' );
define( 'NONCE_SALT',       'fhm2,=v=G;!|k p<A,uQE-@-2(pnc@iN-v[.8jn7%Awsp!>>^bB3`Rd@,_9A0yGW' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
