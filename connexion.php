<?php
// db.php : Connexion PDO à la base de données

$host = 'localhost';
$dbname = 'agency';
$username = 'root'; // À adapter
$password = 'root';     // À adapter

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
