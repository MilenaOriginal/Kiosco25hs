<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles.css">
  </head>
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
                  <li><a class="dropdown-item" href="../html/agreProd.html">Agregar Producto</a></li>
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
<body >
  <div class = "col">
    <div class="card" style="width: 18rem; margin-left: 43%; margin-top: 5%;" >
        <div class="card-body">
            <form action="updateStock.php" method = "GET">
                <div>
                  <label for="id_producto" class="form-label">Id de producto</label>
                  <br>
                  <input type="text" name="id_producto" id="id_producto" value="" class="form-control">
                </div>
                <div>
                  <label for="id_empleado" class="form-label">Id de empleado</label>
                  <br>
                  <input type="text" name="id_empleado" id="id_empleado" value="" class="form-control">
                </div>
                <div>
                  <label for="fecha" class="form-label">Fecha</label>
                  <br>
                  <input type="date" name="fecha" id="fecha" value="" class="form-control">
                </div>
                <div>
                  <label for="cantidad" class="form-label">Stock del producto</label>
                  <br>
                  <input type="text" name="cantidad" id="cantidad" value="" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-primary">Borrar</button>
            </form>
        </div>
      </div>
    </div>
    <br><br>
  <div class = "col" style="width: 18rem; margin-left: 43%; margin-top: 0.1%;">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">
          <ul>
          <?php
            include 'conexcion.php';
            $sql = "SELECT * FROM producto";
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo '<li>' . $row['nombre'] . ' = ' . $row['id'] . '</li>';
              }
            } else {
              echo "0 results";
            }
          ?>
          </ul>
        </h5>
      </div>
    </div>
  </div> 
</body>
</html>
