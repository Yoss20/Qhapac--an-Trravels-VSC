<?php

// class Destino {
//     private $id;
//     private $nombre;

//     public function __construct($id, $nombre) {
//         $this->id = $id;
//         $this->nombre = $nombre;
//     }

//     public function getId() {
//         return $this->id;
//     }

//     public function getNombre() {
//         return $this->nombre;
//     }

//     public function setId($id) {
//         $this->id = $id;
//     }

//     public function setNombre($nombre) {
//         $this->nombre = $nombre;
//     }
// }

// // Uso de la clase Destino
// $destino = new Destino(1, "Lima");
// echo "ID: " . $destino->getId() . "<br>";
// echo "Nombre: " . $destino->getNombre();

// require_once("conexion.php"); // Incluye tu archivo de conexión

// function obtenerListaDestinos($conexion) {
//     try {
//         $query = "SELECT Nom_dest FROM destinos";
//         $stmt = $conexion->query($query);
//         $destinos = $stmt->fetchAll(PDO::FETCH_ASSOC);
//         return $destinos;
//     } catch (PDOException $e) {
//         echo "Error al obtener la lista de destinos: " . $e->getMessage();
//         return array(); // Devuelve un array vacío en caso de error
//     }
// }














?>


