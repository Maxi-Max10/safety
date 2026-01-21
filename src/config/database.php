<?php
$envFile = __DIR__ . '/../../.env';
$env = file_exists($envFile) ? (parse_ini_file($envFile) ?: []) : [];
return [
    'host' => $env['DB_HOST'] ?? getenv('DB_HOST') ?: 'localhost',
    'name' => $env['DB_NAME'] ?? getenv('DB_NAME') ?: 'security_app',
    'user' => $env['DB_USER'] ?? getenv('DB_USER') ?: 'root',
    'pass' => $env['DB_PASS'] ?? getenv('DB_PASS') ?: '',
];
