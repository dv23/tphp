<?php 

$dsn = 'mysql:dbname=aston;host=localhost';
$user = 'root';
$password = 'paris';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}