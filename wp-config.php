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
define( 'DB_NAME', 'wp_vale_journal' );

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
define( 'AUTH_KEY',         '[s#+_j$m@7^:?R<M:h=Fm7J2kd,oFI!3#<w1EK!pg/>sg.|,^EEab`m_K<;#G]*F' );
define( 'SECURE_AUTH_KEY',  'R~4-}E<UXpI./DBX9o_{&hUaDLmTjF dK|]2J~a^*mR(|Dw?c.:H=xO|kNSv0|_#' );
define( 'LOGGED_IN_KEY',    'lV@9:]jkFLu=0]0g0u#$R|:/ %1z=Nsyd&<7~=Vpt%-=$w/KmW+#R]UOrZM{v*.-' );
define( 'NONCE_KEY',        'w,&~,k6)JVbJWk;YL9O$pPRDPfR){|d]<Vo0-q{X#qB#G[#/Ri2#r_-Elzo{gTpS' );
define( 'AUTH_SALT',        'wlH)VCb|$6p75x{iyo?SUdl~g!hPf+G=}h,x?PO8yEEon {zJ<72#DFgU0-u=i9b' );
define( 'SECURE_AUTH_SALT', '1Q#<Q:t)M&?|IGMLd9PiPPGqgsdgYFgzbnY {aZ1PV2ycm2(`[VvpE/ruu?BO4N+' );
define( 'LOGGED_IN_SALT',   '7GkAUFO|G/Pa9Ms]Ui-QNV0d{;Iq8{JD3oyV]46~m^b6My.de%m5vf)< (Wt+K+q' );
define( 'NONCE_SALT',       '>nDT {Mf<cO=XLN<q3:lPiUn$7rlsUrvZ0K-J%&)0kZR6TQr#?(cSO)z;r9yI5~7' );

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
