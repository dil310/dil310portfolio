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
define( 'DB_NAME', 'dil310portfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'wXWu%]V}SPmT:9DuR-<=W!0Y{%d[8m_]!EyAsVRyJ IVkqZbY0#r:Z`uWtE]`<XW' );
define( 'SECURE_AUTH_KEY',  '?sSc{A.h+;p[^FSHg$MXMtdbF*cV`9S-&-WYtCqI.*z(PU>j2L[Wd$;._2o.(8hF' );
define( 'LOGGED_IN_KEY',    '>(]E1QBnyXYxC>b#SK3Q@VV,mxcugctkLV0,gO7g^NgYD$ZZ.dqY_#nD?iZrXq=J' );
define( 'NONCE_KEY',        'jKow>UWdwZ%lV^3@<?G|I4YFG|;XHKEK%u@7%;Z)e[4Uk,an1xSe-)R[=0?@45 L' );
define( 'AUTH_SALT',        'b|eDB0+K,K)0hw%Q3vgQ,PG6oKRh(g~0sv&STJa_Qu-m!5(0kLo47}*sFpR<-R<a' );
define( 'SECURE_AUTH_SALT', '{`@s~G}i*_SvJ+Zz[TV1z)NoOXH69hR9IrmEKr`~Reup:?-M#yA%m3|y&E*JV3t@' );
define( 'LOGGED_IN_SALT',   'd&aO -?<yCD4^b3<vHs1L07K8l={jeY0(R=^d}u6Q}END)fFj}^#a e+j9>#ky1|' );
define( 'NONCE_SALT',       '4p:_ryU Q;>z;XtT$I@rb}6AL9v<_TbK!RC+c/@;?[~UyC%KYmdu#]/uf4IolUxd' );

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
