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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'nabilana' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'xJb-%PJm:Z}kI}i&(=E4AiV2)0_a/tE(%-__Z-=):*W8@JT$*WM75;YUzzp$[8u$' );
define( 'SECURE_AUTH_KEY',  '|DMzlA#EZT9[L<eJklf{,(+`HqUSr<X(SvvE-3#T56L/Y5YApw6fy.-q9^h5KzYa' );
define( 'LOGGED_IN_KEY',    'z;ai4^CD+2v,S_`=F}xXvE9W%6]>cbcTEB(uZBiJDSe4E#7$[~_>M@fS[YzT6g^)' );
define( 'NONCE_KEY',        'p<xj+tC}FPa$wTpBnu-wB+6N?Ny:L#GNB u$hbSKAypHH}V665}q&8A[fqy&]>vg' );
define( 'AUTH_SALT',        '3HK-BWD|aj{:RhjDaT>.QC[trblV64m5yDMo/I6 tupf_,#N^(d(+ys9J@z3u6#`' );
define( 'SECURE_AUTH_SALT', 'NsV^*e$ohQNru?D=UHu)Q3<Wg]f|jtO{M7eQ.;y$S32$Sh054^]8e;yXF6 B3xe.' );
define( 'LOGGED_IN_SALT',   'vv8D/bc2Yn>7qR{tK_h)rNhF[?|Jos:@!9n|?1b5Hm;xFK}[9|&$`FM)ude.50OM' );
define( 'NONCE_SALT',       '23Sh%q/qR|HMp/@sA4W+?^^NJOA6o?&:ms+EHq@Uf;tJUA&D4-3uhSkgFBsXN}xr' );

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
