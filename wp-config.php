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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hecatombe_db' );

/** MySQL database username */
define( 'DB_USER', 'hecatombe' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hecatombe2019' );

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
define( 'AUTH_KEY',         'HdNL+RW]:SttN.x@CUS>lZIVy0@rNnB)9d,Og9&d$@-AZ{9D;7Diqe6S-*[z1mgo' );
define( 'SECURE_AUTH_KEY',  'l?STd~&$-eUhXHeI fYC8;iIjKD,R/WL`}cNKJK+YJ*<mV%M45Pds~IW1%/-`6~Y' );
define( 'LOGGED_IN_KEY',    '+.>Ly{XE7N.6O^}[|$SdcrL[(e%&Bo6?9>.Y,t0u!.NN>}?qvrp+=*Q+BU/pZh4l' );
define( 'NONCE_KEY',        'TBY{fDPJ6PWX:Beq@ECPu DB`7IsW_:&H,Y/V(xxw8PunOOI7EbS*io]e=z7gU+b' );
define( 'AUTH_SALT',        'Eer#{0>rha%0JBR:<E12%[cBq[+ByYEB?zuLjl9$&P}r~F]tty-QnW7(|U*bn yD' );
define( 'SECURE_AUTH_SALT', 'G21}|E)*iS:x-)oWWlNX.6GO(xroCPM[yZ[nm$$9I@3f|WlI(?R-o,/0E2C25>)Y' );
define( 'LOGGED_IN_SALT',   'a4x9tCm*F4uMHN3^s@YP,5<oL,e{z[l<qDIW_}V)a@6/eaZ5j>DBbh9]3/!vi~U8' );
define( 'NONCE_SALT',       '=GHp0f~}hG&fk1;fzS&-YYy)[(M+mwE<2ZJ>/Gx-ArMs>U*L,UW]6rPxtvy<*0Xg' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
