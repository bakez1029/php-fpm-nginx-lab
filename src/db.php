<?php
$dsn = "mysql:host=mysql;dbname=app;charset=utf8mb4";
$user = "app";
$pass = "apppass";

try {
  $pdo = new PDO($dsn, $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  ]);
  echo "DB OK\n";
  echo "Server version: " . $pdo->getAttribute(PDO::ATTR_SERVER_VERSION) . "\n";
} catch (Throwable $e) {
  http_response_code(500);
  echo "DB FAIL: " . $e->getMessage() . "\n";
}
