<?php 

declare(strict_types=1);

function getConnection(): PDO
{
    static $pdo = null;
    if($pdo === null) {
        $host = 'mysql'; 
        $name = 'app_db';
        $user = 'app_user';
        $pass = 'app_pass';
        $charset = 'utf8mb4';
        $dsn = "mysql:host=$host;dbname=$name;charset=$charset";
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    return $pdo;
}

?>