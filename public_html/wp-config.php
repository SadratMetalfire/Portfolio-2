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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'z3=RV0w2ece6:Yq-84Z3ClP@Uh!+;yk^#>`G%-3?hX!26(`UT,Tb?#*6=qF(}U+}' );
define( 'SECURE_AUTH_KEY',  ']wUsIO9l1^Mf<QF*L]inJ#mQdny4*^|9NLaw9CX, )v0R5h#ZZc>7pqupsp})FqW' );
define( 'LOGGED_IN_KEY',    'a:y^P<]^e-|{6BPPuQ[A#?X@^0.+bj]n5y/#J5fw+H@^EFX5Wy8aW=h}!5wfk&]{' );
define( 'NONCE_KEY',        'VBC5>.sRoPTSVgP ,_8@K!j:u Z?/fX}o:%[#@;*JRQV!;_4tl M6<Kjg-JX?lVW' );
define( 'AUTH_SALT',        'ki}VSloP,T{Yoqzj,Q$:z}])[@wuBOHc7LbuUj26fdx[8u)c).dRYucs4k& $U)s' );
define( 'SECURE_AUTH_SALT', 'gT;*UJi,4RM4Yz2|AY9c*_5:#.f=!}cy?UIXtS{u+VwW>KteJ4-,Mu-_scu7I9nZ' );
define( 'LOGGED_IN_SALT',   ',X`a-$opuR)0e3QMSxRItuc_Xz/%j4 H#E[&s)d^d`j&|UW^-ug__C^;errB(IuB' );
define( 'NONCE_SALT',       '(MN]3B2=`sJ~An771]W6G|meW.NrOhj;J1zmjB/9[ON?Y-Wy}X%7by(S5j9>l _K' );

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
