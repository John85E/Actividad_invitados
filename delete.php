<?php
include 'db.php';

$delete = $_GET['delete'];

$sql = "DELETE FROM invitados WHERE id = $delete";

if ($conexion->query($sql) === TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>