<?php
require 'conexion.php';

// Validar que llegue por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    
    $sql = "INSERT INTO usuarios (nombre, apellido, cedula) 
            VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nombre, $apellido, $cedula]);

    echo "Datos recibidos: $nombre, $apellido, $cedula<br>";
    echo "Usuario guardado correctamente.<br>";
} else {
    echo "Acceso no permitido.";
}


