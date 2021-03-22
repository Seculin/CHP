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
define( 'DB_NAME', 'wp_CHP' );

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
define( 'AUTH_KEY',         'UPS%[19pjk( -6DSpcD-,H(X44}h~[xFtUxhEMkG)Q${% 8PwTFjkN]O>ZysBZ0U' );
define( 'SECURE_AUTH_KEY',  '6]V-HX+ms~V2}??9h.]Z>#1}{<J%Mu{v4ltT|yGCQ08CdNq~B2HGJ7:6j<hu<sF)' );
define( 'LOGGED_IN_KEY',    ' -:~WQn~!80{O2<Jobta#a@8(aw @)gh$<7*u+8q%m*AGvh7@F{:%<MzG&7dY*Qi' );
define( 'NONCE_KEY',        'Gv>g,?e]+tzdy7M)%w,r8 {Jh{75jpwO !n3p<m C@@bWKzDU0(B^p#S-oZo-e]d' );
define( 'AUTH_SALT',        'rtI{asLT(PS=s`C896${ @wlK@{<%f^jUv^;B#!Ldw Du4emZXa/NQ^r4xLZ0_(D' );
define( 'SECURE_AUTH_SALT', 'we8^zD)QthnebgZH]a8WCf-Psyu^d(H:V9h2sYNor_i-LF$K1Uko`aqdJkN*Xmh4' );
define( 'LOGGED_IN_SALT',   'g5KabV*i^?4U^<DlkHe~ 06qq|+adh!T9vmzbPt2<kIdc=6}SdcEz{RbKW{$^xx/' );
define( 'NONCE_SALT',       '*ow2@s}4+COPx&p<*M-enS1f#5LKAOE5G]JBt8U>d3>o8g~i`j5wT(}*y|*YL<{L' );

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
