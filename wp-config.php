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
define( 'DB_NAME', 'foldjdj' );

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
define( 'AUTH_KEY',         '|Px8J#*7=M`~GP(=Ii!N~|^8i4d7eWKqdQgRFUk^277W0s^]#cj1F{8q+K5s8trq' );
define( 'SECURE_AUTH_KEY',  '[AMIR;a!Z{{fbQgpO=P,hM4.T{uvNlD9u!SC;jXa5B_]t#KGN9.$[CnsIJ85P0T3' );
define( 'LOGGED_IN_KEY',    'FE(rBLlpiX!PPu<KWQBk|+Y%Fp<RZcq)IEJhUF8G2m@be&>]5<_ hy/r1]Uk=Sf^' );
define( 'NONCE_KEY',        'J#-Xg`iv,ByJ(%VkhK<;h:S,FxjEOUuYr8Tfn121d^s0aV9wJ%RF|UVCSUM0R95M' );
define( 'AUTH_SALT',        'rFNrM`JvKk^_j I6?0F*%`|k_OVz~R/HMW#nT0B^u[xQ?yRt {t:XZ2vBXF+tUTd' );
define( 'SECURE_AUTH_SALT', 'ZX~zH-~Nzkw,xjaE${T0u1aWFe;rq2UYJA&+}Q07#6ZNl`~KrD=B,QkePy^TscNc' );
define( 'LOGGED_IN_SALT',   ':<Lac`hVUK4 @x?,NR:}$,iB-lnrZgp/s{ iB#L%l]^YXCd[xO5y*etL0.S3XeD)' );
define( 'NONCE_SALT',       'YxN]/X5Cp#T 1zZkGQsz~RJOOh-wZosVE]+UF D3qlUOL~]p mJb:-KH!2dPGxPl' );

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
