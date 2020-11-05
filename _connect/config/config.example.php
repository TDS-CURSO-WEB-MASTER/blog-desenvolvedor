<?php
require_once __DIR__.'./../functions/helpers.php';
/* https://www.php.net/manual/pt_BR/function.date-default-timezone-set.php */
date_default_timezone_set('America/Cuiaba');

/* https://www.php.net/manual/pt_BR/function.define */
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'blog_desenvolvedor');
define('DB_PASSWORD', 'tds@2020');
define('DB_DATABASE', 'blog_desenvolvedor');
define('DB_CHARSET', 'UTF8');
/* https://www.php.net/manual/pt_BR/reserved.variables.globals.php */
$GLOBALS['BASE_PROJECT_DIRECTORY'] = 'blog-desenvolvedor';

$_SERVER['DOCUMENT_ROOT'] = "{$_SERVER['DOCUMENT_ROOT']}{$_SERVER['CONTEXT_PREFIX']}";