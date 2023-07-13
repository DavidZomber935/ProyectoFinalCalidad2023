<?php
if(!empty($_POST["btnAñadir"])){
    if (!empty($_POST["codigo"]) and !empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["cantidad"])) {
        $codigo=$_POST["codigo"];
        $nombre=$_POST["nombre"];
        $precio=$_POST["precio"];
        $cantidad=$_POST["cantidad"];

        $sql=$conexion->query("insert into productos(codigo_producto,nombre_producto,precio_producto,cantidad_producto)values('$codigo','$nombre','$precio','$cantidad')");

        if ($sql==1) {
            echo '<div class="alert alert-success">producto añadido</div>';
        } else {
            echo '<div class="alert alert-danger">Error al añadir el producto</div>';
        }
        
    } else {
        echo "Falta rellenar campos porfavor añadalos";
    }
    
}
?>