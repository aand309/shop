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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         'Z%g2k.!f-^~hi7)bst/V6%r0AZp6jmg/5Qr3^:8.XdC{bO3kGNJtf;:H1|UzjPML' );
define( 'SECURE_AUTH_KEY',  'L>)!lyqg=$6/tmgVm^Q8:5[={qU[,+jXzgr*&H%>hx;OGp2QmTl=!%0EK.lPdDZv' );
define( 'LOGGED_IN_KEY',    '|rHp:xXEiM!#h0ZC[C#8kYXj0,lY=:I<RC}j6kNJ3)hrM0)ia3bY@7wx3cgrqM`x' );
define( 'NONCE_KEY',        'fPBI}c7Z=$mGhOi-0y`hLkdEM8mH%l`Lyj{]<a(_u,mod@t|R%$&Awelk<<;7!{i' );
define( 'AUTH_SALT',        '<rSh%H%n|t#?xCR-*JP&,CIUn%knzZw`?px}98kG8 Q>u_bN?i[fm(W@dcn1lwr=' );
define( 'SECURE_AUTH_SALT', '-f;Mh$m *zA6{DMX0+mcD}#ti#?E;s6d];>ZTNIMo6W@3O/oV%8@-z<bmMp5jWGO' );
define( 'LOGGED_IN_SALT',   '?{X*sR&rP2 kINmKG:M1V<kTm.Yl1+6~2,?3&JZ~3F>ER?_rY!ZIA6=$|dX@>4#-' );
define( 'NONCE_SALT',       'Z!`/(ZS#?{s ~;6s~qP//n&tV9.&txM.Em0S[DRb!+Sa>?WQ~$J [hn9RgD&W@;0' );

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
