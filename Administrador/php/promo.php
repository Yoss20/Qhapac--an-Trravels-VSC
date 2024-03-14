<?php
//BASE DE DATOS PROMOCIONES



include("conexion.php");
$codP = $_POST["txtCodProm"];
$nomp = $_POST["txtProm"];
$precP = $_POST["txtPrecVu"];
$mP = $_POST["maxPas"];
$mnP = $_POST["minPas"];

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiarDatos'])) {
    header("Location: principal.php");
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['GrabarDatos'])) {
    $sqlgrabar = "INSERT INTO promociones(IdPromo, nombreProm, Precio, MaxPer, MinPer) values ('$codP', '$nomp', '$precP', '$mP', '$mnP')";
    if (mysqli_query($conn, $sqlgrabar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sql."<br>".mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] and "POST" and isset($_POST['modificarDatos'])) {
    $sqlmodificar = "UPDATE promociones SET nombreProm='$nomp', Precio='$precP', MaxPer='$mP', MinPer='$mnP' WHERE IdPromo=$codP";
    if (mysqli_query($conn, $sqlmodificar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sql."<br>".mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminarDatos'])) {
    $sqleliminar = "DELETE FROM promociones WHERE IdPromo=$codP";
    if (mysqli_query($conn, $sqleliminar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sqleliminar."<br>".mysqli_error($conn);
    }
}




?>