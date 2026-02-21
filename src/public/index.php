<?php

$pdo = require __DIR__ . '/../database.php';

$stmt = $pdo->query('SELECT NOW() AS db_now');
$row = $stmt->fetch();

echo "App is running<br>";
echo "Database time: " . $row['db_now'];
