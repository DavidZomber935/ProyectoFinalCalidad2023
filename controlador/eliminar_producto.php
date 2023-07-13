<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("delete from productos where idproductos=$id");
    if ($sql == 1) {
        echo '<div class="alert alert-success" > producto eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger"> error al eliminar</div>';
    }
    
}

?>