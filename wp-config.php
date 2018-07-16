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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lamps' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'aOo?x.ux$8n<XRa<)2gyZ~a1*S(- b:7g%BxBnd8u)>[A)PD;pIqw6P(d%3!sG.B' );
define( 'SECURE_AUTH_KEY',  'SpdmNYo@j)U(C9s;GdKc/y(3gNh/<loTl.%;$ Y@r0`Rx&KQ%L v, E@)7ikg0D%' );
define( 'LOGGED_IN_KEY',    'p((L6JPOS`P%kIP[ckhR7jNXy=w4Y73M(QN#|4;oWz*F;`OQx:t5fB>ulL?|:78u' );
define( 'NONCE_KEY',        'oXoG2Yrsm9R6WI`/9NZyMTyKSk9wq2orY[!M-pp1nv>]12|?I,;.&9=#xF`$.<c)' );
define( 'AUTH_SALT',        'dY?x}mAT;d=%J4D$> Bv2aXc~9Er49is|QBFUHRqv/EY##!cD[Axh:l|Gl,GWAN?' );
define( 'SECURE_AUTH_SALT', 'l!,;LUJaIqI{oJ.d6G$|y-+/ $ALoo@*N8mFa8.3%]&57JelZkbyNF&V5&kfPd$=' );
define( 'LOGGED_IN_SALT',   'qFw&6Pl*,IUm&p(Dc1f:(arWxk}T~txF;JOGBo&*<Ywhn@N`3Kg;F<{]LG=dOT~j' );
define( 'NONCE_SALT',       ';6YfA[GnXjVFI!ywBE`b_A`Y<<I%qe?Z^^V6{p2rmL$5Ig:0s_`{v`H7Ppk1^r*^' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
