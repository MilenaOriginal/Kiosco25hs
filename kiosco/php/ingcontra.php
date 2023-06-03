<?php
include 'conexcion.php';
$contrapepe = $_post['contrasena'];
$instruccion = 'select * from pagina where pwd ="'.$contrapepe.'"';
$result = $conexcion->query($instruccion);

if ($result->num_rows > 0){
    header('location:AdminProduc.html');
}else{echo "error";}



?>