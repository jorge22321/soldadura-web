<?php

$storagePath = sys_get_temp_dir().'/industrias-aldo';

foreach (['framework/views', 'framework/cache/data', 'framework/sessions', 'logs'] as $directory) {
    $path = $storagePath.'/'.$directory;

    if (! is_dir($path) && ! mkdir($path, 0775, true) && ! is_dir($path)) {
        throw new RuntimeException('Unable to create the application storage directory.');
    }
}

$_ENV['LARAVEL_STORAGE_PATH'] = $storagePath;
$_SERVER['LARAVEL_STORAGE_PATH'] = $storagePath;
$_SERVER['HTTPS'] = 'on';
$_SERVER['SERVER_PORT'] = 443;

require __DIR__.'/../public/index.php';
