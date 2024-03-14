<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_agenciaviaje";

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Recuperar los datos del formulario
$idRegistro = $_POST["idReserva"];
$origen = $_POST["origen"];
$destino = $_POST["destino"];
$fecha = $_POST["fecha"];
$cantPasajeros = $_POST["cantidadPasajeros"];

// Insertar un nuevo registro
$sql = "INSERT INTO detallesReserva (idRegistro, origen, destino, fecha, cantPasajeros) 
        VALUES ('$idRegistro', '$origen', '$destino', '$fecha', $cantPasajeros)";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado con éxito";
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
