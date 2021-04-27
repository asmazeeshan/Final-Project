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
define( 'DB_NAME', 'demo_db' );

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
define( 'AUTH_KEY',         'OusN ijTZ#c|NI}/ohaQar|s9]!^VY W:k0sDy_9Nh%ub=3|J%@ARH~Gp!_AG2th' );
define( 'SECURE_AUTH_KEY',  '{e8+XSK`H!)T[N8Nm][W=e-w,T,hD2apxH%XN=g~)y#U8TF<!kQrL03/GB*/.m)^' );
define( 'LOGGED_IN_KEY',    'Q:?sIF?s7YQ^g:-82`knHS&}M/dK(/R[kSA%(0wn[_2wV8PGBCpbK9O[UNbtBStp' );
define( 'NONCE_KEY',        ']2xfL8Dj9%K,}$jihlG8k|Z5xZUCnnJRV!z!?l<6||Qc6m0yaD.jW;0k,Up+/UC)' );
define( 'AUTH_SALT',        '&hm7HMBOSs[2,F2Ve^P$!CTOKTp%1=&f2Gdm#)AO8p>=5y%o;+t2&Zp6m1<wQlbk' );
define( 'SECURE_AUTH_SALT', 'XgFfexlJc2O<x0Ngm^7<{[tIRP)M9P&^.nPM5OS{nW2=YSQm5S#S,>b2]kyP{fri' );
define( 'LOGGED_IN_SALT',   'qPom9;5Z4`UO5Ati_]x.hk@MarW$}!ccMcs6&^.xY-_t#f#*}<m=d]P`&R|qBuLJ' );
define( 'NONCE_SALT',       'vfobPfqFKr3Y8W=ED&i{AjEy}n:{3?|^*2V&2:M&-~3$#;]T[GxaOSY=~Jh[.]5.' );

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
