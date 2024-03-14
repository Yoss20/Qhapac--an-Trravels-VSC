<?php
//  error_reporting(E_ERROR | E_PARSE);
//  include('../config/conexion.php');

//  // Procesa los datos enviados desde los formularios
//  if ($_SERVER["REQUEST_METHOD"] === "POST") {
//      $idVUELO = intval($_POST['cantidadPasajeros']);

    
    
    
//      for ($i = 0; $i < $cantidadPasajeros; $i++) {
//          $subtot = $_POST["subtotal" .$i];
//          $desc = $_POST["descuento" .$i];
//          $imp = $_POST["imp" .$i];
//          $total = $_POST["total" .$i];

//          // Continúa con el procesamiento de los datos
//          $sql = "INSERT INTO reserva (fechaReserva, subTot, decReserva, imp, totFact) VALUES (:fecha, :subTot, :decReser, :imp, :total)";
//          $stmt = $conexion->prepare($sql);
//          $stmt->bindParam(':fecha', $dni);
//          $stmt->bindParam(':subTot', $subtot);
//          $stmt->bindParam(':decReser', $desc);
//          $stmt->bindParam(':imp', $imp);
//          $stmt->bindParam(':total', $total);



//          if ($stmt->execute()) {
//              echo "Datos guardados con éxito!";
//          } else {
//              echo "Error al insertar datos: " . implode(', ', $stmt->errorInfo());
//      }
    
//      }
//  }
?>