<?php
/**
 * The base configuration for WordPress
 */

define( 'DB_NAME', '202607duan2' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         'p3d-^%A19a!x84?~,1@:V8,M^m5$s!#*4k7?&^|!%1' );
define( 'SECURE_AUTH_KEY',  'n9#2?%L,81!k^7$#@m9!p^3?#&81!x^7$#@m9!p^3?' );
define( 'LOGGED_IN_KEY',    'm!8#2?%L,81!k^7$#@m9!p^3?#&81!x^7$#@m9!p^3?' );
define( 'NONCE_KEY',        'k^7$#@m9!p^3?#&81!x^7$#@m9!p^3?#&81!x^7$#@m' );
define( 'AUTH_SALT',        'x^7$#@m9!p^3?#&81!x^7$#@m9!p^3?#&81!x^7$#@m' );
define( 'SECURE_AUTH_SALT', 'p^3?#&81!x^7$#@m9!p^3?#&81!x^7$#@m9!p^3?#&8' );
define( 'LOGGED_IN_SALT',   '81!x^7$#@m9!p^3?#&81!x^7$#@m9!p^3?#&81!x^7$' );
define( 'NONCE_SALT',       'm9!p^3?#&81!x^7$#@m9!p^3?#&81!x^7$#@m9!p^3?' );

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
