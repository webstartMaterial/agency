<?php
// db.php : Connexion PDO à la base de données

// Définis le mode ici : 'prod' ou 'local'
$env = getenv('APP_ENV') ?: 'local'; // Par défaut en local

if ($env === 'prod') {
    $host = 'okbqknlagency.mysql.db';
    $dbname = 'okbqknlagency';
    $username = 'okbqknlagency';
    $port = 3306;
    $password = 'Zizou2024';
} else {
    $host = 'localhost';
    $dbname = 'agency';
    $username = 'root';
    $port = 8889;
    $password = 'root';
}

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
