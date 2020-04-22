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
define( 'DB_NAME', 'tmdt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=G)bDG?!!f=bD}Hvw@YFIFn<@eeLM3W@Mi([4;a9PQi0{,yI!F?|ugPj%/&rx:vh' );
define( 'SECURE_AUTH_KEY',  'q=VLU`U?Qc1)Zg%Ob[-ftz>b|(Tg]sIZYb_1wp^G<j#o?n]<UNY>&p_{XR[wp_r2' );
define( 'LOGGED_IN_KEY',    'cd~Xg2D:=}zQyACa$p@hjglE{$|P,;c6+3&*<I.^Y&sl$w4t{;&,ByKh[KR7mcF9' );
define( 'NONCE_KEY',        'Z,ZZANQAi[Myol5ieC?~?,oK[0b1ToidOs#$9|!>1~Mm&Gxmvv=z^/;GpHAe<^<H' );
define( 'AUTH_SALT',        'B>=ByRl{[:!cQXMchdB=5Zz@c ]Y#$uu=X.7}YT&-8KJiU>QFTEJ%YC@TY]ft@K*' );
define( 'SECURE_AUTH_SALT', 'MFJ(R<]X#Aa,_{zMgd4QVi[qngwNAD#U}u[_0c1?cz-?M3Wq<HL}2+2sE3T5#p6S' );
define( 'LOGGED_IN_SALT',   'n>q dZ(1U]5(iTrn5V)8(~&NeO!vehYC Fk}!Grdo7Wv45X1QJCQ3V3{`~Vp&{:M' );
define( 'NONCE_SALT',       'Y:cCT,6qLm~os%sVBJ]R/yReOP@a!XY7wMdU5F)4fyjq[^gzsUqfb- TI1[BIszI' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tmdt_';

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
