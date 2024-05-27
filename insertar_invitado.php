<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombres = $_POST['nombres'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    $lugar = $_POST['lugar'];
    $hora = $_POST['hora'];

   $sql = "INSERT INTO invitados (nombres, email, fecha, lugar, hora) VALUES ('$nombres', '$email', '$fecha', '$lugar', '$hora')";
   if (mysqli_query($conexion, $sql)) {
       echo "Usuario creado";
       header("index.html"); // 
       exit; // 
   } else {
       echo "Error: " . mysqli_error($conexion);
   }
   
   mysqli_close($conexion);
}
?>