<?php
define('CURRENT_URI', $_SERVER['REQUEST_URI']);
define('BASE_CONTEXT_PATH', '/atr/');

define('BASE_IMAGE_PATH', BASE_CONTEXT_PATH . 'images/');
define('BASE_JS_PATH', BASE_CONTEXT_PATH . 'js/');
define('BASE_CSS_PATH', BASE_CONTEXT_PATH . 'css/');
define('SOURCE_BASE', __DIR__ . '/php/');

define('GO_HOME', 'home');
define('GO_REFERER', 'referer');

define('DEBUG', true);

define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'amateurtennis');
define('DB_USER', 'amateurtennis');
define('DB_PASSWORD', 'ronaldo7');
