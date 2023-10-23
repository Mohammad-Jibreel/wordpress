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
define( 'DB_NAME', 'shimaa' );

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
define( 'AUTH_KEY',         '?[.VimL>0L@hsf9?jX0f8+23bSJNsXt8EE$Z>^@=V`&@T>dO~i3G9G@y~/PKgx$`' );
define( 'SECURE_AUTH_KEY',  '|UB>4yGzQ|aLXK$oaDABC7|t)_uo<1AZ![?Nam+/z)o/6wz~6WF(O1-FSg&1>^)j' );
define( 'LOGGED_IN_KEY',    'rMQYL(r&D3D~zYZ2D|7]+l`2t0CBB<=WtBiA1,Tb+EHmC&a598ao1_VNW:!b/5pr' );
define( 'NONCE_KEY',        '.IJr1E9rE%hSbBbSLNvqcUB#ZEg7gz-RF:5&o_K;IN@nwS]zVf;i-e~h;_V]^ <2' );
define( 'AUTH_SALT',        'w&/9u6e#F]7-;J$^y<1s7.FI)k|nl=Ux3vG6~_yp>~Aco`rfryNzVe4K4wK4ITY8' );
define( 'SECURE_AUTH_SALT', '#M<uUlh.@{m)I=TW8|z$o1QM5x_Nbl=G6z_xw^ $?h)Eu<]*tb`E>M/?8p_C?7xH' );
define( 'LOGGED_IN_SALT',   'kQ]Tv_R[>9VE/r+Y@G%~iUD*&]x%)Z~zYCn>>>0:2 {;9b,XlUfW8cIf`ti&fY#x' );
define( 'NONCE_SALT',       'L3BcL}#q]B8I*WWGT]nnhOr3RNqlD!}<GonN@lhz!e*2^nUu9F%/q/4kfBEM/=0u' );

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
