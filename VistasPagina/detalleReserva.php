
<?php

include("../config/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idVuelo']) && isset($_POST['precioTotal']) && isset($_POST['cantidadPersonas']) && isset($_POST['idReservaGlobal'])&& isset($_POST['idDetalleIGlobal'])) {
    $IDvuelo = $_POST['idVuelo'];
    $cantidadPersonas = $_POST['cantidadPersonas'];
    $precioTotal = $_POST['precioTotal'];
    $idReservaUnico = $_POST['idReservaGlobal'];
    $idDetalleIUnico = $_POST['idDetalleIGlobal'];
    echo "estherbd:" .$idReservaUnico;
    echo "estherbd:" .$idDetalleIUnico;

    // Eliminar comas y cualquier otro carácter no numérico excepto el punto decimal
$precioTotal = str_replace(',', '', $precioTotal);
$precioTotal = preg_replace('/[^0-9.]/', '', $precioTotal);

// Convertir a float para realizar operaciones matemáticas
$precioTotal = floatval($precioTotal);

    $fechaReserva = date('Y-m-d');

    $estado = "deuda";

    $subTotal = $precioTotal * (5 / 6);
    $impuesto = $precioTotal * (1 / 6);


    $subTotExistente=0; $decReservaExistente=0; $impExistente=0; $totFactExistente=0; $precioTotalExistente=0; $subTotalExistente=0; $impuestoExistente=0;
    // ------------------------------------------------------------------------------------------------
    $consulta_detalle = $conexion->prepare("SELECT tot_vuelo FROM detalle WHERE IDdetalle = ?");
    $consulta_detalle->execute([$idDetalleIUnico]);
    $detalleI_existente = $consulta_detalle->fetch(PDO::FETCH_ASSOC);

    // Obtener la cantidad actual de asientos disponibles en la tabla vuelo
    $consulta_asientos_disponibles = $conexion->prepare("SELECT asientosVuel FROM vuelos WHERE IDvuelo = ?");
    $consulta_asientos_disponibles->execute([$IDvuelo]);
    $resultado_asientos = $consulta_asientos_disponibles->fetch(PDO::FETCH_ASSOC);

    if ($detalleI_existente) {
        // Si existe, obtén los valores
        $precioTotalExistente = $detalleI_existente['tot_vuelo'];
        $subTotalExistente = $precioTotalExistente * (5 / 6);
        $impuestoExistente = $precioTotalExistente * (1 / 6);
    }else {
        // El idReservaUnico no existe en la tabla reserva
        echo "El idDetalleRUnico no existe en la tabla detalle";
        if ($resultado_asientos) {
            $asientos_actuales = $resultado_asientos['asientosVuel'];
            // Restar la cantidad de asientos reservados a la cantidad actual de asientos disponibles
            $asientos_disponibles_despues_reserva = $asientos_actuales - $cantidadPersonas;
    
            // Actualizar la tabla vuelo con la nueva cantidad de asientos disponibles después de la reserva
            $actualizar_asientos = $conexion->prepare("UPDATE vuelos SET asientosVuel = ? WHERE IDvuelo = ?");
            $actualizar_asientos->execute([$asientos_disponibles_despues_reserva, $IDvuelo]);
    
            if (!$actualizar_asientos) {
                die("Error al actualizar la cantidad de asientos disponibles en la tabla vuelo: " . $conexion->errorInfo()[2]);
            }
        } else {
            echo "No se encontró el vuelo especificado";
        }
    }
    
    // ------------------------------------------------------------------------------------------------
        // Verificar si el idReservaUnico existe en la tabla reserva
    $consulta_reserva = $conexion->prepare("SELECT subTot, decReserva, imp, totFact FROM reserva WHERE codReserva = ?");
    $consulta_reserva->execute([$idReservaUnico]);
    $reserva_existente = $consulta_reserva->fetch(PDO::FETCH_ASSOC);
    
    if ($reserva_existente) {
        // Si existe, obtén los valores
        $subTotExistente = $reserva_existente['subTot'];
        $decReservaExistente = $reserva_existente['decReserva'];
        $impExistente = $reserva_existente['imp'];
        $totFactExistente = $reserva_existente['totFact'];
    
        // Realiza las acciones necesarias con estos valores
        // Por ejemplo, mostrarlos o utilizarlos de alguna forma
        echo "subTot existente: " . $subTotExistente;
        echo "decReserva existente: " . $decReservaExistente;
        echo "imp existente: " . $impExistente;
        echo "totFact existente: " . $totFactExistente;
    } else {
        // El idReservaUnico no existe en la tabla reserva
        echo "El idReservaUnico no existe en la tabla reserva";
    }
    // ------------------------------------------------------------------------------------------------
    echo "estherbd1:" .$precioTotal;
        echo "estherbd2:" .$totFactExistente;
        echo "estherbd3:" .$precioTotalExistente;

    $subTotal = $subTotal + $subTotExistente - $subTotalRExistente ;
    $impuesto = $impuesto + $impExistente - $impuestoRExistente;
    $precioTotalTOTAL = $precioTotal + $totFactExistente - $precioTotalExistente;


    $insert_reserva = $conexion->prepare("INSERT INTO reserva (codReserva, fechaReserva, subTot, decReserva, imp, totFact, Estado) VALUES (?, ?, ?, 0, ?, ?, ?) 
    ON DUPLICATE KEY UPDATE 
        fechaReserva = VALUES(fechaReserva),
        subTot = VALUES(subTot),
        decReserva = VALUES(decReserva),
        imp = VALUES(imp),
        totFact = VALUES(totFact),
        Estado = VALUES(Estado)");

$insert_reserva->execute([$idReservaUnico, $fechaReserva, $subTotal, $impuesto, $precioTotalTOTAL, $estado]);


    if (!$insert_reserva) {
        echo "Error al insertar en tabla reserva: " . $conexion->errorInfo()[2];
    } else {
        $$idReservaUnico = $conexion->lastInsertId();

        // $insert_detalle = $conexion->prepare("INSERT INTO detalle (IDdetalle, cantPasaj, tot_vuelo, codVuelo, codReserva) VALUES ('2', ?, ?, ?, ?)");
        $insert_detalle = $conexion->prepare("INSERT INTO detalle (IDdetalle, cantPasaj, tot_vuelo, codVuelo, codReserva) VALUES (?, ?, ?, ?, ?) 
    ON DUPLICATE KEY UPDATE 
    IDdetalle = VALUES(IDdetalle), 
    cantPasaj = VALUES(cantPasaj), 
    tot_vuelo = VALUES(tot_vuelo), 
    codVuelo = VALUES(codVuelo), 
    codReserva = VALUES(codReserva)");
        $result_detalle = $insert_detalle->execute([$idDetalleIUnico, $cantidadPersonas, $precioTotal, $IDvuelo, $idReservaUnico]);

        if (!$result_detalle) {
            die("Error al insertar en tabla detalle: " . $conexion->errorInfo()[2]);
        }

        echo "Datos insertados correctamente";
    }

  
}





// // Función para obtener el precio del vuelo desde la base de datos
// function obtenerPrecioVuelo($flight_id) {
//     // Lógica para obtener el precio del vuelo según el ID del vuelo
//     // Retorna el precio del vuelo
// }











// include("../config/conexion.php");

// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     $IDvuelo = $_POST['IDvuelo']; // Recibe el ID del vuelo desde la solicitud AJAX
//     $cantidadPasajeros = $_POST['cantidadPasajeros']; // Recibe la cantidad de pasajeros
//     $precioTotal = $_POST['precTotalI']; // Recibe el precio total

//     // Calcula la fecha actual
//     $fechaReserva = date('Y-m-d'); // Formato 'Año-mes-día'

//     // Calcula el subtotal y el impuesto
//     $subTotal = $precioTotal * (5 / 6);
//     $impuesto = $precioTotal * (1 / 6);

//     // Insertar en la tabla RESERVA
//     $sqlReserva = "INSERT INTO reserva (fechaReserva, subTot, decReserva, imp, totFact) VALUES ('$fechaReserva', '$subTotal', '0', '$impuesto' , '$precioTotal');";
    

//     if ($conn->query($sqlReserva) === TRUE) {
//         $codReserva = $conn->$IDvuelo; // Obtiene el ID de la reserva insertada
//     } else {
//         echo "Error al crear la reserva: " . $conn->error;
//     }

//     // Insertar en la tabla DETLLE
//     $sqlDetalle = "INSERT INTO detalle (cantPasaj, tot_vuelo, codVuelo, codReserva) VALUES ('$cantidadPasajeros', '$precioTotal', '$idVuelo', '$codReserva');";

//     if ($conn->query($sqlDetalle) === TRUE) {
//         echo "Reserva realizada exitosamente";
//     } else {
//         echo "Error al insertar en detalle: " . $conn->error;
//     }
// }
?>



