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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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


define('AUTH_KEY',         'WAwGQ+C6MXG4HiBKkkdmyGC54MGNsACG48lri+I5d4GngC5nCYsROpHV3vJ3GJirya74EApZpHOtNRzbShFJmA==');
define('SECURE_AUTH_KEY',  'zcRMYllOlbgMeQGN0enBtwosPVFCT0KOQN1rAC+R5bsV7fht33CuikqhSBM7Bg7Poqk56JxbG9T+zaJ1eTQRtg==');
define('LOGGED_IN_KEY',    'KzOWNqbjRfNBpmUgYfocQGdKWhc+LlkPAQ/SJF60eWFnJPikJRnFts53w2IdKl685unTB/bqWdEUtAiqanKgKg==');
define('NONCE_KEY',        'St9uwbK9k9CjxjOOKbiIf42wJJa6qHKoK2dnNghW17E65ebV7YsLKMe9u0lGla3jpc5875rEZXDAeTJLCHeNSA==');
define('AUTH_SALT',        'WEYopaFFchs7FmZGTsP0LBmikNGlyB6rbjxDM7iz9p/k5Mnv7mJCYEaeGt6IF7jO+o1GL6r5TxznwHYvs2cM6Q==');
define('SECURE_AUTH_SALT', 'MXLRPmi1lSF1mCJm2ihUI4RVvgQ1o32YmrpJcUPirGhqFaH/vjE/A5Q06jJOtoUeKnR8W/kHyOMtNZejR1VPcQ==');
define('LOGGED_IN_SALT',   'U9DvzqCwC2Yr7Mmn+70AsO5+oURfqU4ZXpm9z+bOg0NHkqGJMRkx3DVcqZmNE4bdxXamLDeWNFYUupoQ/QSYrg==');
define('NONCE_SALT',       'Jh2LXhvlgCGEAMWbsDIJPJ1U6CA/2qFsPtVRyuLur3D4De5UH0CNKrmS6Z6EIJR1jmVrL9FKOU0mMLjzIma0Cw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
