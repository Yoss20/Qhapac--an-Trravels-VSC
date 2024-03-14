<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_agenciaviaje";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si el DNI se envió correctamente
if (isset($_POST['dni'])) {
    $dni = $_POST['dni'];
    var_dump($dni); 

    // Obtén las tarjetas asociadas al DNI del usuario
    $sql = $conn->prepare("SELECT ID FROM billetera WHERE DNI = ?");
    $sql->bind_param("s", $dni);
    $sql->execute();
    $result = $sql->get_result();

    // Verifica si se obtuvieron tarjetas antes de almacenarlas en la sesión
    if ($result->num_rows > 0) {
        $tarjetas = $result->fetch_all(MYSQLI_ASSOC);
    
        // Almacena las tarjetas en la sesión para usarlas en Tarjetas.php
        $_SESSION['tarjetas'] = $tarjetas;
    
        // Redirige a Tarjetas.php
        header("Location: ../Tarjetas.php");
        exit();
    } else {
        // No se encontraron tarjetas
        $_SESSION['tarjetas'] = array(); // Inicializa como un array vacío
        header("Location: ../Tarjetas.php");
        exit();
    }
    
} else {
    // Si el DNI no se envió correctamente, manejar el error o redirigir a una página de error
    header("Location: ../indexUser.php");
    exit();
}

$conn->close();
?>
