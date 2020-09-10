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
define( 'DB_NAME', 'wp1' );

/** MySQL database username */
define( 'DB_USER', 'wp1admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'n1y^wKIoZF1`_gb}:=&G~!^7FBU{#+}rn8q4l$RJ14b{g+236)jON6q4Z]}xDG=)' );
define( 'SECURE_AUTH_KEY',  'w^X%3ph3z^P)N&u@3OMohE&BjV($0k[PYo9eJhe:q+`LHHyae:.iolg_3RqF>?H}' );
define( 'LOGGED_IN_KEY',    ' D.qYlpaU *a^e8R`.4]+NNy*.($H~AYWHh&3e$0@Ms`F Q/-fw1*t)]!e:Zw3( ' );
define( 'NONCE_KEY',        'eq@a4U+p&E#/5j>2bQai.rjmVx[|(@BttU#hD,7]# xRyv:)^oV<z[k[N#6F=R6Q' );
define( 'AUTH_SALT',        'R(SCH|/R/}~lN&PAL2trb=tJj:Nk@]x5D W,Juo8+kC4y+/evXwMn(CIZ;>ZH4:S' );
define( 'SECURE_AUTH_SALT', '{0x!nCH5GwT$6e_ b+s<Kb~gT|-pnbU3]|NxW%Bi$7syIa xm1[~3=j!r/L7]f-l' );
define( 'LOGGED_IN_SALT',   'j<>!-EKX19K}AC<bgA 5Y({2QOgc#U+06BX[kd/I<1N(g=+Ab<IuqwmX7x=ptg;z' );
define( 'NONCE_SALT',       'c@e}6&s~eqm~)g.N)i5%(@qox;rBDG{x|]vkAJOd15N^S=gqx7p}*DF({c.?dM26' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
