<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_agenciaviaje";

$conn = new mysqli($servername, $username, $password, $dbname);
// Obtén el DNI del usuario de la sesión
$dni = isset($_POST['dni']) ? $_POST['dni'] : '';

if ($conn->connect_error) {
    // Redirige a la página de error en caso de conexión fallida
    header("Location: ../error.php");
    die("Error de conexión: " . $conn->connect_error);
}

if (!empty($_POST["Enviar"])) {
    // Validar y limpiar los datos del formulario

    $nombre = mysqli_real_escape_string($conn, $_POST["cardholder"]);
    $numero = mysqli_real_escape_string($conn, $_POST["cardNumber"]); 
    $mes = mysqli_real_escape_string($conn, $_POST["cardMonth"]);
    $ano = mysqli_real_escape_string($conn, $_POST["cardYear"]);
    $cvc = mysqli_real_escape_string($conn, $_POST["cardCvc"]);

    // Utilizar una sentencia preparada para prevenir inyección de SQL
    $sql = $conn->prepare("INSERT INTO billetera (DNI, ID, Nombre, ano, mes, CVC) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssss", $dni, $numero, $nombre, $ano, $mes, $cvc);

    if ($sql->execute()) {
        // Update session with cardholder name for future use
        $_SESSION['cardholder'] = $nombre;

        // Redirige a la página de éxito después de la inserción exitosa
        header("Location: ../VistasPagina/Tarjetas.php");
        exit();
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

$conn->close();

?>
