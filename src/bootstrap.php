<?php
declare(strict_types=1);

session_start();

require __DIR__ . '/../vendor/autoload.php';

spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/';
    if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
        return;
    }
    $relativeClass = substr($class, strlen($prefix));
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

$config = require __DIR__ . '/../src/config/app.php';
date_default_timezone_set($config['timezone'] ?? 'America/Argentina/Buenos_Aires');
App\Core\App::init($config);
