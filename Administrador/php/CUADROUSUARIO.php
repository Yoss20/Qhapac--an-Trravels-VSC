<?php

$conn = mysqli_connect("localhost", "root", "", "bd_agenciaviaje");

$sql = "SELECT COUNT(*) AS Total FROM login";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$total_usuarios = $row['Total'];
?>


