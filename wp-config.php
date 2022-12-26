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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'rS8UK#ufXmy(+J?HaOmBc6$dBKMxB6J@BJfZ|n&o9y+aKbzrLD&o 1thK*vM|a~_' );
define( 'SECURE_AUTH_KEY',  'S1  ;=d,dnY_J]M.?MxtqR=cK<YC$t;I<7TVbo90m7{ NZ[S`5`[<;{I#}L,mOTn' );
define( 'LOGGED_IN_KEY',    'D+q1[mex:r!]3hWh%aQvE/Ebb|/t258%KPnQ4o.No 0V7PKF^g[QSS;bbb>yn?KI' );
define( 'NONCE_KEY',        'm(^IFBjDc4,AkJX[2Z3CgU6C93rj0TPSXuyM1|Z4HH[k@2>na]u,=e{ &P[-0405' );
define( 'AUTH_SALT',        'fSKL&Lx:8hts1dicQ5uyQ[jr0S?&^*0<YN>L8YIfvO,#~8(DT=@`EZ}pk7u1yU[:' );
define( 'SECURE_AUTH_SALT', '`Xwo{Mm+qq@W@zTi1|9nH1<YzFFTIp/[&zBPIP r8^wwQJMGX.M}IWspvl=LhW:^' );
define( 'LOGGED_IN_SALT',   'D9ZE&)ueOc|RDf=(K>i+=~=->|%c;OF4*O6<WqZ#)LwF$TO)$3U,&Ig{Cv<Mi,R*' );
define( 'NONCE_SALT',       '<3;K>a/+)3Rzz9;Qkta?Z,tbyHZ@b?<dqnq2tG%&>ir|/`fUx%a(toKFtkA,)1$<' );

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
