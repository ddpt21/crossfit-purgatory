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
define( 'DB_NAME', 'crosfit-purgatory' );

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
define( 'AUTH_KEY',         'hGK;!^y|Z$im2 2P{R%O/HUY{k[kVW_xuA5Kk7nRc,;,{6n:A(3><HI%u)5F_9x1' );
define( 'SECURE_AUTH_KEY',  'K5WE{Th$2JBKv{0|5LN]@@(du,UV;#^1=q{c>zD^/$]9U|oJ5,:UW@P/?tE5O,dj' );
define( 'LOGGED_IN_KEY',    'jKP^F*g}L%NXWH_vJcO<ju;/e{e/HQ*B34#P`IBVy,C~s-I$LMQ-m)IH+Ph!/!;q' );
define( 'NONCE_KEY',        '9G:e9f3XCeu,C#|}:X!uVJf(<f]7Z8Pr<GXL|*hw0N#=@=K$;)LZ&D0ePbu*N27h' );
define( 'AUTH_SALT',        '50TR-wDK9c./1.PO[,u2;hRt;+D*&NJJ|2}dpuu$ l5llWS}u}VF)+-wtS6T2vEJ' );
define( 'SECURE_AUTH_SALT', 'k9TPp:i?S]bs}D=HpvJ)8UR5UHV@jV>{nQK+xZ_e% x*^l;Re< JM> ZLf:j#wV0' );
define( 'LOGGED_IN_SALT',   'qk$klDf1*+#?;eOOWI4#kc:#LMvS1Kk`UzRw%s%S|_&!gKII0]2[E5?n{dGk:!W@' );
define( 'NONCE_SALT',       'a1ZfZ{_8I1y#z|=aU0Ykg$/Zfr*R0d><!]#NcQd_,F.M_*=M|-gSbvMFEB]8x!LQ' );

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



define( 'SURECART_ENCRYPTION_KEY', 'jKP^F*g}L%NXWH_vJcO<ju;/e{e/HQ*B34#P`IBVy,C~s-I$LMQ-m)IH+Ph!/!;q' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
