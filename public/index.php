<?php

require_once __DIR__ . '/../config/database.php';

try {
    $pdo = getConnection();
    echo "Se conecto la base de datos perrooooo";   
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}