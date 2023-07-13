<?php

include "modelo/conexion.php";
$id = $_GET["id"];

$sql = $conexion->query("select *from productos where idproductos=$id");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center">Modificacion de productos</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Codigo Producto</label>
                <input type="text" class="form-control" name="codigo" value="<?= $datos->codigo_producto ?>">
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Nombre Producto</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre_producto ?>">
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Precio Producto</label>
                <input type="text" class="form-control" name="precio" value="<?= $datos->precio_producto ?>">
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Cantidad Producto</label>
                <input type="text" class="form-control" name="cantidad" value="<?= $datos->cantidad_producto ?>">
            </div>

        <?php }
        ?>
        <button type="submit" class="btn btn-primary" name="btnModificar" value="mod">Modificar</button>
        <?php
        include "controlador/modificar_producto.php";
        ?>
</body>

</html>