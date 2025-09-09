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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'Fp~u;j|a^cq_w.bu`Ev^7.[ Ssqp;X`1i_Q<Y5/My_[wk#(Cs)KI}znbzC5YB P{' );
define( 'SECURE_AUTH_KEY',  'he/rpp_lx+8&0W{J=/v a,}ZRZTb NXz3,D3.9@j).^MP48X-+ag!RNK64(a4))z' );
define( 'LOGGED_IN_KEY',    'HUjDle.V8t%EbFkUbGV)-dOQ2s&BzW<rJS-X/gP6>b}RAT>jE(+{-](1&Z`!X9A~' );
define( 'NONCE_KEY',        ' 78vk`[S+S+>)cQ+IM8BBN=h.|AAD84q8_xy0#prtahudRfbaCSvP/o.%VMLF*tI' );
define( 'AUTH_SALT',        '=@Ucd1kIdU>~iWGT4Fg=_f8Ue6`%Cv9MzxKci*=_.6!`5YbYQ} vN{-K{?2lA@F7' );
define( 'SECURE_AUTH_SALT', '!|{]=4BMA|MrK0PZIJ%:3pr|v,3%F:_,Y2G&ks5Gl%e}_I#3VK+?gB[@U8Yyn`Ik' );
define( 'LOGGED_IN_SALT',   'YG#<t?+u/*lEFA,h]Njmbf!sr2u,*}sLIj?tJd?R2>.o:EY>@V/MK4(y4w01ZX/6' );
define( 'NONCE_SALT',       '9^p`Vfk?M|,y+nCj)3tszy=,M2=[N9UV$+-U+v7-i1Yug}7fZ@Kk`yGBxWJO*ufw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
