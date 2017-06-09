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
define('DB_NAME', 'wp341');

/** MySQL database username */
define('DB_USER', 'wp341');

/** MySQL database password */
define('DB_PASSWORD', 'PS8)w!t17F');

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
define('AUTH_KEY',         'hnqkk6nefc4pvoux7q9zb8nbh47zfftydu3evg3cbjitypcx7rboehu4aiju8xpn');
define('SECURE_AUTH_KEY',  'ou1j9w2wxbqqik9gqrhvadmsdcz1jcaghmsvcux2kssvr35ssxqedz4ei8lxd0xt');
define('LOGGED_IN_KEY',    'u9mz6frvlale6g7tfm5emvyc8augdl5xumcva3qgu8884b37dsedeef8o0ykjo7i');
define('NONCE_KEY',        'bhnhuaoshzff1zx9h1teqzib1zgra1aaswpnuujjiuwc4lsafhlqsskvushpewnv');
define('AUTH_SALT',        '5ii3nek7cydccezcoqrweekdbbro91qp4fjb4o4w234qy1fszmih1rlm8llsbxjt');
define('SECURE_AUTH_SALT', 's9ojh8rlsaxhlqcq7rvn8u16h0u0xjwysvu4znuzudctxsmi0jn7zos9keneuguu');
define('LOGGED_IN_SALT',   's6kbr3r5gkno7cifb5f1e1gxgucwlvohcjdyowt5vgpmpjvxzzkuf79k4yyhitfs');
define('NONCE_SALT',       'rphajb1jey80g5cz3bs8pslb8qws4jvah4fw3tscfyvkbp0zqjtggr929b2380go');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
