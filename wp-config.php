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
define( 'DB_NAME', 'image' );

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
define( 'AUTH_KEY',         'C(G+_;T7/S+e@~%(L5~U71nQ U85.@SSyYYu,$11Zx6TG/9TMDs:_37<N3 4u@C3' );
define( 'SECURE_AUTH_KEY',  'HDMjC?#?N=^c(E)ERs0keud{~TPfs)K_|)(V[7|,u:*AH]R@{m*o[/1jr+X%NM3d' );
define( 'LOGGED_IN_KEY',    ':mKMmFM^&iOb:Cwn?l<AC7Wb;w_HE&S.cK^n99)[Js~LjNm%(urD=%`g%bzhw>I{' );
define( 'NONCE_KEY',        'bNF92P7g`g.z?eN?^).AyRoqrWY*P;2gjJYDcSRejujVC$Dwy14F@1@D}#Z);bW&' );
define( 'AUTH_SALT',        '0hWyY3~(kRP^UnUYvDjs]H-K^s1fZ^UfIfB| FZ;?-)q 6l u-[4eL$_+y@Q>$*+' );
define( 'SECURE_AUTH_SALT', 'aj?Wqt..6UYuNaW,20o7xfd$U-Y,sMj)B2Z5L>XGAtzB6r8u<T.:ky+k=}$J>t;4' );
define( 'LOGGED_IN_SALT',   '0F*QxCBJFVV|?M}:vvHsn<k4,->z&PY#,AnAkWs=S?] &UAnnd@uso;!0nz^t2l=' );
define( 'NONCE_SALT',       'e`m0:C1;Q_9UCo7QA$}uME5hPZqWT?(hXZLC4]9@c34C+//fHN!EcZqLoA+rw!35' );

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
