<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>proyecto final</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3db5e94a19.js" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Proyecto</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indexclientes.php">Clientes</a>
      </li>
    </ul>
  </div>
</nav>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("¿desea eliminar este producto?");
            return respuesta
        }
    </script>
    <h1 class="text-center">PRODUCTOS BRAVO</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_producto.php";
    ?>
    <div class="container-fluid bg-success text-white row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center">Registro de productos</h3>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Codigo Producto</label>
                <input type="text" class="form-control" name="codigo">
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Nombre Producto</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Precio Producto</label>
                <input type="text" class="form-control" name="precio">
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Cantidad Producto</label>
                <input type="text" class="form-control" name="cantidad">
            </div>

            <button type="submit" class="btn btn-primary" name="btnAñadir" value="ok">Añadir</button>
            <?php
            include "modelo/conexion.php";
            include "controlador/registro_producto.php";
            ?>
        </form>
        <div class="col-8 p-4">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Codigo Productos</th>
                        <th>Nombres Productos</th>
                        <th>Precios Productos</th>
                        <th>Cantidades Productos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select *from productos");
                    while($datos=$sql->fetch_object()){?>
                    <tr>
                        <td><?= $datos->idproductos ?></td>
                        <td><?= $datos->codigo_producto ?></td>
                        <td><?= $datos->nombre_producto ?></td>
                        <td><?= $datos->precio_producto ?></td>
                        <td><?= $datos->cantidad_producto ?></td>
                        <td>
                            <a href="modificar_producto.php?id=<?= $datos->idproductos ?> " class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a onclick="return eliminar()" href="index.php?id=<?= $datos->idproductos ?> " class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>    
                    <?php } 
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
<footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 David Bravo:
    <a class="text-dark" href="https://www.facebook.com/profile.php?id=100012387318939">facebook</a>
  </div>
</footer>

</html>