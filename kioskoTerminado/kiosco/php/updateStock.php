<?php
include 'conexcion.php';

$idProducto = $_GET['id_producto'];
$idEmpleado = $_GET['id_empleado'];
$fecha = $_GET['fecha'];
$cantidad = $_GET['cantidad'];

$ingresar = "INSERT INTO stock (id_empleado, id_producto, fecha, stock) VALUES ($idEmpleado, $idProducto, '$fecha', $cantidad)";
$buscarP = "SELECT id_producto FROM stock WHERE id_producto = $idProducto";
$actualizar = "UPDATE stock SET id_empleado = $idEmpleado, fecha = $fecha, stock = $cantidad WHERE id_producto = $idProducto";
if (mysqli_query($conexion,$buscarP)) {
    $conexion->query($actualizar);
    header('location: stock.php');
} else {
    $conexion->query($ingresar);
    header('location: stock.php');
}
?>