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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_fiolancer' );

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
define( 'AUTH_KEY',         '|uo,v_e(q=<NBsMU?^ywxYaKft4{s_ZFBU,Tfh>(`$4A.>fN{(!-IK:USY:n_Z^O' );
define( 'SECURE_AUTH_KEY',  '%j{{3D^aI;:Ic(QM&Kw0M9ru<M`UV.&-Y2z |54/T[!3z5g ]iQxS,t`^`y8saln' );
define( 'LOGGED_IN_KEY',    'Dz- zW!i7WO_w)I4U|L#GW vnjs_iV#zlY+ft+/xa3y*:6uhs)nVim3SCL&5O~a1' );
define( 'NONCE_KEY',        '=R~qq6;.>8pQW{?^U oe*NB#GZ$Ff,FqI9<t8lDzt0-;oYD:y76:P{=/h&[R({;b' );
define( 'AUTH_SALT',        ':nkbW2b>w2+n~6V3r{3s-e}Nwy7VS+_r,c tPCNp@<!xO^Ini1wugOHZDB;25YW_' );
define( 'SECURE_AUTH_SALT', 'PB40AjdE*,uc1wV?[2#fl5YEEac:v Sb.z!9evtE3*f1Q@HIXnmRmky:~f8gn+(#' );
define( 'LOGGED_IN_SALT',   'gxk_UDB(la.~MV-!SO$R1:T^`p5XF|6A#>mw$}Rl.Ljqi;BUe[1t7.:4i.IPwa{K' );
define( 'NONCE_SALT',       '=MZ2;@ TOP;TzAo4F,;oYd,A6xZ1W>JN$zr<<2=^G?]>@$Fx[P1]*]iGS.*.uYj:' );

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
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
