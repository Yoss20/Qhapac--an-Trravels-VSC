<?php

include("conexion.php");
$cod = $_POST["txtCodigo"];
$dep = $_POST["txtDpto"];



if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiarDatos'])) {
   
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['GrabarDatos'])) {
    $sqlgrabar = "INSERT INTO destinos(ID_dest, Nom_dest) values ('$cod', '$dep')";
    if (mysqli_query($conn, $sqlgrabar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sql."<br>".mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] and "POST" and isset($_POST['modificarDatos'])) {
    $sqlmodificar = "UPDATE destinos SET Nom_dest='$dep' WHERE ID_dest=$cod";
    if (mysqli_query($conn, $sqlmodificar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sql."<br>".mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminarDatos'])) {
    $sqleliminar = "DELETE FROM destinos WHERE ID_dest=$cod";
    if (mysqli_query($conn, $sqleliminar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sqleliminar."<br>".mysqli_error($conn);
    }
}




?>