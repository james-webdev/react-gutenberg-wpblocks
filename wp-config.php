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
define( 'DB_NAME', 'gutenberg' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+igzJm5Rf>yN@(oOGZ6jtxSKWw^{hGx;F~}``/o2?t5_%6.B>@7axuQwfjau@g5b' );
define( 'SECURE_AUTH_KEY',  ' |=|[Y^j.fkKy@~?BoC!hf97wYb~,;=<iEv;LA5g)g{mX<`{94I; /[c@C|#N)~`' );
define( 'LOGGED_IN_KEY',    '40/D^b9ff3~0d?!Xs~U6R9n2Lp|BjR[]N;DJM#t!s{DR(mCz.QbO]YY-!h_J3>H ' );
define( 'NONCE_KEY',        '@^Qg=8s=ph=?$rmEjlP_Y;Ag?O7lL+jyaj{830U;{{`ffG=p7f)`.>;jgzF[>DXQ' );
define( 'AUTH_SALT',        'd4!+biR%8}2$j{T_:yh3z;Swlq95U@],x0!3<4-+6(3w8K+_}7Z;>ucZajpGX% X' );
define( 'SECURE_AUTH_SALT', 'ayL6B=jLt3.a38gH:8/-8(tYl ~AZnd`8_Be,v%kKq+h!)jiU~K+ 3X}CDq7-,%w' );
define( 'LOGGED_IN_SALT',   'Lzmd{hrEeEDQ~B9}A=3UPw9!L4#.d],7qGc(RIP!^+U7ps%MN4kq$z7qO]9n4EoR' );
define( 'NONCE_SALT',       'So)+.*/<i!_1Nd;EpXp#Pea^x9b)Dbr|GVJ)t>u28I/2;lS`v~$K5t5w*%c{(:6n' );

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
