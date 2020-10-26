<?php 

function base_url($dir = ''){
    $base_dir = !$GLOBALS['BASE_PROJECT_DIRECTORY'] ? 'blog-desenvolvedor': $GLOBALS['BASE_PROJECT_DIRECTORY'];

    $protocol = ((!empty($_SERVER['HTTPS']) && 'off' !== $_SERVER['HTTPS'] || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) || isset($_SERVER['HTTP_X_APPSERVICE_PROTO']))) || 443 == $_SERVER['SERVER_PORT'] ? 'https' : 'http';
    $host = ($_SERVER['SERVER_NAME'] = 'localhost') ? $_SERVER['SERVER_NAME'] = "$protocol://{$_SERVER['SERVER_NAME']}/{$base_dir}/{$dir}" : "$protocol://{$_SERVER['SERVER_NAME']}/{$dir}";

    return $host;
}