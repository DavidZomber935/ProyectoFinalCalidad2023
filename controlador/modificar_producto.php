<?php
if (!empty($_POST["btnModificar"])) {
    if (!empty($_POST["codigo"]) and !empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["cantidad"])) {
        $id=$_POST["id"];
        $codigo=$_POST["codigo"];
        $nombre=$_POST["nombre"];
        $precio=$_POST["precio"];
        $cantidad=$_POST["cantidad"];
        $sql=$conexion->query(" update productos set codigo_producto='$codigo', nombre_producto='$nombre', precio_producto=$precio, cantidad_producto=$cantidad where idproductos= $id");
        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar el producto</div>";
        }
        
    } else {
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
    

}


?>