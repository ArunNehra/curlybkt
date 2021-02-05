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
define( 'DB_NAME', 'admin_dbsolutions' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dbsolutions' );

/** MySQL hostname */
define( 'DB_HOST', 'database-1.cmldfgqpl9ax.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'D$X&OQ$yGzQZX./_2~IRhR(_4DoS8CBU48~ZDzoRLK(NMc5E}B{N;j]HLq{/h%q/' );
define( 'SECURE_AUTH_KEY',  '8EHXd>xY7S6L$0TR_/BvypXd@PzIHm<#H)677(5`fO9ziv#V}}Z8~Ad;{+Fk-#O@' );
define( 'LOGGED_IN_KEY',    'vNeiFp:djV_eH}0/CR!F5MsD@_JZbh5#zp~^N5siw[=%$b+$N[Eh%G`CK%(Ioy5=' );
define( 'NONCE_KEY',        '0<u;DU46V&9UZ_o5,wf_ <kU3 kpnN!yim&jT&=51baH&SbsaI~xt@D{p(o;ut2$' );
define( 'AUTH_SALT',        'Ei=7 28!th{k1%27m}n7m<jo aUVwF~BKx*8^6=yMn!Xcj2*d(kp2@7oZF2-B2%i' );
define( 'SECURE_AUTH_SALT', 'v):.(%*lv+8hLn]}#E8p<9xjh[&M8Lnh#*iD{V0sHbq->Rb{TLs`)kDtyQ_JJggQ' );
define( 'LOGGED_IN_SALT',   '%,8Q<K|h)W6E*B.b:EXWz3=ARA!=nX3]NGvU0=);prt4!oyUJIV|~tqdN6,|,./c' );
define( 'NONCE_SALT',       'sa%}exPzbZW|HP6|EP9.Zrb$VIfaQ~%xxT ypJ%`:-wcZ0-rbIeuRj*$5X5{;RyE' );

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
