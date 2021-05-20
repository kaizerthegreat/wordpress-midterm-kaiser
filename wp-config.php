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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'T4 1nGT;B?{ul/fk&o i#&oGv_~n,p39!2B0jiu@rp;M/Ox.RP*P^tlkYmd%xsi1' );
define( 'SECURE_AUTH_KEY',  'nG_{$RZUg.0PU@.^zXFdkt:NMZU`,3hF?(^YW !JZq<?Q:3NU$B.HiQm^KChv5ho' );
define( 'LOGGED_IN_KEY',    'h>E_Lhb/p1;nkdc1*fTKOYj#9&I?O<#|N%Hz`|t;A3ehnC[tGI2cZ0&rr4/Psxgd' );
define( 'NONCE_KEY',        'tGw%Q;JfTi~:vj0h#Q^ Rn}%^[/ru0jUQf#/`Y-tl+dtNa;f=KlK(pO0,<NQ`Tu4' );
define( 'AUTH_SALT',        'xEZNK74^G~j@?>~oU!G~9}a)z]_&op,AF_fI%? K@YkT)x/VmjL`blmHFlDuBsYx' );
define( 'SECURE_AUTH_SALT', '{^oWZ}d2`p$?jI5Hn-i&5;a7!f=Q.O[N.;TC.U|*+mc1T1|:+Z|?&K,]k,vF)[YO' );
define( 'LOGGED_IN_SALT',   'vbxI[hhl23:Q*5V]Y1AH,VgCF(dH>Q/,%_D73}T$^+3ck=Sz2ciI3u^/N.}TgjSR' );
define( 'NONCE_SALT',       '$rv,DZ0n(PgXU`9#&K)K9~SOfPy`-W&_`-b{)Wzltk;s=u)bWL~bNy[QbmvasdKb' );

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
