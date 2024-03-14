<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd="bd_agenciaviaje";

try {
    $conexion = new PDO("mysql:host=$servername;dbname=$bd", $username, $password);
    //if($conexion) echo "Conexión exitosa";
} catch (PDOException $ex) {
    echo "Error de conexión: " . $ex->getMessage();
}

?>
