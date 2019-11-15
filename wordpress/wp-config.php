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
define( 'AUTH_KEY',         'cwi|V$abQl-^-M0Hbyo_65J2M4TJ}U{5c%u(@bKlQGk6R/4S3{+0r6E?}RnmH>sp' );
define( 'SECURE_AUTH_KEY',  '&9vd3AGcF)G0+8a95B->NlDAV^xc@.ef-hZFbZ Qw6;1y},ZM.Iz|OhH/W$&%t]d' );
define( 'LOGGED_IN_KEY',    '(26?{e$BhfBBA@%jK;BsStx7hE9$66S&|a.z=YjU<I{]) 7C*C|Z_<HQ?+~,j]u^' );
define( 'NONCE_KEY',        '|Dt/}x,-.9G:dqER;1U(%xi#iK#EE#HyXw,zXT]&}UH{qHrKf+ aW~FsEhWKmGm=' );
define( 'AUTH_SALT',        '*Pr3MH}ypp39O,D!n~*ZjIqj4}4^faE;%R_vR1*Tu>Pw18$,JG$Ra:Q4.(aAdcD&' );
define( 'SECURE_AUTH_SALT', '(.11>kckN@caGE; A5TBqt0);<#EAL(2Ts?;}.XMl:}z-_;+Q_-K BfNF2a<Z*,B' );
define( 'LOGGED_IN_SALT',   'dLdhzUA#Lo-Y[]y$JZ#VN=S?p^y5w%&$}8$*&M-`qNLH*_IY/Ql4J^:MQ{tW@8x6' );
define( 'NONCE_SALT',       '4E|ta8mTa$+Q<FZRBR$O#0<n8ie)H9=L5,y>e+/ijmzo}J8| $;!bO$s|1,s^HXc' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
