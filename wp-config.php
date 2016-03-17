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
define('DB_NAME', 'carloswu_xyz');

/** MySQL database username */
define('DB_USER', 'carloswuxyz');

/** MySQL database password */
define('DB_PASSWORD', 'bZxVZ.5_Z3"ny8z');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#(8;Q;ztuh2GfgGG#[d%6`FAYG1]|;>C;iIg^O}Z-znPP+^9ap|e-z0iY`k,u!).');
define('SECURE_AUTH_KEY',  '[?p9vIbU>,!88F$.3/oZQIF|q5`oM=b8xK/QTmZW0A-PNBX^/WM ~Cf$/`k!=u$M');
define('LOGGED_IN_KEY',    'FBr5y5HupSC+3HL)fk~Q/}}TrkjQQ(> t90W-pepaFmaqs?xlpQa2dng147aB:X@');
define('NONCE_KEY',        'R*,:|s`..Mk[$*J%TpahpZb=Pe?z-X6c_2YV<gyOqjW*K|8@:c**p%@Y+pA1x>%i');
define('AUTH_SALT',        'N)8 ~J-|jH6&|)=n:++|PP:WG<YUR&y& kF&`WN5yU-DmkCJ!&9+Z1S T<@L!?+$');
define('SECURE_AUTH_SALT', 'ts:WZ.Hz&Cf{}U|/zyK/}}rbY~LBAUN TEzhr/K8]x7`=4g`+r;sEu&DG4.:h,4i');
define('LOGGED_IN_SALT',   '[9pQaCx_b/|Q4(GkDv|a]ho[kzbYV>LM:iT)UTH-.{Ji2Npo@c k(xVn/hRYcx~L');
define('NONCE_SALT',       '`O#)+|oqUQ~<vN)wJkUl?)}+;t0>Wb,eu,{{I0N-:0w|jEj+:xCp+7bt+46rH%]n');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);
define('WP_MEMORY_LIMIT', '100M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
