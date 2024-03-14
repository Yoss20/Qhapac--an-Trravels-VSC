<?php
//BASE DE DATOS VUELOS



include("conexion.php");
$codV = $_POST["txtCodVuelo"];
$rutaV = $_POST["txtRuta"];
$fechaV = $_POST["txtfecha"];
$horaV = $_POST["txtHora"];
$DuraV = $_POST["txtDuracion"];
$asientV = $_POST["txtAsientos"];
$precioV = $_POST["txtPrecio"];
$aeroV = $_POST["txtAero"];

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiarDatos'])) {
    header("Location: principal.php");
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['GrabarDatos'])) {
    $sqlgrabar = "INSERT INTO vuelos(IDvuelo, Ruta, fecha, horaSal, duracionVuel, asientosVuel, precioVuel, Nom_aero) values ('$codV', '$rutaV', '$fechaV', '$horaV', '$DuraV', '$asientV', '$precioV', '$aeroV')";
    if (mysqli_query($conn, $sqlgrabar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sql."<br>".mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] and "POST" and isset($_POST['modificarDatos'])) {
    $sqlmodificar = "UPDATE vuelos SET Ruta='$rutaV', fecha='$fechaV', horaSal='$horaV', duracionVuel='$DuraV', asientosVuel='$asientV', precioVuel='$precioV', Nom_aero='$aeroV' WHERE IDvuelo=$codV";
    if (mysqli_query($conn, $sqlmodificar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sql."<br>".mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminarDatos'])) {
    $sqleliminar = "DELETE FROM vuelos WHERE IDvuelo=$codV";
    if (mysqli_query($conn, $sqleliminar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sqleliminar."<br>".mysqli_error($conn);
    }
}
?>