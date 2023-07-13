<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProyectoFinalCliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3db5e94a19.js" crossorigin="anonymous"></script>
</head>
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
        function eliminar() {
            var respuesta = confirm("¿desea eliminar a este cliente?");
            return respuesta
        }
    </script>
    <h1 class="text-center">CLIENTES PRODUCTOS BRAVO</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_cliente.php";
    ?>
    <div class="container-fluid bg-success text-white row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center">Registro de clientes</h3>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Cedula Cliente</label>
                <input type="text" class="form-control" name="cedula">
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Nombre Cliente</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Apellido Cliente</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Edad Cliente</label>
                <input type="text" class="form-control" name="edad">
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Veces que ha comprado el Cliente</label>
                <input type="text" class="form-control" name="veces">
            </div>

            <button type="submit" class="btn btn-primary" name="btnAñadir" value="ok">Añadir</button>
            <?php
            include "modelo/conexion.php";
            include "controlador/registro_cliente.php";
            ?>
        </form>
        <div class="col-8 p-4">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Cedula Clientes</th>
                        <th>Nombres Clientes</th>
                        <th>Apellidos clientes</th>
                        <th>Edad Clientes</th>
                        <th>Veces que han comprado los Clientes</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("select *from clientes");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->idClientes ?></td>
                            <td><?= $datos->cedula_clientes ?></td>
                            <td><?= $datos->nombres_clientes ?></td>
                            <td><?= $datos->apellidos_clientes ?></td>
                            <td><?= $datos->edad_clientes ?></td>
                            <td><?= $datos->veces_compra_clientes ?></td>
                            <td>
                                <a href="modificar_cliente.php?id=<?= $datos->idClientes ?> " class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="indexclientes.php?id=<?= $datos->idClientes ?> " class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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