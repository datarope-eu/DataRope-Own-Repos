<?php

/**
 * Annotated, hardened base configuration for WordPress
 * August 2018. Please fill in your site details where required!
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
 * This edited sample file is hosted by Datarope EU on GitHub:
 * @link https://github.com/datarope-eu
 * 
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp****_*' );															// HARDEN: Use uncommon, hard-to-guess names for Database Name and User

/** MySQL database username */
define( 'DB_USER', 'wp****_*' );

/** MySQL database password */
define('DB_PASSWORD', '**********');														// HARDEN: Use Password-length of min. 12+ characters, 15+ recommended
																							// HARDEN: Use characters in upper/lower case, numbers, AND symbols!
/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );														// HARDEN: Unless necessary, don't use remote database hosts.
																							// HARDEN: 'localhost' means your database host is on your own system.

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
 * 
 * PLEASE DON'T USE THE SALTS BELOW, CREATE YOUR OWN. 
 * THEY'RE NO LONGER CONSIDERED SAFE ONCE PUBLISHED!
 * 
 */
define('AUTH_KEY',         '7u}tx5 &O?M{F<T3l>batfJFZvZo=^E(F*d=1iuK#m{@DT$2 ~Kj*[[EjQ+zf!G+');				// HARDEN: Please, replace the Salts with your own!
define('SECURE_AUTH_KEY',  'S[Q1aEW9T^*b0@R$ER=#q(zT)^|KzP&hGZ$i)ONX3CpJzgt(5QWpu_cWu*0+4:uX');
define('LOGGED_IN_KEY',    'lsA7bG8PwDkXZlcZ4l4,88u;G2h(rEj|/PaVdj.&|~c*+cp&D@-CD&^v](-kq!+8');
define('NONCE_KEY',        ',2nx2fWw/ynB~QR2&F7fd-qL<YQE@BA>dEcI;js-1TN|E(3a;@s@`q=j1KF4PYO;');
define('AUTH_SALT',        'lJVdl0fL8j~hC*Z}xpQYpZ}MyYMMl!5Cwy{P4c0PG`9pzg;08.{uVP8%!K:w7hbD');
define('SECURE_AUTH_SALT', 'uZniRr,23+w-ERWmp|M<m{VW{OAzW%uLQm+b}D6ol.&79nbAw5$`FFn:o0<l1uvB');
define('LOGGED_IN_SALT',   'h|BWf]BoP#I(C*p~_+H;Rx5P*k4BJh:|D~>&k,{6@|x.AiM2CE+fkx*u+?]U@K*n');
define('NONCE_SALT',       'g}s5BPJ;h+TR/NMWw&oZ)(i/>%[!MmO&@a`ubvfyj.glL/j,TU`O/K7P9t.gS>:V');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '****_';																	// HARDEN: Always change the default 'wp_' during setup to unintelligible stuff like 'pX3t58'
																							// HARDEN: Changing it later means you'll have to manually alter the backend tables, too.

																							
define('FORCE_SSL_LOGIN', true);															// HARDEN: Force the system to accept only user / admin logins via SSL
define('FORCE_SSL_ADMIN', true);

define('EMPTY_TRASH_DAYS', 7);																// HOUSEKEEPING: Empty objects in internal WordPress recycle bin after seven days. Keeps your install tidy.
define('WP_POST_REVISIONS', 5);																// HOUSEKEEPING: Keep only last five revisions of each post. Saves time and disk space.

/**
 * WordPress Debugging Options - Avoid debugging sites in production!
 * Any error logs will reside in
 * /wp-content/debug.log, using PHP's built-in error_log() function
 */
define('WP_DEBUG', false);																	// HARDEN: Recommended settings. Uncontrolled on-screen error / debug messages could open up vulnerabilities.
define('WP_DEBUG_DISPLAY', false );
define('WP_DEBUG_LOG', true );
@ini_set( 'log_errors', true );																// HARDEN: Logging any errors instead of displaying to avoid erratic site behaviour, vulnerabilities 


define( 'NOBLOGREDIRECT', 'https://yourwebsite.com' );										// HARDEN: Automatic redirect if user tries nonexistent subdomains or /folders
# Not necessary when DISALLOW_FILE_MODS set to TRUE
define( 'DISALLOW_FILE_EDIT', false );														// HARDEN: Locking down your admin panel.
define( 'DISALLOW_FILE_MODS', true );														// HARDEN: Disabling Admin Plugin / Theme Editor, Update / Install functions.
																							// HARDEN: Remaining Access Options- SFTP uploads, manual updates, use of WP-CLI

# define( 'WP_ACCESSIBLE_HOSTS', 'api.wordpress.org,*.github.com' );						// HARDEN: Locking down internet access (preventing malicious file downloads) from within your site.
define( 'WP_HTTP_BLOCK_EXTERNAL', false );													// HARDEN: Possibility to whitelist domains or domain groups

# delete all cropped versions, keep the original
define( 'IMAGE_EDIT_OVERWRITE', true );

# Unfiltered: Links, Javascript etc.
# Necessary as soon as users / third parties can post content
define( 'DISALLOW_UNFILTERED_HTML', true );

define('WP_ALLOW_MULTISITE', false);
/* That's all, stop editing! Happy blogging. */
/* +-------------------------------------------------------------+ */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>
