<?php
$env = parse_ini_file(__DIR__ . '/../../.env') ?: [];
return [
    'host' => $env['DB_HOST'] ?? 'localhost',
    'name' => $env['DB_NAME'] ?? 'security_app',
    'user' => $env['DB_USER'] ?? 'root',
    'pass' => $env['DB_PASS'] ?? '',
];
