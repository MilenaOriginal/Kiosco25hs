<?php
$server = "localhost";
$user = "root";
$password = "";
$base_de_datos = "kiosco";

$conexion = new mysqli($server, $user, $password, $base_de_datos) or die("Error " . mysqli_connect_error());
?>
