
<?php



//BASE DE DATOS Aerolinea



include("conexion.php");
$dn = $_POST["dniU"];
$ro = $_POST["rolU"];



if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiarDatos'])) {
    header("Location: principal.php");
}



if ($_SERVER['REQUEST_METHOD'] and "POST" and isset($_POST['modificarDatos'])) {
    $sqlmodificar = "UPDATE login SET Rol='$ro' WHERE Usuario=$dn";
    if (mysqli_query($conn, $sqlmodificar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sql."<br>".mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminarDatos'])) {
    $sqleliminar = "DELETE FROM login WHERE Usuario=$dn";
    if (mysqli_query($conn, $sqleliminar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sqleliminar."<br>".mysqli_error($conn);
    }
}



?>