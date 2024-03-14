<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_agenciaviaje";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar las credenciales
$sql = "SELECT * FROM login WHERE Usuario = '$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Usuario encontrado, verificar la contraseña
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['Contraseña'])) {
        // Contraseña correcta, inicio de sesión exitoso
        $_SESSION['user_id'] = $row['Usuario']; // Almacena el ID del usuario en la sesión

        // Almacena el DNI en la sesión
        $_SESSION['dni'] = $row['Usuario'];

        // Verificar el rol del usuario y redirigir
        if ($row['Rol'] == 'U') {
            // Usuario normal, redirigir a indexUser.php
            header("Location: ../indexUser.php");
        } elseif ($row['Rol'] == 'A') {
            // Usuario administrador, redirigir a la ruta del administrador
            header("Location: ../Administrador\php\index2.php");
        }
    } else {
        // Contraseña incorrecta
        header("Location: login.php?error=contrasena_incorrecta");
    }
} else {
    // Usuario no encontrado
    header("Location: login.php?error=usuario_no_encontrado");
}

$conn->close();
?>
