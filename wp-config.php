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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpthemes' );

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
define( 'AUTH_KEY',         'z<ikuIbG`EL9^W3T7+Cp(<.We,CwK0!e;DvF^[d$O6VJmu9kV18+n]Ljy@YXW<8 ' );
define( 'SECURE_AUTH_KEY',  'MasIs:c(8&p2 T`gcvdLaNr%b:,Oo~FM!Dk~qmv<(<=YK*h,U6t3mEX)0)&2x/8d' );
define( 'LOGGED_IN_KEY',    'XA1&woKmm>Z@$;O@[ -Qzbq5!Uqn?UAhk:.m7l/xPh[xNpIi^+;<&b;,[a(5U@@R' );
define( 'NONCE_KEY',        '<{JY|dKq4^:u+ g `33gF.b6.i$f^>)Pe^k;u/(Y@Y.@gU?q#ce6QVx<pd?C/US5' );
define( 'AUTH_SALT',        '.;:@6J:SvqVEkj!^8TtIq!eWU-kl%dk|R}9qANo oc3fTB3gaL}Z3dxQT7r+&+r(' );
define( 'SECURE_AUTH_SALT', 'dmN;!sv1 9N9<[C3F<O9zk>X&K*B&? H 3};rE[oIeRKS`;IIRATXzL>vAtKzi1t' );
define( 'LOGGED_IN_SALT',   'fUWotIL7t$kr/P@}pSQpU~CYGj6%kDziZ {E[gpbrLQnOlHE=]X!u<t</2_0979b' );
define( 'NONCE_SALT',       '?9+D#}TU_tuiE+[kWjn3</KyD@fF?<S2Kn9}76AwZ0|Qs`faWj9]=v:Q+%io:qm#' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
