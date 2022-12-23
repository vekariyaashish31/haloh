<?php
// HTTP
define('HTTP_SERVER', 'https://udn.haloh.net/');

// HTTPS
define('HTTPS_SERVER', 'https://udn.haloh.net/');

// DIR
define('DIR_APPLICATION', '/www/wwwroot/udn.haloh.net/catalog/');
define('DIR_SYSTEM', '/www/wwwroot/udn.haloh.net/system/');
define('DIR_IMAGE', '/www/wwwroot/udn.haloh.net/image/');
define('DIR_STORAGE', '/www/wwwroot/udn.haloh.net/system/storage1/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'udn_haloh_net');
define('DB_PASSWORD', '76H8mxBJ4L');
define('DB_DATABASE', 'udn_haloh_net');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');