<?php
include 'db.php';

$actualizar = $_POST['actualizar'];
$nombres = $_POST['nombres'];
$email = $_POST['email'];
$fecha = $_POST['fecha'];
$lugar = $_POST['lugar'];
$hora = $_POST['hora'];

$sql = "UPDATE invitados
        SET nombres = '$nombres', email = '$email', fecha = '$fecha', lugar = '$lugar', hora = '$hora'
        WHERE actualizar = $actualizar";

if ($conexion->query($sql) === TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>