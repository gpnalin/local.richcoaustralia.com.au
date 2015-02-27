<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_ENV', 'development');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'richco_au');

/** MySQL database username */
define('DB_USER', 'richco_au');

/** MySQL database password */
define('DB_PASSWORD', 'nalin45');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** do not store any revisions (except the one autosave per post) */
define( 'WP_POST_REVISIONS', false );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|;f~JL#1d)T0E+(GzT#<:| f3vtn_@yx-_39^2+Fs>tAY=0hP+o7CgpiqjZ`e9y ');
define('SECURE_AUTH_KEY',  '_+$7{!Bc!#z=:Ir.qT%A#jCGN<_-zRz*:!HXVvg/*N?&v1Wb]gjl#Tke`Tw[GDmM');
define('LOGGED_IN_KEY',    '?km(skS8G5_|g! GN[%kJn.zu/d]<oQ-=5xuv1fZ^W_iq8sbnFV#4PP.{FR|-u3T');
define('NONCE_KEY',        'f{TC&p,II)hmaFrg$NkxMo9+9FAj{m5xwXEdGNNS;y]-]x(v3ZkVV/tr=][ShjPj');
define('AUTH_SALT',        '*<D-b:0x#<*{{qd>i`}OJ?i&p9/ISbavZh,Vp0JO=c.v*m7_Y[L^^=`@=!)#6_#u');
define('SECURE_AUTH_SALT', '0*MyvTr^,9L!j/e&ig^OXzQi!e}gU0cpk=GmgPK^AA+19C_ N|T.4Nnn%?i@cg8E');
define('LOGGED_IN_SALT',   '}rj[:JCQ}bB+X:^D{0Jvk3Kw~%7cRP7vr$D.R,prsMn-h.6;5D>`hxj:fpCz%[y2');
define('NONCE_SALT',       'ii?mJcEv,h/g6esl/-mp:[$J&:gftziV4uj49fwYph?aof+bd*{SHySxc:$CQtAp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);


/* WordPress Cache */
define( 'WP_CACHE', false );


/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
