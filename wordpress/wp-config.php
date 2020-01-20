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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'HY:{VYFJD!5wWRd7Zl9vl}bI R>v3Ar9Ia0[|N$$=ddYF3V{91m8-WdlQO_%Pt5^' );
define( 'SECURE_AUTH_KEY',   'f?cK[R[#C5$D;8>UG01X2(/!Z#7ZYDA-GG5~?9texZh~ee@RQ]ftbn@,2Q*BgR0r' );
define( 'LOGGED_IN_KEY',     'hvlPyb{3<<u|Lx$ahP!@dTig{FU(WJC BIg=Y9`aKu^:Bn}~%+Q_pm.H?~nM?5(#' );
define( 'NONCE_KEY',         '+}nN_iKD9zJ|h$oD}iYh;RPX }2Bl#X},.ssGvb^*=**($oA74JzPcPspenK&tk-' );
define( 'AUTH_SALT',         '7lFvcY[^_RG=B}QpaqNRe5g9,=<!zt5H~@DksL>o~|yM@#S!pFsiTC~4fmaoB>p ' );
define( 'SECURE_AUTH_SALT',  'X]{dUB_qDzg*OwMio<^FOB_:ybh4&1SRY:J^Wzt`qjXZU}%n_8f,S7Pt`@^{dr:V' );
define( 'LOGGED_IN_SALT',    'eAg% J7qDfZRTtd,AI2;#t$y tHH~rvUW$E!CL.?`AE ia{xl(,*VrjBd<:%kAX8' );
define( 'NONCE_SALT',        '$m;:cN~Ye71087f,WLmIOi)eZJ+1 [bG9qS SL>kiU2j_5SBt;{#Fe}$48sX&kIX' );
define( 'WP_CACHE_KEY_SALT', 'W<%$/iQWDM}FwjTXGl8u}YoF]AquUSqI!nOB#Jt=3Y6Q|l7q8v)h2/SNjXoy}k0/' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
