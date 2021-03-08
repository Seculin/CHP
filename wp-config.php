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
define( 'DB_NAME', 'wp_chp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'excelsior1808' );

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
define( 'AUTH_KEY',         '!>%=SGGM/VS~d%U.Ylc9-K)p8:qx%*a(#C>3[ATo5JD*Y.hr~M2Y[Oi=*%{9d.X[' );
define( 'SECURE_AUTH_KEY',  'IaKO$t<r=z6q-xvO:Q1EGCdF~u.  -gjANZTv@)&e7/6o837Z.XB8ja1NmR=PncZ' );
define( 'LOGGED_IN_KEY',    'PY(-qJ}xd,vL90ltgt;srk*TIdy|C2LLv$,+3@?:;@Z;gqO}uH}PPF$VZIO}9,Vh' );
define( 'NONCE_KEY',        'J*-%x .VS]h@!rjkxmr%t/VYth&#rDqUc,`9|>dB2a!0p2:x^` ^6XWOQTUAGNKN' );
define( 'AUTH_SALT',        'y[9Xh97A`D~8VvV7,UItsWZW9t@[b@|5>3QqTUkd#/TQk^yRZ&Y9)e60+[jvv%]_' );
define( 'SECURE_AUTH_SALT', '}low(wWN1bdU73rdi9Z>MJ-h]KlosDJ>#:e_*{sAtp-EdN7|kUMm3nhTr=qam]$_' );
define( 'LOGGED_IN_SALT',   'KqU:.?pBSfK/.Qn>8,QYh$]rHV3;C;t,P}k8KF|OJp.1_7b4<KP*?C%,aTx%JyUD' );
define( 'NONCE_SALT',       'o&0P.]y5D3))A,a$t`qZRrk2LWZ1G<m=D#_`K+EFZN+)5xeB#^Z{DCY&J SA{I%^' );

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

