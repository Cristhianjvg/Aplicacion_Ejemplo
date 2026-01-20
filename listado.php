<?php
    require 'conexion.php';

    $sql = "SELECT * FROM usuarios";
    $stmt = $pdo->query($sql);
    $usuarios = $stmt->fetchAll();
?>

<h2>Usuarios registrados</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cédula</th>
    </tr>

    <?php foreach ($usuarios as $u): ?>
    <tr>
        <td><?= $u['id'] ?></td>
        <td><?= $u['nombre'] ?></td>
        <td><?= $u['apellido'] ?></td>
        <td><?= $u['cedula'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<br>
<a href="index.php">Registrar otro usuario</a>
