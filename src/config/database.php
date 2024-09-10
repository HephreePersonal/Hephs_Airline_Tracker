<?php
$host = 'your-rds-endpoint.rds.amazonaws.com'; // RDS endpoint
$dbname = 'your_database_name';
$username = 'your_rds_username';
$password = 'your_rds_password';
$port = 3306; // Default MySQL port, change if you've configured a different port

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
