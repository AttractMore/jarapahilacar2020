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
define( 'DB_NAME', 'dbcup47jv95jrk' );

/** MySQL database username */
define( 'DB_USER', 'u6v5u3ej3qhb4' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b2b59bmga6wj' );

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
define( 'AUTH_KEY',          'V@79gKIYI~5(t;j7(`<49jp(B8Pu.>;N-Od)V`h@z$B*=uXhXJpNa(tqtLuZ.UtU' );
define( 'SECURE_AUTH_KEY',   '0BATeQ~V+D#=Zhn[o^p; d1Uz5w_ jCUB:pqZ->cP(x[X4WQ<o4y%eJNhl%o(5f>' );
define( 'LOGGED_IN_KEY',     '#K1;fj6k3fntM^T`SK+2Fg>6oHceTFO(KeI,o(KS1#F|=Sg]Nu^1|oWx[GA+w#Uf' );
define( 'NONCE_KEY',         '1#maWno5fya/0!yhj@<[<>,(8TX%b}VnM::+^u*].RAuN`2*BOa||L?^:|A#rjJ.' );
define( 'AUTH_SALT',         '4lF:TypZ.$nXq#e0gmw7jzY9dhL+TQPbQ5ypbaw*^FN4s`.i0p3S#5}_#&mmP[~~' );
define( 'SECURE_AUTH_SALT',  '2O}axA>kh&Nh#k:BV]E,.sa19PWT>,l<QT.(agSuDsgx|z,oDUCLmz^fBB<@oQzs' );
define( 'LOGGED_IN_SALT',    '!n--yZ2v(3}F(M)S^J$Lv s?L+D:Rj+@;CPZ{Sn0s/0zy9T=H=)FqXvs$mWX}Nnc' );
define( 'NONCE_SALT',        'm;F.}kM;JR=?(o&P}!g><^LS=Oc2V^2nH0BD<hHCqyWnA9_sTP~]RQ#D*?:x!ia&' );
define( 'WP_CACHE_KEY_SALT', 'AHj</8P0)R;.U:6vx^kC[{#d^*4qw+YU)}iqSk&VbA/| =2/jp@7+#><T*,H9EWN' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w47fa_';

define('WP_MEMORY_LIMIT', '256M'); //Added 5/6/20 by RK


define( 'WP_DEBUG', false );
define( 'WPLANG', 'es_ES' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
