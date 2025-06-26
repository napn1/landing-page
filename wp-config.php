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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'nJPQ`ha#%&s$pr;Y<W56-: |m?0|NW_6_&=8z5`D:M+y!_S%ni]BiI7u[yB/4>Bo' );
define( 'SECURE_AUTH_KEY',   '%h2o0Dgq&{$bVWirwWDH7ZkgsD2+P&;KbAj$&]e7:F}=+H._J(cl<tuO5`KBXN=d' );
define( 'LOGGED_IN_KEY',     'N}mnM~oM)! [Dk+hgtb295$/>bj;lquoI#&ucrYsjdhUS/t!c)[[eMETa7q6et1m' );
define( 'NONCE_KEY',         'd:L1&LHS7,]PIs`j^a^MVg6x,/#?^g?zl0zAjKmpc?IHxt!Bf1/[6gg_FLo^&2)I' );
define( 'AUTH_SALT',         '6<}-@fqr:T=5SN[~e476yC&(X~Uk}koQ*V_sdK=fUS_ 9kr4wqgOVR14[Tf?vp|+' );
define( 'SECURE_AUTH_SALT',  'qurP4-Z1k#=|!*5&ZV6e8]2ZWvm1RG3BE&(!,99r*@)/ NFSMCH0yq~k0@Odc/i/' );
define( 'LOGGED_IN_SALT',    'SHF<nU#QIZ|5~?;gHr2:+!%)KYlAw#jfMua%=}=Ni!:jo8)2`C5a~p[z7D(CfFE9' );
define( 'NONCE_SALT',        'cR>vV_n%op*J{<.N])8K)ZL=Hdn#}oGc;3cLW^A&t(/FDjAyDP%)RP|b2#Qy0 xQ' );
define( 'WP_CACHE_KEY_SALT', '>1hW]WpHC[X[+mIr@nP56,?f`Rv[azwa>(qu}YS({8}WpJyhLC:=m1|,:avb:EHo' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
