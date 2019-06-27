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
define( 'DB_NAME', 'wp_r101' );

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
define( 'AUTH_KEY',         ' X4Y]XU<@nYCI=u&F|+0}gDgBuh-)Lq1O.N9+WHjQ;>`P@dSVCXt9Yxsq#`Lt/]G' );
define( 'SECURE_AUTH_KEY',  'r2I_,}zEy+MUfY6,u!oTYQ(msOQ)ML%<f#VOt@R>&ljvA19v!<7}.o-,u5/zfDR9' );
define( 'LOGGED_IN_KEY',    '!>c8vit{7W&IV--8eXfC[n#L7uHY;5a+F}}pp@L=r+s.*Ki}7lHm=7Pf.,#-S9XB' );
define( 'NONCE_KEY',        '+08$BX&SBYE[xUz.;eMe:(yB6?UIp5F<GB-M$!!EA!rU^_bt3JkW5!~h1C%bze:M' );
define( 'AUTH_SALT',        'bTOW[s>3cQQD^;)v VMQ+x0F{y)3$TED`bQZLG =*I#m>I6DEY=ZrBy85X*VZ?a(' );
define( 'SECURE_AUTH_SALT', 'BLJ?N Y?7VY/muC-7v&^Hyq,r))wh-F>WDaKFRIt6QS1na@l3<y./mQadX&T+vEz' );
define( 'LOGGED_IN_SALT',   'g_GOB_j)>jYbx1X0(O}~bFJ m6Ru.bwF#( *Ha>yM-QPop OaaJ&THgaIhw%Vg1{' );
define( 'NONCE_SALT',       '4yMW~jDcfBN-y}&<5 CQGZ>%!+f~I`N&n(&UM7jVIkV4%r2;<PL[4P <bc]xB?}~' );

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
