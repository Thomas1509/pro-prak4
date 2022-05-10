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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project-wp' );

/** Database username */
define( 'DB_USER', 'project' );

/** Database password */
define( 'DB_PASSWORD', 'project' );

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
define( 'AUTH_KEY',         'yn]^<CWq1*Nj*95o1lK.}ewL[[J^0ps3jg#re$,V(_ImB$~d(4x4VP+PM$Dvg]r!' );
define( 'SECURE_AUTH_KEY',  '8`P)8,m~NqliUJLhfI+9LQzd*RCyEQYb:<T5O@|yBY2Gqjvld4EAT8b+u5+c2@^V' );
define( 'LOGGED_IN_KEY',    'N*CXP$)FLus-8n7y+RZ<{_i}gpKi`wuUy?_sgyr6Um>l1[SFWKnJ&u.r+_])mgig' );
define( 'NONCE_KEY',        '-t{&kIhyz;-;P[JI#du4(SRCFhzduDFZAW7+)a*0&-&=PJf~v4k083>z55mbMUOd' );
define( 'AUTH_SALT',        'np[:Xf_ir@[^BKH+IyO S=1k7:2cyP2cmJOOBNv,|+:D2$&2j7XUMrMh%vI?$wup' );
define( 'SECURE_AUTH_SALT', '3C#3VPtV.RhNTLg1kaHxB[`x (KA#[v#!lyeI`D.7Xm+iiJ2BX&*yOX?Wc~F(qzs' );
define( 'LOGGED_IN_SALT',   '^UY*Wm<G7:&<0|i-a1Oc:d/:klmNU81<|-Nm=/9leQK#J=QMuDT8g+FV4pS}wdO-' );
define( 'NONCE_SALT',       '1bC(=XjSd$P+X,~Yip&L.#E:6XX,FEUL(aAeQ#DSqzw+7Wjg$]^48=z92brsphwh' );

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
