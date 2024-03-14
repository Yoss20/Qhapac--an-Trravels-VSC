
<?php



//BASE DE DATOS Aerolinea



include("conexion.php");
$codA = $_POST["txtCodigoAer"];
$nomAer = $_POST["txtNomAer"];
$img = $_POST["img"];


if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiarDatos'])) {
    header("Location: principal.php");
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['GrabarDatos'])) {
    $sqlgrabar = "INSERT INTO aerolinea(IDaero, Nom_aero, Img_Aero) values ('$codA', '$nomAer', '$img')";
    if (mysqli_query($conn, $sqlgrabar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sql."<br>".mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] and "POST" and isset($_POST['modificarDatos'])) {
    $sqlmodificar = "UPDATE aerolinea SET Nom_aero='$nomAer', Img_Aero='$img' WHERE IDaero=$codA";
    if (mysqli_query($conn, $sqlmodificar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sql."<br>".mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminarDatos'])) {
    $sqleliminar = "DELETE FROM aerolinea WHERE IDaero=$codA";
    if (mysqli_query($conn, $sqleliminar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sqleliminar."<br>".mysqli_error($conn);
    }
}



?>