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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vinyl-store-2024-wp-1A4ig4ex' );

/** Database username */
define( 'DB_USER', 'RECtzyct0DlH' );

/** Database password */
define( 'DB_PASSWORD', 'pHaINAK0gITfCIx9' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'St[;|~AwcKj<<BI&<eafwH{QXkC1xnZ|oQg^.luxl;VSWeyZK&W^Ewogkij1!sW_' );
define( 'SECURE_AUTH_KEY',   'DNFifY1/x@~saZ:8@Ge:CqsO3Oj(a}lp]ri7!2:9-9C`8l=RnB09eqB4JoVD^*S;' );
define( 'LOGGED_IN_KEY',     'P?|Zv{.G!X]o8Bz~NxoB-](wlDSqX9/,EG&Dl`nV5SYLRez]Fv39Y3LMXMW*SWT4' );
define( 'NONCE_KEY',         ']YpAjRk(nxO~BP_pGb@VM(&QZ6uKvsDcLw/[-.zJoy1OKW;tF|%2Ze9F&)ZSx^:,' );
define( 'AUTH_SALT',         'CT50ns1o~]JKS&p>]>jJ[:~2{66U&ow)GA8TXe$p&QS@mCj~vj%kC95k_u/6)$-7' );
define( 'SECURE_AUTH_SALT',  'x:2iz>x?{(VT%*GXmdbZu-}goj|QFPm,QsZC4vhyMRe;:[b0=lZ)UVD(3yDgi4Mn' );
define( 'LOGGED_IN_SALT',    '9*tN;Kz>E5e3_rc8piykwJ/.`:8c#$@c_fq/F@kci!WXuv+`=#pX2CCd3YXob0d[' );
define( 'NONCE_SALT',        '@nuMu}(aOEP>S%w8{5?66!0YvdyT(@/am^$gMLFvf_|x5n!cQeW%U+a2UgQ:i{d7' );
define( 'WP_CACHE_KEY_SALT', ' h{A1j.KY0w4:Q;e1UY[l6b/o@e`&N#.:XR],^zL7;th)j+:[~kT5(pH/LszDI[E' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_d469c859b1_';


/* Add any custom values between this line and the "stop editing" line. */

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
