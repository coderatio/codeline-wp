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
define('DB_NAME', 'codeline-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&g/Xk4M154Uo-brjI-%~;rR~b4!i^K5Upu:8 cw18ns;V]bN3{0E;{/ib(mw;mw4');
define('SECURE_AUTH_KEY',  '6z)`Rr2Ly*Fsbs2@,oHGX0.24Q*K,Am[e&q]^&S{L{!y2Q1/x2FDA;$Q7]|>64zz');
define('LOGGED_IN_KEY',    'Li#Q#gS|#zgcOimS-rb1^]a!+w/+kwQxy[JaOE+oIDP3$`r^)La3&u1]o!euwVX)');
define('NONCE_KEY',        'zg6^NZJ@HR)2m?(joxBS~|I,/2[ILYf_f7>`@Ez@K?)lEaA,G|y]QQJjYM1?SRKT');
define('AUTH_SALT',        'GbQOCRId(7|U u.o`5#;=5V~PEE;FGL6jpC{+<ssqGtYXB{? B %%/J{IHKdB+i+');
define('SECURE_AUTH_SALT', ':#6bP>8h7GL_uP[OlPo]8s0C$]q`!5d<VU)Y+I1(bu1CeM4P$-#Wt9Bw*hLI/vsR');
define('LOGGED_IN_SALT',   'v:zuBD?V@r;4E:Ro8X9U$?;~T3&28Sm?5>5XjH&IS%Ud^m0^FT;,d(M!k@R8u1EN');
define('NONCE_SALT',       'x26i-A?K8{hK)!1{(k|>+6phZP_$%2/<XDy,vtO#QY-le~yLuRXCG>8WW]4IX.[i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
