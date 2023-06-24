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
<body>
<header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="show.php" >Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 35%;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Desea... .
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../html/contraDu.html">Crear Producto(Solo accesible para el dueño)</a></li>
                  <li><a class="dropdown-item" href="agreStock.php">Agregar stock</a></li>
                  <li><a class="dropdown-item" href="Stock.php">stock</a></li>
                  
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <br></br>
    <div class = "row">
<?php
include 'conexcion.php';
$sql = "SELECT * FROM producto";
$result = $conexion->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo'
    <div class="col-2">
      <div class="card" style="width: 18rem;">
        <h5 class="card-title" class="form-label">
          <label for="disabledSelect" class="form-label">Nombre del Producto: '.$row['nombre'].'</label>
        </h5>
        <h5 class="card-title" class="form-label">
          <label for="disabledSelect" class="form-label">ID del Producto: '.$row['id'].'</label>
        </h5>
        <h5 class="card-title" class="form-label">
          <label for="disabledSelect" class="form-label">Precio del Producto: '.$row['precio'].'</label> 
        </h5>
        <h5 class="card-title" class="form-label">
          <label for="disabledSelect" class="form-label">Descripcion del Producto: '.$row['descripcion'].'</label>        
        </h5>
      </div>
    </div>';
    $id = ['id'];
    }
  } else {
    echo "0 results";
  }
  ?>    
  </div>   
</body>
</html>