<?php
include 'db.php';

$update = $_GET['update'];

$sql = "SELECT * FROM invitados WHERE update = $update";
$result = $conexion->query($sql);
$row = $result->fetch_assoc();
?>

<form action="actualizar_invitado.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['update']; ?>">
    <label for="nombres">Nombres:</label>
    <input type="text" id="nombres" name="nombres" value="<?php echo $row['nombres']; ?>" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
    <br>
    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" value="<?php echo $row['fecha']; ?>" required>
    <br>
    <label for="lugar">Lugar:</label>
    <input type="text" id="lugar" name="lugar" value="<?php echo $row['lugar']; ?>" required>
    <br>
    <label for="hora">Hora:</label>
    <input type="time" id="hora" name="hora" value="<?php echo $row['hora']; ?>" required>
    <br>
    <button type="submit">Actualizar</button>
</form>