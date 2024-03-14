<?php
include('perfil.php');

// Verifica si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Crear una nueva conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (isset($_POST['subir_foto'])) {
    // Obtener detalles del archivo subido
    $foto_nombre = $_FILES['foto']['name'];
    $foto_tipo = $_FILES['foto']['type'];
    $foto_tamano = $_FILES['foto']['size'];
    $foto_temp = $_FILES['foto']['tmp_name'];

    // Verificar si es una imagen
    $permitidos = array("image/jpeg", "image/jpg", "image/png");
    if (in_array($foto_tipo, $permitidos)) {
        // Convertir la imagen a datos binarios
        $foto_binario = addslashes(file_get_contents($foto_temp));

        // Actualizar la base de datos con la imagen en formato blob
        $sql = "UPDATE login SET Foto = '$foto_binario' WHERE Usuario = '$user_id'";
        $resultado = $conn->query($sql);

        if ($resultado) {
            // Redireccionar a MiPerfil.php con un parámetro de éxito
            header("Location: MiPerfil.php?exito=foto_subida");
            exit();
        } else {
            echo "Error al subir la foto: " . $conn->error;
        }
    } else {
        echo "Error: Solo se permiten archivos de imagen (JPEG, JPG, PNG).";
    }
}

// Cerrar la conexión después de usarla
$conn->close();
?>
