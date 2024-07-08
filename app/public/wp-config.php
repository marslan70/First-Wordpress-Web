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
define( 'AUTH_KEY',          '}!lWt*.cf<:`ho<F%0|#rSh+eN}8*.Y)C9j=1gC`ZGvcBHw13?? ^Y%zSLX,hSsy' );
define( 'SECURE_AUTH_KEY',   'KL!OU/JXQU_b=h/l W|VZKS,=Qbuan37-2*DQbHr_g9%cCXm@iJV2|#{[9+DC%eZ' );
define( 'LOGGED_IN_KEY',     'D8k}+$q?|4VmaT6E9sO<WH 2Qkz?$nbH8/VX7p]]y[C4=p%J`VW)r9!yp0OfLg.R' );
define( 'NONCE_KEY',         ': WXUWM3Q/uO]y?:zkPPB ni>|Tf,,L5)~Ug$5}7w/donsvb!3HT2uR&E}C4a?>n' );
define( 'AUTH_SALT',         'kbbqaP%4MUU3Au{G_|/KUb|TXqU{l}br.Tx=9W-?07f-KZEUHg/u5sD.`I~GrDOJ' );
define( 'SECURE_AUTH_SALT',  '0@TO R++l@&CPjo.q[}}OpY[h8jc{WH`Yb0p1x|UV#1|%;{L9!^S}>)y5jfisT| ' );
define( 'LOGGED_IN_SALT',    ',81UPp45[Go[K3K3EMDvB<ilw+C6{0Vs~,7.?6yxA)GOpN(MbH[St$C19U1i.n71' );
define( 'NONCE_SALT',        '?1zjDUyLk$FE!6@P.`+@>Geh t#TF,_:OEyUjk~T!p8=MI|1$? nOA(p 0,r:Czs' );
define( 'WP_CACHE_KEY_SALT', '~#~gxfBg=jwoC#FNkzZc:B?g0/:QIq6sNp%19I#Yan^>np;_a/X.<N{!Kb_S!m`X' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
