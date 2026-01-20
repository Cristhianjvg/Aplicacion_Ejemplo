<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registrar usuario</h2>

    <form action="registro.php" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Apellido:</label><br>
        <input type="text" name="apellido" required><br><br>

        <label>Cédula:</label><br>
        <input type="text" name="cedula" required><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="listado.php">Ver usuarios registrados</a>
</body>
</html>