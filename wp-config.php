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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'b`0z%gHJZevnjoLTLG01Xpl=N(NT9:OT<=88Jb$m>DMcIcDB@1do$!SFXQA{i|wX' );
define( 'SECURE_AUTH_KEY',  '1q}U<2J${+^s/ab((!saN4_Wz1]|x)~X?>g4{II-#uK(WK*?5APh2Hop1XuL#fmP' );
define( 'LOGGED_IN_KEY',    '-c&7*93bkm.`P8(jeE?o0H1PODtOIlAQD.q=pR5cG,Qe*<jh2ZA?em^ia_gj.9!B' );
define( 'NONCE_KEY',        'hZPh5RM(}fmE5`Kw)e;dyY.G(euPCq%s?h-gMuq5g^`@1OD)W)M63m|U~S@k^A7I' );
define( 'AUTH_SALT',        '@MY)amNBb%4D>Egz/z.&jgu@d>A?EWSVX7v~VskPVBo4;.abwi(: ?nznJ^h3LDL' );
define( 'SECURE_AUTH_SALT', '%`#CG-<=F]D<9#4zs I[zh|K,H+3~=e0zmM&Iasx+@GP4.ifW+]n%ASM?v|MwUGE' );
define( 'LOGGED_IN_SALT',   'qdOH@*%}I[nk?ckAsHw@O5R/-zgZ&+[iL7-l/CR}L&7I3&Q/!3jOgr119b!1UdsA' );
define( 'NONCE_SALT',       '6!On)6*7>{mr`B2[gk_=^JnL/JaYF-s8u9lwC^A~`@@Z[_aB$tr]$b06DQvq9:K=' );

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
