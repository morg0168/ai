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
define('DB_NAME', 'ai');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'newpassword');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/** SMTP credentials. */
define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', 'Pboa0qyX6P+k' );



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8Qc#vt{;pcKx*?GNuhYmiRAz^g{xB<hH)xu$rh5S:9!)/v7A%PB6+c0pS6[(w*bM');
define('SECURE_AUTH_KEY',  'G,zCaD4Y _C#3SC#}x/KzuzL<0%!=NuWd#VFu@;^Bw{s=2zSb&:f=ZM9GGF8<xw8');
define('LOGGED_IN_KEY',    'f+_,I# EU2h,5U9vc{%//#~$Axzzi!SV02`ESwl_B$dD^IPisnx.yVYP]UXPj|&B');
define('NONCE_KEY',        '|:=eUz hJs OI|(*6wt:m`|MXoKBRBABn5:D[RwI;ujw&o^Wdw| _gBHMS9I2V&I');
define('AUTH_SALT',        'Y9fQ/&oOJdR!o[!)Ls2{G:/)3 E]qDgp)i{|FRqR,|}!DT]DQgkZ>#]#_#kjd=pf');
define('SECURE_AUTH_SALT', 'u+>T-B&zy(!LuB}(@grZRbRj9BdI6=/&HWalzN_<`B^m=I5a$bqakT/x%uE:wSdk');
define('LOGGED_IN_SALT',   '}sKnQE]SW&[ybi?tt53$|)+*F?tMJ`MJ){(iZqS~53dsd3+6dH)E}.j *oi-(tXG');
define('NONCE_SALT',       'NIoOh<uYf]VUV&wW`.(0{t;nWv%9p>+b6|pBTipLyoKfb>GB#em&BZs&O/l23Qmo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors', 1);

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
// define('WP_DEBUG', true);
// define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
define( 'UPLOADS', 'wp-content/uploads' );
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
