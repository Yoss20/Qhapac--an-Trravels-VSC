<?php
//BASE DE DATOS VUELOS



include("conexion.php");
$codDeta = $_POST["txtidDetalle"];
$codVuelo = $_POST["txtVuelo"];
$codRes = $_POST["codR"];
$cantPa = $_POST["cantP"];
$cantPag = $_POST["pago"];


if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiarDatos'])) {
    header("Location: principal.php");
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['GrabarDatos'])) {
    $sqlgrabar = "INSERT INTO detalle(IDdetalle, cantPasaj, tot_vuelo, codVuelo, codReserva) values ('$codDeta', '$cantPa', '$cantPag', '$codVuelo', '$codRes')";
    if (mysqli_query($conn, $sqlgrabar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sql."<br>".mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] and "POST" and isset($_POST['modificarDatos'])) {
    $sqlmodificar = "UPDATE detalle SET cantPasaj='$cantPa', tot_vuelo='$cantPag', codVuelo='$codVuelo', codReserva='$codRes' WHERE IDdetalle=$codDeta";
    if (mysqli_query($conn, $sqlmodificar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sql."<br>".mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminarDatos'])) {
    $sqleliminar = "DELETE FROM detalle WHERE IDdetalle=$codDeta";
    if (mysqli_query($conn, $sqleliminar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sqleliminar."<br>".mysqli_error($conn);
    }
}
?>



