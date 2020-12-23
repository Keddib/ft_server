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
define( 'DB_NAME', 'wpdata' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '0000' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'c|3**VhpbnT qyB}rS$4^w(b&GWLZoJ1<SfW)L|nP(XxB{(IS*4,Fb|UJ*2.B;e.');
define('SECURE_AUTH_KEY',  'oOmJSaC3-EJc;,(X-9ua>X`gc*dT|-ue$iBn$G*{-6iA;XZC>fWyv0CWI6IRllrC');
define('LOGGED_IN_KEY',    'a^rl%-M(s`KzvD3UME)n{6gXgV7n}E2R4^(=0If4)OvJpR4.%Aa_?TUXB$^keT6K');
define('NONCE_KEY',        'hJ+J;?mXTIR+2!V]];[O$+7d-:rUn-LE <e~=I4%Opzz9NH$(8sm;-( }d(Zqn&[');
define('AUTH_SALT',        'ZdEvuG%g2Wi-iG7Z=6kA5z67K{]-GtWlA}Z;i}+6{miVmXvSRby-*)Z-!~8<,}OQ');
define('SECURE_AUTH_SALT', 'LR:a)YjW A -M#cEzh%GF/XV>B2%Sg@V%3D%f?7vv)7{.N|xVQA:|}P(pRj1(3|B');
define('LOGGED_IN_SALT',   'hR6>t^XOnhq+X44CfeN./PQYBv6UR*.v5+l6_Q1N8~-W@)|p-SlYBt?>,+=Q7(nX');
define('NONCE_SALT',       '+LVo]9^sf}JCb1t|9T8>#c`#|sKPZq_JcT3Wp+>+o,iK_o:+$vL|xrU|r+e%@Su/');
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
/** set the method that WordPress should use to write to the filesystem. Since we’ve given the web server permission to write where it needs to, we can explicitly set the filesystem method to “direct”. Failure to set this with our current settings would result in WordPress prompting for FTP credentials when we perform some actions. */
define('FS_METHOD', 'direct');
