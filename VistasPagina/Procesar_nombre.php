<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_agenciaviaje";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
// Verifica si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}


$user_id = $_SESSION['user_id'];
// Consulta SQL para obtener los datos del usuario
$sql = "SELECT * FROM login WHERE Usuario = '$user_id'";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Puedes acceder a los campos de la base de datos y asignarlos a variables
        $nombreCompleto = $row['Nombres'];
    } else {
        // Manejo de error si no se encuentra el usuario
        echo "Error: No se encontró el usuario en la base de datos.";
    }
} else {
    // Manejo de error si la consulta falla
    echo "Error en la consulta SQL: " . $conn->error;
}

$conn->close();
?>