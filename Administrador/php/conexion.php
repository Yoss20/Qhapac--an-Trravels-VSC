<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd="bd_agenciaviaje";

// Crear una conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $bd);

// Verificar si la conexión se estableció correctamente
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>
