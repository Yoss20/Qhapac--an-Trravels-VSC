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

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellidop = $_POST['apellidop'];
$apellidom = $_POST['apellidom'];
$genero = $_POST['genero'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$fecha_nacimiento = $_POST['fecha-naci'];
$contrasena = $_POST['contrasena'];
$repetir_contrasena = $_POST['repetir_contrasena'];

$dni = mysqli_real_escape_string($conn, $dni);
$nombre = mysqli_real_escape_string($conn, $nombre);
$apellidop = mysqli_real_escape_string($conn, $apellidop);
$apellidom = mysqli_real_escape_string($conn, $apellidom);
$genero = mysqli_real_escape_string($conn, $genero);
$email = mysqli_real_escape_string($conn, $email);
$celular = mysqli_real_escape_string($conn, $celular);
$fecha_nacimiento = mysqli_real_escape_string($conn, $fecha_nacimiento);

if ($contrasena !== $repetir_contrasena) {
    header("Location: Registro.php?error=contrasenas_no_coinciden");
    exit();
}

$hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);
$rol = "U"; // Valor por defecto para los usuarios

$sql = "INSERT INTO login (Usuario, Nombres, Apellidop, Apellidom, Genero, Correo, Celular, FecNac, Contraseña, Rol) 
        VALUES ('$dni', '$nombre', '$apellidop', '$apellidom', '$genero', '$email', '$celular', '$fecha_nacimiento', '$hashed_password', '$rol')";

if ($conn->query($sql) === true) {
    // Registro exitoso, puedes redirigir o mostrar un mensaje en el formulario
    header("Location: login.php");
} else {
    // Error al registrar
    header("Location: Registro.php?error=database_error");
}

$conn->close();
?>
