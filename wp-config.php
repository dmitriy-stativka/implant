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
define( 'DB_NAME', 'implant2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'n)YEUsUT6}bL<BRmld_rp)=J9HFc[V<k(nLlgB@k=lAtQ07+Pux{zxl/eY{I[X!Y' );
define( 'SECURE_AUTH_KEY',  'Y_RyPsmfC}tKqtTt={6AfxZ82IYg:X-vtcdeYJZ%t]XHN/`V:hHw>.`pQ*x,/>+x' );
define( 'LOGGED_IN_KEY',    '3l>J*GaH-S}aus-qq?Sq/*;)gH(mHLXouMuKVi@g2gxpY_#Q(HZ*2|;>owJfJ5}n' );
define( 'NONCE_KEY',        ' -1xUZg:%Uts7M6]0f-8d^_`vwT-Ti]*LMADXp9@jG~MnX75LEsj)iCW %[e;4%z' );
define( 'AUTH_SALT',        '`VJlII^#y?j,x;EV>`@XF$44:?N@)iJ23@N*|g<7g2Y1.nH;1mR{zCo4~~?&0I]X' );
define( 'SECURE_AUTH_SALT', '4ru!9%w@DA;SX}ew(B=AKpOgV~,*h&270.LbZ?0_-or1q%(rIovO%>vw_8D0gsJS' );
define( 'LOGGED_IN_SALT',   '}0DmY*ruTR(+bR5=HrR.xZbQ>@4kz)0bfo?/32>826T^lSnpr)-gR^rPbx.z]R[Y' );
define( 'NONCE_SALT',       'N kQh%@79 W3BF/Z>3chj_.iPxh|-N}Iuk=ewuT=!mH{8>8 N(,CkLEfHy~wfd&6' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
