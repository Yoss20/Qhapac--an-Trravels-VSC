
<?php
//BASE DE DATOS RESERVA




include("conexion.php");
$codR = $_POST["codR"];
$fR = $_POST["fechaR"];
$subT = $_POST["subt"];
$decR = $_POST["dRes"];
$imp = $_POST["importe"];
$totF = $_POST["factura"];
$est = $_POST["Estado"];


if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiarDatos'])) {
    header("Location: principal.php");
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['GrabarDatos'])) {
    $sqlgrabar = "INSERT INTO reserva(codReserva, fechaReserva, subTot, decReserva, imp, totFact, Estado) values ('$codR', '$fR', '$subT', '$decR', '$imp', '$totF', '$est')";
    if (mysqli_query($conn, $sqlgrabar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sql."<br>".mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] and "POST" and isset($_POST['modificarDatos'])) {
    $sqlmodificar = "UPDATE reserva SET fechaReserva='$fR', subTot='$subT', decReserva='$decR', imp='$imp', totFact='$totF', Estado='$est' WHERE codReserva=$codR";
    if (mysqli_query($conn, $sqlmodificar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sql."<br>".mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminarDatos'])) {
    $sqleliminar = "DELETE FROM reserva WHERE codReserva=$codR";
    if (mysqli_query($conn, $sqleliminar)) {
        header("Location: principal.php");
    } else {
        echo "Error: " .$sqleliminar."<br>".mysqli_error($conn);
    }
}
?>