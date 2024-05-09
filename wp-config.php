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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Anand@123' );

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
define( 'AUTH_KEY',         'br;X)./{>ZdBSu4+GZbsv8d1ZVe]J<M:S]UKXXIo)#zwB^Xb&Q45)&Qdf{>SUAbE' );
define( 'SECURE_AUTH_KEY',  'vq.!B2T/S1[m8pO3A-3,)ghUj,I?louv:w{k},&?GNahc`JArYC.kdiXBLV~8#LC' );
define( 'LOGGED_IN_KEY',    '(M&w&L{DZ,?+y+?CEy}X7CMd1!53N0n[6 U)K7FRp)Hlyv]Dr7/#bRFEE{s:7d+7' );
define( 'NONCE_KEY',        'o4/X=vOOis|-6N/>K|(]h]b|%)@EASc^od-& yKHQG$oQPMs5K*.d.rA!.>6WJYz' );
define( 'AUTH_SALT',        'M;p5ceW$&b<Ha1y#NO*L@H$}wY}e#|F>/&1V4<)uUtuY& sD5I1kdd8[l)VbfceT' );
define( 'SECURE_AUTH_SALT', '9B R3]+:X=iu!pX<{h5PhBv3{iolUC|Eal$w[*^e7J#o>@ypq y`F>3eH~P%P*Z>' );
define( 'LOGGED_IN_SALT',   ' /5gRs#|nu{eFc nLA|(Dpon.FpG,4QdZx(fI%ZTGK;q.0Nj,5_h)IaCh%*DGk{d' );
define( 'NONCE_SALT',       'T[7ELO@kd kgw`8[^] F+Hj-d^f-aE)(=&CXQOKi0%AS</zeo#5;/ cm~(7ovZ5/' );

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
