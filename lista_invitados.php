<?php
include 'db.php';

// Consulta SQL para seleccionar todos los invitados
$sql = "SELECT * FROM invitados";
$result = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Invitados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Lista de Invitados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Lugar</th>
            <th>Hora</th>
            <th>Acciones</th>
        </tr>
        <?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row[''] . "</td>
        <td>" . $row['nombres'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['fecha'] . "</td>
        <td>" . $row['lugar'] . "</td>
        <td>" . $row['hora'] . "</td>
        <td>
        <a href='update.php?id=" . $row['update'] . "'>Editar</a> |
        <a href='delete.php?id=" . $row['delete'] . "' onclick=\"return confirm('¿Estás seguro?')\">Eliminar</a>
        </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='7'>No hay invitados registrados</td></tr>";
}
$conn->close();
?>
    </table>
</body>
</html>