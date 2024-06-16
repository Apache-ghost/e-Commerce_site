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
define( 'DB_NAME', 'informa' );

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
define( 'AUTH_KEY',         '!`!k+~{(?>Y<K)nSRhKn2$~,h (yKU+M8Nu:Q+C ]?4#>Lu#oXAHP2e.AaA<_C-V' );
define( 'SECURE_AUTH_KEY',  'qI<24f1n2NlW8]Qi.Sp976(T=|ixMlL(=(~lt~Y!E0APa,r*hukRJZ`H[$h&t#.K' );
define( 'LOGGED_IN_KEY',    'Y1sbZ`,EF^*L&|1balN}BetR$6fWpqc:{.UUwbp*A{6|Iz76JNz:thT[=65@MfC1' );
define( 'NONCE_KEY',        '{Pd34L~%E,yH^N5QxA=j2-d}<Vpq@?6ZX`bLEPzJLkW(=;#:QAZpV61)NJi1,n;j' );
define( 'AUTH_SALT',        'PQCp|coS}U; /zU-=3P4Hl|LWBO#^N_EDHF!8Y,RSh*No]ybk`l5@Vt=:F=f*/kB' );
define( 'SECURE_AUTH_SALT', 'Say>p;M?f)sw<!<F~29h5b::yJ@9_lPnz77CpJ|/U*&B~W2qdC*9 bz0ABtId!oM' );
define( 'LOGGED_IN_SALT',   'kxjx@D07Q%yaS,hELTn(|Z%nGiS[f3(k|vm&_CuG6lG4fT>h:}MKP&J;-OQO>c_H' );
define( 'NONCE_SALT',       ':=%F|WHxDD?#r{kHVpw[2yh |y6DGw5+&|.(c/.zxm2Td<oA^<J0d0d-qGKl1=t4' );

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
