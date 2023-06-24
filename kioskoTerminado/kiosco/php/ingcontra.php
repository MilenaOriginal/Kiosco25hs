<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kiosco25hs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="JavaScript.js">
    <link rel="stylesheet" href="../styles.css">
</head>

<?php
include 'conexcion.php';
$contrasena = $_POST['contrasena'];
$sql = "SELECT pwd FROM contrasenas WHERE pwd = '$contrasena'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    header('Location:show.php');
} else {
    echo '
    <div class="card" style="width: 25rem; margin-top: 20%; margin-left: 40%;">
        <h5 class="card-title" class="form-label">
            <label for="disabledSelect" class="form-label">Contraseña incorrecta</label>        
        </h5>
            <a href="../html/index.html" class="btn btn-primary">volver a intentar</a>
        </div>
        ';
}

?>