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
define( 'DB_NAME', 'db_delhivery' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '@/iA<hR6.yJ_at{4O:#sICxQoI!o,F[LUxn(upM! S^G*6yPAbZ@{]Iih_ olF:7' );
define( 'SECURE_AUTH_KEY',  'DMq;f6]FL-vq{lRAN*f$I6fRV(C2y$!G!Fhc2cHMl6sNB9jcEao;O~FYy=U;=|gI' );
define( 'LOGGED_IN_KEY',    ',>O4>@C@5s?O;TmM;7.t?5[61,!*oS5.DU*.=!w>0fnV_>+:4N6t;T$g8[D%d#(N' );
define( 'NONCE_KEY',        '>Y4F#^b-}}ZaFS~XE6Hr,#6)I~ygA|*(d:0f97V+HSFN)1XZ)T^%P<58ECnj:XqR' );
define( 'AUTH_SALT',        'T#[-Efw(e#G;Uvt;v%Gu2S<.)U))(vz~o{xVaYUXm[0#}mB<v~]3WC^{fZ9==L:=' );
define( 'SECURE_AUTH_SALT', 'fd~!:+j@EZ_I-%(&vMcwrz)SBq-r4s_nf4Q`X{S}$6WUE(p4xa.4wyQx4?Y7]c~d' );
define( 'LOGGED_IN_SALT',   '0o8;_?evIJy@TehHL]lCsp?m=!!&12)cvI~JRKYFBfG#F_cM]Z:p.}>@$@y0_0(O' );
define( 'NONCE_SALT',       'Mhqtc5DGDw[;#iM8:[/1g+_/yKKsWye_S({Z4yM-<oTnLubVX]R52g#j|1f0u$v-' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
