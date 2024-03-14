<?php
error_reporting(E_ERROR | E_PARSE);
include('../config/conexion.php');

// Procesa los datos enviados desde los formularios
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cantidadPasajeros = intval($_POST['cantidadPasajeros']);

    
    
    
    for ($i = 0; $i < $cantidadPasajeros; $i++) {
        $nombre = $_POST["nombre" .$i];
        $apellido = $_POST["apellido" .$i];
        $dni = $_POST["dni" .$i];

        // Continúa con el procesamiento de los datos
        $sql = "INSERT INTO pasajeros (DNI, Nombre, Apellido) VALUES (:dni, :nombre, :apellido)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':dni', $dni);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);



        if ($stmt->execute()) {
            echo "Datos guardados con éxito!";
        } else {
            echo "Error al insertar datos: " . implode(', ', $stmt->errorInfo());
    }
    
    }
}
?>