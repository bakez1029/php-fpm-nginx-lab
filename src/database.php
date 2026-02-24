<?php

require_once __DIR__ . '/bootstrap.php';

$host = getenv('DB_HOST') ?: 'mysql';
$db   = getenv('DB_DATABASE') ?: 'app';
$user = getenv('DB_USER') ?: 'appuser';
$pass = getenv('DB_PASSWORD') ?: '';

$dsn = sprintf(
    'mysql:host=%s;dbname=%s;charset=utf8mb4',
    $host,
    $db
);

try {
    return new PDO(
        $dsn,
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (Throwable $e) {
    http_response_code(500);
    exit('Database connection failed: ' . $e->getMessage());
}
