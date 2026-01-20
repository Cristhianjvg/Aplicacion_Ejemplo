<?php
$host = 'localhost';
$db   = 'primeraDB';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;";

try {
    $pdo = new PDO($dsn, $user, $pass);
    //echo "✔ Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}