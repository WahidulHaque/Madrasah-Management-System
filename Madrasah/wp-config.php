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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'madrasah' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'cFI51GM|n/@#e 2MdfyyIKkK=(KfZ%iBF$F.^,/qKQD;hp5;cYM]cVHLs(jllYb0' );
define( 'SECURE_AUTH_KEY',  'iX^ go%%.joO-ESyclko6DbPm*Z#c/62=VQ3|I]z6vHASN(K>$Y4GKP}VD`e~s(@' );
define( 'LOGGED_IN_KEY',    'Q24X1srE?)=B*V<a4*U~s/IcteV@6(Y-%-2GIACpOBG`Q9%#WL+6a^^i:7?^21e?' );
define( 'NONCE_KEY',        'B%j_hr5<x9*& SFcwReVGztB4m9S<S;6vGhT3tMPi.(,$cR*f,XJy!0A=ti<GX?t' );
define( 'AUTH_SALT',        '!W*0DK_rxIj/y+y[lUa,/HQCTi`[AnEZQ q=^5ir?PDp?0^.e?%V?G^|weLv^L7J' );
define( 'SECURE_AUTH_SALT', 'r=xvovb;2c.S81u@Q<N!pr@>EwgU^Q#R,nwn*Z^a7n)oedME;0pL`[|:1%E&3>d ' );
define( 'LOGGED_IN_SALT',   'iRc9m(#t&4]2C6amf5hxsa69tBw@b?Pm qsKAu;Faxc$q==d}qvFEiS  izh[ZmB' );
define( 'NONCE_SALT',       'BG2-ZSgP9B*GJtb0JKgA(2I<BQk1ACa)dzSdDBA,Ref*rTpm5xVS~yE#J&Eld/[)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'md_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
