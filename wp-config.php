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
define( 'DB_NAME', 'anhuang' );

/** MySQL database username */
define( 'DB_USER', 'anhuang' );

/** MySQL database password */
define( 'DB_PASSWORD', 'H9OA7X0Qdqlz7n1aXY40MaIL' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',          '0&KEXqpM][h]z]@~8)<G/uPo$uC 4o^3_I4llM;Y<eMN|xqkz_,$1^W~{g;i]zQs' );
define( 'SECURE_AUTH_KEY',   'yAtE?:I0~[B<tKR.lPpq3u4,P%b:,>sV.3/ecX#Mw)yC?#2!6 cx]fIs5Pf#=VO&' );
define( 'LOGGED_IN_KEY',     'O)W{i#T(=l9e;LzLkEecw1UU%wlLJYI/`Ti$cZa?4l4h-Ze{N%slO+2Tm (<FNW|' );
define( 'NONCE_KEY',         'Qr&>8@$vy gAAiNhdj..sU[{n6)yqSPi6([^iMRAB$>GQ-Y@OIZ>ce-IHA4cP6Yw' );
define( 'AUTH_SALT',         '$%4nHsdK&LJj<h1e,0l=bPv_QA,Pv4*xiFlV)Ru1*T;mMjP]LPXu5^l[;u@>Nhy!' );
define( 'SECURE_AUTH_SALT',  'O)1KINp2f%H;%zX fb/[|8:kqt-|Edj)+?yNrpY}{rV=tO(X]O&/!JiKNsg]SQ;(' );
define( 'LOGGED_IN_SALT',    '$sw?fhY>yqe8*:0/j_d?MAot>:u_=w=UlyE~*k9uS|mJ3e-+C`)ZJex;lV:.gJ/f' );
define( 'NONCE_SALT',        'xhblm;Z!M$/n9IX-CmRmT4?X&b7cDHa82UCq?{QJBUq25iw{(ofmWcXAhoI<N.b>' );
define( 'WP_CACHE_KEY_SALT', 'PV*vaZb5IDkk,t2Q%d%27?$`I{BS)+STlh!-_E1|O.N[;;@GX7],D^/SfxGnAY /' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cn1_';




define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
define( 'DISABLE_WP_CRON', true );
define( 'DISALLOW_FILE_EDIT', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';