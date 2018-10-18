<?php

use Symfony\Component\Dotenv\Dotenv;

require __DIR__.'/vendor/autoload.php';

$env = new Dotenv();
$env->load(__DIR__.'/.env');

$vars = explode(',', $_ENV['SYMFONY_DOTENV_VARS']);

foreach ($vars as $var) {
    define($var, $_ENV[$var]);
}

$table_prefix  = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
