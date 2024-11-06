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
define( 'DB_NAME', 'db_edumanager' );

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
define( 'AUTH_KEY',         'fp)KO)FlR~6KPL}sYqCd65h_Z$K4+(iqkL&t6/E,ekW!*:Ri2E0kN9gp[IjY)O=;' );
define( 'SECURE_AUTH_KEY',  'YuhX]gE+QtAkH`CTz8BK-=BQNr/=t6fH{[62KSVzFw#W-d@VKAe!`iH9*mt/c!(h' );
define( 'LOGGED_IN_KEY',    'G_tD8K>WQ9g$)eO*mL=2AZfUT!~T~*7Zw[>1eHMayM#)-Bjg0(S{xe7rGNyW&g/n' );
define( 'NONCE_KEY',        'aUdHEnI5cCZ9NHNvM$?!D0E+qS>7Wn40Sc[iD8Bs{,V(fA:}`x26eh`F3}:HEbm|' );
define( 'AUTH_SALT',        'xbV{WfQ*&xWGb>b-:^ECV=WT__b@ftZR-c7<QelriDbovb^M@WLyghxOh#_%x%4@' );
define( 'SECURE_AUTH_SALT', 'C2KE>xzc84wWWrF`R+mLTvQPH2($5r0r(lPJ0.y28dwB0T2_U$0VyW&gy@LG|.}V' );
define( 'LOGGED_IN_SALT',   'p~SPHGzj/T58!{Im4xlUc>7/WmN3-f_OiR68|y3>W~s!vG8BS0+!o=V|xd|>C4f(' );
define( 'NONCE_SALT',       'E0z}sp>!Fa^+AiP<`zX`eVLhmszId49U)B:QSIcJ=95|gal&FM5|RS5G&/$XNG{Z' );

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
