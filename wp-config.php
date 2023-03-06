<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'i4u$HN?]/9#kN)kuP7:$Cwq -0v1xi`[lMQ%(1AXB|~f_X=KH8OnY#<XGP,sXWK&' );
define( 'SECURE_AUTH_KEY',  ' 9,./q#9 1JN#mKCb5kFpm#ZcIOC(ql!xS+1*C*5DNAe+UZYXclCSEL_N b56Y4E' );
define( 'LOGGED_IN_KEY',    'h&x8FSS4p]xV?KocNB%7Ff6kW!6y3%iMDN1kVBTr%twB417mYcJz0N*tqnse gE1' );
define( 'NONCE_KEY',        '_:e(,<U=7(&rWg5NB6I>SjU|r13QdbaJC73UakB,OB^X@o;FfVpiCv`V%iSi=AF}' );
define( 'AUTH_SALT',        '$dwTJm&Rlsz7ZFF<rQL,AsN ~g6g* :N8Ufg9]U!~qZ:U.s.6e7>hg@{[NDz#QsN' );
define( 'SECURE_AUTH_SALT', 'IPQ=+0}s+47J;D^kY]X*%$,c/e;)5MiCp29#H;4Lc58DUy<Cwj*$KThXln&RL3Wt' );
define( 'LOGGED_IN_SALT',   'obAEXx~XeRkXqc`n,^sNQe,:U0CTv5OsI&=OQ,vy22)8^`8+EgH pR44kpK?$v89' );
define( 'NONCE_SALT',       '1uvAJ}H,9#8=Jl(~1x/.8/_OX.J;At<}h?^A88N&y0P9!A~}xwT^H+b1!bQX[Z7 ' );

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
