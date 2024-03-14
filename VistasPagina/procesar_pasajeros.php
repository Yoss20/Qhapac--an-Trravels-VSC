<?php
    $servername = "localhost"; // Cambia esto a la dirección de tu servidor MySQL
    $username = "root"; // Cambia esto a tu nombre de usuario de MySQL
    $password = ""; // Cambia esto a tu contraseña de MySQL
    $dbname = "bd_agenciaviaje";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    for ($i = 0; $i < 1; $i++) { // Cambia 3 por el número de formularios que deseas procesar
        $nombre = $_POST["nombre$i"];
        $apellido = $_POST["apellido$i"];
        $dni = $_POST["dni$i"];
        $sql = "INSERT INTO pasajeros (DNI, Nombre, Apellido) VALUES ('$dni', '$nombre', '$apellido')";
        
        if ($conn->query($sql) !== TRUE) {
            
            echo "Error al insertar datos: " . $conn->error;
        }
    }
     
    
?>