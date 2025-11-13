<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'EducaWeb' );

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
define( 'AUTH_KEY',         ')g~=xOE:r9/Jo?!Rbx7#.M$svtvk}&zsto0sT}n>Bf6gN_a|O]gGBpA.[Jjq#V[g' );
define( 'SECURE_AUTH_KEY',  'nP1wrR9`!@F_M)qL({{f0 }jf[b%Xsu$g;3T CLFhckonifYS`s-=#/WK#*:-^:y' );
define( 'LOGGED_IN_KEY',    '^-q.4cYY<*H(e!#Em@zK3w(L9_3c=b:2{_#066`Cvu.np@*xU,CeB88C_t[(/kdB' );
define( 'NONCE_KEY',        'N#2s.8;g0~,!e<WKL>).}O)|/wvN<-^EzK_]CC:NQaI6xMlsMk|+.jRwPFeOp~`o' );
define( 'AUTH_SALT',        '.{i#>[@x3<nAn)!Jw;#12:dOy6GQ(xi31Fu[/it6)|[B%sv21uq)FU7Dc3po)1E0' );
define( 'SECURE_AUTH_SALT', '0Z`^s.>4k5EsXyb`0o)W}XT0IRh}lqg{/#:=5p-=a9mK%H3xY^6Ztbx3X/%}%Vmv' );
define( 'LOGGED_IN_SALT',   '|{v=vmVBiQm>0L^m1B3#=*KA|h,R0%/!_{^E,pKHn*z9^)d~M(eJRD3?6e6rF{u(' );
define( 'NONCE_SALT',       'cT6bpgy12]!)F;] ZtbnYu;A=`Dc%2Fs]}w<Dd!r.[31ZL^b* c}>3Uc6 TN|qU3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
