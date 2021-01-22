<?php
define('WP_AUTO_UPDATE_CORE', 'minor');
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fxpowerbot_wp_d1fmi' );

/** MySQL database username */
define( 'DB_USER', 'fxpowerbot_wp_4nvlw' );

/** MySQL database password */
define( 'DB_PASSWORD', 'x1~!?1I*6SaHM@#7' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Y1]Z(05zC5!:K6h!);Ck8283~lDP-0*S1i&AydjS:16d3L9h1e4#1L@+O(9rW!r*');
define('SECURE_AUTH_KEY', 'le%Rise&t()K_1)d8w458*4*YpjQWuRDYYR3&q6P2I78]H8t98135FCj~YbyJ2[y');
define('LOGGED_IN_KEY', '493+1z:[0!)l87a@xz+Xf#R7!19078ou33g03Z6f6%+vm1O9s#)0sN/|3*R6g4[Q');
define('NONCE_KEY', 'P*4QG4E;K311)a@y3PR#Vzp402_r749AkD4Y0d9u+Nc8cUUr-l*8HBiF%6&~91(n');
define('AUTH_SALT', '19!z0z[#Tjy50/Y)Pi(7D&hec]N!p[0Q!k5~Y(5g/C*mO2H6&g#t95r52tH-AIMc');
define('SECURE_AUTH_SALT', 'luyQBFB95i[:3RL78bT33800W7wTyJ2IH72r)|bMpfz%(3IE(id52]8/9#;Pzo0R');
define('LOGGED_IN_SALT', '5L;9&b;6%zpu&_t&300/mlO64O(h193D2YLxi;6*Xy5+829lBvJinq1VI:3~yw(C');
define('NONCE_SALT', 'I&w2Mk9BL3E[NQRo#q0A54MP+CUP19PV[Pk|EhEJ3-[o&*%tu2-vMU#[fG*f@CY+');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kb9EWst_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
