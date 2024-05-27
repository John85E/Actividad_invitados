<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Invitado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Agregar Invitado</h2>
    <form method="POST" action="lista_invitados.php">
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
        <br>
        <label for="lugar">Lugar:</label>
        <input type="text" id="lugar" name="lugar" required>
        <br>
        <label for="hora">Hora:</label>
        <input type="time" id="hora" name="hora" required>
        <br>
        <button type="submit">Agregar</button>
    </form>

    
</body>
</html>